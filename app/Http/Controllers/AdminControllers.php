<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    //

    public function AdDash()
    {
        return view('indexDashboard');
    }

    public function AddCours()
    {
        return view('AddCours');
    }

    public function mesCours()
    {
  
        return view('coursConsulter');
    }

    public function recu()
    {
        return view('recu');
    }




    // public function createCours(Request $request)
    // {
    //     $request->validate([
    //         'titre_cours' => 'required',
    //         'url_image' => 'required',
    //         'description_cours' => 'required',
    //         'langue_cours' => 'required',
    //         'categorie_cours' => 'required',
    //         'duree_cours' => 'required',
    //         'difficulte_cours' => 'required',
    //         'debouche_cours' => 'required',
    //         'plan_un' => 'required',
    //         'description_un' => 'required',
    //         'video_un' => 'required',

    //         'plan_deux' => 'required',
    //         'description_deux' => 'required',
    //         'video_deux' => 'required',

    //         'plan_trois' => 'required',
    //         'description_trois' => 'required',
    //         'video_trois' => 'required',
    //     ]);

        public function Enregistrer(request $request )  
        {
            // $request->validate([
            //     'titre_cours' => $request['titre_cours'],
            //     'url_image' => $request['url_image'],
            //     'description_cours' => $request['description_cours'],
            //     'langue_cours' => $request['langue_cours'],
            //     'duree_cours' => $request['duree_cours'],
            //     'difficulte_cours' => $request['difficulte_cours'],
            //     'debouche_cours' => $request['debouche_cours'],
            //     'plan_un' => $request['plan_un'],

            //     'description_un' => $request['description_un'],
            //     'video_un' => $request['video_un'],

            //     'plan_deux' => $request['plan_deux'],
            //     'description_deux' => $request['description_deux'],
            //     'video_deux' => $request['video_deux'],

            //     'plan_trois' => $request['plan_trois'],
            //     'description_trois' => $request['description_trois'],
            //     'video_trois' => $request['video_trois'],

            // ]);
            Cour::create([
                'titre_cours' => $request['titre_cours'],
                'url_image' => $request['url_image'],
                'description_cours' => $request['description_cours'],
                'langue_cours' => $request['langue_cours'],
                'duree_cours' => $request['duree_cours'],
                'categorie_cours' => $request['categorie_cours'],
                'difficulte_cours' => $request['difficulte_cours'],
                'debouche_cours' => $request['debouche_cours'],

              
                'plan_un' => $request['plan_un'],
                
                'description_un' => $request['description_un'],
                'video_un' => $request['video_un'],

                'plan_deux' => $request['plan_deux'],
                'description_deux' => $request['description_deux'],
                'video_deux' => $request['video_deux'],

                'plan_trois' => $request['plan_trois'],
                'description_trois' => $request['description_trois'],
                'video_trois' => $request['video_trois'],
            ]);


    
        }
    }
