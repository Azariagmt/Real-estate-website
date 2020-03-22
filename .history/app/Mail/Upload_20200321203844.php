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

       return $this->view('emails/upload',[
        $message->attach($request->$data['document']->path(), array(
            'as'=>'a_file.' . $request->a_file->originalName(),
           'mime' => $request->a_file->mimeType())
               )

             ])

               ->subject('Document Upload');

             


   }//function end

}