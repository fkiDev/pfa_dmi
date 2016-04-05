@extends('layouts.etudiant_master')
@section('body')


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main animated fadeInright">
        <form>
            <div class= "col-md-12   animated fadeInRight">

                <h1>Exemple formulaire </h1>

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h6 class="box-title col-md-12">Informations générales</h6>
                    </div><!-- /.box-header -->
                    <!-- form start -->




                    <div class="box-body">


                        <div class=" form-group col-md-4 ">
                            <h7 class="text-center">Nom</h7>
                            <input class="  form-control" id="nom" name="nom" placeholder="" value="" type="text" required>
                        </div>
                        <div class="form-group col-md-4  ">
                            <h7 class="text-center">Prenom</h7>
                            <input class=" form-control" id="prenom" name="prenom" placeholder="" value="" type="text" required>
                        </div>
                        <div class=" form-group col-md-4   ">
                            <h7 class="text-center">CIN</h7>
                            <input class=" form-control" id="cin" name="cin" placeholder="" value="" type="text" required>
                        </div>
                        <div class=" form-group col-md-4  ">
                            <h7 class="text-center">Email</h7>
                            <input class=" form-control" id="email" name="email" placeholder="" value="" type="text" required>
                        </div>
                        <div class="form-group col-md-4 ">
                            <h7 class="text-center">Tel</h7>
                            <input class=" form-control" id="tel" name="tel" placeholder="" value="" type="text" required>
                        </div>

                        <div class=" form-group col-md-4">
                            <h7 class="text-center">Adresse</h7>
                            <input class=" form-control" id="adresse" name="adresse" placeholder="" value="" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <h7 class="text-center">Pays</h7>
                            <input class=" form-control" id="pays" name="pays" placeholder="" value="" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <h7 class="text-center">Ville</h7>
                            <input class=" form-control" id="ville" name="ville" placeholder="" value="" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <h7 text-centerl class="text-center">Sexe</h7>
                            <input class=" form-control" id="sexe" name="sexe" placeholder="" value="" type="text">
                        </div>

                    </div>


                </div><!-- /.box -->

            </div>



            <div class= "form control col-md-6  animated fadeInRight">

                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h6 class="box-title col-md-12">Modification mot de passe</h6>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">

                        <div class="form-group col-md-6 ">
                            <h7 class="text-center">Mot de Passe</h7>
                            <input class=" form-control" id="pass" name="pass" placeholder="Mot de Passe" type="password" required>
                        </div>
                        <div class="form-group col-md-6 ">
                            <h7 class="text-center">Confirmer Mot de Passe</h7>
                            <input class=" form-control" id="passC" placeholder="Confirmer Mot de Passe" type="password" required>
                            <span id="verifyP" class="warn hidden"> Mots de Passe non identiques</span>
                        </div>


                    </div>
                    <div class="box-footer  col-md-12">

                        <button  class="btn btn-primary" name="GetPNG">Modifier</button>
                    </div>

                </div>
            </div>
        </form>
    </div><!-- /.box
    </div>
    </div>
@endsection