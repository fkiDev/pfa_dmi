    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-header navbar-brand" href="{{url('etudiant/home')}}">  Espace Etudiant </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Actualités</a></li>
                <li><a href="#">Reinscription</a></li>
                <li><a href="#">Documents en ligne</a></li>
                <li><a href="#">Emplois de temps</a></li>
                <li><a href="#">Fiche Absence</a></li>
                <li><a href="#">PFA & PFE</a></li>



                <li>  <form class="navbar-form navbar-right" action="#" method="post">
                        <input class="form-control" placeholder="Search..." type="text" name="titre" />
                    </form></li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil  <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="simple"><a href="#">Parametres</a></li>
                        <li class="simple"><a href="{{url('etudiant/logout')}}">Déconnexion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>