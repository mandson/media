<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <title></title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="row">

                <div class="col-4">
                <form action="{{route('categorie')}}" method="post">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Categories :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
                </div>

                <div class="col-4">
                <form  method="post" action="{{route('auteur')}}">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="nom">Auteur :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
                </div>

                <div class="col-4">
                <form  method="post" action="{{route('region')}}">
                @csrf
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="region">Regions :</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary w-40 float-right">ajouter</button>
                        </div>
                    </div>
                </form>
                </div>
                </div>

            </div>
            <div class="col-6">
            <form  method="post" action="{{route('actu.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                        <div class="col-6">
                                <div class="form-group">
                                        <label for="titre">Titre:</label>
                                        <input type="text" name="titre" id="titre" class="form-control  ">
                                </div>
                                <div class="form-group">
                                        <label for="description">Description:</label>
                                        <input type="text" name="description" id="description" class="form-control  ">
                                </div>
                                <div class="form-group">
                                        <label for="categorie_id">Categorie :</label>
                                        <select name="categories_id" class="form-control">
                                        <option value="0" >Choisir la Catégorie</option>
                                        <?php $i=0; ?>
                                        @foreach($categories as $categorie)
                                        <?php $i++; ?>
                                        <option  value=" {{$categorie->id}}">{{$i}}. {{$categorie->nom}} </option>
                                        @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="regions_id">Région :</label>
                                        <select name="regions_id" class="form-control">
                                        <option value="0" >Choisir la Région</option>
                                        <?php $i=0; ?>
                                        @foreach($regions as $region)
                                        <?php $i++; ?>
                                        <option  value=" {{$region->id}}">{{$i}}. {{$region->nom}} </option>
                                        @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                        <label for="auteur">Auteur :</label>
                                        <select name="auteurs_id" class="form-control">
                                        <option value="0" >Choisir l'auteur</option>
                                        <?php $i=0; ?>
                                        @foreach($auteurs as $auteur)
                                        <?php $i++; ?>
                                        <option  value=" {{$auteur->id}}">{{$i}}. {{$auteur->nom}} </option>
                                        @endforeach
                                        </select>
                                </div>
                                
                                <div class="form-group">
                                        <div class="custom-file">
                                        <input type="file" name="photo"  class="custom-file-input {{ $errors->has('photo') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                                        </div>
                                </div> 
                                <button type="submit" class="btn btn-primary w-40 float-right">Ajouter</button>               
                        </div>
                        
                        </div>
                       
                </form>
    
            </div>
        </div>
    </div>
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>