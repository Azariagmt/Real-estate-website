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
            'tel'=>$this->data['tel'],
            'email'=>$this->data['email'],
            'total'=>$this->data['total'],
            'bathrooms'=>$this->data['bathrooms'],
            'parking'=>$this->data['parking'],
            'location'=>$this->data['location'],
            'status'=>$this->data['status'],
            'type'=>$this->data['bedrooms'],
            'size'=>$this->data['bedrooms'],
            'price'=>$this->data['bedrooms'],
            'description'=>$this->data['bedrooms']
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