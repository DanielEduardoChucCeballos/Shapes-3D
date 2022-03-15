<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'detail';

    protected $fillable = ['height','length','width','price','filament_color_id','filling_id','finish_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function filamentColor()
    {
        return $this->hasOne('App\Models\FilamentColor', 'id', 'filament_color_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function filling()
    {
        return $this->hasOne('App\Models\Filling', 'id', 'filling_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function finish()
    {
        return $this->hasOne('App\Models\Finish', 'id', 'finish_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prospects()
    {
        return $this->hasMany('App\Models\Prospect', 'detail_id', 'id');
    }
    
}
