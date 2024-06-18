<?php

namespace App\Http\Controllers\Biblioteca;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function index(){

        return view();
    }
    public function store(Request $request)
{
    $client = new Client([
        'base_uri' => 'https://api.zoom.us/v2/',
        'headers' => [
            'Authorization' => 'Bearer ' . env('ZOOM_API_TOKEN'),
            'Content-Type' => 'application/json'
        ]
    ]);

    $response = $client->request('POST', 'users/{user_id}/meetings', [
        'json' => [
            'topic' => $request->input('topic'),
            'start_time' => $request->input('start_time'),
            'duration' => $request->input('duration'),
            'timezone' => $request->input('timezone')
        ]
    ]);
    }

}
