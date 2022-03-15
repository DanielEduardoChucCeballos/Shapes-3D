<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filament extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'filament';

    protected $fillable = ['name','price'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filamentColors()
    {
        return $this->hasMany('App\Models\FilamentColor', 'filament_id', 'id');
    }
    
}
