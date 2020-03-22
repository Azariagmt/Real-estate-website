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
        return $this->view('emails/upload')
                ->subject('Document Upload');
                 
            @foreach($data['files'] as $key => $name)
                ->attach($this->data['files'][0]->getRealPath(),
                [
                    'as' => $this->data['files'][0]->getClientOriginalName(),
                    'mime' => $this->data['files'][0]->getClientMimeType(),
                ])

                ->attach($this->data['files'][1]->getRealPath(),
                [
                    'as' => $this->data['files'][1]->getClientOriginalName(),
                    'mime' => $this->data['files'][1]->getClientMimeType(),
                ]);
           // @endforeach end of for loop
    }

}