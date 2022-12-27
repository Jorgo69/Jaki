<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    use HasFactory;


    protected $fillable = [
        'titre_cours',
        'url_image',
        'description_cours',
        'langue_cours',
        ' resume_cours',
        ' categorie_cours',
        '  duree_cours',
        ' difficulte_cours',
        '  debouche_cours',
        'prix_cours',

       '  plan_un',
       'description_un',
       ' video_un',

       'plan_deux',
      ' description_deux',
       'video_deux',

       'plan_trois',
       ' description_trois',
       'video_trois' ,

    ];


    public function user(){
        return $this->hasMany(User::class);
    }

  
}