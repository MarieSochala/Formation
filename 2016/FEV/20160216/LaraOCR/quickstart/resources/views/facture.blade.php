<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Les factures</title>
</head>
<body>
	@extends('template')

	@section('titre')
	Les factures

	@stop

	@section('contenu')
	<p>C'est la facture n° {{ $numero}}</p>
	@stop
</body>
</html>