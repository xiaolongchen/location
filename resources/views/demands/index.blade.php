<h1>Demands page</h1>
@foreach ($demands as $demand)
    <li><a href="/demands/{{$demand->id}}">{{ $demand->title }}</a></li>
@endforeach

<a href="/demands/create">Demand a car</a>
