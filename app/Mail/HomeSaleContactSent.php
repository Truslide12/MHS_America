<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Home;


class HomeSaleContactSent extends Mailable
{
    use Queueable, SerializesModels;

    protected $home;
    protected $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Home $home, $contact)
    {
        $this->home = $home;
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Sales Inquiry on MHS America')
                    ->view('emails.homesalescontact')
                    ->with('address', $home->address)
                    ->with('space_number', $home->space_number)
                    ->with('city', $home->city->place_name)
                    ->with('state', strtoupper($home->state->abbr))
                    ->with('zipcode', $home->zipcode)
                    ->with('contact', $this->contact);
    }
}
