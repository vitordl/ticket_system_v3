<?php

namespace App\Jobs;

use App\Mail\InfoTicketMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendInfoTicketJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public string $title, public string $desc, public User $user)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('email about info ticket created');
        Mail::to($this->user->email)->send(new InfoTicketMail($this->title, $this->desc, $this->user->name));
      


    }
}
