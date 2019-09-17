
<h1>History & C.R.E</h1>

@foreach($hist as $history)
<h2>{{$history->title}}</h2>
<p>{{$history->description}}</p>
<h1>{{$history->created_at}}</h1>
<h1>{{$history->updated_at}}</h1>
@endforeach