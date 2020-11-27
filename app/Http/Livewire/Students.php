<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Students extends Component
{
    public $ids;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $searchTerm;

    public function resetInputFields()
    {
        $this->firstname='';
        $this->lastname='';
        $this->email='';
        $this->phone='';
    }

    public function store()
    {
        $validatedData= $this->validate([
            'firstname'=>'required|alpha',
            'lastname'=>'required|alpha',
            'email'=>'required|email',
            'phone'=>'required|numeric|digits:8',
        ]);
        Student::create($validatedData);
        Session::flash('message','Student created successfully!');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }
    public function edit($id)
    {
        $student=Student::where('id',$id)->first();
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
    }

    public function update()
    {
        $this->validate([
            'firstname'=>'required|alpha',
            'lastname'=>'required|alpha',
            'email'=>'required|email',
            'phone'=>'required|numeric|digits:8',
        ]);
        if ($this->ids) {
            $student= Student::find($this->ids);
            $student->update([
                'firstname'=>$this->firstname,
                'lastname'=>$this->lastname,
                'email'=>$this->email,
                'phone'=>$this->phone,
            ]);
            Session::flash('message','Student updated successfully!');
            $this->resetInputFields();
            $this->emit('studentUpdated');
        }
    }
    public function delete($id)
    {
        if ($id) {
            Student::where('id',$id)->delete();
            Session::flash('message','Student deleted successfully!');

        }
    }
    use WithPagination;

    public function render()
    {
        $searchTerm='%'.$this->searchTerm . '%';
        $students= Student::where('firstname','LIKE',$searchTerm)
                    ->orWhere('lastname','LIKE',$searchTerm)
                    ->orWhere('email','LIKE',$searchTerm)
                    ->orWhere('phone','LIKE',$searchTerm)
                    ->orderBy('id','DESC')->paginate(10);
        return view('livewire.students',compact('students'));
    }
}
