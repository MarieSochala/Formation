<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Les articles</title>
</head>
<body>
	@extends('template')

	@section('titre')
	Les articles

	@stop

	@section('contenu')
	<p>C'est l'article n° {!! $numero !!}</p>
	@stop
</body>
</html>
