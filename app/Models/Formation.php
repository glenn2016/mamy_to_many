<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formation
 *
 * @property $id
 * @property $code
 * @property $nom
 * @property $duree
 * @property $created_at
 * @property $updated_at
 *
 * @property FormationAppartement[] $formationAppartements
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Formation extends Model
{
    
    static $rules = [
		'code' => 'required',
		'nom' => 'required',
		'duree' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['code','nom','duree'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formationAppartements()
    {
        return $this->hasMany('App\Models\FormationAppartement', 'formation_id', 'id');
    }
    

}
