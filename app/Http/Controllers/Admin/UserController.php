<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Notifications\SendAccountBlockedNotification;
use App\Notifications\SendAccountDetails;
use App\Notifications\SendAccountUnblockedNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Avatar;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = new User;

        if ($request->is_block):
            $users = $users->blocked();
        else:
            $users = $users->unblocked();
        endif;

        $users = $users->orderBy('id', 'desc')->get();

        $data['Users'] = $users;

        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        DB::beginTransaction();

        try {
            $randomStr = strtolower(Str::random(5));

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($randomStr);
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->is_block = 0;
            $user->phone_no = $request->phone_no;

            //Create User Profile Image or Avatar
            $userImage = date('ymdhis') . '.png';
            $avatar = Avatar::create($request->name)->getImageObject()->encode('png');
            Storage::put('public/images/' . $userImage, (string)$avatar);

            $user->image = $userImage;
            $user->save();

            //Send Email Notification To User Regarding Account Details
            $user->notify(new SendAccountDetails($user, $randomStr));

            DB::commit();

            return redirect()->route('admin.user.index')->with('success', 'New User has been added!');

        } catch (\Exception $ex) {

            DB::rollBack();

            return redirect()->route('admin.user.index')->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['User'] = User::findOrFail($id);
        return view('admin.user.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['User'] = User::find($id);
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->phone_no = $request->phone_no;
        $user->save();

        return redirect()
            ->route('admin.user.show', ['id' => $user->id])
            ->with('success', 'User Profile has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user->is_block):
            $user->is_block = 1;
            $user->notify(new SendAccountBlockedNotification($user));
            $message = 'User account has been blocked!';
            $request->session()->flash('success', $message);
            $route = route('admin.user.index', ['is_block' => true]);
        else:
            $user->is_block = 0;
            $user->notify(new SendAccountUnblockedNotification($user));
            $message = 'User account has been Unblocked!';
            $request->session()->flash('success', $message);
            $route = route('admin.user.index');
        endif;

        $user->save();

        return response()->json(['status' => true, 'message' => $message, 'redirect' => $route]);


    }
}
