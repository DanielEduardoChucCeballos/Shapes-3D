<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilamentColor extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'filament_color';

    protected $fillable = ['color_id','filament_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function color()
    {
        return $this->hasOne('App\Models\Color', 'id', 'color_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany('App\Models\Detail', 'filament_color_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function filament()
    {
        return $this->hasOne('App\Models\Filament', 'id', 'filament_id');
    }
    
}
