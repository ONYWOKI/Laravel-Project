<h2>Germany & French</h2>

@foreach($germ as $germany)
	<h1>{{$germany->title}}</h1>
	<p>{{$germany->description}}</p>
	<h1>{{$germany->created_at}}</h1>

@endforeach
