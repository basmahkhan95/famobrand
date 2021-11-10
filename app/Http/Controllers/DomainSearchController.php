<?php

namespace App\Http\Controllers;

ini_set('default_socket_timeout', 600);

use App\DomainSearch;
use Illuminate\Http\Request;
use App\ThirdParty\ResellerApi;

class DomainSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $resellerApi = new ResellerApi();

        $tlds = config('tlds');

        $domainNames = [];

        $keyword = explode('.',$request->keyword);

        foreach($tlds as $tld){
            $domainNames[] = $keyword[0].'.'.$tld;
        }

        $domainQuery = array(
            'DomainNames' => $domainNames
        );

        $response = $resellerApi->call('DomainCheck', $domainQuery);

        if (!is_soap_fault($response)) {
            $data['Result'] = json_decode(json_encode($response), true);

        } else {
            echo 'Error occurred while sending request: ' . $response->getMessage();
        }

        $search = new DomainSearch;
        $search->user_id = @$request->user()->id;
        $search->keyword= @$request->keyword;
        $search->save();

        return view('domain-search', $data);

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
        //
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
