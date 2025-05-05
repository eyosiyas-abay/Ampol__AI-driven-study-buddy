<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;
use Illuminate\Support\Facades\URL;

class VerifyEmail extends VerifyEmailNotification
{
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->view('mails.verify', ['url' => $verificationUrl])
            ->subject('Verify Your Email Address (Ampol)');
    }


    protected function verificationUrl($notifiable)
    {
        return URL::signedRoute(
            'verification.verify',
            [
                'id' => $notifiable->getKey(),
                'hash' => hash_hmac('sha256', $notifiable->getEmailForVerification(), config('app.key')),
                'expires' => now()->addMinutes(60)->timestamp,
            ]
        );
    }
}
