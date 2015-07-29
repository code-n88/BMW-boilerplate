<?php
    require "assets/include/lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("assets/less/main.less", "assets/css/main.css");
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en" xmlns:fb="https://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->

    <head>

        <meta http-equiv="Content-Type"    content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>BMW FRAMEWORK</title>

        <!-- SEO -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="language" content="">
        <meta name="author" content="">                     <!-- VOORAL BELANGRIJK BIJ BLOGS / COMMUNITIES : OVEREENSTEMMEN MET GOOGLE+ NAAM-->
        <meta name="google" content="">                     <!-- MAG DE SITE NIET VERTAALD WORDEN? notranslate TOEVOEGEN -->
        <meta name="google-site-verification" content="">   <!-- GOOGLE WEBMASTERTOOLS -->
        <meta name="robots" content="">                     <!-- index | follow | noindex | nofollow -->
        <meta name="revisit-after" content="7 days">

        <!-- BLOG: Een avatar koppelen in de Google resultaten op deze manier -->
        <link rel="author" href="https://plus.google.com/<google-id-auteur>/posts"/>

        <!-- OPEN GRAPH / SOCIAL MEDIA -->
        <meta property="fb:app_id"      content="" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="" />
        <meta property="og:site_name" content="" />

        <!-- STYLE -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

        <!-- MOBILE -->
        <link rel="apple-touch-startup-image" href="" />           <!-- START IMAGE     : 320x460px - PNG -->
        <link rel="apple-touch-icon" sizes="76x76"   href="">
        <link rel="apple-touch-icon" sizes="120x120" href="">
        <link rel="apple-touch-icon" sizes="152x152" href="">

        <meta name="apple-mobile-web-app-status-bar-style"  content="" />        <!-- TOOLBAR         : default | black | black-translucent -->
        <meta name="apple-mobile-web-app-capable"           content="" />        <!-- FULL SCREEN?    : yes | no -->
        <meta name="HandheldFriendly"                       content="true" />

 				<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

        <!-- HTML5 SHIV -->
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <!-- CSS FILES -->
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/shame.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/main.css"/>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

        <!-- LATEST JQUERY + MODERNIZR -->
        <script type="text/javascript" charset="utf-8" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <script type="text/javascript" charset="utf-8" src="assets/js/core.custom.js"></script>
        <script type="text/javascript" charset="utf-8" src="assets/js/core.general.js"></script>

        <!-- JQUERY PLUGINGS -->
        <script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery-placeholder/2.0.7/jquery.placeholder.min.js"></script>

    </head>

    <body>
        <form action="" method="post">


		<!-- /Nav -->
        <nav>

        	<img src="assets/img/cartouche_en.png" alt="Sheer driving pleasure" class="cartouche">

        </nav>
        <!-- /Nav -->
        <!-- /header -->
        <header><!--Check core.custom.js for full--></header>
        <!-- /header -->

        <!-- /FORM NL -->

        <section class="form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <label for="">Aanspreektitel*</label>
                        <input type="radio" name="gender" value="meneer">&nbsp; <span class="gen">Meneer</span> &nbsp;
                        <input type="radio" name="gender" value="mevrouw">&nbsp; <span class="gen">Mevrouw</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label for="last-name">Naam*</strong></label>
                        <input id="last-name" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="first-name">Voornaam*</label>
                        <input id="first-name" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="street">Straat*</label>
                        <input id="street" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="row sub">
                            

                            <div class="col-xs-12 col-sm-6">
                                <div class="row deepsub">
                                    <div class="col-xs-6">
                                        <label for="number">Nummer*</label>
                                        <input id="number" type="text">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="box">Bus</label>
                                        <input id="box" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 postal">
                                <label for="postcode">Postcode*</label>
                                <input id="postcode" type="text">
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="city">Gemeente*</label>
                        <input id="city" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="country">Land*</label>
                        <select id="country">
                            <option>België</option>
                            <option>Luxemburg</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="email">GSM**</label>
                        <input id="email" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="city">Telefoon**</label>
                        <input id="city" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="email">E-mailadres*</label>
                        <input id="email" type="email">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="city">Bevestig E-mailadres*</label>
                        <input id="emailcopy" type="email">
                    </div>

                </div>

                <div class="row extra">
                    <div class="col-xs-12">
                        <label for="terms"><strong>Ja, hou me op de hoogte over de nieuwigheden van BMW</strong></label>
                        
                        <div class="terms">
                            <ul>
                                <li><input id="terms" type="checkbox"> Per post</li>
                                <li><input id="terms" type="checkbox"> Per SMS</li>
                                <li><input id="terms" type="checkbox"> Per e-mail</li>
                                <li><input id="terms" type="checkbox"> Per telefoon</li>
                            </ul>
                        </div>

                        <span class="termsTxt">
                            * Verplicht veld<br>
                            ** Eén van beide velden is verplicht
                        </span>
                    </div>
                </div>

                <input type="submit" value="Bevestigen">
            </div>
        </section>

        <!-- /FORM NL -->

        <!-- /FORM FR -->
        <section class="form">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-12">
                        <label for="">Titre*</label>
                        <input type="radio" name="gender" value="meneer">&nbsp; <span class="gen">Monsieur</span> &nbsp;
                        <input type="radio" name="gender" value="mevrouw">&nbsp; <span class="gen">Madame</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <label for="last-name">Nom*</strong></label>
                        <input id="last-name" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="first-name">Prénom*</label>
                        <input id="first-name" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="street">Rue*</label>
                        <input id="street" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <div class="row sub">
                            

                            <div class="col-xs-12 col-sm-6">
                                    <div class="row deepsub">
                                        <div class="col-xs-6">
                                            <label for="number">Numéro*</label>
                                            <input id="number" type="text">
                                        </div>
                                        <div class="col-xs-6">
                                            <label for="box">Boîte</label>
                                            <input id="box" type="text">
                                        </div>
                                    </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 postal">
                                <label for="postcode">Code postal*</label>
                                <input id="postcode" type="text">
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="city">Ville*</label>
                        <input id="city" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="country">Pays*</label>
                        <select id="country">
                            <option>Belgique</option>
                            <option>Luxembourg</option>
                        </select>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="email">GSM**</label>
                        <input id="email" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="city">Téléphone**</label>
                        <input id="city" type="text">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="email">Adresse e-mail*</label>
                        <input id="email" type="email">
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <label for="city">Confirmez adresse e-mail*</label>
                        <input id="emailcopy" type="email">
                    </div>

                </div>

                <div class="row extra">
                    <div class="col-xs-12">
                        <label for="terms"><strong>Oui, je veux être tenu informé de toutes les nouveautés de BMW. </strong></label>
                        
                        <div class="terms">
                            <ul>
                                <li><input id="terms" type="checkbox"> Par poste</li>
                                <li><input id="terms" type="checkbox"> Par SMS</li>
                                <li><input id="terms" type="checkbox"> Par e-mail</li>
                                <li><input id="terms" type="checkbox"> Par téléphone</li>
                            </ul>
                        </div>

                        <span class="termsTxt">
                            * champ obligatoire. <br>
                            ** Veuillez introduire un numéro de téléphone ou de GSM afin que nous puissions vous contacter.
                        </span>
                    </div>
                </div>

                <input type="submit" value="Confirmez">
                
            </div>
        </section>


        
        <footer>
            <p>&copy; BMW Belux 2015 | <a href="http://www.bmw.be/fr/footer/imprint-overview/imprint-pool/imprint.html">Privacy policy</a></p>
        </footer>
        

        </form>
    </body>

</html>
