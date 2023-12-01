<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormationAppartement
 *
 * @property $id
 * @property $formation_id
 * @property $apprenant_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Appartement $appartement
 * @property Formation $formation
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FormationAppartement extends Model
{
    
    static $rules = [
		'formation_id' => 'required',
		'apprenant_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['formation_id','apprenant_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function appartement()
    {
        return $this->hasOne('App\Models\Appartement', 'id', 'apprenant_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formation()
    {
        return $this->hasOne('App\Models\Formation', 'id', 'formation_id');
    }
    

}
