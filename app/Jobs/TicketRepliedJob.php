<?php

namespace App\Jobs;

use App\Mail\TickedRepliedAdminMail;
use App\Mail\TicketRepliedMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class TicketRepliedJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public string $id, public string $reply, 
    public string $email, public string $emailReply, 
    public string $idUserTicket, public string $idUserReply)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if($this->idUserTicket != $this->idUserReply){
            Mail::to($this->email)->send(new TicketRepliedMail($this->id, $this->reply));
        }

        if($this->emailReply != 'adminticket@teste.com'){
            Mail::to('adminticket@teste.com')->send(new TickedRepliedAdminMail($this->id, $this->reply));
        }
    }
}
