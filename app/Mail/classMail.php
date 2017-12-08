<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class classMail extends Mailable
{
    use Queueable, SerializesModels;

   public $id;

   public function __construct($id)

   {

       $this->id = $id;

   }

    public function build()

   {

       return $this->from('v.laidet@aformac-vichy.fr')->view('emailView');

   }
}
