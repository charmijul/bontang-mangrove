<?php

namespace App\Http\Controllers;

use App\Models\Mangrove;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('dashboard.mangrove.create', [
            'title' => 'New Mangrove Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'scientifik_name' => 'required|max:255',
            'description' => 'required',
            'benefit' => 'required',
            'image' => 'required|image|file'
        ]);

        if ($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('mangrove-images');
        }
        
        Mangrove::create($validatedData);
        
        return redirect('/dashboard/mangrove')->with('success', 'Data Mangrove Baru Berhasil Ditambahkan');
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
    // return $mangrove;
    return view('dashboard.mangrove.show', [
        'title' => 'Single Post',
        'mangrove' => $mangrove
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mangrove  $mangrove
     * @return \Illuminate\Http\Response
     */
    public function edit(Mangrove $mangrove)
    {
        return view('dashboard.mangrove.edit', [
            'title' => 'Edit Data Mangrove',
            'mangrove' => $mangrove
        ]);
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
        $rules = [
            'name' => 'required|max:255',
            'scientifik_name' => 'required|max:255',
            'description' => 'required',
            'benefit' => 'required',
            'image' => 'image|file'
        ];

        $validatedData = $request->validate($rules);
        
        if ($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('mangrove-images');
        }
        Mangrove::where('id', $mangrove->id)
                    ->update($validatedData);
        
        return redirect('/dashboard/mangrove')->with('success', 'Data Mangrove Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mangrove  $mangrove
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mangrove $mangrove)
    {
        if($mangrove->image){
            Storage::delete($mangrove->image);
        }
        Mangrove::destroy($mangrove->id);
        
        return redirect('/dashboard/mangrove')->with('success', 'Data Mangrove Berhasil Dihapus');
    }
}
