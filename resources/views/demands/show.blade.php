Title: {{ $demand->title }} <br>
Body: {{ $demand->body }} <br>
Posted By: {{ $demand->user->name }} <br>
Intervals: 
@foreach($demand->demandIntervals as $index => $demandInterval )
{{ $index }}. From {{ $demandInterval->interval->start }} to {{$demandInterval->interval->end}}
@endforeach
