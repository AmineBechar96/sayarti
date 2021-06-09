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
                <section id="basic-vertical-layouts">
                    <div class="row match-height">

                        <div class="col-md-4 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical Form with Icons</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" method="post"
                                            action="{{ route('home.store') }}">
                                            @csrf
                                            <div class=" form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <div class="row row-sm mg-b-20">
                                                                <div class="col-lg-6">
                                                                    <label for="first-name-icon">Modèle</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="model">
                                                                        <option value="Peugeot">Peugeot</option>
                                                                        <option>Renault</option>
                                                                        <option>Audi</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <label for="first-name-icon">Matricule</label>
                                                                    <select class="form-control" id="basicSelect">
                                                                        <option>2021</option>
                                                                        <option>2020</option>
                                                                        <option>2019</option>
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
                                                                    <label for=" first-name-icon">Marque</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="marque">
                                                                        <option value="306">306</option>
                                                                        <option>304</option>
                                                                        <option>208</option>
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
                                                                <div class="col-lg-4">
                                                                    <label for="first-name-icon">Couleur</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="couleur">
                                                                        <option value="noir">Noir</option>
                                                                        <option value="blanc">Blanc</option>
                                                                        <option value="bleu">Bleu</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="first-name-icon">Energie</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="energie">
                                                                        <option value="essence">Essence</option>
                                                                        <option value="diezel">Diezel</option>
                                                                        <option value="gpl">Gpl</option>
                                                                    </select>


                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label for="first-name-icon">Transmissition</label>
                                                                    <select class="form-control" id="basicSelect"
                                                                        name="trans">
                                                                        <option value="manuelle">Manuelle</option>
                                                                        <option value="automatique">Automatique</option>
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
                                                                        placeholder="kilomitrage">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 text-center">
                                                    <button type="submit" class="btn mb-1 btn-primary btn-block">Estimer
                                                        le
                                                        cout</button>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <img src="../../../app-assets/images/svg/car.svg" alt="" srcset="" style="
                                width:99%">
                        </div>
                    </div>
                </section>
                <!-- Card Captions and Overlay section start -->
                <section id="card-caps">
                    <div class="row my-3">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="../../../app-assets/images/slider/05.jpg"
                                        alt="Card image cap" />
                                    <div class="card-body">
                                        <h4 class="card-title">Top Image Cap</h4>
                                        <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake
                                            macaroon donut
                                            pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels
                                            brownie chocolate bar
                                            chocolate tart dragée.</p>
                                        <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar
                                            muffin.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h4 class="card-title">Bottom Image Cap</h4>
                                        <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake
                                            macaroon donut
                                            pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels
                                            brownie chocolate bar
                                            chocolate tart dragée.</p>
                                        <p class="card-text">Cupcake fruitcake macaroon donut pastry gummies tiramisu
                                            chocolate bar
                                            muffin.</p>
                                        <p class="card-text mt-1"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                    <img class="card-img-bottom img-fluid"
                                        src="../../../app-assets/images/slider/06.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="../../../app-assets/images/slider/04.jpg"
                                        alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-danger overlay-lighten-2">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly
                                            marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text"><small class="text-white">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="../../../app-assets/images/slider/04.jpg"
                                        alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-success">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly
                                            marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text text-white"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="../../../app-assets/images/slider/04.jpg"
                                        alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-warning">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly
                                            marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text"><small class="text-white">Last updated 3 mins ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white border-0 box-shadow-0">
                                <div class="card-content">
                                    <img class="card-img img-fluid" src="../../../app-assets/images/slider/04.jpg"
                                        alt="Card image">
                                    <div class="card-img-overlay overflow-hidden overlay-info">
                                        <h4 class="card-title text-white">Card Image Overlay</h4>
                                        <p class="card-text text-white">Sugar plum tiramisu sweet. Cake jelly
                                            marshmallow cotton candy chupa chups.
                                        </p>
                                        <p class="card-text text-white"><small class="text-muted">Last updated 3 mins
                                                ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Card Captions and Overlay section end -->

                <!-- Knowledge base -->
                <section id="knowledge-base-content">
                    <div class="row search-content-info">
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-1.png" class="mx-auto mb-2"
                                            width="180" alt="knowledge-base-image">
                                        <h4>SALES AUTOMATION</h4>
                                        <small class="text-dark">Muffin lemon drops chocolate carrot cake chocolate bar
                                            sweet roll.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-2.png" class="mx-auto mb-2"
                                            width="180" alt="knowledge-base-image">
                                        <h4>MARKETING AUTOMATION</h4>
                                        <small class="text-dark">Gingerbread sesame snaps wafer soufflé. Macaroon
                                            brownie ice cream</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-3.png" class="mx-auto mb-2"
                                            width="180" alt="knowledge-base-image">
                                        <h4>MARKETING BI</h4>
                                        <small class="text-dark">cotton candy caramels danish chocolate cake pie candy.
                                            Lemon drops tart.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-4.png" class="mx-auto mb-2"
                                            width="180" alt="knowledge-base-image">
                                        <h4>PERSONALIZATION</h4>
                                        <small class="text-dark">Pudding oat cake carrot cake lemon drops gummies
                                            marshmallow.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-5.png" class="mx-auto mb-2"
                                            width="180" alt="knowledge-base-image">
                                        <h4>EMAIL MARKETING</h4>
                                        <small class="text-dark">Gummi bears pudding icing sweet caramels
                                            chocolate.Muffin croissant</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-12 search-content">
                            <div class="card">
                                <div class="card-body text-center">
                                    <a href="page-kb-category.html">
                                        <img src="../../../app-assets/images/pages/graphic-6.png" class="mx-auto mb-2"
                                            width="180" alt="knowledge-base-image">
                                        <h4>DEMAND GENERATION</h4>
                                        <small class="text-dark">Dragée jelly beans candy canes pudding cake wafer.
                                            Muffin croissant.</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Knowledge base ends -->
            </div>

            <!-- // Basic Vertical form layout section end -->
        </div>
    </div>
    </div>
    <!-- END: Content-->


    @include('layouts.footer')
    @include('layouts.footer-scripts')
</body>
<!-- END: Body-->

</html>