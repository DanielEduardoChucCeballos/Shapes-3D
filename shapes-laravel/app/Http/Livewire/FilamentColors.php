<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\FilamentColor;

class FilamentColors extends Component
{
    public $colors;
    public $filaments;

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $color_id, $filament_id;
    public $updateMode = false;

    public function render()
    {
        $this->colors = \App\Models\Color::all();
        $this->filaments = \App\Models\Filament::all();
        
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.filament-colors.view', [
            'filamentColors' => FilamentColor::latest()
						->orWhere('color_id', 'LIKE', $keyWord)
						->orWhere('filament_id', 'LIKE', $keyWord)
						->paginate(10),
        ],);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->color_id = null;
		$this->filament_id = null;
    }

    public function store()
    {
        $this->validate([
		'color_id' => 'required',
		'filament_id' => 'required',
        ]);

        FilamentColor::create([ 
			'color_id' => $this-> color_id,
			'filament_id' => $this-> filament_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'FilamentColor Successfully created.');
    }

    public function edit($id)
    {
        $record = FilamentColor::findOrFail($id);

        $this->selected_id = $id; 
		$this->color_id = $record-> color_id;
		$this->filament_id = $record-> filament_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'color_id' => 'required',
		'filament_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = FilamentColor::find($this->selected_id);
            $record->update([ 
			'color_id' => $this-> color_id,
			'filament_id' => $this-> filament_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'FilamentColor Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = FilamentColor::where('id', $id);
            $record->delete();
        }
    }
}
