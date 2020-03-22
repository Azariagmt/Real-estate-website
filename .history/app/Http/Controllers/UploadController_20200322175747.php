<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\ItemDetails;
use App\Property;
use App\Status;
use App\Location;
use App\Type;
use App\Phone;
use App\Social;
use Input;

class UploadController extends Controller
{
    public function uploadForm()
{
        $location =Location::all();
        $status = Status::all();
        $type = Type::all();
        $phones = Phone::all();
        $social = Social::all();
return view('upload_form',[
    'social'=>$social,
    'phones'=>$phones,
    'status'=>$status,
    'type'=>$type,
    'location'=>$location
]);
}
public function uploadSubmit(Request $request)
{
// coding ….
$this->validate($request, [
    'name' => 'required',
    'tel'=>'required',
    'email'=>'required',
    'total'=>'required',
    'bedrooms'=>'required',
    'bathrooms'=>'required',
    'parking'=>'required',
    'location'=>'required',
    'status'=>'required',
    'type'=>'required',
    'size'=>'required',
    'price'=>'required',
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
    dd($filename);
    echo "Upload Successfully";
    }
    else
    {
    echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
    }
    }
    }
    }
    



public function uploadDocument(Request $request) {
   
    // Get the uploades file with name document
    $photos = $request->file('photos');

    // Required validation
    $request->validate([
        'name' => 'required|max:255',
    'tel'=>'required',
    'email'=>'required',
    'total'=>'required',
    'bedrooms'=>'required',
    'bathrooms'=>'required',
    'parking'=>'required',
    'location'=>'required',
    'status'=>'required',
    'type'=>'required',
    'size'=>'required',
    'price'=>'required',
    'photos'=>'required',
    ]);

    $name = $request->get('name');
    $bedrooms = $request->get('bedrooms');
   // $bedrooms = $request->text('bedrooms');

    // Check if uploaded file size was greater than 
    // maximum allowed file size
    // if ($photos->getError() == 1) {
    //     $max_size = $photos->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
    //     $error = 'The photos size must be less than ' . $max_size . 'Mb.';
    //     return redirect()->back()->with('flash_danger', $error);
    // }
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
                foreach ($request->photos as $photos) {
                    $filename = $photos->store('photos');
                    ItemDetails::create([
                    'item_id' => $items->id,
                    'filename' => $filename
                    ]);
                    }
                }
            }
        }

  
    $data = [
        'name' => 'required',
        'tel'=>'required',
        'email'=>'required',
        'total'=>'required',
        'bedrooms'=>'required',
        'bathrooms'=>'required',
        'parking'=>'required',
        'location'=>'required',
        'status'=>'required',
        'type'=>'required',
        'size'=>'required',
        'price'=>'required',
        'photos'=>'required',
        'files' => $files
    ];

    //dd($data);fa

    // If upload was successful
    // send the email

    \Mail::to('yenebet12@gmail.com')->send(new \App\Mail\Upload($data));
    return redirect()->back()->with('flash_success', 'Your document has been uploaded.');
}

}