@extends('layouts.app')
@section('content')
<h1>Liste des opérations</h1>
@foreach ( $posts as $retourne )
<h2>{{$retourne}}</h2>
@endforeach
@endsection