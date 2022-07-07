<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Products extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $name, $slug, $description, $price, $quantity, $status, $category_id;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.products.view', [
            'products' => Product::latest()
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('slug', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->orWhere('price', 'LIKE', $keyWord)
						->orWhere('quantity', 'LIKE', $keyWord)
						->orWhere('status', 'LIKE', $keyWord)
						->orWhere('category_id', 'LIKE', $keyWord)
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
		$this->description = null;
		$this->price = null;
		$this->quantity = null;
		$this->status = null;
		$this->category_id = null;
    }

    public function store()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'description' => 'required',
		'price' => 'required',
		'quantity' => 'required',
		'status' => 'required',
		'category_id' => 'required',
        ]);

        Product::create([ 
			'name' => $this-> name,
			'slug' => $this-> slug,
			'description' => $this-> description,
			'price' => $this-> price,
			'quantity' => $this-> quantity,
			'status' => $this-> status,
			'category_id' => $this-> category_id
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Product Successfully created.');
    }

    public function edit($id)
    {
        $record = Product::findOrFail($id);

        $this->selected_id = $id; 
		$this->name = $record-> name;
		$this->slug = $record-> slug;
		$this->description = $record-> description;
		$this->price = $record-> price;
		$this->quantity = $record-> quantity;
		$this->status = $record-> status;
		$this->category_id = $record-> category_id;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'name' => 'required',
		'slug' => 'required',
		'description' => 'required',
		'price' => 'required',
		'quantity' => 'required',
		'status' => 'required',
		'category_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Product::find($this->selected_id);
            $record->update([ 
			'name' => $this-> name,
			'slug' => $this-> slug,
			'description' => $this-> description,
			'price' => $this-> price,
			'quantity' => $this-> quantity,
			'status' => $this-> status,
			'category_id' => $this-> category_id
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Product Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Product::where('id', $id);
            $record->delete();
        }
    }
}
