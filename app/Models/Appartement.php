<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Appartement
 *
 * @property $id
 * @property $matricule
 * @property $nom
 * @property $prenom
 * @property $niveau
 * @property $created_at
 * @property $updated_at
 *
 * @property FormationAppartement[] $formationAppartements
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Appartement extends Model
{
    
    static $rules = [
		'matricule' => 'required',
		'nom' => 'required',
		'prenom' => 'required',
		'niveau' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricule','nom','prenom','niveau'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function formationAppartements()
    {
        return $this->hasMany('App\Models\FormationAppartement', 'apprenant_id', 'id');
    }
    

}
