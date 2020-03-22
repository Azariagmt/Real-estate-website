<?php

#App\Mail\Upload.php

namespace App\Mail;

use Illuminate\Bus\Queueable;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

class Upload extends Mailable

{

   use Queueable, SerializesModels;

   protected $data;

   /**

    * Create a new message instance.

    *

    * @return void

    */

   public function __construct($data=[])

   {

       $this->data = $data;

   }



   /**

    * Build the message.

    *

    * @return $this

    */

    public function build()
    {
        $email = $this->view('emails/upload')
                ->subject('Document Upload')
                ;
                 
            foreach($this->data['files'] as $key => $name){
               
               $email ->attach($this->data['files'][]->getRealPath(),
                [
                    'as' => $this->data['files'][]->getClientOriginalName(),
                    'mime' => $this->data['files'][]->getClientMimeType(),
                ])
           ;}
    
        return $email;
    }

}