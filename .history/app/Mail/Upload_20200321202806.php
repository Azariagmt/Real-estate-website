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

            //    ->attach($this->data['document']->getRealPath(),

            //    [

            //        'as' => $this->data['document']->getClientOriginalName(),

            //        'mime' => $this->data['document']->getClientMimeType(),

            //    ]);

               $message->attach($request->data['document']->path(), array(
                'as'=>'document']' . $request->data['document']->originalName(),
               'mime' => $request->data['document']->mimeType())
                   );

   }//function end

}