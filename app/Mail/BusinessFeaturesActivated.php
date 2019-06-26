<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BusinessFeaturesActivated extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $company;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Company $company)
    {
        $this->user = $user;
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.businessfeatures')
                    ->with('name', $this->user->full_name())
                    ->with('company_title', $this->company->title);
    }
}
