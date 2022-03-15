<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'prospect';

    protected $fillable = ['detail_id','personal_information_id','description_model_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function descriptionModel()
    {
        return $this->hasOne('App\Models\DescriptionModel', 'id', 'description_model_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detail()
    {
        return $this->hasOne('App\Models\Detail', 'id', 'detail_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function personalInformation()
    {
        return $this->hasOne('App\Models\PersonalInformation', 'id', 'personal_information_id');
    }
    
}
