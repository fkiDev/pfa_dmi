<!DOCTYPE html>
<html lang="en">
<head>
    <!--===============================================
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ENSAH - Département Math-Info </title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="{{asset('css/superslides.css')}}">
    <!-- Slick slider css file -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='{{asset('css/jquery.circliful.css')}}'>
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="{{asset('css/jquery.tosrus.all.css')}}" />
    <!-- Default Theme css file -->
    <link id="switcher" href="{{asset('css/themes/default-theme.css')}}" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>



<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->

<header id="header">
    <!-- BEGIN MENU -->
    <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->
                    <img class="floated left" src="{{asset('img/logo_dmi.png')}}" height="90px"/>

                    <a class="navbar-brand right text-center hidden-md hidden-sm" href="./" ><span> Departement   </span> <span class="blue">Math</span>-<span class="green">info</span><br/>
                         ENSAH </a>
                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div class=" hidden-md  hidden-sm text text-right" style="margin-top:0px;padding-top: 10px; margin-right: 20px"> <span style="font-size: 26px; color: #216D7A;"> <span class="fa fa-facebook-square"></span> <span class="fa fa-twitter-square"></span> <span class="fa fa-facebook-square"></span> <span class="fa fa-google-plus-square"></span></span> GI ENSAH 2016/2015 </div>
                    <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                        <li class="active"><a href="./">Accueil</a></li>
                        <li><a href="./ensah">ENSAH</a></li>
                        <li><a href="./actualites">Actualité</a></li>
                        <li><a href="./gallery">Gallery</a></li>
                        <li><a href="./formation">Formation</a></li>
                        <li><a href="./Corps_Enseigant">Corps Enseignant</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compte<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('connexion')}}">Connexion</a></li>
                                <li><a href="{{url('inscription')}}">Inscription</a></li>

                            </ul>
                        </li>


                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
    </div>



    <!-- END MENU -->
</header>
<!-- popup login -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title ">Connexion</h4>
            </div>
            <div class="modal-body">


                <form class="col-md-8 col-md-offset-2 form-signin" action="{{url('etudiant/login')}}" method="post" accept-charset="utf-8">
                    <input type="text" class="form-control" placeholder="Pseudo" name="user" required autofocus>
                    <input type="password" class="form-control" placeholder="Mot de Passe" name="passwd" required>


                    <button class="slider_btn2   " type="submit">Connecter </button>

                    <label class="checkbox pull-right  ">
                        <input type="checkbox" value="remember-me">
                        Se rappeler de Moi !
                    </label>

                </form>



            </div>
            <div class="clearfix"></div>


            <div class="modal-footer">


                <h6 class="text-center"><a href="#" data-toggle="modal" data-target="#register"><br>Creer un Compte</a></h6>
                <h6 class="text-center"><a href="#" data-toggle="modal" data-target="#register">Besoin d'aide ?</a></h6>
            </div>
        </div>
    </div>
</div>

<!-- popup login -->

<!-- popup Reg -->
<div class="modal fade" id="register" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title ">Créer Un Compte</h4>
            </div>

            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Etudiant</a></li>
                <li><a data-toggle="pill" href="#menu1">Professeur</a></li>
            </ul>

            <div class=" tab-content">

                <!---------------------------------student register ------------------>

                <div id="home" class="tab-pane fade in active">

                    <div class="modal-body">


                        <form class="col-md-12 form-signin" action="{{url('etudiant/register')}}" method="post" accept-charset="utf-8">
                            <div class=" col-md-12">
                                <input type="email" class="form-control" placeholder="Email" name="mail" required autofocus/></div>

                            <div class=" col-md-6"> <input type="text" class="form-control" placeholder="Nom" name="name" required autofocus/> </div>

                            <div class=" col-md-6"><input type="text" class="form-control" placeholder="Prenom" name="pName" required autofocus/></div>

                            <div class=" col-md-6"> <input type="password" id="pass" class="form-control" placeholder="Mot de Passe" name="passwd" required/></div>
                            <div class=" col-md-6"><input type="password" id="passC" class="form-control" placeholder="Confirmer Mot de Passe" name="passwdc" required/> <span id="verifyP" class="warn hidden"> Mots de Passe non identiques</span> </div>


                            <div class="col-md-4 ">
                                <button class="slider_btn2" type="submit">

                                    <i class="fa fa-check fa-fw"></i> Créer </button></div>
                        </form>
                        <div class="modal-footer">

                        </div>

                    </div>

                </div>

                <!---------------------------------student register done ------------------>


                <!---------------------------------student register ------------------>
                <div id="menu1" class="tab-pane fade">

                    <div class="modal-body">


                        <form class="col-md-12 form-signin" action="#{{url('etudiant/register')}}" method="post" accept-charset="utf-8">
                            <div class=" col-md-12"> <input type="email" class="form-control" placeholder="Email" name="mail" required autofocus/></div>

                            <div class=" col-md-6"> <input type="text" class="form-control" placeholder="Nom" name="name" required autofocus/> </div>

                            <div class=" col-md-6"><input type="text" class="form-control" placeholder="Prenom" name="pName" required autofocus/></div>

                            <div class=" col-md-6"> <input type="password" id="pass" class="form-control" placeholder="Mot de Passe" name="passwd" required/></div>
                            <div class=" col-md-6"><input type="password" id="passC" class="form-control" placeholder="Confirmer Mot de Passe" name="passwdc" required/> <span id="verifyP" class="warn hidden"> Mots de Passe non identiques</span> </div>


                            <div class="col-md-4 ">
                                <button class="slider_btn2" type="submit">

                                    <i class="fa fa-check fa-fw"></i> Créer </button></div>


                        </form>
                        <div class="modal-footer">

                        </div>

                    </div>

                </div>

                <!---------------------------------student register ------------------>

            </div>




        </div>
    </div> </div>

<!-- popup Reg -->

<!--=========== END HEADER SECTION ================-->


<!--=========== BEGIN OUR COURSES SECTION ================-->
@yield('content')
<!--=========== END OUR COURSES SECTION ================-->


<!--=========== BEGIN FOOTER SECTION ================-->
<footer id="footer">
    <!-- Start footer top area -->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>Presentation</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>Community</h3>
                        <ul class="footer_widget_nav">
                            <li><a href="#">Our Tutors</a></li>
                            <li><a href="#">Our Students</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">News &amp; Media</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>Others</h3>
                        <ul class="footer_widget_nav">
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                            <li><a href="#">Link 4</a></li>
                            <li><a href="#">Link 5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-ld-3  col-md-3 col-sm-3">
                    <div class="single_footer_widget">
                        <h3>Social Links</h3>
                        <ul class="footer_social">
                            <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer top area -->

    <!-- Start footer bottom area -->
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_bootomLeft">
                        <p> Copyright &copy; All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="footer_bootomRight">
                        <p>Designed by <a href="https://www.facebook.com/ucef.el.azzouzi" rel="nofollow">N-JoM</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer bottom area -->
</footer>
<!--=========== END FOOTER SECTION ================-->



<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Preloader js file
<script src="{{asset('js/queryloader2.min.js')}}" type="text/javascript"></script>
-->
<!-- For smooth animatin  -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- superslides slider -->
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.animate-enhanced.min.js')}}"></script>
<script src="{{asset('js/jquery.superslides.min.js')}}" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script src='{{asset('js/jquery.circliful.min.js')}}'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="{{asset('js/jquery.tosrus.min.all.js')}}"></script>
<!-- Custom js-->
<script src="{{asset('js/custom.js')}}"></script>



</body>
</html>