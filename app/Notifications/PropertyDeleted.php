<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Property;

class PropertyDeleted extends Notification
{
    use Queueable;

    protected $property;

    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    public function via($notifiable)
    {
        return ['mail']; // or other channels you use
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Property Deleted')
            ->line('The property you had favorited has been deleted.')
            ->line('Property Name: ' . $this->property->property_name)
            ->line('Address: ' . $this->property->address)
            ->action('View Listings', url('/property'))
            ->line('Thank you for using our application!');
    }
}
