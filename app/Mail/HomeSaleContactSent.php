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
                    ->with('address', $this->home->address)
                    ->with('space_number', $this->home->space_number)
                    ->with('city', $this->home->city->place_name)
                    ->with('state', strtoupper($this->home->state->abbr))
                    ->with('zipcode', $this->home->zipcode)
                    ->with('contact', $this->contact);
    }
}
