<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class Categorys extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $slug, $image, $description;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.categorys.view', [
            'categories' => Category::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('slug', 'LIKE', $keyWord)
						->orWhere('image', 'LIKE', $keyWord)
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
		$this->name = null;
		$this->slug = null;
		$this->image = null;
		$this->description = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'image' => 'required',
		'description' => 'required',
        ]);

        Category::create([ 
			'name' => $this-> name,
			'slug' => $this-> slug,
			'image' => $this-> image,
			'description' => $this-> description
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Category Successfully created.');
    }

    public function edit($id)
    {
        $record = Category::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->slug = $record-> slug;
		$this->image = $record-> image;
		$this->description = $record-> description;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'image' => 'required',
		'description' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Category::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'slug' => $this-> slug,
			'image' => $this-> image,
			'description' => $this-> description
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Category Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Category::where('id', $id);
            $record->delete();
        }
    }
}
