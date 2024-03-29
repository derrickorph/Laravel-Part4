<?php

namespace App\Http\Livewire;

use App\Models\Upload;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithFileUploads;

class Uploads extends Component
{
    public $title;
    public $filename;

    use WithFileUploads;
    public function fileUpload()
    {
        $validatedData= $this->validate([
            'title'=>'required',
            'filename'=>'required|file',
        ]);
        $filename=$this->filename->store('files','public');
        $validatedData['filename']=$filename;
        Upload::create($validatedData);
        Session::flash('message','File successfully uploaded');
        $this->emit('fileUploaded');
    }

    public function render()
    {
        return view('livewire.uploads');
    }
}
