<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subscription;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $year = ($request->year) ? $request->year : date('Y');

        $subscription = Subscription::select(DB::raw("sum(amount) as sum, count(*) as count,date_format(created_at, '%b') as month"))
            ->where(DB::raw('YEAR(created_at)'), '=', $year)
            ->groupBy('month')
            ->get();

        $months = [];

        for ($m = 1; $m <= 12; $m++) {
            $months[] = ['month' => date('M', mktime(0, 0, 0, $m, 1, date('Y'))), 'count' => 0, 'sum' => 0];
        }

        foreach ($subscription as $key) {
            foreach ($months as $month => &$value) {
                if ($value['month'] == $key->month) {
                    $value['count'] = $key->count;
                    $value['sum'] = $key->sum;
                }
            }
        }

        $data = [];

        foreach($months as $mon){
            $data['months'][] = $mon['month'];
            $data['count'][] = $mon['count'];
            $data['sum'][] = $mon['sum'];
        }
        return response()->json($data, 200);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
