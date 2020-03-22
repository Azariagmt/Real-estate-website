<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemDetails;
class UploadController extends Controller
{
    public function uploadForm()
{
return view('upload_form');
}
public function uploadSubmit(Request $request)
{
// coding ….
$this->validate($request, [
    'name' => 'required',
    'photos'=>'required',
    ]);
    if($request->hasFile('photos'))
    {
    $allowedfileExtension=['pdf','jpg','png','docx'];
    $files = $request->file('photos');
    foreach($files as $file){
    $filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $check=in_array($extension,$allowedfileExtension);
    //dd($check);
    if($check)
    {
    $items= Item::create($request->all());
    foreach ($request->photos as $photo) {
    $filename = $photo->store('photos');
    ItemDetails::create([
    'item_id' => $items->id,
    'filename' => $filename
    ]);
    }
    Self::uploadDocument($files);
    }
    else
    {
    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
    }
    }
    }
    }
    

    public static function uploadDocument(Request $request) {

        $title = $request->file('name');
     
        
     
        // Get the uploades file with name document
     
        $document = $request->file('photos');
     
     
     
        // Required validation
     
        $request->validate([
     
            'name' => 'required|max:255',
     
            'photos' => 'required'
     
        ]);
     
     
     
        // Check if uploaded file size was greater than
     
        // maximum allowed file size

        
     
        $data = [
     
            'document' => $document
     
        ];
     
        // $attachy = $data[0]->getClientOriginalName();
        print_r($data);
     
        // If upload was successful
     
        // send the email
     
        $to_email = 'azariagebremichael10@gmail.com';
     
        \Mail::to($to_email)->send(new \App\Mail\Upload($data));
     
        return redirect()->back()->with('flash_success', 'Your document has been uploaded.');
     
     }
}
