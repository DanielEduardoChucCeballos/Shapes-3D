<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Detail;

class Details extends Component
{
	public $filament_color;
	public $filling;
	public $finish;

    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $height, $length, $width, $price, $filament_color_id, $filling_id, $finish_id;
    public $updateMode = false;

    public function render()
    {
		$this->filament_color = \App\Models\FilamentColor::all();
		$this->filling = \App\Models\Filling::all();
		$this->finish = \App\Models\Finish::all();


		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.details.view', [
            'details' => Detail::latest()
						->orWhere('height', 'LIKE', $keyWord)
						->orWhere('length', 'LIKE', $keyWord)
						->orWhere('width', 'LIKE', $keyWord)
						->orWhere('price', 'LIKE', $keyWord)
						->orWhere('filament_color_id', 'LIKE', $keyWord)
						->orWhere('filling_id', 'LIKE', $keyWord)
						->orWhere('finish_id', 'LIKE', $keyWord)
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
		$this->height = null;
		$this->length = null;
		$this->width = null;
		$this->price = null;
		$this->filament_color_id = null;
		$this->filling_id = null;
		$this->finish_id = null;
    }

    public function store()
    {
        $this->validate([
		'height' => 'required',
		'length' => 'required',
		'width' => 'required',
		'price' => 'required',
		'filament_color_id' => 'required',
		'filling_id' => 'required',
		'finish_id' => 'required',
        ]);

        Detail::create([ 
			'height' => $this-> height,
			'length' => $this-> length,
			'width' => $this-> width,
			'price' => $this-> price,
			'filament_color_id' => $this-> filament_color_id,
			'filling_id' => $this-> filling_id,
			'finish_id' => $this-> finish_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Detail Successfully created.');
    }

    public function edit($id)
    {
        $record = Detail::findOrFail($id);

        $this->selected_id = $id; 
		$this->height = $record-> height;
		$this->length = $record-> length;
		$this->width = $record-> width;
		$this->price = $record-> price;
		$this->filament_color_id = $record-> filament_color_id;
		$this->filling_id = $record-> filling_id;
		$this->finish_id = $record-> finish_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'height' => 'required',
		'length' => 'required',
		'width' => 'required',
		'price' => 'required',
		'filament_color_id' => 'required',
		'filling_id' => 'required',
		'finish_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Detail::find($this->selected_id);
            $record->update([ 
			'height' => $this-> height,
			'length' => $this-> length,
			'width' => $this-> width,
			'price' => $this-> price,
			'filament_color_id' => $this-> filament_color_id,
			'filling_id' => $this-> filling_id,
			'finish_id' => $this-> finish_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Detail Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Detail::where('id', $id);
            $record->delete();
        }
    }
}
