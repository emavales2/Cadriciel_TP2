<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model {

    use HasFactory;
    
    protected $table = 'maisonn_villes';
    protected $fillable = ['name'];

    public $timestamps = false;

    public function villeHasEtudiant(){
        return $this->hasMany(Etudiant::class);
    }
}
