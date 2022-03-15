<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DescriptionModel;

class DescriptionModels extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $model, $description;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.description-models.view', [
            'descriptionModels' => DescriptionModel::latest()
						->orWhere('model', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
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
		$this->model = null;
		$this->description = null;
    }

    public function store()
    {
        $this->validate([
		'model' => 'required',
		'description' => 'required',
        ]);

        DescriptionModel::create([ 
			'model' => $this-> model,
			'description' => $this-> description
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'DescriptionModel Successfully created.');
    }

    public function edit($id)
    {
        $record = DescriptionModel::findOrFail($id);

        $this->selected_id = $id; 
		$this->model = $record-> model;
		$this->description = $record-> description;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'model' => 'required',
		'description' => 'required',
        ]);

        if ($this->selected_id) {
			$record = DescriptionModel::find($this->selected_id);
            $record->update([ 
			'model' => $this-> model,
			'description' => $this-> description
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'DescriptionModel Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = DescriptionModel::where('id', $id);
            $record->delete();
        }
    }
}
