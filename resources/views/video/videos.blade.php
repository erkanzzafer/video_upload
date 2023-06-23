@foreach ($data as $row )
    <video src="{{ asset('upload') }}/{{ $row['video'] }}" width="320" height="240" autoplay muted>
    </video>
@endforeach
