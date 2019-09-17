@extends('layouts.home')
@section('content')
<h1>Kiswahili page</h1>

@foreach($kis as $kiss)
	<h1>{{$kiss->title}}</h1>
	<p>{{$kiss->description}}</p>
	<h3>{{$kiss->created_at}}</h3>
@endforeach
@endsection 