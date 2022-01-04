<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Product Details - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/swiper.css">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-ecommerce-details.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-email.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">

    @livewireStyles
    <!-- END: Custom CSS-->
    <style>
        /* rating */
        .rating-css div {
            color: #ffe400;
            font-size: 25px;
            font-family: sans-serif;
            font-weight: 800;
            text-align: center;
            text-transform: uppercase;
            padding: 20px 0;
        }

        .rating-css input {
            display: none;

        }

        .rating-css input+label {
            font-size: 50px;
            text-shadow: 1px 1px 0 #8f8420;
            cursor: pointer;
            color: #f2df0a !important;
        }

        .rating-css input:checked+label~label {
            color: #bdbcb5 !important;
        }

        .rating-css label:active {
            transform: scale(0.8);
            transition: 0.3s ease;
        }



        @font-face {
            font-family: 'Cairo', sans-serif;

            unicode-range: 0600–06FF;
        }
    </style>
</head>
<!-- END: Head-->
</head>

<body class="horizontal-layout horizontal-menu 2-columns ecommerce-application navbar-floating footer-static  "
    data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
    @include('layouts.header')
    @include('layouts.horizontal-menu')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- app ecommerce details start -->

                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div
                                    class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        @if ($agency->type=="rent-agency")
                                        <img src="../../../app-assets/images/pages/location/44.jpg" class="img-fluid"
                                            alt="product image">
                                        @elseif($agency->type=="recovery-truck")
                                        <img class="img-fluid" src="../../../app-assets/images/pages/depannage/3.jpg"
                                            alt="img-placeholder">
                                        @elseif($agency->type=="detached-pieces-store")
                                        <img class="img-fluid"
                                            src="../../../app-assets/images/pages/depannage/piece.jpg"
                                            alt="img-placeholder">

                                        @elseif($agency->type=="sell-points")
                                        <img class="img-fluid"
                                            src="../../../app-assets/images/brands/{{$agency->Maison}}.png"
                                            alt="img-placeholder">

                                        @elseif($agency->type=="goods-transport")
                                        <img class="img-fluid"
                                            src="../../../app-assets/images/pages/eCommerce/{{$agency->vehicule_shape}}.png"
                                            alt="img-placeholder">

                                        @else
                                        <img class="img-fluid"
                                            src="../../../app-assets/images/pages/location/mechanic2.jpg"
                                            alt="img-placeholder">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5 class="titlearabic">{{$agency->title}}
                                    </h5>
                                    <p class="text-muted">Par Sayarti
                                    </p>
                                    <div class="ecommerce-details-price d-flex flex-wrap">



                                        @for ($i = 0; $i < $agency->rating; $i++)
                                            <i class="feather icon-star text-warning"></i>
                                            @endfor

                                            </span>
                                            <span class="ml-50 text-dark font-medium-1">{{round($agency->reviews)}}
                                                reviews</span>

                                    </div>
                                    <hr>
                                    <p>Shoot professional photos and videos with this Canon EOS 5D Mk V 24-70mm lens
                                        kit. A huge 30.4-megapixel
                                        full-frame sensor delivers outstanding image clarity, and 4K video is possible
                                        from this DSLR for powerful
                                        films. Ultra-precise autofocus and huge ISO ranges give you the images you want
                                        from this Canon EOS 5D Mk V
                                        24-70mm lens kit.</p>

                                    <p class="font-weight-bold"> <i
                                            class="feather icon-map-pin mr-50 font-medium-2"></i>{{$agency->address}}
                                    </p>

                                    <hr>
                                    @if ($agency->type=="rent-agency")
                                    <p>Disponibilité - <span class="text-success">{{$agency->open_state}}</span></p>
                                    @endif


                                    <hr>
                                    @if (! is_null($agency->website))
                                    <p>Website - <span class="text-primary"><a
                                                href="{{$agency->website}}">{{$agency->website}}</a></span></p>

                                    <hr>
                                    @endif

                                    <p>Trouver dans le Map - <span class="text-success"><a href=""
                                                class="cursor-pointer" data-toggle="modal" data-target="#large"
                                                data-nom="{{$agency->title}}" data-lat="{{$agency->latitude}}"
                                                data-long="{{$agency->longitude}}"><i
                                                    class="feather icon-map mr-50 font-medium-2"></i></a></span></p>

                                    <div class="d-flex flex-column flex-sm-row">
                                        <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0" data-toggle="modal"
                                            data-target="#small"><i
                                                class="feather icon-phone-call mr-25"></i>APPELER</button>


                                    </div>
                                    <hr>
                                    <button type="button"
                                        class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
                                            class="feather icon-facebook"></i></button>
                                    <button type="button"
                                        class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i
                                            class="feather icon-twitter"></i></button>
                                    <button type="button"
                                        class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i
                                            class="feather icon-youtube"></i></button>
                                    <button type="button"
                                        class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
                                            class="feather icon-instagram"></i></button>
                                </div>
                            </div>
                        </div>
                        @if ($agency->type=="rent-agency")
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/store_services.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/store_appointments.svg"
                                            alt="" class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/store_offer_1.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($agency->type=="goods-transport")
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/eCommerce/svgs/ask.png" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/eCommerce/svgs/ship.png" alt=""
                                            alt="" class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/eCommerce/svgs/delever-order.png"
                                            alt="" class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($agency->type=="recovery-truck")
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/depannage/pane.svg" alt=""
                                            class="img-fluid" width="250" height="250">
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/depannage/search.svg" alt=""
                                            class="img-fluid" width="200" height="150">
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/depannage/recover.svg" alt=""
                                            class="img-fluid" width="300" height="350">
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($agency->type=="detached-pieces-store")
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/auto1.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/auto2.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/auto3.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($agency->type=="sell-points")
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/brands/sell/check.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/brands/sell/pick.png" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/brands/sell/buy.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="item-features py-5">
                            <div class="row text-center pt-2">
                                <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/auto1.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">100% Original</h5>
                                        <p>Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/auto2.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">10 Day Replacement</h5>
                                        <p>Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <img src="../../../app-assets/images/pages/location/auto3.svg" alt=""
                                            class="img-fluid">
                                        <h5 class="mt-2 font-weight-bold">1 Year Warranty</h5>
                                        <p>Cotton candy gingerbread cake I love sugar plum I love sweet croissant.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif



                        <div class="card-body">
                            <div class="mt-4 mb-2 text-center">
                                <h2>SERVICES à PROXIMITÉ</h2>
                                <p>Les gens utilisent également ces services
                                </p>
                            </div>
                            <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                                <div class="swiper-wrapper">
                                    @foreach ($otheragencies as $agencyy)
                                    <div class="swiper-slide rounded swiper-shadow">
                                        <div class="item-heading">
                                            <p class="text-truncate mb-0">
                                                {{$agencyy->title}}
                                            </p>
                                            <p>
                                                <small>Par</small>
                                                <small>Sayarti</small>
                                            </p>
                                        </div>
                                        <div class="img-container w-50 mx-auto my-2 py-75">
                                            <a href="{{url($agencyy->type.'/agency-details/'.$agencyy->ID)}}">

                                                @if ($agency->type=="rent-agency")
                                                <img src="../../../app-assets/images/pages/location/ll.png"
                                                    class="img-fluid" alt="product image">
                                                @elseif($agency->type=="recovery-truck")
                                                <img class="img-fluid"
                                                    src="../../../app-assets/images/pages/depannage/2.png"
                                                    alt="img-placeholder">
                                                @elseif($agency->type=="sell-points")
                                                <img class="img-fluid"
                                                    src="../../../app-assets/images/brands/{{$agencyy->Maison}}.png"
                                                    alt="img-placeholder">
                                                @elseif($agency->type=="goods-transport")
                                                <img class="img-fluid"
                                                    src="../../../app-assets/images/pages/eCommerce/{{$agencyy->vehicule_shape}}.png"
                                                    alt="img-placeholder">
                                                @elseif($agency->type=="detached-pieces-store")
                                                <img class="img-fluid"
                                                    src="../../../app-assets/images/pages/depannage/pieces.png"
                                                    alt="img-placeholder">

                                                @else
                                                <img class="img-fluid"
                                                    src="../../../app-assets/images/pages/location/lll.png"
                                                    alt="img-placeholder">
                                                @endif

                                            </a>
                                        </div>
                                        <div class="item-meta">
                                            <div class="product-rating">
                                                @for ($i = 0; $i < $agencyy->rating; $i++)
                                                    <i class="feather icon-star text-warning"></i>
                                                    @endfor
                                                    @if ($agencyy->rating<1) <i
                                                        class="feather icon-star text-secondary"></i>
                                                        @endif

                                            </div>
                                            <p class="text-primary mb-0">$19.98</p>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>

                            </div>
                        </div>
                    </div>

                </section>

                <!-- app ecommerce details end -->
                <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel17">Fiche technique de la voiture
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-12">
                                    <!-- gmaps Examples section start -->
                                    <section id="gmaps-basic-maps" aria-labelledby="account-pill-general"
                                        aria-expanded="true">
                                        <!-- Info Window -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">

                                                    <div class="card-content">
                                                        <div class="card-body">

                                                            <div id="info-windoww" class="height-400">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </section>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- app ecommerce details end -->
                <div class="modal fade text-left" id="large2" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel17" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel110">Donner Avis a <span
                                        style="color:green">{{$agency->title}}</span></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="bg-transparent mb-0 px-2">

                                    <div class="card-title">
                                        <h4 class="mb-0">Register</h4>
                                    </div>

                                    <p class="px-2">Vous Devez s'inscrire pour faire cette
                                        action.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="form-label-group">
                                                    <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                                    <input id="name" type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" placeholder="Name" value="{{ old('name') }}"
                                                        required autocomplete="name" autofocus>
                                                    <label for="name">Name</label>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email" required> -->
                                                    <input id="email" type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        name="email" placeholder="Email" value="{{ old('email') }}"
                                                        required autocomplete="email">
                                                    <label for="email">Email</label>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" placeholder="Password" required
                                                        autocomplete="new-password">
                                                    <label for="password">Password</label>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-label-group">
                                                    <!-- <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required> -->
                                                    <input id="password-confirm" type="password" class="form-control"
                                                        name="password_confirmation" placeholder="Confirm Password"
                                                        required autocomplete="new-password">
                                                    <label for="password-confirm">Confirm
                                                        Password</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" checked>
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""> J'accepte les
                                                                    termes & les
                                                                    conditions.</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <a href="auth-login.html"
                                                    class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                <button type="submit"
                                                    class="btn btn-primary float-right btn-inline mb-50">Register</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal-danger mr-1 mb-1 d-inline-block">


            <!-- Modal -->
            <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="border-bottom-left-radius: 0;border-bottom-right-radius: 0">
                            <h5 class="modal-title" id="myModalLabel110">Donner Avis a <span
                                    style="color:green">{{$agency->title}}</span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('add-rating.store')}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="rating-css">
                                    <div class="star-icon">

                                        <input type="hidden" name="service_type" value="{{$agency->type}}">
                                        <input type="hidden" name="service_rated_id" value="{{$agency->ID}}">
                                        <input type="radio" value="1" name="service_rating" checked id="rating1">
                                        <label for="rating1" class="feather icon-star"></label>
                                        <input type="radio" value="2" name="service_rating" id="rating2">
                                        <label for="rating2" class="feather icon-star"></label>
                                        <input type="radio" value="3" name="service_rating" id="rating3">
                                        <label for="rating3" class="feather icon-star"></label>
                                        <input type="radio" value="4" name="service_rating" id="rating4">
                                        <label for="rating4" class="feather icon-star"></label>
                                        <input type="radio" value="5" name="service_rating" id="rating5">
                                        <label for="rating5" class="feather icon-star"></label>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <fieldset class="form-label-group">
                                        <textarea class="form-control" name="review" id="label-textarea" rows="7"
                                            style="resize: none;" placeholder="Label in Textarea"></textarea>
                                        <label for="label-textarea">Donner Avis</label>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade text-left" id="danger2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom-left-radius: 0;border-bottom-right-radius: 0">
                        <h5 class="modal-title" id="myModalLabel110">Donner Avis a <span
                                style="color:green">{{$agency->title}}</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="bg-transparent mb-0 px-2">

                            <div class="card-title">
                                <h4 class="mb-0">Login</h4>
                            </div>

                            <p class="px-2">Vous Devez s'inscrire pour faire cette action.</p>
                            <div class="card-content">
                                <div class="card-body pt-1">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <fieldset class="form-label-group form-group position-relative has-icon-left">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                placeholder="E-Mail Address" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus>

                                            <div class="form-control-position">
                                                <i class="feather icon-user"></i>
                                            </div>
                                            <label for="email">E-Mail Address</label>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </fieldset>

                                        <fieldset class="form-label-group position-relative has-icon-left">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" placeholder="Password" required
                                                autocomplete="current-password">

                                            <div class="form-control-position">
                                                <i class="feather icon-lock"></i>
                                            </div>
                                            <label for="password">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </fieldset>
                                        <div class="form-group d-flex justify-content-between align-items-center">
                                            <div class="text-left">
                                                <fieldset class="checkbox">
                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox">
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Remember me</span>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <div class="text-right"><a class="card-link"
                                                    href="{{ route('password.request') }}">
                                                    Mot de Passe Oublié ?
                                                </a></div>
                                            @endif
                                        </div>
                                        <a href="#" data-toggle="modal" data-target="#large2" data-dismiss="modal"
                                            class="btn btn-outline-primary float-left btn-inline">Register</a>
                                        <button type="submit"
                                            class="btn btn-primary float-right btn-inline">Login</button>
                                    </form>
                                </div>
                            </div>
                            <div class="login-footer">
                                <div class="divider">
                                    <div class="divider-text">OR</div>
                                </div>
                                <div class="footer-btn d-inline">
                                    <a href="#" class="btn btn-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="btn btn-twitter white"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="btn btn-google"><span class="fa fa-google"></span></a>
                                    <a href="#" class="btn btn-github"><span class="fa fa-github-alt"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="modal fade text-left" id="small" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel19">Contacter <span style="color:green">
                                {{$agency->title}}</span>
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center mb-1">
                            <p class="btn btn-outline-primary mb-3" id="show" onclick="showNumber()"><i
                                    class="feather icon-phone-call"></i>&nbsp;MONTRER NUMERO
                            </p>
                            <h5 class="mb-3" id="number"></h5>
                        </div>
                        <div class="text-center mt-1">
                            <button class="btn btn-primary"><a href="tel:+{{$agency->phone}}" style="color:white"><i
                                        class="feather icon-phone-call"></i>&nbsp;APPELER</a></button>
                            <p class="mt-1"> Ou Appeler Gratuitement via :</p>
                            <button class="btn btn-success"><a style="color:white"
                                    href="https://api.whatsapp.com/send?phone={{$agency->phone}}"><i
                                        class="fa fa-whatsapp mr-25"></i>&nbsp;APPELER</a></button>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-left" id="verifyemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel19"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">

                    <div class="modal-header bg-danger white">
                        <h5 class="modal-title" id="myModalLabel120"> <i
                                class="feather icon-info mr-1 align-middle"></i>Email non verifier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        {{view('auth.verify-email')}}



                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <!-- END: Content-->
    @include('layouts.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="../../../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBgjNW0WA93qphgZW-joXVR6VC3IiYFjfo"></script>
    <script src="../../../app-assets/vendors/js/charts/gmaps.min.js"></script>
    <script src="../../../app-assets/vendors/js/extensions/swiper.min.js"></script>

    <script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="../../../app-assets/js/scripts/forms/number-input.js"></script>
    <script src="../../../app-assets/js/scripts/charts/gmaps/maps.js"></script>
    <script src="../../../app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/extensions/swiper.js"></script>
    <!-- END: Page JS-->
    <!-- END: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/rent-agency.js"></script>

    @if (session()->has('success'))
    <script>
        Swal.fire({
      position: 'top-end',
      type: 'success',
      title: '{!! session()->get('success') !!}',
      showConfirmButton: false,
      timer: 1500,
      confirmButtonClass: 'btn btn-primary',
      buttonsStyling: false,
    })
    </script>


    @endif
    @livewireScripts
    <script>
        var phone= {!! json_encode("$agency->phone") !!}
        function showNumber(){
            if(document.getElementById("number").innerHTML==""){
        document.getElementById("number").innerHTML="<i class=\"feather icon-phone-call mr-25\" style=\"color:green\"></i>APPELER: "+ phone;
        document.getElementById("show").innerHTML="<i class=\"feather icon-phone-call mr-25\"></i> CACHER NUMERO"
        }
        else{

            document.getElementById("number").innerHTML="";
            document.getElementById("show").innerHTML="<i class=\"feather icon-phone-call mr-25\"></i> MONTRER NUMERO"
        }
    }
    
    </script>

</body>
<!-- END: Body-->

</html>