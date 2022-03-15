<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'personal_information';

    protected $fillable = ['name','lastname','business','address','email','phone'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prospects()
    {
        return $this->hasMany('App\Models\Prospect', 'personal_information_id', 'id');
    }
    
}
