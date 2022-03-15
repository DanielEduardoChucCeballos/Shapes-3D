<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Color;

class Colors extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $code;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.colors.view', [
            'colors' => Color::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('code', 'LIKE', $keyWord)
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
		$this->code = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
        ]);

        Color::create([ 
			'name' => $this-> name,
			'code' => $this-> code
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Color Successfully created.');
    }

    public function edit($id)
    {
        $record = Color::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->code = $record-> code;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Color::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'code' => $this-> code
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Color Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Color::where('id', $id);
            $record->delete();
        }
    }
}
