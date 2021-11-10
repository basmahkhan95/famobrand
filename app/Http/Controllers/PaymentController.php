<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminNotification;
use App\Notifications\AdminGeneralNotif;
use App\Package;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['Payments'] = $request->user()->subscription()->get();

        return view('payment-log', $data);
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
    public function store(Request $request)
    {
        DB::beginTransaction();

        $user = $request->user();

        if ($request->ajax()) {

            try {

                $pkg = Package::find($request->package_id);

                $sub = new Subscription();
                $sub->user_id = $user->id;
                $sub->package_id = $pkg->id;
                $sub->amount = $pkg->amount;
                $sub->transaction_details = "test";
                $sub->save();

                $admin = Admin::find(1);

                $adminNotif = new AdminNotification;
                $adminNotif->admin_id = $admin->id;
                $adminNotif->title = 'Package Subscription';
                $adminNotif->description = $user->name . " has subscribed for a package '" . $pkg->name . "'";
                $adminNotif->is_read = 0;
                $adminNotif->url = 'admin/subscription';
                $adminNotif->save();

                $admin->notify(new AdminGeneralNotif($admin, $adminNotif->title, $adminNotif->description, $adminNotif->url));

                DB::commit();

                return response()->json(['message' => "Package Has Been Subscribed!", 'status' => true]);

            } catch (\Exception $ex) {

                return response()->json(['message' => $ex->getMessage(), 'status' => false]);

            }

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
