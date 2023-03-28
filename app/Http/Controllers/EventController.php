<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        // $event = collect(Event::$event_posts);
        return view('event', [
            "title" => "Event",
            "events" => Event::latest()->get()
        ]);
    }

    public function show(Event $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
