<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Filament;

class Filaments extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $price;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.filaments.view', [
            'filaments' => Filament::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('price', 'LIKE', $keyWord)
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
		$this->price = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'price' => 'required',
        ]);

        Filament::create([ 
			'name' => $this-> name,
			'price' => $this-> price
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Filament Successfully created.');
    }

    public function edit($id)
    {
        $record = Filament::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->price = $record-> price;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'price' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Filament::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'price' => $this-> price
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Filament Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Filament::where('id', $id);
            $record->delete();
        }
    }
}
