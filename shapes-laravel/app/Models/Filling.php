<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filling extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'filling';

    protected $fillable = ['name','price'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany('App\Models\Detail', 'filling_id', 'id');
    }
    
}
