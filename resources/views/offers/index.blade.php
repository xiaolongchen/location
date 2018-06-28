<h1>Offers page</h1>
@foreach ($offers as $offer)
    <li><a href="/offers/{{$offer->id}}">{{ $offer->title }}</a></li>
@endforeach
<a href="/offers/create">Make an offer</a>
