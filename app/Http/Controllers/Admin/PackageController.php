<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Package\StoreRequest;
use App\Http\Requests\Admin\Package\UpdateRequest;
use Illuminate\Http\Request;
use App\Package;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Packages'] = Package::all();
        return view('admin.package.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $package = new Package;
        $package->name = $request->name;
        $package->description = $request->description;
        $package->amount = $request->amount;
        $package->package_type = $request->package_type;
        $package->status = 'active';
        $package->save();

        return redirect()->route('admin.package.index')->with('success', 'Package has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['Package'] = Package::findOrFail($id);
        return view('admin.package.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['Package'] = Package::findOrFail($id);
        return view('admin.package.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $package = Package::findOrFail($id);
        $package->name = $request->name;
        $package->description = $request->description;
        $package->amount = $request->amount;
        $package->package_type = $request->package_type;
        $package->save();

        return redirect()->route('admin.package.show', ['id' => $id])->with('success', 'Package has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        $package = Package::findOrFail($id);

        try {

            $package->delete();

            DB::commit();

            return redirect()->route('admin.package.index')->with('success', 'Package has been deleted!');

        } catch (\Exception $ex) {

            DB::rollBack();

            return redirect()->route('admin.package.show', ['id' => $id])->with('error', "Sorry you can not delete this package as it is already in use!");

        }

    }
}
