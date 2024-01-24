<?php

namespace App\Http\Controllers;

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
    }
}
