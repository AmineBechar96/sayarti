<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if(Auth::user() and Auth::user()->hasVerifiedEmail()  ){
            $user_id=Auth::user()->id;
            $user_name=Auth::user()->name;
            $rating=$request->service_rating;
            $review=$request->review;
            $service_type=$request->service_type;
            $service_rated_id=$request->service_rated_id;
            $existing_rating=Rating::where('user_id',$user_id)->where('service_type',$service_type)->where('service_rated_id',$service_rated_id)->first();
          if($existing_rating){
            $existing_rating->number_of_starts=$rating;
            $existing_rating->review= $review;
            $existing_rating->update();
          }
          else{
              Rating::create([
                  'user_id'=>$user_id,
                  'user_name'=>$user_name,
                  'service_type'=>$service_type,
                  'service_rated_id'=>$service_rated_id,
                  'number_of_starts'=>$rating,
                  'review'=>$review,
              ]);
          }
          session()->flash('success', 'Votre avis a été enregistré avec success');
          return redirect()->back();
        }
        else{
            redirect('login');
        }
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
