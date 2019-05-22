@extends('layouts.admin')

@section('content') 
<h1>Hello world</h1>
<form action="{{route('voyages.store') }}" method="POST">
 @csrf
@if ($errors->any())
    @foreach ($errors->all() as $error)
         {{$error}}
    @endforeach
@endif
    <input type="text" name="titre" placeholder="titre">
    <input type="text" name="destination" placeholder="destination">
    <input type="text" name="description" placeholder="description">
    <input type="number" name="prix" placeholder="prix">
    <input type="text" name="image" placeholder="image">
    <input type="submit" value="Ajouter">
</form>

@endsection

