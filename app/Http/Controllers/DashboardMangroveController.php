<?php

namespace App\Http\Controllers;

use App\Models\Mangrove;
use Illuminate\Http\Request;

class DashboardMangroveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mangrove.index', [
            'title' => 'Dashboard Mangrove',
            'mangroves' => Mangrove::all()
        ]);
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
     * @param  \App\Models\Mangrove  $mangrove
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $mangrove =  Mangrove::findOrFail($id);
    //     return view('dashboard.mangrove.show', [
    //         'title' => 'Single Post',
    //         'mangrove' => $mangrove
    //     ]);
    // }
    public function show(Mangrove $mangrove)
    {
    return $mangrove;
    // return view('dashboard.mangrove.show', [
    //     'title' => 'Single Post',
    //     'mangrove' => $mangrove
    // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mangrove  $mangrove
     * @return \Illuminate\Http\Response
     */
    public function edit(Mangrove $mangrove)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mangrove  $mangrove
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mangrove $mangrove)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mangrove  $mangrove
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mangrove $mangrove)
    {
        //
    }
}
