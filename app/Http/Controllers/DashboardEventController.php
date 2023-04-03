<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.event.index',[
            'title' => 'Dahsboard Event',
            'events' => Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.event.create', [
            'title' => 'New Event Post'
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:events',
            'body' => 'required',
            'image' => 'required|image|file'
        ]);
        $validatedData['excerpt'] = Str::limit($request->body, 255);
        if ($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('event-images');
        }
        
        Event::create($validatedData);
        
        return redirect('/dashboard/event')->with('success', 'Post Event Baru Berhasil Diupload');
        
        // return $validatedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('dashboard.event.show', [
            'title' => 'Single Post',
            'post' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('dashboard.event.edit', [
            'title' => 'Edit Event Post',
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file'
        ];
        if($request->slug != $event->slug){
            $rules['slug'] = 'required|unique:events';
        }

        $validatedData = $request->validate($rules);
        $validatedData['excerpt'] = Str::limit($request->body, 255);
        
        if ($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('event-images');
        }
        Event::where('id', $event->id)
                    ->update($validatedData);
        
        return redirect('/dashboard/event')->with('success', 'Post Event berhasil Diperbarui');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if($event->image){
            Storage::delete($event->image);
        }
        Event::destroy($event->id);
        
        return redirect('/dashboard/event')->with('success', 'Post Event Berhasil Dihapus');
        
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Event::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]); 
    }
}
