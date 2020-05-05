<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class StatusUpdate extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('EPHEC Entreprendre - Nouvelle notification')
                    
                    // By default uses the "sent from" configured in config/mail.php
                    // As no specific mail shown, specific address mentioned.
                    ->from('m.camposcasares@students.ephec.be', 'Sender')

                    ->greeting('Bonjour,')
                    ->line('Vous avez une nouvelle notification sur la plateforme EPHEC Entreprendre.')
                    ->action('Allez jeter un coup d\'oeil', url('/'))
                    ->line('Bien à vous,')
                    ->line('L\'équipe EPHEC Entreprendre.')
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
