<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\Company;
use App\Models\CompanyInvite;

class CompanyInviteSent extends Mailable
{
    use Queueable, SerializesModels;

    protected $company;
    protected $invite;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CompanyInvite $invite, Company $company)
    {
        $this->company = $company;
        $this->invite = $invite;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Invite code for '.$company->title.' on MHS America')
                    ->view('emails.companyinvite')
                    ->with('company_title', $company->title)
                    ->with('company_id', $company->id)
                    ->with('invite_code', $invite->code);
    }
}
