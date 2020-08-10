
voici mes categories
@foreach($categories as $categorie)
<div>
<a href="{{route('details',['categorie'=>$categorie->nom,'id'=>$categorie->id])}}">{{$categorie->nom}}</a>
@endforeach
</div>

