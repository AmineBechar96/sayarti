<?php header('Access-Control-Allow-Origin: *'); ?>
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
                <!-- Accordion start -->
                <section id="accordion">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
                                <div class="card collapse-icon accordion-icon-rotate ">
                                    <div class="card-header text-center">
                                        <h2>FAQs sur l'entretien de la voiture</h2>
                                        <br><br>
                                        <div> <img src="../../../app-assets/images/car.jpg"
                                                alt="l'entretien de la voiture" srcset="" class="img-fluid"
                                                style="border-radius:5px;align:center"></div>
                                    </div>
                                    <br><br>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <h6>Quiconque qui a d??j?? essay?? la r??paration automobile vous dira qu'en
                                                tant que nouveau propri??taire de voiture, vous aurez des questions et
                                                des renseignements a demand??es, surtout si vous n'avez aucune exp??rience
                                                technique.<br>
                                                C'est pourquoi nous avons d??cid?? de vous pr??senter un
                                                ensemble d'informations en r??ponse aux questions les plus fr??quemment
                                                pos??es par les nouveaux propri??taires de voitures
                                            </h6>
                                            <div class="accordion-default collapse-bordered">
                                                <div class="card collapse-header">
                                                    <div id="heading1" class="card-header collapse-header"
                                                        data-toggle="collapse" role="button" data-target="#accordion1"
                                                        aria-expanded="false" aria-controls="accordion1">
                                                        <span class="lead collapse-title" style="color:#1977cc;">
                                                            <i class="ri-lg ri-question-line"
                                                                style="color:#76b5ee;"></i> Pourquoi le voyant de
                                                            mon
                                                            moteur de contr??le est-il allum?? ?
                                                        </span>
                                                    </div>
                                                    <div id="accordion1" role="tabpanel" data-parent="#accordionWrapa1"
                                                        aria-labelledby="heading1" class="collapse">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <strong>Votre voyant de contr??le moteur s'est allum??, et
                                                                    maintenant ?</strong>
                                                                Ces conseils peuvent vous aider ?? d??terminer si votre
                                                                v??hicule a des probl??mes de moteur majeurs ou simplement
                                                                un bouchon d'essence desserr??.

                                                                <p>Le voyant de contr??le du moteur ou le message ??
                                                                    entretien du moteur bient??t ?? souvent incompris peut
                                                                    signifier plusieurs choses. Il peut s'agir d'un
                                                                    moteur rat??, d'un capteur d'oxyg??ne cass?? ou
                                                                    simplement d'un bouchon d'essence desserr??.</p>
                                                                <p>
                                                                    Lorsque vous voyez le voyant de contr??le du moteur,
                                                                    cela ne signifie pas n??cessairement que vous devez
                                                                    garer la voiture sur le c??t?? de la route et appeler
                                                                    une d??panneuse. Cela signifie que vous devez faire
                                                                    v??rifier la voiture d??s que possible. Si vous
                                                                    ignorez l'avertissement, vous pourriez finir par
                                                                    causer d'autres dommages. Cela pourrait ??galement
                                                                    ??tre un signe que vous obtenez une mauvaise ??conomie
                                                                    de carburant et que vous ??mettez des niveaux ??lev??s
                                                                    de polluants.

                                                                </p>
                                                                <p>
                                                                    Dans tous les cas, si le t??moin de contr??le du
                                                                    moteur est allum?? dans votre voiture, il est temps
                                                                    de prendre un rendez-vous d'entretien. Dans notre
                                                                    centre de service, nous avons des techniciens form??s
                                                                    en usine qui peuvent facilement v??rifier et
                                                                    diagnostiquer ce qui se cache derri??re votre message
                                                                    lumineux de contr??le du moteur, ?? un co??t presque
                                                                    toujours inf??rieur ?? celui d'un garage priv??.

                                                                </p>
                                                                <ul>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>
                                                                        S'il est vrai que des probl??mes extr??mes comme
                                                                        une basse pression d'huile ou une surchauffe du
                                                                        moteur d??clencheront l'allumage de votre voyant
                                                                        de contr??le du moteur, votre tableau de bord
                                                                        dispose d'autres voyants et jauges pour vous
                                                                        avertir de probl??mes graves, et probablement
                                                                        bient??t.

                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Une bonne
                                                                        r??gle de base est de
                                                                        toujours lire votre manuel du propri??taire et de
                                                                        vous renseigner sur les diff??rentes raisons qui
                                                                        d??clencheraient l'allumage du t??moin de contr??le
                                                                        du moteur. Il devrait ??galement vous faire
                                                                        visiter les autres indicateurs de jauge et
                                                                        d'avertissement sur votre tableau de bord.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>
                                                                        Si votre voyant de contr??le du moteur est
                                                                        allum??, la premi??re chose ?? faire est de
                                                                        rechercher un probl??me grave qui n??cessite une
                                                                        attention imm??diate. V??rifiez les jauges et les
                                                                        voyants de votre tableau de bord pour des
                                                                        indications de basse pression d'huile ou de
                                                                        surchauffe. Ces conditions signifient que vous
                                                                        devez vous arr??ter et couper le moteur d??s que
                                                                        vous pouvez trouver un endroit s??r pour le
                                                                        faire. Sur certaines voitures, un ?? v??rifier le
                                                                        moteur ?? jaune signifie enqu??ter sur le
                                                                        probl??me, tandis qu'un ?? v??rifier le moteur ??
                                                                        rouge signifie s'arr??ter maintenant.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>
                                                                        Ensuite, essayez de serrer votre bouchon
                                                                        d'essence. Cela r??sout souvent le probl??me.
                                                                        Gardez ?? l'esprit que cela peut prendre
                                                                        plusieurs voyages avant que la lumi??re ne se
                                                                        r??initialise. Certains v??hicules ont un
                                                                        indicateur s??par?? qui avertit d'un bouchon
                                                                        d'essence desserr?? avant que la condition
                                                                        n'??teigne le voyant ?? v??rifier le moteur ??.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>
                                                                        Reduce your speed and, if possible, the weight
                                                                        you???re carrying. If the???check engine??? light is
                                                                        blinking or you notice any serious performance
                                                                        problems, such as a loss of power, reduce your
                                                                        speed and try to reduce the load on the engine.
                                                                        For example, it would be a good idea to stop
                                                                        towing a trailer. Have the car checked as soon
                                                                        as possible to prevent expensive damage.</li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>
                                                                        M??me si vous ne remarquez pas de probl??me
                                                                        extr??me, vous devez absolument lire le code du
                                                                        moteur de v??rification et r??soudre le probl??me.
                                                                        Si vous souhaitez diagnostiquer vous-m??me le
                                                                        dysfonctionnement, vous pouvez acheter un outil
                                                                        d'analyse dans la plupart des magasins de pi??ces
                                                                        automobiles. Ces outils vous donneront des
                                                                        instructions sur la fa??on de d??chiffrer les
                                                                        codes du moteur. Si vous n'avez pas d??j?? des
                                                                        comp??tences en m??canique pour diagnostiquer et
                                                                        r??soudre le probl??me, c'est une d??cision plus
                                                                        rentable d'aller directement ?? un centre de
                                                                        service.

                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card collapse-header">
                                                    <div id="heading2" class="card-header collapse-header"
                                                        data-toggle="collapse" role="button" data-target="#accordion2"
                                                        aria-expanded="false" aria-controls="accordion2">
                                                        <span class="lead collapse-title" style="color:#1977cc;">
                                                            <i class="ri-lg ri-question-line"
                                                                style="color:#76b5ee;"></i> Comment v??rifier le
                                                            niveau
                                                            d'huile moteur ?
                                                        </span>
                                                    </div>
                                                    <div id="accordion2" role="tabpanel" data-parent="#accordionWrapa1"
                                                        aria-labelledby="heading2" class="collapse"
                                                        aria-expanded="false">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                V??rifier le niveau d'huile de votre voiture est l'une
                                                                des choses les plus vitales que vous puissiez faire pour
                                                                prolonger la dur??e de vie de votre moteur. Non seulement
                                                                c'est important, mais c'est aussi une t??che tr??s rapide
                                                                et simple ?? accomplir.
                                                                <br><br>

                                                                <strong>Suivez les ??tapes ci-dessous pour v??rifier votre
                                                                    niveau d'huile???
                                                                </strong>
                                                                <br><br>
                                                                <ul>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Tout d'abord,
                                                                        assurez-vous que
                                                                        vous ??tes gar?? sur un terrain plat, pour une
                                                                        lecture plus pr??cise.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Ensuite,
                                                                        ouvrez votre capot en
                                                                        toute s??curit?? et trouvez la jauge (qui a
                                                                        g??n??ralement une poign??e de couleur vive,
                                                                        g??n??ralement orange, et porte le mot OIL).
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Retirez la
                                                                        jauge et essuyez-la
                                                                        avec une serviette ou un chiffon, puis
                                                                        replacez-la dans le moteur en vous assurant
                                                                        qu'elle rentre compl??tement.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Maintenant,
                                                                        retirez la jauge
                                                                        et assurez-vous de ne PAS la retourner pour lire
                                                                        car l'huile coulera et vous n'aurez pas une
                                                                        lecture pr??cise. La jauge aura deux marques sur
                                                                        le fond (g??n??ralement des lignes ou des trous
                                                                        dans la jauge), et vous pouvez lire le niveau
                                                                        d'huile en regardant o?? se rencontrent la
                                                                        section huileuse et la section s??che. Si vous
                                                                        trouvez cette marque entre les deux, alors vous
                                                                        ??tes pr??t !
                                                                    </li>


                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card collapse-header">
                                                    <div id="heading3" class="card-header collapse-header"
                                                        data-toggle="collapse" role="button" data-target="#accordion3"
                                                        aria-expanded="false" aria-controls="accordion3">
                                                        <span class="lead collapse-title" style="color:#1977cc;">
                                                            <i class="ri-lg ri-question-line"
                                                                style="color:#76b5ee;"></i> ?? quelle fr??quence
                                                            dois-je
                                                            changer mon huile ?
                                                        </span>
                                                    </div>
                                                    <div id="accordion3" role="tabpanel" data-parent="#accordionWrapa1"
                                                        aria-labelledby="heading3" class="collapse"
                                                        aria-expanded="false">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <p>Changer l'huile de votre v??hicule aux intervalles
                                                                    recommand??s est la meilleure chose ?? faire pour lui
                                                                    assurer une longue dur??e de vie. Aussi simple que
                                                                    cette t??che puisse para??tre, beaucoup de gens ne
                                                                    savent pas exactement ?? quelle fr??quence l'huile de
                                                                    leur voiture doit ??tre chang??e
                                                                </p>
                                                                <br>
                                                                <ul>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Dans le
                                                                        pass??, il ??tait
                                                                        courant que les vidanges d'huile aient lieu tous
                                                                        les 5 000 kilom??tres ou tous les trois mois,
                                                                        selon la premi??re ??ventualit??. Or, cette norme
                                                                        ne s'applique pas toujours. La qualit?? de
                                                                        l'huile s'est am??lior??e au fil des ans et
                                                                        l'industrie automobile a commenc?? ?? prendre en
                                                                        compte les habitudes de d??placement et de
                                                                        conduite des conducteurs lors de ses
                                                                        recommandations. En tant que tel, la fr??quence ??
                                                                        laquelle vous changez votre huile devrait
                                                                        d??pendre de vos habitudes de conduite
                                                                        personnelles.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Si vous
                                                                        n'utilisez la voiture
                                                                        que pour de courts trajets dans les rues de la
                                                                        ville, en particulier par temps froid, vous
                                                                        devriez probablement faire changer l'huile tous
                                                                        les trois mois. Pourquoi? Sur un court trajet,
                                                                        le moteur n'atteint pas sa temp??rature de
                                                                        fonctionnement appropri??e, ce qui peut provoquer
                                                                        de la condensation d'eau ?? l'int??rieur du carter
                                                                        et l'huile peut ??tre dilu??e par l'essence.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Si vous
                                                                        utilisez
                                                                        principalement votre voiture pour des trajets
                                                                        occasionnels plus longs, il est acceptable
                                                                        d'attendre six mois ou plus pour changer
                                                                        l'huile.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Une chose que
                                                                        vous devez
                                                                        absolument consid??rer lorsque vous d??cidez quand
                                                                        votre huile doit ??tre chang??e est la garantie de
                                                                        votre voiture. De nombreux fabricants exigent
                                                                        sp??cifiquement que le d??tenteur de la garantie
                                                                        change l'huile en fonction du temps. Si c'est le
                                                                        cas pour vous, cela vaut la peine de changer
                                                                        l'huile conform??ment aux directives jusqu'??
                                                                        l'expiration de la garantie. Si votre moteur a
                                                                        besoin d'une r??paration couverte par la garantie
                                                                        ?? l'avenir, votre fabricant pourrait refuser de
                                                                        le couvrir si vous n'avez pas suivi le
                                                                        calendrier recommand?? pour les changements
                                                                        d'huile. Pour ??viter les maux de t??te, suivez
                                                                        leurs recommandations.
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card collapse-header">
                                                    <div id="heading4" class="card-header" data-toggle="collapse"
                                                        role="button" data-target="#accordion4" aria-expanded="false"
                                                        aria-controls="accordion4">
                                                        <span class="lead collapse-title" style="color:#1977cc;">
                                                            <i class="ri-lg ri-question-line"
                                                                style="color:#76b5ee;"></i> Comment faire
                                                            synchroniser
                                                            le bluetouth avec un telephone ?
                                                        </span>

                                                    </div>
                                                    <div id="accordion4" role="tabpanel" data-parent="#accordionWrapa1"
                                                        aria-labelledby="heading4" class="collapse"
                                                        aria-expanded="false">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <p>
                                                                    Le processus de synchronisation du Bluetooth de
                                                                    votre
                                                                    voiture avec votre iPhone varie en fonction du
                                                                    v??hicule que
                                                                    vous conduisez. Cependant, au t??l??phone, c'est
                                                                    g??n??ralement
                                                                    la m??me chose.
                                                                </p><br>
                                                                Aller ?? l'??cran d'accueil
                                                                <br>
                                                                <ul>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Choisissez
                                                                        les param??tres</li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>G??n??ral</li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Bluetooth
                                                                    </li>
                                                                </ul>

                                                                <p>Si votre t??l??phone est actuellement synchronis?? avec
                                                                    un autre
                                                                    syst??me, appuyez sur le syst??me auquel il est
                                                                    connect?? afin
                                                                    de vous en d??connecter, puis choisissez le syst??me
                                                                    avec
                                                                    lequel vous souhaitez qu'il soit synchronis??. Afin
                                                                    de savoir
                                                                    ce que vous devez faire sp??cifiquement pour votre
                                                                    v??hicule,
                                                                    vous pouvez visiter le site Web du fabricant, ou il
                                                                    existe
                                                                    de nombreux forums que vous pouvez trouver en ligne.
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card collapse-header">
                                                    <div id="heading5" class="card-header" data-toggle="collapse"
                                                        role="button" data-target="#accordion5" aria-expanded="false"
                                                        aria-controls="accordion5">
                                                        <span class="lead collapse-title" style="color:#1977cc;">
                                                            <i class="ri-lg ri-question-line"
                                                                style="color:#76b5ee;"></i> Comment changer les
                                                            essuie-glaces ?
                                                        </span>

                                                    </div>
                                                    <div id="accordion5" role="tabpanel" data-parent="#accordionWrapa1"
                                                        aria-labelledby="heading5" class="collapse"
                                                        aria-expanded="false">
                                                        <div class="card-content">
                                                            <div class="card-body">
                                                                <p>
                                                                    Le remplacement de vos essuie-glaces est une t??che
                                                                    rapide et relativement facile. Vous pouvez trouver
                                                                    des essuie-glaces dans la plupart des magasins de
                                                                    d??tail automobile. Si vous n'??tes pas s??r du type ??
                                                                    utiliser, consultez votre manuel du propri??taire ou
                                                                    demandez ?? un repr??sentant du magasin.
                                                                    <br><br>
                                                                    Retrait des anciens essuie-glaces???
                                                                </p>

                                                                <br>

                                                                <ul>

                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Pour
                                                                        commencer, les anciens
                                                                        essuie-glaces doivent ??tre retir??s. Pour ce
                                                                        faire, ??loignez tout l'essuie-glace du
                                                                        pare-brise et il devrait se maintenir en place.
                                                                        (Le bras est en m??tal. Veillez ?? ne pas rayer la
                                                                        vitre du pare-brise !)
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Utilisez une
                                                                        main pour tenir
                                                                        le bras et l'autre pour appuyer sur la petite
                                                                        languette situ??e sous l'essuie-glace ?? l'endroit
                                                                        o?? elle rencontre le bras m??tallique.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Faites-le
                                                                        glisser en tirant du
                                                                        centre vers le bas du bras.
                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Une fois
                                                                        retir??, placez
                                                                        doucement le bras contre le pare-brise. Afin
                                                                        d'??viter tout dommage, assurez-vous qu'il ne se
                                                                        r??tracte pas.
                                                                    </li>

                                                                </ul>
                                                                <br><br>
                                                                <p>Il est maintenant temps de mettre les nouveaux
                                                                    essuie-glaces???

                                                                </p>
                                                                <ul>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Tout d'abord,
                                                                        alignez les deux
                                                                        pi??ces pour vous assurer qu'il s'enclenche
                                                                        simplement.

                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Regardez du
                                                                        c??t?? de
                                                                        l'essuie-glace qui se fixe au bras. Vous verrez
                                                                        qu'il est plat et a une courbe sur le dessus.
                                                                        Tournez ce clip jusqu'?? ce que la courbe pointe
                                                                        vers le balai d'essuie-glace.

                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Tenez
                                                                        l'essuie-glace ??
                                                                        l'envers ?? c??t?? du bras o?? ils correspondent et
                                                                        placez le bras entre les c??t??s de
                                                                        l'essuie-glace.

                                                                    </li>
                                                                    <li style="color:red;list-style:none;">
                                                                        <i class="ri-check-line"></i>Assurez-vous
                                                                        que l'extr??mit??
                                                                        ouverte de la courbe fait face au clip et tirez
                                                                        l'essuie-glace vers le haut de sorte que le bord
                                                                        arrondi glisse dans le crochet. Tirez dessus
                                                                        fermement pour l'encliqueter en place.


                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card collapse-header">
                                                        <div id="heading6" class="card-header" data-toggle="collapse"
                                                            role="button" data-target="#accordion6"
                                                            aria-expanded="false" aria-controls="accordion6">
                                                            <span class="lead collapse-title" style="color:#1977cc;">
                                                                <i class="ri-lg ri-question-line"
                                                                    style="color:#76b5ee;"></i> Comment puis-je
                                                                ??conomiser de l'essence ?
                                                            </span>

                                                        </div>
                                                        <div id="accordion6" role="tabpanel"
                                                            data-parent="#accordionWrapa1" aria-labelledby="heading6"
                                                            class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p>
                                                                        Les prix de l'essence continuent d'augmenter et
                                                                        de baisser. Il existe de nombreuses fa??ons pour
                                                                        les propri??taires de voitures neuves ou
                                                                        d'occasion d'am??liorer leur ??conomie de
                                                                        carburant globale jusqu'?? 20 %.
                                                                    </p>
                                                                    <br>
                                                                    <strong>
                                                                        La premi??re chose qui affecte l'??conomie de
                                                                        carburant est la fa??on dont vous conduisez la
                                                                        voiture???</strong> <br><br>
                                                                    <ul>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Planifiez vos voyages : essayez d'accomplir
                                                                            plusieurs choses en un seul voyage. Vous
                                                                            pouvez ??galement essayer de faire du
                                                                            covoiturage ou de marcher jusqu'?? votre
                                                                            destination. Cela ne r??duira pas la
                                                                            consommation de carburant, mais vous aidera
                                                                            ?? conduire moins, ce qui signifie moins
                                                                            d'essence.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Ne pas acc??l??rer : Si vous ??tes sur
                                                                            l'autoroute, conduire ?? 100 km/h au lieu de
                                                                            110 km/h vous fera ??conomiser 1 ?? 2
                                                                            kilom??tres par litre sur la dur??e de votre
                                                                            voyage. Essayez d'utiliser votre r??gulateur
                                                                            de vitesse, il r??duit la consommation de
                                                                            carburant en maintenant une vitesse
                                                                            constante.
                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>Moins
                                                                            d'acc??l??rateur :
                                                                            Acc??l??rez et freinez facilement. Vous
                                                                            ??conomiserez du carburant ainsi que l'usure
                                                                            de vos freins.
                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>Ne vous
                                                                            r??chauffez pas :
                                                                            gr??ce ?? la nouvelle technologie, la plupart
                                                                            des voitures modernes n'ont vraiment besoin
                                                                            que de 30 secondes pour se r??chauffer.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Fen??tres relev??es : Le fait d'abaisser les
                                                                            vitres sur l'autoroute peut r??duire
                                                                            l'??conomie de carburant jusqu'?? 10 %.
                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Huile : Utilisez uniquement l'huile moteur
                                                                            sp??cifi??e par le fabricant et changez-la
                                                                            selon les recommandations de l'usine, peut
                                                                            ??galement am??liorer l'??conomie de carburant.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Poids : moins le poids de votre v??hicule est
                                                                            important, meilleure est la consommation de
                                                                            carburant. 45 kilogrammes suppl??mentaires
                                                                            augmentent la consommation de carburant de 1
                                                                            ?? 2 %.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Pneus : Assurez-vous que vos pneus sont
                                                                            r??gl??s ?? la pression recommand??e ?? tout
                                                                            moment, cela peut augmenter l'??conomie de
                                                                            carburant jusqu'?? 3,3 %.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Filtres : Un filtre ?? air et un filtre ??
                                                                            carburant propres permettront ?? l'air et au
                                                                            carburant de circuler sans encombre et
                                                                            peuvent vous aider ?? ??conomiser jusqu'?? 10 %
                                                                            sur les co??ts de carburant.

                                                                        </li>
                                                                    </ul>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card collapse-header">
                                                        <div id="heading7" class="card-header" data-toggle="collapse"
                                                            role="button" data-target="#accordion7"
                                                            aria-expanded="false" aria-controls="accordion7">
                                                            <span class="lead collapse-title" style="color:#1977cc;">
                                                                <i class="ri-lg ri-question-line"
                                                                    style="color:#76b5ee;"></i>
                                                                Comment v??rifier le niveau de liquide de refroidissement
                                                                ?
                                                            </span>

                                                        </div>
                                                        <div id="accordion7" role="tabpanel"
                                                            data-parent="#accordionWrapa1" aria-labelledby="heading7"
                                                            class="collapse" aria-expanded="false">
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p>
                                                                        V??rifier le niveau de liquide de refroidissement
                                                                        dans votre voiture est un processus assez
                                                                        simple. La premi??re chose ?? retenir est de
                                                                        v??rifier le niveau de liquide de refroidissement
                                                                        lorsque la voiture est froide. Dans la plupart
                                                                        des voitures d'aujourd'hui, il y a un r??servoir
                                                                        de trop-plein de liquide de refroidissement
                                                                        opaque situ?? ?? c??t?? du radiateur. Le r??servoir
                                                                        opaque est en plastique blanc, ce qui permet de
                                                                        voir l'int??rieur et de s'assurer que le liquide
                                                                        de refroidissement est ?? un niveau s??curitaire.
                                                                        Vous constaterez ??galement qu'il y a des marques
                                                                        sur le c??t?? pour vous indiquer ?? quel point le
                                                                        niveau est haut ou bas.

                                                                    </p>

                                                                    <br><br>

                                                                    <ul>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Vous devriez v??rifier votre niveau de
                                                                            liquide de refroidissement plusieurs fois
                                                                            par an pour vous assurer qu'il n'y a pas de
                                                                            fuites dans votre syst??me.


                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Si vous constatez que vous manquez de
                                                                            liquide de refroidissement, vous devrez le
                                                                            compl??ter. Les moteurs utilisent un m??lange
                                                                            50/50 de liquide de refroidissement et
                                                                            d'eau, ce qui permet ?? votre radiateur la
                                                                            protection optimale contre l'??bullition ou
                                                                            le gel dont votre moteur a besoin. Vous
                                                                            pouvez g??n??ralement acheter ce pr??-m??lang??.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>Pour
                                                                            ajouter le liquide de
                                                                            refroidissement, il suffit de d??visser le
                                                                            bouchon du r??servoir de trop-plein opaque et
                                                                            d'ajouter le m??lange jusqu'?? ce qu'il
                                                                            atteigne le rep??re plein.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>Apr??s
                                                                            cela, tout ce que
                                                                            vous avez ?? faire est de replacer le
                                                                            capuchon, assurez-vous qu'il est bien serr??
                                                                            et vous ??tes pr??t ?? rouler !


                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Assurez-vous de changer votre liquide de
                                                                            refroidissement tous les deux ans (en
                                                                            suivant les recommandations du fabricant).

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Huile : Utilisez uniquement l'huile moteur
                                                                            sp??cifi??e par le fabricant et changez-la
                                                                            selon les recommandations de l'usine, peut
                                                                            ??galement am??liorer l'??conomie de carburant.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Poids : moins le poids de votre v??hicule est
                                                                            important, meilleure est la consommation de
                                                                            carburant. 45 kilogrammes suppl??mentaires
                                                                            augmentent la consommation de carburant de 1
                                                                            ?? 2 %.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Pneus : Assurez-vous que vos pneus sont
                                                                            r??gl??s ?? la pression recommand??e ?? tout
                                                                            moment, cela peut augmenter l'??conomie de
                                                                            carburant jusqu'?? 3,3 %.

                                                                        </li>
                                                                        <li style="color:red;list-style:none;">
                                                                            <i class="ri-check-line"></i>
                                                                            Filtres : Un filtre ?? air et un filtre ??
                                                                            carburant propres permettront ?? l'air et au
                                                                            carburant de circuler sans encombre et
                                                                            peuvent vous aider ?? ??conomiser jusqu'?? 10 %
                                                                            sur les co??ts de carburant.

                                                                        </li>
                                                                    </ul>


                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card collapse-header">
                                                            <div id="heading8" class="card-header"
                                                                data-toggle="collapse" role="button"
                                                                data-target="#accordion8" aria-expanded="false"
                                                                aria-controls="accordion8">
                                                                <span class="lead collapse-title"
                                                                    style="color:#1977cc;"><i
                                                                        class="ri-lg ri-question-line"
                                                                        style="color:#76b5ee;"></i>
                                                                    La climatisation n'est pas froide ?
                                                                </span>

                                                            </div>
                                                            <div id="accordion8" role="tabpanel"
                                                                data-parent="#accordionWrapa1"
                                                                aria-labelledby="heading8" class="collapse"
                                                                aria-expanded="false">
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <p>
                                                                            Plusieurs raisons peuvent expliquer pourquoi
                                                                            votre syst??me de climatisation souffle de
                                                                            l'air chaud au lieu de l'air froid.

                                                                            <br><br>
                                                                            Retrait des anciens essuie-glaces???


                                                                        </p>
                                                                        <ul>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>La
                                                                                premi??re
                                                                                possibilit?? est qu'il y ait une fuite de
                                                                                r??frig??rant. La fuite peut ??tre trouv??e
                                                                                dans l'??vaporateur, le condenseur ou le
                                                                                tuyau, auquel cas vous devez amener
                                                                                votre voiture chez un m??canicien pour
                                                                                qu'elle soit r??par??e.

                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Une
                                                                                autre raison pour
                                                                                laquelle votre climatiseur peut ne pas
                                                                                souffler d'air frais est que le
                                                                                compresseur a mal tourn??. Le compresseur
                                                                                pressurise le r??frig??rant et le pompe
                                                                                dans tous les composants n??cessaires du
                                                                                climatiseur. Parce que tout tourne
                                                                                autour du compresseur, s'il est
                                                                                d??fectueux alors la climatisation ne
                                                                                fonctionnera pas correctement.
                                                                                Habituellement, il y aura un bruit fort
                                                                                lorsque vous essayez d'allumer votre
                                                                                climatiseur si le compresseur est cass??.

                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>
                                                                                Enfin, un autre probl??me qui peut
                                                                                survenir avec votre syst??me de
                                                                                climatisation est qu'il y a un tube ??
                                                                                orifice bouch??. Celui-ci est situ?? entre
                                                                                le condenseur ?? l'avant du radiateur et
                                                                                l'??vaporateur dans l'habitacle. S'il y a
                                                                                une obstruction dans le tube, cela
                                                                                emp??chera le r??frig??rant d'atteindre
                                                                                l'??vaporateur, ce qui obligera votre
                                                                                syst??me ?? souffler de l'air chaud.

                                                                            </li>


                                                                        </ul>
                                                                        <br><br>
                                                                        <p>Il est maintenant temps de mettre les
                                                                            nouveaux
                                                                            essuie-glaces???

                                                                        </p>
                                                                        <ul>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Tout
                                                                                d'abord, alignez
                                                                                les deux
                                                                                pi??ces pour vous assurer qu'il
                                                                                s'enclenche
                                                                                simplement.

                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>
                                                                                Regardez du c??t?? de
                                                                                l'essuie-glace qui se fixe au bras. Vous
                                                                                verrez
                                                                                qu'il est plat et a une courbe sur le
                                                                                dessus.
                                                                                Tournez ce clip jusqu'?? ce que la courbe
                                                                                pointe
                                                                                vers le balai d'essuie-glace.

                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Tenez
                                                                                l'essuie-glace ??
                                                                                l'envers ?? c??t?? du bras o?? ils
                                                                                correspondent et
                                                                                placez le bras entre les c??t??s de
                                                                                l'essuie-glace.

                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>
                                                                                Assurez-vous que
                                                                                l'extr??mit??
                                                                                ouverte de la courbe fait face au clip
                                                                                et tirez
                                                                                l'essuie-glace vers le haut de sorte que
                                                                                le bord
                                                                                arrondi glisse dans le crochet. Tirez
                                                                                dessus
                                                                                fermement pour l'encliqueter en place.


                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                        </div>



                                                        <div class="card collapse-header">
                                                            <div id="heading9" class="card-header"
                                                                data-toggle="collapse" role="button"
                                                                data-target="#accordion9" aria-expanded="false"
                                                                aria-controls="accordion9">
                                                                <span class="lead collapse-title"
                                                                    style="color:#1977cc;">
                                                                    <i class="ri-lg ri-question-line"
                                                                        style="color:#76b5ee;"></i> Pourquoi mon
                                                                    moteur
                                                                    tourne-t-il au ralenti ?

                                                                </span>

                                                            </div>
                                                            <div id="accordion9" role="tabpanel"
                                                                data-parent="#accordionWrapa1"
                                                                aria-labelledby="heading9" class="collapse"
                                                                aria-expanded="false">
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <p>
                                                                            Une chose ?? garder ?? l'esprit est que la
                                                                            marche au ralenti brutale n'est pas le
                                                                            probl??me - c'est un sympt??me d'un probl??me
                                                                            de moteur qui n'a pas encore ??t??
                                                                            diagnostiqu??. Votre moteur peut tourner au
                                                                            ralenti ?? peu pr??s pour un certain nombre de
                                                                            raisons diff??rentes.

                                                                            L'une des raisons d'un ralenti irr??gulier
                                                                            est qu'il est peut-??tre temps de nettoyer
                                                                            les injecteurs de carburant ou de changer
                                                                            les bougies
                                                                        </p>

                                                                        <br>
                                                                        <strong>Les autres raisons de la marche au
                                                                            ralenti brutale comprennent :
                                                                        </strong> <br><br>
                                                                        <ul>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>
                                                                                Probl??mes
                                                                                d'??chappement.
                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Trous
                                                                                dans la soupape
                                                                                d'admission d'air.</li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Une
                                                                                perte de puissance
                                                                                g??n??rale dans la voiture.
                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Cela
                                                                                peut ??galement se
                                                                                produire pendant les mois d'hiver,
                                                                                lorsque les voitures ont plus de
                                                                                difficult?? ?? d??marrer et peuvent
                                                                                trembler lorsque le moteur tourne.
                                                                            </li>
                                                                        </ul>
                                                                        <br><br>
                                                                        <p>Si votre t??l??phone est actuellement
                                                                            synchronis?? avec
                                                                            un autre
                                                                            syst??me, appuyez sur le syst??me auquel il
                                                                            est
                                                                            connect?? afin
                                                                            de vous en d??connecter, puis choisissez le
                                                                            syst??me
                                                                            avec
                                                                            lequel vous souhaitez qu'il soit
                                                                            synchronis??. Afin
                                                                            de savoir
                                                                            ce que vous devez faire sp??cifiquement pour
                                                                            votre
                                                                            v??hicule,
                                                                            vous pouvez visiter le site Web du
                                                                            fabricant, ou il
                                                                            existe
                                                                            de nombreux forums que vous pouvez trouver
                                                                            en ligne.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="card collapse-header">
                                                            <div id="heading10" class="card-header"
                                                                data-toggle="collapse" role="button"
                                                                data-target="#accordion10" aria-expanded="false"
                                                                aria-controls="accordion10">
                                                                <span class="lead collapse-title"
                                                                    style="color:#1977cc;"><i
                                                                        class="ri-lg ri-question-line"
                                                                        style="color:#76b5ee;"></i>
                                                                    Qu'est-ce qui ne va pas avec mes freins ?


                                                                </span>

                                                            </div>
                                                            <div id="accordion10" role="tabpanel"
                                                                data-parent="#accordionWrapa1"
                                                                aria-labelledby="heading10" class="collapse"
                                                                aria-expanded="false">
                                                                <div class="card-content">
                                                                    <div class="card-body">
                                                                        <p>
                                                                            Les freins sont l'une des pi??ces les plus
                                                                            importantes de votre v??hicule et ils
                                                                            contribuent grandement ?? votre s??curit?? au
                                                                            volant. Cependant, il est souvent difficile
                                                                            de d??terminer si les bruits que nous
                                                                            entendons faire par nos freins sont le
                                                                            r??sultat de quelque chose de simple, comme
                                                                            de l'air dans la conduite de frein, ou s'ils
                                                                            sont un signe avant-coureur d'une
                                                                            d??faillance imminente des freins.


                                                                            N'oubliez pas que lorsque votre technicien
                                                                            de service recommande une r??paration de
                                                                            frein, celle-ci doit ??tre effectu??e d??s que
                                                                            possible pour ??viter tout danger. Que vous
                                                                            ayez besoin d'une simple inspection de
                                                                            frein, d'un remplacement de frein, d'un
                                                                            remplacement de plaquette de frein ou de
                                                                            travaux sur les disques de frein, les
                                                                            plaquettes de frein ou les rotors, nous
                                                                            pouvons vous aider. Nos techniciens sont
                                                                            form??s pour travailler sur des marques et
                                                                            des mod??les sp??cifiques, et nos prix sont
                                                                            souvent inf??rieurs ?? ceux que vous pouvez
                                                                            trouver dans un garage ind??pendant.



                                                                            Pour une meilleure id??e de ce qui pourrait
                                                                            causer votre probl??me de freinage, lisez la
                                                                            suite pour obtenir des r??ponses aux
                                                                            questions courantes sur les freins.
                                                                            .

                                                                        </p>

                                                                        <br>
                                                                        <strong>Pourquoi mes freins pulsent ?



                                                                        </strong><br><br>
                                                                        <ul>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>
                                                                                Si vous ressentez une pulsation ou des
                                                                                secousses du frein, il est beaucoup plus
                                                                                probable que cela ait ??t?? caus?? par un
                                                                                d??faut du rotor ou du tambour de frein
                                                                                que par le syst??me antiblocage. Un rotor
                                                                                d??form?? ou un tambour mal rond peut
                                                                                provoquer des pulsations prononc??es dans
                                                                                la p??dale de frein.

                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>
                                                                                L'??chec de la
                                                                                r??traction de la plaquette n'est pas
                                                                                rare. Dans les syst??mes ?? tambour plus
                                                                                anciens, les m??choires de frein sont
                                                                                retir??es du tambour par de puissants
                                                                                ressorts. Mais dans un syst??me de frein
                                                                                ?? disque, les plaquettes sont retir??es
                                                                                du rotor (ou du disque) par l'??lasticit??
                                                                                des joints en caoutchouc. ?? mesure que
                                                                                ces joints vieillissent ou sont
                                                                                endommag??s par du liquide de frein
                                                                                contamin??, ils peuvent ne pas faire leur
                                                                                travail. Le r??sultat est que le patin va
                                                                                rouler contre le rotor et s'user
                                                                                pr??matur??ment.
                                                                            </li>
                                                                            <li style="color:red;list-style:none;">
                                                                                <i class="ri-check-line"></i>Si
                                                                                votre rotor est
                                                                                d??form??, le patin peut s'user m??me sans
                                                                                d??faillance du joint en caoutchouc. Un
                                                                                rotor d??form?? vacillera lorsqu'il
                                                                                tournera, raclant ainsi le patin
                                                                                lorsqu'il tourne. Finalement, le tampon
                                                                                s'use et la plaque d'appui en m??tal
                                                                                endommagera le rotor en m??tal.

                                                                            </li>

                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
    <!-- END: Content-->
    @include('layouts.footer')


    @include('layouts.footer-scripts')



    <script>
        if (navigator.geolocation) {
            var options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 5000,
};
            navigator.geolocation.getCurrentPosition(showPosition,error,options);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        function showPosition(position) {
          /*  $.ajax({
        url: "{{URL::to('compare')}}",
        type: 'GET',
        data: {
            lat: position.coords.latitude,
            long: position.coords.longitude
        },
        success: function(data) {
            // you can manipulation your html here
        }
    });*/
    alert("Latitude: " + position.coords.latitude + 
            "<br>Longitude: " + position.coords.longitude); 
        }
        function error(err) {
  console.warn(`ERREUR (${err.code}): ${err.message}`);
}

    </script>
</body>

<!-- END: Body-->

</html>