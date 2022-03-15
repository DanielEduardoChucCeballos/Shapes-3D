<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'color';

    protected $fillable = ['name','code'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filamentColors()
    {
        return $this->hasMany('App\Models\FilamentColor', 'color_id', 'id');
    }
    
}
