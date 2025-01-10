<?php

namespace App\View\Components\Mail;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Mail\Markdown;

class MailMessage extends Component
{
    public $emailData;

    /**
     * Create a new component instance.
     */
    public function __construct($emailData)
    {
        $this->emailData = $emailData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('vendor.mail.markdown', [
            'html' => $this->parse($this->slot),
        ]);
    }
}
