@extends('')
<h2>English Page</h2>
@foreach($eng as $english)
<h1>{{$english->title}}</h1>
<p>{{$english->description}}</p>
@endforeach
