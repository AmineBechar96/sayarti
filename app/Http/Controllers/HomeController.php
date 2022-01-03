<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\car_make;
use App\Models\car_model;
use App\Models\car_serie;
use App\Models\voiture;
use App\Models\voiture2;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource .
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //$marques=voiture::all();
        $marques = voiture::select('model', \DB::raw('count(*) as total'))
                 ->groupBy('model')
                 ->orderBy('total','desc')
                 ->paginate(43);
        return view('home',compact('marques'));
        //return $marques;
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
     


        $validatedData = $request->validate([
            'brands' => 'required',
            'model' => 'required', 
            'serie' => 'required',
            'matricule' => 'required', 
            'energie' => 'required',
            'kilomitrage' => 'required', 
            'trans' => 'required',
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
            'location.required' => 'Vous devez choisir la localisation',
    ]);
        
            $marque=$request->brands;
            $model=$request->model;
            $notes=$request->serie;
            $proDate=(int)$request->matricule;
           // $type=Str::lower($request->type);
            $energie=$request->energie;
            $kilometrage=$request->kilomitrage;
            $transmission=$request->trans;
            $location=$request->location;
           // $couleur=$request->couleur;
            //$ch=$request->ch;
            //$litre=$request->litre;
            

$response = Http::post('https://calculateur-prix.herokuapp.com/light', [
    'model' => $marque,
    'brand' => $model,
    'notes' => $notes,
    'proDate' => $proDate,
    'energie'=> $energie,
    'location' =>$location,
    'transmission' => $transmission,
    'kilometrage' => $kilometrage,
])->throw()->json();
//$output=$response->all();
\Session::put('car', ['brand'=>$marque,'response'=>$response]);  
            //$json="'{\"data\":[$brand, $brandd, $notes,$proDate, $type,$energie, $kilometrage,$transmission,$couleur,$ch,$litre]}'";
       /* Vehicule::create([
            'model'=>$request->model,
            'brand'=>$request->marque,
            'notes'=>'ok',
            'proDate'=>$request->matricule,
            'type'=>'berline',
            'energie'=>$request->energie,
            'kilometrage'=>$request->kilomitrage,
            'transmission'=>$request->trans,
            'couleur'=>$request->couleur,
            'ch'=>'80',
            'litre'=>'1.4',
           
            
        ]);*/
        
        return redirect()->route('estimation');
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
    public function getmodel($id){
     //  $models=\DB::table('car_model')->where('id_car_make',$id)->pluck('name','id_car_model');
        //return json_encode($models);
       // $models=\DB::table('voitures')->where('model',$id)->pluck('brand','id');
          //$models=voiture::where('model',$id)->distinct()->pluck('brand','id');
          $models=voiture::select('brand', \DB::raw('count(*) as total'))->where('model',$id)
        ->groupBy('brand')
        ->orderBy('total','desc')
        ->get()->pluck('total','brand');
        return json_encode($models);
    }
    public function getserie($id){
        $series=voiture2::select('notes', \DB::raw('count(*) as total'))->where('brand',$id)
        ->groupBy('notes')
        ->orderBy('total','desc')
        ->get()->pluck('total','notes');
        return json_encode($series);
    }
    public function gettype($id){
        $series=voiture2::select('type', \DB::raw('count(*) as total'))->where('brand',$id)
        ->groupBy('type')
        ->orderBy('total','desc')
        ->get()->pluck('total','type');
        return json_encode($series);
    }
    public function getengine($id){
        $engine=voiture2::select('litre', \DB::raw('count(*) as total'))->where('brand',$id)
        ->groupBy('litre')
        ->orderBy('total','desc')
        ->get()->pluck('litre','total');
        return json_encode($engine);
       
      
    }
    public function getpower($id){
        $power=voiture2::select('ch', \DB::raw('count(*) as total'))->where('brand',$id)
        ->groupBy('ch')
        ->orderBy('total','desc')
        ->get()->pluck('ch','total');
        return json_encode($power);
    }
    public function getTdi($id){
        $power=voiture2::select('tdi', \DB::raw('count(*) as total'))->where('brand',$id)
        ->groupBy('tdi')
        ->orderBy('total','desc')
        ->get()->pluck('tdi','total');
        return json_encode($power);
    }
    public function getLocation($id){
        $power=voiture2::select('location', \DB::raw('count(*) as total'))->where('brand',$id)
        ->groupBy('location')
        ->orderBy('total','desc')
        ->get()->pluck('location','total');
        return json_encode($power);
    }
}
