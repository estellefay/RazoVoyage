@extends('layouts.admin')

@section('content') 
<h1>Voyage</h1>

<h3>{{$voyage->titre}}</h3>
<h3>{{$voyage->destination}}</h3>
<h3>{{$voyage->description}}</h3>
<h3>{{$voyage->prix}}</h3>
<img src="{{$voyage->image}}" alt="" srcset="">

@endsection