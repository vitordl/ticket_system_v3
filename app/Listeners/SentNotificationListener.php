<?php

namespace App\Listeners;

use App\Events\TicketCreatedEvent;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SentNotificationListener
{
    
    public function handle(TicketCreatedEvent $event): void
    {

        // $admin = User::where('isAdmin', '=', 1)->first(); 

        // if ($admin) {
        //     notify()->success('A ticket 13 was created by Eusou and is waiting for approval');
        // }
        //quando tiver/se tiver websockets o ponto acima irá fazer sentido.


        // notify()->success('Ticket was created successfully! And its waiting for approval');

    }
}
