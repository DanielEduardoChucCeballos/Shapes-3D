<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Prospect;

class Prospects extends Component
{
    public $detail;
    public $personal_information;
    public $description_model;

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $detail_id, $personal_information_id, $description_model_id;
    public $updateMode = false;

    public function render()
    {
		$this->detail = \App\Models\Detail::all();
		$this->personal_information = \App\Models\PersonalInformation::all();
		$this->description_model = \App\Models\DescriptionModel::all();

		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.prospects.view', [
            'prospects' => Prospect::latest()
						->orWhere('detail_id', 'LIKE', $keyWord)
						->orWhere('personal_information_id', 'LIKE', $keyWord)
						->orWhere('description_model_id', 'LIKE', $keyWord)
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
		$this->detail_id = null;
		$this->personal_information_id = null;
		$this->description_model_id = null;
    }

    public function store()
    {
        $this->validate([
		'detail_id' => 'required',
		'personal_information_id' => 'required',
		'description_model_id' => 'required',
        ]);

        Prospect::create([ 
			'detail_id' => $this-> detail_id,
			'personal_information_id' => $this-> personal_information_id,
			'description_model_id' => $this-> description_model_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Prospect Successfully created.');
    }

    public function edit($id)
    {
        $record = Prospect::findOrFail($id);

        $this->selected_id = $id; 
		$this->detail_id = $record-> detail_id;
		$this->personal_information_id = $record-> personal_information_id;
		$this->description_model_id = $record-> description_model_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'detail_id' => 'required',
		'personal_information_id' => 'required',
		'description_model_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Prospect::find($this->selected_id);
            $record->update([ 
			'detail_id' => $this-> detail_id,
			'personal_information_id' => $this-> personal_information_id,
			'description_model_id' => $this-> description_model_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Prospect Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Prospect::where('id', $id);
            $record->delete();
        }
    }
}
