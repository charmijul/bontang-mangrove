<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::latest();

        if(request('search')){
            $events->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('event', [
            "title" => "Event",
            "events" => $events->paginate(10)
        ]);
    }

    public function show(Event $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
