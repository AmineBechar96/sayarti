<div class="content-wrapper">

    <div class="content-detached content-right">
        <div class="content-body">
            <section id="ecommerce-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ecommerce-header-items">
                            <div class="result-toggler">
                                <button class="navbar-toggler shop-sidebar-toggler" type="button"
                                    data-toggle="collapse">
                                    <span class="navbar-toggler-icon d-block d-lg-none"><i
                                            class="feather icon-menu"></i></span>
                                </button>
                                <div class="search-results">
                                    {{$total}} results found
                                </div>
                            </div>
                            <div class="view-options">
                                <div class="btn-group mt-2" style="margin-right:10px;">

                                    <div class="form-group" wire:ignore>
                                        <select class="price-options form-control" name="filter" wire:model="filter"
                                            id="filter">
                                            <option selected value="title">Tous</option>
                                            <option value="rating">Top Rated</option>
                                            <option value="reviews">Plus de Reviews</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="view-btn-option">

                                    <button class="btn btn-white view-btn grid-view-btn active">
                                        <i class="feather icon-grid"></i>
                                    </button>
                                    <button class="btn btn-white list-view-btn view-btn">
                                        <i class="feather icon-list"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Ecommerce Search Bar Starts -->
            <section id="ecommerce-searchbar">
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <fieldset class="form-group position-relative">

                            <input type="text" class="form-control search-product" id="iconLeft5"
                                placeholder="Search here" wire:click="searchagency()" wire:model="search">
                            <div class="form-control-position">
                                <i class="feather icon-search"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </section>
            <div class="d-flex justify-content-center align-items-center mt-1 mb-1 ">
                {{ $agencies->links('') }}
            </div>
            @if (count($agencies)>0)
            @php
            $display="grid-view"
            @endphp
            @else
            @php
            $display="list-view"
            @endphp
            @endif
            <section id="ecommerce-products" class="{{$display}}">
                @if (count($agencies)>0)
                @foreach ($agencies as $agency)
                <div class="card ecommerce-card">
                    <div class="card-content" id="prod1">
                        <div class="item-img text-center">
                            <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                @if ($agency->type=="recovery-truck")
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                    <img class="img-fluid" src="../../../app-assets/images/pages/depannage/3.jpg"
                                        alt="img-placeholder"></a>
                                @elseif($agency->type=="detached-pieces-store")
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                    <img class="img-fluid" src="../../../app-assets/images/pages/depannage/piece.jpg"
                                        alt="img-placeholder"></a>
                                @elseif($agency->type=="rent-agency")
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                    <img class="img-fluid" src="../../../app-assets/images/pages/location/44.jpg"
                                        alt="img-placeholder"></a>
                                @elseif($agency->type=="sell-points")
                                @if (!is_null($agency->Maison))
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                    <img class="img-fluid" style="margin-top:66px;margin-bottom:67px;"
                                        src="../../../app-assets/images/brands/{{strtolower($agency->Maison)}}.png"
                                        alt="img-placeholder"></a>
                                @else
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}"> <img
                                        class="img-fluid" src="../../../app-assets/images/brands/img.jpg"
                                        alt="img-placeholder"></a>
                                @endif
                                @elseif($agency->type=="goods-transport")
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                    <img class="img-fluid" style="margin-top:52px;margin-bottom:52px;"
                                        src="../../../app-assets/images/pages/eCommerce/{{$agency->vehicule_shape}}.png"
                                        alt="img-placeholder">
                                </a>
                                @else
                                <a href="{{$agency->type}}/agency-details/{{$agency->agency_ID}}">
                                    <img class="img-fluid" src="../../../app-assets/images/pages/location/mechanic2.jpg"
                                        alt="img-placeholder"></a>
                                @endif

                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <div class="badge badge-primary badge-md">
                                        <span>{{$agency->rating}}</span>

                                        <i class="feather icon-star"></i>


                                    </div>
                                </div>
                                <div>
                                    <h5 class="item-price text-success">
                                        @if ($filter=="distance")
                                        {{number_format($agency->distance, 1, '.', '')}} KM
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            <div class="item-name">
                                <a href="app-ecommerce-details.html">{{$agency->title}}</a>
                                <p class="item-company">
                                    By
                                    <span class="company-name">Google</span>
                                </p>
                            </div>
                            <div>
                                <p class="item-description">
                                    Enjoy smart access
                                    to
                                    videos, games and
                                    apps
                                    with this Amazon
                                    Fire TV
                                    stick. Its Alexa
                                    voice
                                    remote lets you
                                    deliver hands-free
                                    commands when you
                                    want
                                    to watch television
                                    or
                                    engage with other
                                    applications. With a
                                    quad-core processor,
                                    1GB
                                    internal memory and
                                    8GB
                                    of storage, this
                                    portable Amazon Fire
                                    TV
                                    stick works fast
                                    for buffer-free
                                    streaming.
                                </p>
                            </div>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <div class="badge badge-primary badge-md">
                                        <span>{{$agency->rating}}</span>
                                        @for ($i = 0; $i < $agency->rating; $i++)
                                            <i class="feather icon-star"></i>
                                            @endfor

                                    </div>
                                </div>
                                <div class="item-cost">
                                    <h6 class="item-price">
                                        $39.99
                                    </h6>
                                </div>
                            </div>


                            <div class="wishlist" onclick="addRow(this)" data-type="{{$agency->type}}"
                                data-agency_id="{{$agency->agency_ID}}">
                                <i class="fa fa-heart-o" wire:ignore.self></i>
                                <span>J'adors</span>
                            </div>


                            <div class="cart">

                                <i class="feather icon-x"></i>
                                <span class="add-to-cart"
                                    wire:click="remove({{$agency->agency_ID}},'{{$agency->type}}')">Retirer
                                </span>



                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                @else
                <!-- error 404 -->
                <section class="row match-width flexbox-container">
                    <div class="col-xl-12 col-md-12 col-12 d-flex justify-content-center">
                        <div class="card auth-card bg-transparent shadow-none rounded-0 mb-0 w-100">
                            <div class="card-content">
                                <div class="card-body text-center">
                                    <img src="../../../app-assets/images/pages/location/nocontent.svg"
                                        class="img-fluid align-self-center" alt="branding logo">
                                    <h1 class="font-large-2 my-1">Oups -No Content
                                        Found!</h1>
                                    <p class="p-2">
                                        Vous n'avez enregistré aucun service, vous pouvez ajouter un service en cliquant
                                        sur le bouton ci-dessous


                                    </p>
                                    <br>

                                    <a class="btn btn-primary btn-lg mt-2" href="rent-agencies">Parcourir Les Services
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- error 404 end -->



                @endif

            </section>
        </div>
    </div>
    <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
            <!-- Ecommerce Sidebar Starts -->
            <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                    </div>
                </div>
                <span class="sidebar-close-icon d-block d-md-none">
                    <i class="feather icon-x"></i>
                </span>
                <div class="card">
                    <div class="card-body">


                        <!-- /Price Slider -->
                        <div class="price-slider">
                            <div class="price-slider-title mt-1">
                                <h6 class="filter-title mb-0">Categories</h6>
                            </div>
                        </div>
                        <hr>
                        <div id="product-categories">

                            <ul class="list-unstyled categories-list">
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="liked" wire:model="liked" value="saved">
                                        <span class=" vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Services Enregistrés</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="liked" wire:model="liked" value="liked">
                                        <span class=" vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Services Aimés</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <!-- Categories Starts -->
                        <div id="product-categories">

                            <ul class="list-unstyled categories-list">

                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="type" wire:model="type" value="rent-agency">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Location de Voitures</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="type" wire:model="type" value="recovery-truck">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Depannages Auto</span>
                                    </span>

                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="type" wire:model="type" value="goods-transport">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Vehicules de Transport</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="type" wire:model="type" value="sell-points">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Point de Ventes</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="type" wire:model="type" value="detached-pieces-store">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Pieces Détaches</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <input type="radio" name="type" wire:model="type" value="general-mechanic">
                                        <span class="vs-radio">
                                            <span class="vs-radio--border"></span>
                                            <span class="vs-radio--circle"></span>
                                        </span>
                                        <span class="ml-50">Mechnique Generales</span>
                                    </span>
                                </li>

                            </ul>
                        </div>
                        <!-- Categories Ends -->
                        <hr>
                        <!-- Brands -->
                        <div class="brands">
                            <div class="brand-title mt-1 pb-1">
                                <h6 class="filter-title mb-0">Brands</h6>
                            </div>
                            <div class="brand-list" id="brands">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="website" id="website" wire:model="website"
                                                value="false">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Website</span>
                                        </span>
                                        <span>{{$withwebsite}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="rating" id="rating" wire:model="rating"
                                                value="10">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">
                                                Rating
                                            </span>
                                        </span>
                                        <span>{{$withrating}}</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" wire:model="phone" name="phone" id="phone"
                                                value="15">
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                    <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">
                                                Phone
                                            </span>
                                        </span>
                                        <span>{{$withphone}}</span>
                                    </li>


                                    <!--li class="d-flex justify-content-between align-items-center py-25">
                                            <span class="vs-checkbox-con vs-checkbox-primary">
                                                <input type="checkbox" name="ouvert" id="ouvert" wire:model="ouvert"
                                                    value="Ouvert 24h/24">
                                                <span class="vs-checkbox">
                                                    <span class="vs-checkbox--check">
                                                        <i class="vs-icon feather icon-check"></i>
                                                    </span>
                                                </span>
                                                <span class="">Ouvert</span>
    
                                            </span>
                                            <span>1112</span>
                                        </li-->

                                </ul>
                            </div>
                        </div>
                        <!-- /Brand -->
                        <hr>
                        <!-- Rating section starts -->
                        <div id="ratings">
                            <div class="ratings-title mt-1 pb-75">
                                <h6 class="filter-title mb-0">Ratings</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li>& up</li>
                                    @php
                                    if(count($ratings)){
                                    $data = [];
                                    foreach ($ratings as $rating){


                                    $data['label'][] = $rating->rate;
                                    $data['data'][] = $rating->count;
                                    $data['rating_data'] = json_encode($data);

                                    }}
                                    @endphp

                                </ul>
                                <div class="stars-received">@if (isset($data['data'][0]))
                                    ({{$data['data'][0]}})
                                    @endif</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">@if (isset($data['data'][1]))
                                    ({{$data['data'][1]}})
                                    @endif</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">@if (isset($data['data'][2]))
                                    ({{$data['data'][2]}})
                                    @endif</div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <ul class="unstyled-list list-inline ratings-list mb-0 ">
                                    <li class="ratings-list-item"><i class="feather icon-star text-warning"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li class="ratings-list-item"><i class="feather icon-star text-light"></i>
                                    </li>
                                    <li>& up</li>
                                </ul>
                                <div class="stars-received">@if (isset($data['data'][3]))
                                    ({{$data['data'][3]}})
                                    @endif</div>
                            </div>
                        </div>
                        <!-- Rating section Ends -->
                        <hr>
                        <!-- Clear Filters Starts -->
                        <div id="clear-filters">
                            <button class="btn btn-block btn-primary" wire:click="clearFilters()">SUPPRIMER TOUT
                                LES FILTRES</button>
                        </div>
                        <!-- Clear Filters Ends -->

                    </div>
                </div>
            </div>
            <!-- Ecommerce Sidebar Ends -->

        </div>
    </div>


</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@push('scripts')
<script>
    $(document).ready(function () {
     $('#filter').on('change', function (e) {
                        var data = $('#filter').select2("val");
                        @this.set('filter', data);
                        
                    });
                    $('#filter').select2({
                        dropdownAutoWidth: true,
                width: '100%',
                selectOnClose: true
            });});
    
</script>
<script>
    function addRow(ele) 
    {
        if($(ele).children().hasClass("fa-heart-o")){
        var id= $(ele).data('agency_id');
        var type= $(ele).data('type');
        console.log(id);  
        console.log(type);  
        @this.set('likeed',true);
        @this.set('agencyLikedId',id);
        @this.set('agencyLikedType',type);
    }
        else{
            var id= $(ele).data('agency_id');
        var type= $(ele).data('type');
            console.log(false);
            console.log(id);  
        console.log(type);
        @this.set('likeed',false );
        @this.set('agencyLikedId',id);
        @this.set('agencyLikedType',type);
        }
    }
</script>
@endpush
