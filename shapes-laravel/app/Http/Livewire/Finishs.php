<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Finish;

class Finishs extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $price;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.finishs.view', [
            'finishes' => Finish::latest()
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

        Finish::create([ 
			'name' => $this-> name,
			'price' => $this-> price
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Finish Successfully created.');
    }

    public function edit($id)
    {
        $record = Finish::findOrFail($id);

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
			$record = Finish::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'price' => $this-> price
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Finish Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Finish::where('id', $id);
            $record->delete();
        }
    }
}
