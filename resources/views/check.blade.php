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
                <!-- Form wizard with number tabs section start -->
                <section id="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> <i class="ri-information-line"></i>Veuillez Choisir Votre Vehicule Désiré</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Suivez les Etapes Suivantes en Remplissant les <code>Informations</code>
                                            Requises.
                                        </p>
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
                                        <form action="{{ route('check.store') }}" method="post"
                                            class="number-tab-steps wizard-circle" id="myForm">
                                            @csrf
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon feather ri-car-fill"></i>Général</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Marque</label>
                                                            <select class="form-control" id="basicSelect" name="brands">
                                                                <option value="" disabled selected>Marque
                                                                </option>
                                                                @foreach ($marques as $marque)
                                                                <option value="{{ $marque->model }}">
                                                                    {{ $marque->model }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Modèle</label>
                                                            <select class="form-control" id="basicSelect" name="model">
                                                                <option value="" disabled selected>Modèle
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="emailAddress1">Serie</label>
                                                            <select class="form-control" id="basicSelect" name="serie">
                                                                <option value="" disabled selected>Serie
                                                                </option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="location1">Année</label>
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
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon feather ri-settings-2-fill"></i>Détails</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Location</label>
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
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Energie</label>
                                                            <select class="form-control" id="basicSelect"
                                                                name="energie">
                                                                <option value="Essence">Essence</option>
                                                                <option value="Diezel">Diesel</option>
                                                                <option value="Gpl">GPL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="firstName1">Transmission</label>
                                                            <select class="form-control" id="basicSelect" name="trans">
                                                                <option value="Manuelle">Manuelle</option>
                                                                <option value="Automatique">Automatique</option>
                                                                <option value="semi">Semi</option>

                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="lastName1">Kilomitrage</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="kilomitrage"
                                                                placeholder="Eg 150 mille" maxlength="3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon feather ri-coins-fill"></i>Prix</h6>
                                            <fieldset>
                                                <div class="row pt-3">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <p for="eventName1" class="text-center">Prix</p>
                                                            <input type="text" class="form-control" id="eventName1"
                                                                placeholder="Entrer Le Prix Eg :250 Millions Centime" maxlength="3" name="prix">
                                                        </div>

                                                    </div>

                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with number tabs section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    @include('layouts.footer')
    @include('layouts.footer-scripts')


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
</body>
<!-- END: Body-->

</html>