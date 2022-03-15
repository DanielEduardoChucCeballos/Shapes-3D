<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finish extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'finish';

    protected $fillable = ['name','price'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany('App\Models\Detail', 'finish_id', 'id');
    }
    
}
