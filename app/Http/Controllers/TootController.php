<?php

namespace App\Http\Controllers;

use App\Models\Toot;
use Illuminate\Http\Request;

class TootController extends Controller
{
    public function create(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $formFields['title'] = strip_tags($formFields['title']);
        $formFields['body'] = strip_tags($formFields['body']);
        $formFields['user_id'] = auth()->id();

        Toot::create($formFields);

        return redirect('/')->with('success', 'Toot sent');
    }

    public function index(){
        //$toots = Toot::where('user_id', auth()->id())->get();
        $toots = [];
        if(auth()->check()){
            $toots = auth()->user()->toots()->latest()->get();
        }

        return view('index', ['toots' => $toots]);
    }

    public function show(Toot $toot){
        return view('toots.edit', [
            'toot' => $toot
        ]);
    }
}
