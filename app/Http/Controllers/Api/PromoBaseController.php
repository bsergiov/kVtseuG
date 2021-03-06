<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusWork;
use App\Models\Subscribe;

class PromoBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = StatusWork::all();
        $status = $status[0]['status'];
        $status = $status == 1 ? true : false;

        $subscribe= Subscribe::all();
        $purchaseID = [];
        $i = 0;
        foreach ($subscribe as $value) {
            $purchaseID[$i] = $value['purchase_id'];
            $i ++;
        }

        $respromo = [
            "purchaseID" => $purchaseID,
            "responseDb" => $status
        ];

        $headers = ['Content-Type' => 'application/json; charset=utf-8'];
        return response()->json($respromo, 200, $headers, JSON_UNESCAPED_UNICODE);
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
