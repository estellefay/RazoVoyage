@extends('layouts.admin')

@section('content') 
<h1>Hello world</h1>
<form action="{{route('voyages.update', ['voyage' => $voyage->id]) }}" method="POST">
    @csrf
    @method("PATCH") 
<input type="text" name="titre" placeholder="titre" value="{{$voyage->titre}}">
    <input type="text" name="destination" placeholder="destination" value="{{$voyage->destination}}">
    <input type="text" name="description" placeholder="description" value="{{$voyage->description}}">
    <input type="number" name="prix" placeholder="prix" value="{{$voyage->prix}}">
    <input type="text" name="image" placeholder="image" value="{{$voyage->image}}">
    <input type="submit" value="Ajouter">
</form>

@endsection