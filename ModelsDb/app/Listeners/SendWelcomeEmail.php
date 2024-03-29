<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendWelcomeEmail
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
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        
        $data = array('name' =>$event->user->name, 'email'=>$event->user->email, 'body' => 'welcome to our website');

        Mail::send('emails.mail', $data, function($message) use ($data){

            $message->to($data['email'])
                    ->subject('Welcome to our Website');
            $message->from('alexismalecha@gmail.com');        
        });
    }
}
