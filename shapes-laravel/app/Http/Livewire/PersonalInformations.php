<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PersonalInformation;

class PersonalInformations extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $lastname, $business, $address, $email, $phone;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.personal-informations.view', [
            'personalInformations' => PersonalInformation::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('lastname', 'LIKE', $keyWord)
						->orWhere('business', 'LIKE', $keyWord)
						->orWhere('address', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('phone', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->name = null;
		$this->lastname = null;
		$this->business = null;
		$this->address = null;
		$this->email = null;
		$this->phone = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'lastname' => 'required',
		'business' => 'required',
		'address' => 'required',
		'email' => 'required',
		'phone' => 'required',
        ]);

        PersonalInformation::create([ 
			'name' => $this-> name,
			'lastname' => $this-> lastname,
			'business' => $this-> business,
			'address' => $this-> address,
			'email' => $this-> email,
			'phone' => $this-> phone
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'PersonalInformation Successfully created.');
    }

    public function edit($id)
    {
        $record = PersonalInformation::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->lastname = $record-> lastname;
		$this->business = $record-> business;
		$this->address = $record-> address;
		$this->email = $record-> email;
		$this->phone = $record-> phone;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'lastname' => 'required',
		'business' => 'required',
		'address' => 'required',
		'email' => 'required',
		'phone' => 'required',
        ]);

        if ($this->selected_id) {
			$record = PersonalInformation::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'lastname' => $this-> lastname,
			'business' => $this-> business,
			'address' => $this-> address,
			'email' => $this-> email,
			'phone' => $this-> phone
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'PersonalInformation Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = PersonalInformation::where('id', $id);
            $record->delete();
        }
    }
}
