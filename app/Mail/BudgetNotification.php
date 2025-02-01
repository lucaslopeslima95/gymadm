<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BudgetNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $description;
    public $telephone;

    public function __construct($name,$description,$telephone)
    {
        $this->name = $name; 
        $this->description = $description; 
        $this->telephone = $telephone; 
    }

    public function build()
    {
        return $this->subject('Aviso de pedido de orçamento')
                    ->view('emails.budgetTemplate');
    }
}