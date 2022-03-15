<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionModel extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'description_model';

    protected $fillable = ['model','description'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prospects()
    {
        return $this->hasMany('App\Models\Prospect', 'description_model_id', 'id');
    }
    
}
