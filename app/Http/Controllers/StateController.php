<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selled;
use App\Models\Car;
use App\Models\car_model;
use App\Models\voiture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $marques = voiture::select('model', \DB::raw('count(*) as total'))
                 ->groupBy('model')
                 ->orderBy('total','desc')
                 ->paginate(43);
        return view('check',compact('marques'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $validatedData = $request->validate([
            'brands' => 'required',
            'model' => 'required', 
            'serie' => 'required',
            'matricule' => 'required', 
            'energie' => 'required',
            'kilomitrage' => 'required', 
            'trans' => 'required',
            'prix' => 'required',
            'location' => 'required',
            
        ],
    [
            'brands.required' => 'Vous devez choisir une marque',
            'model.required' => 'Vous devez choisir un model', 
            'serie.required' => 'Vous devez choisir la serie',
            'matricule.required' => 'Vous devez choisir une année', 
            'energie.required' => "Vous devez choisir le type d'energie",
            'kilomitrage.required' => 'Vous devez entrer le kilomitrage', 
            'trans.required' => 'Vous devez choisir le type de transmission',
            'prix.required' => 'Vous devez entrer le prix de vehicule', 
            'locarion.required' => 'Vous devez choisir la location',
            
    ]);*/
          $marque=$request->brands; 
          $model=$request->model;
          $notes=$request->serie;
          $proDate=(int)$request->matricule;
          $location=$request->location;
          $energie=$request->energie;
          $kilometrage=$request->kilomitrage;
          $transmission=$request->trans;
          $prix=(int)$request->prix;
          //hna lazem dir requete lirah tb3athha fiplacet taux twali la valeur liradhalak lalgo
          $real_price= Http::post('https://calculateur-prix.herokuapp.com/light', [
            
            'model' => $marque,
            'brand' => $model,
            'notes' => $notes,
            'proDate' => $proDate,
            'energie'=> $energie,
            'location' =>$location,
            'transmission' => $transmission,
            'kilometrage' => $kilometrage,
           
        ])->throw()->json();

        $re_price=round($real_price);
      
        $taux=Http::post('https://calculateur-prix.herokuapp.com/accidenter', [
            'annee' => $proDate,
            'prix_model' => $re_price,
            'prix_utilisateur' =>$prix,
           
        ])->throw()->json();

          return view('state',compact('marque','model','notes','proDate','location','energie','kilometrage','transmission','prix','taux'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
