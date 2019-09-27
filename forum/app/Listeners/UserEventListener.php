<?php

namespace App\Listeners;

use App\Events\UserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\AgendamentoPendente;
use App\Notifications\UserNotification;
use Mail;


class UserEventListener
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
     * @param  UserEvent  $event
     * @return void
     */
    public function handle(UserEvent $event)
    {
        $data = array('title' => $event->post->title,'body' => $event->post->body,'email'=>'alexismalecha@gmail.com');
        Mail::send('emails.mailPost', $data, function($message) use ($data){

            $message -> to($data['email'])
                     ->subject('Thanks for your post');
            $message ->from('procoderfransi@gmail.com');         
        });
    }
}
