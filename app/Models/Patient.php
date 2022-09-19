<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [ 'nom', 'prenom', 'age', 'sex', 'medecin_id'];
   
    public function medecins()
    { 
        return $this->belongsTo(Medecin::class); 
    }
    
}
