Title: {{ $offer->title }} <br>
Body: {{ $offer->body }} <br>
Posted By: {{ $offer->user->name }} <br>
Intervals: 
@foreach($offer->offerIntervals as $index => $offerInterval )
{{ $index }}. From {{ $offerInterval->interval->start }} to {{$offerInterval->interval->end}}
@endforeach

