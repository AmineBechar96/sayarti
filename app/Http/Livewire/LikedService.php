<?php

namespace App\Http\Livewire;
use App\Models\AllServices;
use App\Models\MyLikedService;
use App\Models\MyService;
use App\Models\Wilaya;
use App\Models\Communes;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;


class LikedService extends Component
{
    
        use WithPagination;
        public $website=false;
        public $rating=false;
        public $phone=false;
    
        public $wilaya_id=0;
        public $type=[];
        public $liked="saved"; 
        
        
        public $search ;
        public $isSetClicked=false;
        public $likeed=false;
        public $agencyLikedId=null;
        public $agencyLikedType=null;
        public $filter="title" ;
       public $user_id;
      
       protected $listeners = ['remove' => 'render', 'sectionDeleted' => 'render'];
    
    
     protected $paginationTheme = 'bootstrap';
      /**
         *  Livewire Lifecycle Hook
         */
        
        public function searchagency()
        {
            $this->gotoPage(1);
            
        }
       
    
        public function  mount(){
           
           // $this->$selectedPositionCommuneName=Communes::select('id')->where('name',$this->selectedPosition)->first();
         //   $this->addresses =Communes::with('wilaya')->where('name','like', '%'.trim($this->searchPosition).'%')
          //  ->limit(6)->get();
           //$user_services=collect();
    
          
        }
       
       
       /* public function getCommune($code){
    
            $communes=\DB::table('wila_com')->where('wilaya_id',$code)->pluck('name','id');
            return json_encode($communes);
              }*/
        public function clearFilters()
        {
            /*$this->$website=false;
            $this->$rating=false;
            $this->phone=false;
            $this->$ouvert=false;*/
            return redirect()->to('rent-agencies');
           // $this->re-render();
           //return $this->mount();
        }
        public function hydrate()
        {
            $this->emit('select2');
           
     
        }
    
        public function store($agency_id,$agency_type)
    {
        if(Auth::user()->hasVerifiedEmail()){
        //$user_id=Auth::user()->id;
        $exisitingService=MyService::where('user_id',Auth::user()->id)->where('agency_id',$agency_id)->where('agency_type',$agency_type)->first();
       if($exisitingService){
        $this->dispatchBrowserEvent('swal:existed', [
            'position'=> 'top-end',
            'type'=> 'warning',
            'title'=> 'Vous avez deja ajouter cette service',
            'showConfirmButton'=> false,
            'timer'=> 3000,
            'confirmButtonClass'=> 'btn btn-primary',
            'buttonsStyling'=> false,
        ]);
       }
       else{
        MyService::create([
            'user_id' =>Auth::user()->id ,
            'agency_id' => $agency_id,
            'agency_type' => $agency_type,
            'token' => $agency_id."_of_".$agency_type
        ]);
        $this->isSetClicked = true;
    /*     $this->dispatchBrowserEvent('swal', ['title' => 'Feedback Saved']);*/
    $this->dispatchBrowserEvent('swal:success', [
        'position'=> 'top-end',
        'type'=> 'success',
        'title'=> 'Ajout terminer avec success',
        'showConfirmButton'=> false,
        'timer'=> 3000,
        'confirmButtonClass'=> 'btn btn-primary',
        'buttonsStyling'=> false,
    ]);
    
    }
    
    }}
    public function remove($agency_id,$agency_type)
    {
        if(Auth::user()->hasVerifiedEmail()){
        //$user_id=Auth::user()->id;
        //$id=MyService::select('id')->where('user_id',Auth::user()->id)->where('agency_id',$agency_id)->where('agency_type',$agency_type)->first();
    
        $exisitingService=MyService::where('user_id',Auth::user()->id)->where('agency_id',$agency_id)->where('agency_type',$agency_type)->first();
       if($exisitingService){
        $exisitingService->delete();
        //$this->render();
        
        $this->dispatchBrowserEvent('swal:existed', [
            'position'=> 'top-end',
            'type'=> 'success',
            'title'=> 'Suppression terminer avec success',
            'showConfirmButton'=> false,
            'timer'=> 3000,
            'confirmButtonClass'=> 'btn btn-primary',
            'buttonsStyling'=> false,
        ]);
      
       }
      
    
    
    }}
    public function dislike($id,$type){
        if(Auth::user()->hasVerifiedEmail()){
            //$user_id=Auth::user()->id;
          /*  $AlreadyLikedService=MyLikedService::where('user_id',Auth::user()->id)->where('agency_id',$this->agencyLikedId)->where('agency_type',$this->agencyLikedType)->where('liked',$this->likeed)->first();
           if($AlreadyLikedService){
       
           }->where('liked','!=',$this->likeed)
           else{*/
               $AlreadyLikedService2=MyLikedService::where('user_id',Auth::user()->id)->where('agency_id',$id)->where('agency_type',$type)->first();
               if($AlreadyLikedService2){
                   //$AlreadyLikedService2->liked=$this->liked;
                   $AlreadyLikedService2->delete();
               /*}
           else{ MyLikedService::create([
                'user_id' =>Auth::user()->id ,
                'agency_id' => $this->agencyLikedId,
                'agency_type' => $this->agencyLikedType,
                'liked'=>$this->likeed,
                'token' => $this->agencyLikedId."_of_".$this->agencyLikedType
                
            ]);
           }*/
           // dd($this->liked);
            //$this->isSetClicked = true;
       /*     $this->dispatchBrowserEvent('swal', ['title' => 'Feedback Saved']);*/
        
       
        }}
    }
    
        public function render()
        {
           
                
      if(Auth::user()->hasVerifiedEmail()){
        if($this->agencyLikedId!=null and $this->agencyLikedType!=null )  {
            if(Auth::user()->hasVerifiedEmail()){
                //$user_id=Auth::user()->id;
              /*  $AlreadyLikedService=MyLikedService::where('user_id',Auth::user()->id)->where('agency_id',$this->agencyLikedId)->where('agency_type',$this->agencyLikedType)->where('liked',$this->likeed)->first();
               if($AlreadyLikedService){
           
               }->where('liked','!=',$this->likeed)
               else{*/
                   $AlreadyLikedService2=MyLikedService::where('user_id',Auth::user()->id)->where('agency_id',$this->agencyLikedId)->where('agency_type',$this->agencyLikedType)->first();
                   if($AlreadyLikedService2){
                       //$AlreadyLikedService2->liked=$this->liked;
                       $AlreadyLikedService2->delete();
                   /*}
               else{ MyLikedService::create([
                    'user_id' =>Auth::user()->id ,
                    'agency_id' => $this->agencyLikedId,
                    'agency_type' => $this->agencyLikedType,
                    'liked'=>$this->likeed,
                    'token' => $this->agencyLikedId."_of_".$this->agencyLikedType
                    
                ]);
               }*/
               // dd($this->liked);
                //$this->isSetClicked = true;
           /*     $this->dispatchBrowserEvent('swal', ['title' => 'Feedback Saved']);*/
            
           
            }}
            
        } 
        
            
                //$user_id=Auth::user()->id;
                MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get();
                
     
            
          //  dd( $this->data2['token']);
             //dd($data2['token'][0]);
                //dd(MyService::select('agency_id')->where('user_id',Auth::user()->id));
            if($this->website==false && $this->rating==false && $this->phone==false){
           
            return view('livewire.liked-service', [
                'agencies' => AllServices::where(function($sub_query) {
                    $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type);
                })->orderBy($this->filter,'desc')->paginate(6)
            ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
            WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
            WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
            WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
            WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
            ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
            ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->groupBy('rate')
            ->orderBy('count','desc')
            ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count()
            ,'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->count(),]);
        
            
            }
            else if ($this->website!=false && $this->rating==false && $this->phone==false ){
                return view('livewire.liked-service', [
                    'agencies' => AllServices::where(function($sub_query) {
                        $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website');
                    })->orderBy($this->filter,'desc')->paginate(6)
                ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                ->orderBy('count','desc')
                ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->count(),]);
                } else if ($this->website==false && $this->rating!=false && $this->phone==false ){
                    return view('livewire.liked-service', [
                        'agencies' => AllServices::where(function($sub_query) {
                            $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('rating');
                        })->orderBy($this->filter,'desc')->paginate(6)
                    ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                    WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                    WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                    WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                    WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                    ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                    ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                    ->orderBy('count','desc')
                    ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('rating')->count(),]);
                    }
                    else if ($this->website==false && $this->rating==false && $this->phone!=false){
                        return view('livewire.liked-service', [
                            'agencies' => AllServices::where(function($sub_query) {
                                $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('phone');
                            })->orderBy($this->filter,'desc')->paginate(6)
                        ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                        WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                        WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                        WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                        WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                        ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                        ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                        ->orderBy('count','desc')
                        ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('phone')->count(),]);
                        }
                     
                        else if ($this->website!=false && $this->rating!=false && $this->phone==false){
                            return view('livewire.liked-service', [
                                'agencies' => AllServices::where(function($sub_query) {
                                    $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('rating');
                                })->orderBy($this->filter,'desc')->paginate(6)
                            ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                            WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                            WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                            WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                            WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                            ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                            ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                            ->orderBy('count','desc')
                            ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('rating')->count(),]);
                            }
                            else if ($this->website!=false && $this->rating==false && $this->phone!=false){
                                return view('livewire.liked-service', [
                                    'agencies' => AllServices::where(function($sub_query) {
                                        $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('phone');
                                    })->orderBy($this->filter,'desc')->paginate(6)
                                ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                                WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                                WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                                WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                                WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                                ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                                ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                                ->orderBy('count','desc')
                                ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('phone')->count(),]);
                                }
                               
                                else if ($this->website==false && $this->rating!=false && $this->phone!=false ){
                                    return view('livewire.liked-service', [
                                        'agencies' => AllServices::where(function($sub_query) {
                                            $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('rating')->whereNotNull('phone');
                                        })->orderBy($this->filter,'desc')->paginate(6)
                                    ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                                    WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                                    WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                                    WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                                    WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                                    ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                                    ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                                    ->orderBy('count','desc')
                                    ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('rating')->whereNotNull('phone')->count(),]);
                                    }
                                  
                                        
                                            else if ($this->website!=false && $this->rating!=false && $this->phone!=false){
                                                return view('livewire.liked-service', [
                                                    'agencies' => AllServices::where(function($sub_query) {
                                                        $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('rating')->whereNotNull('phone');
                                                    })->orderBy($this->filter,'desc')->paginate(6)
                                                ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                                                WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                                                WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                                                WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                                                WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                                                ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                                                ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                                                ->orderBy('count','desc')
                                                ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('rating')->whereNotNull('phone')->count(),]);
                                                }
                                                
                                                    
                                                        
                else{
                    return view('livewire.liked-service', [
                        'agencies' => AllServices::where(function($sub_query) {
                            $sub_query->where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('rating')->whereNotNull('phone')->where('open_state',$this->ouvert);
                        })->orderBy($this->filter,'desc')->paginate(6)
                    ,'ratings'=>AllServices::select(\DB::raw('(CASE WHEN rating BETWEEN 4.0 AND 5.0 THEN "best"
                    WHEN rating BETWEEN 3.0 AND 4.0 THEN "good"
                    WHEN rating BETWEEN 2.0 AND 3.0 THEN "medium"
                    WHEN rating BETWEEN 1.0 AND 2.0 THEN "bad"
                    WHEN rating  BETWEEN 0 AND 1.0 THEN "verybad"
                    ELSE "others" END)  AS rate'), \DB::raw('count(1) as count'))
                    ->whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->groupBy('rate')
                    ->orderBy('count','desc')
                    ->get(),'withwebsite'=>AllServices::whereNotNull('website')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withrating'=>AllServices::whereNotNull('rating')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'withphone'=>AllServices::whereNotNull('phone')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->where('title','like', '%'.trim($this->search).'%')
            ->count(),'total'=>AllServices::where('title','like', '%'.trim($this->search).'%')->whereIn('token',MyLikedService::select('token')->where('user_id',Auth::user()->id)->latest()->get())->where('type',$this->type)->whereNotNull('website')->whereNotNull('rating')->whereNotNull('phone')->where('open_state',$this->ouvert)->count(),
            ]); 
                    } 
        
                 
        
        
          
        }     
           
    
    
    
    }
}
