<?php

namespace App\Notifications;
use PDF;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
use NotificationChannels\Telegram\TelegramFile;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GlobalNotif extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($param)
    {
        $this->data = $param;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail'];
        return [TelegramChannel::class];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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

    // https://github.com/laravel-notification-channels/telegram
    public function toTelegram($notifiable)
    {
        // $url = url('/invoice/' . $this->invoice->id);
        $url = url('/');
        return TelegramMessage::create()
            // Optional recipient user id.
            ->to(-321143573)
            // Markdown supported.
            ->content("\xF0\x9F\x93\xA9*NOTIFICATION*: ".$this->data['message']."
            \n*".$notifiable->instansi."* mengajukan permohonan pertemuan baru, klik tombol dibawah untuk melihat data selengkapnya.")
            
            // (Optional) Blade template for the content.
            // ->view('notification', ['url' => $url])
            
            // (Optional) Inline Buttons
            ->button('Cek Permohonan', $url);
    }
}
