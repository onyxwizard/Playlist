<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Carbon\Carbon;
use App\Http\Controllers\CommentsController;
class PopUps extends Notification
{
    use Queueable;

    

    protected $cmt;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($cmt)
    {
        //
        $this->cmt = $cmt;
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
       
        return [
            'set'=> $this->cmt,
            // 'user'=>$notifiable
            'user' => auth()->user()
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
