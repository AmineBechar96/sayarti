<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentAgency;
use App\Models\Communes;
use App\Models\Rating;
use App\Models\MyService;
use App\Models\MyLikedService;
use App\Models\GeneralMechanic;
use App\Models\recoveryTr;
use App\Models\SellPoints;
use App\Models\transportVehicle;
use App\Models\detachedPieceStore;
class AgencyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type,$id)
    {
        if($type=="rent-agency"){
            $agency=RentAgency::findOrFail($id);
            
        }
        else if($type=="recovery-truck"){
            $agency=recoveryTr::findOrFail($id);
        }
        else if($type=="general-mechanic"){
            $agency=GeneralMechanic::findOrFail($id);
        }
        else if($type=="sell-points"){
            $agency=SellPoints::findOrFail($id);
        }
        else if($type=="goods-transport"){
            $agency=transportVehicle::findOrFail($id);
        }
        else if($type=="detached-pieces-store"){
            $agency=detachedPieceStore::findOrFail($id);
        }
        else{
            return redirect('home');
        }
       // $numberOfUsers=MyService::where('agency_id',$id)->where('agency_type',$type)->count();
        //$numberOfLikes=MyLikedService::where('agency_id',$id)->where('agency_type',$type)->count();
        $wilaya=Communes::select('wilaya_id')->where('id',$agency->commune_id)->first();
        $communes=Communes::select('id')->where('wilaya_id',$wilaya->wilaya_id)->get();
      // $rating=Rating::where('service_rated_id',$agency->ID)->where('service_type',$agency->type)->get();
      // $adresse=Communes::with('wilaya')->limit(6)->get();
       $data6 = [];
 
 foreach($communes as $commune) {
$data6['data'][] = $commune->id;

         }
         if($type=="rent-agency"){
            $otheragencies=RentAgency::where('ID','!=',$id)->whereIn('commune_id',$data6['data'])->limit(6)->get();
            
        }
        else if($type=="recovery-truck"){
            //$agency=recoveryTr::findOrFail($id);
            $otheragencies=recoveryTr::where('ID','!=',$id)->whereIn('commune_id',$data6['data'])->limit(6)->get();
        }
        else if($type=="general-mechanic"){
           // $agency=GeneralMechanic::findOrFail($id);
            $otheragencies=GeneralMechanic::where('ID','!=',$id)->whereIn('commune_id',$data6['data'])->distinct()->limit(6)->get();
        }
        else if($type=="sell-points"){
            // $agency=GeneralMechanic::findOrFail($id);
             $otheragencies=SellPoints::where('ID','!=',$id)->whereIn('commune_id',$data6['data'])->distinct()->limit(6)->get();
         }
         else if($type=="goods-transport"){
            // $agency=GeneralMechanic::findOrFail($id);
            $otheragencies=transportVehicle::where('ID','!=',$id)->whereIn('commune_id',$data6['data'])->distinct()->limit(6)->get();
         }
         else if($type=="detached-pieces-store"){
           
            $otheragencies=detachedPieceStore::where('ID','!=',$id)->whereIn('commune_id',$data6['data'])->distinct()->limit(6)->get();
        }
         
        //return $adresse;
       return view('agency-details',compact('agency','otheragencies')); 
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
        //
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
