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
        $email = $this->view('emails/upload',
        [
            'name'=>$this->data['name'],
            'bedrooms'=>$this->data['bedrooms'],
            'tel'=>$tel,
            'email'=>$email,
            'total'=>$total,
            'bathrooms'=>$bathrooms,
            'parking'=>$parking,
            'location'=>$location,
            'status'=>$status,
            'type'=>$type,
            'size'=>$size,
            'price'=>$price,
            'description'=>$this->data['bedrooms'],,
        ])
                ->subject('Document Upload(property for sale)')
                ;
                 
            foreach($this->data['files'] as $key => $name){
               
               $email ->attach($this->data['files'][$key]->getRealPath(),
                [
                    'as' => $this->data['files'][$key]->getClientOriginalName(),
                    'mime' => $this->data['files'][$key]->getClientMimeType(),
                ])
           ;}
    
        return $email;
    }

}