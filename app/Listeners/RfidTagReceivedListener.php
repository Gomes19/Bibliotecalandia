<?php

namespace App\Listeners;

use App\Events\RfidTagReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RfidTagReceivedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RfidTagReceived  $event
     * @return void
     */
    public function handle(RfidTagReceived $event)
    {
        $rfid = $event->rfid;
        // $data = $event->data;
        // View::share('tag', $data['tag']);
        // putenv('TAG=' . $tag);
        // Execute ações adicionais, se necessário
        Broadcast::channel('rfid-channel', function ($user) use ($rfid) {
            return ['rfid' => $rfid];
        });
       
    }
}
