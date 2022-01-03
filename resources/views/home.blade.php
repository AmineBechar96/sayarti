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
    @include('layouts.head')


</head>


<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns">
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

                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts" style="background:url('../../../app-assets/images/cars2.jpg');background-repeat: no-repeat;
                    background-size: cover;">
                    <div class="row match-height" style="padding:10px;">

                        <div class="col-md-4 col-sm-10">
                            <div class="card">
                                <div class="card-header text-center">

                                    <h4 class="text-center">
                                        Rechercher
                                        Prix de Votre voiture</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        @if ($errors->any())

                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger mt-1 alert-dismissible alert-validation-msg"
                                            role="alert">
                                            <i class="feather icon-info mr-1 align-middle"></i>
                                            <strong>{{$error}}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @endforeach


                                        @endif
                                        <form class="form form-vertical" method="post"
                                            action="{{ route('home.store') }}">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row row-sm mg-b-20">
                                                                <div class="col">
                                                                    <label for="first-name-icon">Marque</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="brands">
                                                                        <option value="" disabled selected>Marque
                                                                        </option>
                                                                        @foreach ($marques as $marque)
                                                                        <option value="{{ $marque->model }}">
                                                                            {{ $marque->model }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="first-name-icon">Année</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="matricule">
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                        <option value="2019">2019</option>
                                                                        <option value="2018">2018</option>
                                                                        <option value="2017">2017</option>
                                                                        <option value="2016">2016</option>

                                                                        <option value="2015">2015</option>
                                                                        <option value="2014">2014</option>
                                                                        <option value="2013">2013</option>
                                                                        <option value="2012">2012</option>
                                                                        <option value="2011">2011</option>
                                                                        <option value="2010">2010</option>
                                                                        <option value="2009">2009</option>

                                                                        <option value="2008">2008</option>
                                                                        <option value="2007">2007</option>
                                                                        <option value="2006">2006</option>
                                                                        <option value="2005">2005</option>


                                                                    
                                                                        <option value="2004">2004</option>
                                                                        <option value="2003">2003</option>
                                                                        <option value="2002">2002</option>
                                                                        <option value="2001">2001</option>
                                                                        <option value="2000">2000</option>
                                                                        <option value="1999">1999</option>

                                                                        <option value="1998">1998</option>
                                                                        <option value="1997">1997</option>
                                                                        <option value="1996">1996</option>
                                                                        <option value="1995">1995</option>
                                                                        <option value="1994">1994</option>
                                                                        <option value="1993">1993</option>
                                                                        <option value="1992">1992</option>
                                                                        <option value="1991">1991</option>
                                                                        <option value="1990">1990</option>
                                                                        
                                                                    </select>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row row-sm mg-b-20">
                                                                <div class="col">
                                                                    <label for=" first-name-icon">Modéle</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="model">
                                                                        <option value="" disabled selected>Modèle
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <label for=" first-name-icon">Serie</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="serie">
                                                                        <option value="" disabled selected>Serie
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <!--div class="col">
                                                                    <label for=" first-name-icon">Type</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="type">
                                                                        <option value="" disabled selected>Type
                                                                        </option>
                                                                    </select>
                                                                </div-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row row-sm mg-b-20">

                                                                <div class="col">
                                                                    <label for="first-name-icon">Energie</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="energie">
                                                                        <option value="Essence">Essence</option>
                                                                        <option value="Diezel">Diesel</option>
                                                                        <option value="Gpl">GPL</option>
                                                                    </select>


                                                                </div>
                                                                <div class="col">
                                                                    <label for="first-name-icon">Transmissition</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="trans">
                                                                        <option value="Manuelle">Manuelle</option>
                                                                        <option value="Automatique">Automatique</option>
                                                                        <option value="semi">Semi</option>

                                                                    </select>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row row-sm mg-b-20">
                                                                <div class="col">
                                                                    <label for=" first-name-icon">Kilomitrage</label>
                                                                    <input type="text" id="first-name-vertical"
                                                                        class="form-control" name="kilomitrage"
                                                                        placeholder="ex: 150 mille " maxlength="3">
                                                                </div>
                                                                <div class="col">
                                                                    <label for="first-name-icon">Location</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="location">
                                                                        <option value="Oran">Oran</option>
                                                                        <option value="Alger">Alger</option>
                                                                        <option value="Chlef">Chlef</option>
                                                                        <option value="Mascara">Mascara</option>
                                                                        <option value="Bejaia">Bejaia</option>
                                                                        <option value="Relizane">Relizane</option>
                                                                        <option value="SidiBelAbbes">SidiBelAbbes
                                                                        </option>
                                                                        <option value="Naama">Naama</option>
                                                                        <option value="SoukAhras">SoukAhras</option>
                                                                        <option value="Ouargla">Ouargla</option>
                                                                        <option value="Constantine">Constantine</option>
                                                                        <option value="AinDefla">AinDefla</option>
                                                                        <option value="Tipaza">Tipaza</option>
                                                                        <option value="Medea">Medea</option>
                                                                        <option value="Adrar">Adrar</option>
                                                                        <option value="Batna">Batna</option>
                                                                        <option value="Mostaganem">Mostaganem</option>
                                                                        <option value="Blida">Blida</option>
                                                                        <option value="Setif">Setif</option>
                                                                        <option value="Skikda">Skikda</option>
                                                                        <option value="Ghardaia">Ghardaia</option>
                                                                        <option value="Boumerdes">Boumerdes</option>
                                                                        <option value="OumElBouaghi">OumElBouaghi
                                                                        </option>
                                                                        <option value="Tebessa">Tebessa</option>
                                                                        <option value="Bouira">Bouira</option>
                                                                        <option value="Biskra">Biskra</option>
                                                                        <option value="TiziOuzou">TiziOuzou</option>
                                                                        <option value="Djelfa">Djelfa</option>
                                                                        <option value="BordjBouArreridj">
                                                                            BordjBouArreridj</option>
                                                                        <option value="ElOued">ElOued</option>
                                                                        <option value="Guelma">Guelma</option>
                                                                        <option value="Khenchela">Khenchela</option>
                                                                        <option value="ElBayadh">ElBayadh</option>
                                                                        <option value="Tlemcen">Tlemcen</option>
                                                                        <option value="Jijel">Jijel</option>
                                                                        <option value="Tissemsilt">Tissemsilt</option>
                                                                        <option value="Tiaret">Tiaret</option>
                                                                        <option value="Msila">Msila</option>
                                                                        <option value="Saida">Saida</option>
                                                                        <option value="Laghouat">Laghouat
                                                                        </option>
                                                                        <option value="Bechar">Bechar</option>
                                                                        <option value="ElTaref">ElTaref</option>
                                                                        <option value="Annaba">Annaba</option>
                                                                        <option value="AinTemouchent">AinTemouchent
                                                                        </option>
                                                                        <option value="Illizi">Illizi</option>
                                                                        <option value="Tindouf">Tindouf</option>
                                                                        <option value="Tamanrasset">Tamanrasset</option>
                                                                        <option value="Saida">Saida</option>
                                                                        <option value="Laghouat">Laghouat
                                                                        </option>
                                                                        <option value="Bechar">Bechar</option>
                                                                    </select>
                                                                </div>

                                                                <!--div class="col">
                                                                    <label for="first-name-icon">Puissance</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="ch">
                                                                        <option value="" disabled selected>Puissance
                                                                        </option>

                                                                    </select>


                                                                </div>
                                                                <div class="col">
                                                                    <label for="first-name-icon">Moteur</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="litre">
                                                                        <option value="" disabled selected>moteur
                                                                        </option>

                                                                    </select>


                                                                </div-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn mb-1 btn-primary btn-block">Estimer
                                                        le
                                                        cout</button>
                                                    <a href="advanced"
                                                        class="btn btn-outline-warning mb-1  btn-block">Recherche
                                                        Avanceé</a>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12">

                        </div>
                    </div>
                </section>
                <!-- ======= Why Us Section ======= -->
                <section id="why-uss" class="why-us">
                    <div class="section-title" id="tit">

                        <h2>Evaluez Intelligemment une Voiture</h2>
                        <p>Notre Plateforme vous Permet l'Accés au Plusieurs Tàche Afin de Faciliter <b>l'Achat ou la Vente </b></p>
                        <p>de votre Voiture</p>
                    </div>
                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4" data-aos="fade-up">
                                <div class="box" id="boxx">
                                    <h4 class="text-center">Estimation du Prix</h4>
                                    <span class="text-center"><i class="feather icon-target"></i></span>

                                    <p class="text-center">Estimez le Prix Logique de Votre Voiture, (ou de celle que vous Voulez Acheter). On Utilise un <b>Modèle de l'Intelligence Artificielle</b> pour vous Aider  à Trouver le Prix Idéal de votre Voiture</p>
                                     <a href="{{url('advanced')}}" class="stretched-link"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                                <div class="box" id="boxx">
                                    <h4 class="text-center">Recherche Budget</h4>
                                    <span class="text-center"><i class="feather icon-dollar-sign"></i></span>

                                    <p class="text-center">Trouvez les Meilleurs Voitures Avec leur Prix Logique qui <b>Correspond à votre Budget  </b> .Cette Tàche Utilise un Filtre Optimisé Afin de vous Aider à Trouver votre Voiture de Rève.</p>
                                    <a href="{{url('budget')}}" class="stretched-link"></a>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                <div class="box" id="boxx">
                                    <h4 class="text-center"> Conseille d'Achat</h4>
                                    <span class="text-center"><i class="feather icon-award"></i></span>

                                    <p class="text-center">Vérifier l'Etat d'une Voiture. En Insérant son Prix dans le Marché, un <b>Système Informatique Intelligent </b> Va vous Conseiller Soit d'Acheter ou Laisser cette Voiture Avec Une Explication Détaillé</p>
                                    <a href="{{url('check')}}" class="stretched-link"></a>
                                </div>
                            </div>

                        </div>

                    </div>


                </section><!-- End Why Us Section -->

                <!-- ======= Clients Section ======= -->
                <section id="clients" class="clients">
                    <div class="container" data-aos="zoom-in">

                        <div class="clients-slider swiper-container">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/mercedes.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/audi.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/volswagen.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/renault.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/peugeot.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/porsche.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/honda.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/kia.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/hyundai.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/suzuki.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/seat.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/fiat.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/opel.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/skoda.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/daciat.png"
                                        class="img-fluid" alt=""></div>

                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/mitsubuchi.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/nissan.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/chevrolet.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/fiat.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/mazda.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/toyota.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/ford.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/citroen.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/jeep.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/jaguar.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/volvo.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/rover.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/infiniti.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/lamborgini.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="../../../app-assets/images/brands/cadilac.png"
                                        class="img-fluid" alt=""></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </section><!-- End Clients Section -->


                <!-- ======= Features Section ======= -->
                <section id="features" class="features">
                    <div class="container">

                        <ul class="nav nav-tabs row d-flex">
                            <li class="nav-item col-3" data-aos="zoom-in">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <i class="ri-gps-line"></i>
                                    <h4 class="d-none d-lg-block">Service</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <i class="ri-store-line"></i>
                                    <h4 class="d-none d-lg-block">Actualité</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <i class="ri-body-scan-line"></i>
                                    <h4 class="d-none d-lg-block">Marché</h4>
                                </a>
                            </li>
                            <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                                    <i class="ri-sun-line"></i>
                                    <h4 class="d-none d-lg-block">Statistique</h4>
                                </a>
                            </li>
                            
                        </ul>

                        <div class="tab-content" data-aos="fade-up">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                        <h3>Tout les Meilleurs Services et Les Magasins de Vente des accesoires de Voiture .
                                        </h3>
                                        <p class="font-italic">
                                            Vous Trouverez Les Meilleurs Mécaniciens et Magasin de Vente des Piéces Bien Organisés avec Certain Avantages :
                                        </p>
                                        <ul>
                                            <li><i class="ri-check-double-line"></i> Filtrer la Recherche Selon la distance et l'Evaluation Des Clients.</li>
                                            <li><i class="ri-check-double-line"></i> Moteur de Recherche Optimisé Afin d'Améliorer l'Efficacité de Votre Recherche.</li>
                                            <li><i class="ri-check-double-line"></i> Possibilité D'Evaluation et Enregistrement des Services et Magasins.</li>
                                        </ul>
                                        <p>
                                            Dans cette Plateforme on vous Recommande tout les Meilleurs Services automobiles, Afin de Facilité Gagner le Temps de Recherche et Gain de Confiance Lors de L'Utilisation des ces Services.
                                        </p>
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                                        <img src="../../../app-assets/images/features/feat4.png" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                        <h3>L'Actualité des Automobiles de La Presse Algérienne
                                        </h3>
                                        <p>
                                           Vous Trouverez Les Dernières Actualité et News National Concernant le Domaine de Transport et Automobile :
                                        </p>
                                    
                                        <ul>
                                            <li><i class="ri-check-double-line"></i> Vous Trouvez Tout Les Informations de Toutes Les Source Dans Un Lieu en Temps Réel (24h/24h,7j/7j)</li>
                                            <li><i class="ri-check-double-line"></i> Accéder aux Dernière Actualité de Voiture en Algérie (Accident de Voiture,Etat du Marché,etc...)</li>
                                            <li><i class="ri-check-double-line"></i> Moteur de Rechrerche Optimisé Afin de Trouvez les Articles de votre Domaine de Recherche .
                                            </li>
                                            <li><i class="ri-check-double-line"></i> Utilisation d'un Modèle de <b>l'Intelligence Artificielle</b> Afin de Détécter La Tendence du Domaine Automobiles à Partir des News.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                                        <img src="../../../app-assets/images/features/feat2.png" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                        <h3>Les Informations En Temps Réel des Marchés de Voiture Neuf et Occasion
                                        </h3>
                                        <p>
                                            Vous Trouverez Tout les Informations Nécessaires des Meilleurs Marchés En Algerie Avec Quelques Avantages:
                                        </p>
                                        <ul>
                                            <li><i class="ri-check-double-line"></i>Vérifier La Disponibilité Accéder Au Marché le Plus Proche de Vous.</li>
                                            <li><i class="ri-check-double-line"></i> Accés Aux Informations Détaillés de ces Marchés (GPS, Heures et Jours d'Ouverture)</li>
                                            <li><i class="ri-check-double-line"></i> Accéder Au Points de Vente des Voitures Neufs les Plus Populaire En Algérie.
                                            </li>
                                        </ul>
                                        
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                                        <img src="../../../app-assets/images/features/feat3.png" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                        <h3>Statistique En Temps Réel De Meilleur Voiture et du Marché en Algerie</h3>
                                        <p>
                                            Nous Avons Collecter des Données à Partir des Grands Site Algérien De Vente de Voiture. Voici Quelques Statistiques de : 
                                        </p>
                                        
                                        <ul>
                                            <li><i class="ri-check-double-line"></i> Meilleur Modéles et Marques de Voiture Vendus En Algérie.</li>
                                            <li><i class="ri-check-double-line"></i> Meilleur Caractéristiques de Voiture Vendu.</li>
                                            <li><i class="ri-check-double-line"></i> Etat du Marché de Voiture En Temps Réel.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                                        <img src="../../../app-assets/images/features/feat1.png" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section><!-- End Features Section -->


                <!-- ======= Cta Section ======= -->
                <section id="cta" class="cta">
                    <div class="container">

                        <div class="row" data-aos="zoom-out">
                            <div class="col-lg-9 text-center text-lg-start">
                                <h3>Contactez Nous</h3>
                                <p>Pour Plus de Détailles et des Information Concernant Nos Service, Ou Vous Voulez Faire un Partenariat de Marketing Avec Nous. Veuillez Laisser Votre Email et Remplir le Formulaire Suivant.</p>
                            </div>
                            <div class="col-lg-3 cta-btn-container text-center">
                                <a class="cta-btn align-middle" href="#">Contact</a>
                            </div>
                        </div>

                    </div>
                </section><!-- End Cta Section -->


            </div>

            <!-- // Basic Vertical form layout section end -->
        </div>
    </div>
    </div>
    <!-- END: Content-->


    @include('layouts.footer')
    <div id="preloader"></div>
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('layouts.footer-scripts')


    <script>
        /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }
   /**
   * Easy on scroll event listener 
   */
   const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }
        /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
    </script>
    <script>
        $(document).ready(function() {
                $('select[name="brands"]').on('change', function() {
                    var BrandId = $(this).val();
                    if (BrandId) {
                        $.ajax({
                            url: "{{ URL::to('model') }}/" + BrandId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="model"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="model"]').append('<option value="' +
                                        key + '">' + key + '</option>');
                                });
                            },
                        });
                    } else {
                        console.log('AJAX load did not work');
                    }
                });
            });
    </script>
    <script>
        $(document).ready(function() {
                $('select[name="model"]').on('change', function() {
                    var ModelId = $(this).val();
                    if (ModelId) {
                        $.ajax({
                            url: "{{ URL::to('serie') }}/" + ModelId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="serie"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="serie"]').append('<option value="' +
                                        key + '">' + key + '</option>');
                                });
                            },
                        });
                        
                        $.ajax({
                            url: "{{ URL::to('type') }}/" + ModelId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="type"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="type"]').append('<option value="' +
                                        key + '">' + key + '</option>');
                                });
                            },
                        });
                        $.ajax({
                            url: "{{ URL::to('engine') }}/" + ModelId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="litre"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="litre"]').append('<option value="' +
                                        value + '">' + value + '</option>');
                                });
                            },
                        });
                        $.ajax({
                            url: "{{ URL::to('power') }}/" + ModelId,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="ch"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="ch"]').append('<option value="' +
                                        value + '">' + value + '</option>');
                                });
                            },
                        });
                    } else {
                        console.log('AJAX load did not work');
                    }
                });
            });
    </script>
    <script>
        new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });


    </script>
</body>
<!-- END: Body-->

</html>