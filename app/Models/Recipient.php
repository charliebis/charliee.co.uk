<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Recipient extends Model
{
    //use HasFactory;
    use Notifiable;

    protected string $recipient;

    protected string $email;

    public function __construct()
    {
        $this->recipient = config('recipient.name_to');
        $this->email = config('recipient.email_to');
        parent::__construct();
    }
}
