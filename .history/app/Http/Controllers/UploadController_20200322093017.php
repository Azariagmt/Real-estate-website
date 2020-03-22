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
class UploadController extends Controller
{
    public function uploadForm()
{
return view('upload_form',[

]);
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
    $title = $request->file('name');
    
    // Get the uploades file with name document
    $photos = $request->file('photos');

    // Required validation
    $request->validate([
        'title' => 'required|max:255',
        'photos' => 'required'
    ]);

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
    }}}}

    dd($photos);

    $data = [
        'photos' => $photos
    ];

   
    $data[2]= asset('img/logo.png');
    dd($data);
    // If upload was successful
    // send the email

    \Mail::to('azariagebremichael10@gmail.com')->send(new \App\Mail\Upload($data));
    return redirect()->back()->with('flash_success', 'Your document has been uploaded.');
}

}