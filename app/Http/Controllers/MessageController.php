<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminNotification;
use App\Feedback;
use App\Http\Requests\MessageStoreRequest;
use App\Notifications\AdminGeneralNotif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('message');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MessageStoreRequest $request)
    {
        DB::beginTransaction();

        try {
            $msg = new Feedback();
            $msg->name = $request->name;
            $msg->email = $request->email;
            $msg->phone_no = $request->phone_no;
            $msg->subject = $request->subject;
            $msg->message = $request->message;
            $msg->is_read = 0;
            $msg->save();

            $admin = Admin::find(1);

            $adminNotif = new AdminNotification;
            $adminNotif->admin_id = $admin->id;
            $adminNotif->title = $msg->subject;
            $adminNotif->description = $msg->message;
            $adminNotif->is_read = 0;
            $adminNotif->url = 'admin/feedback/show/' . $msg->id;
            $adminNotif->save();

            $admin->notify(new AdminGeneralNotif($admin, $adminNotif->title, $adminNotif->description, $adminNotif->url));

            DB::commit();

            return back()->with('success', 'Your message has been sent!');

        } catch (\Exception $ex) {
            return back()->with('error', $ex->getMessage());
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
