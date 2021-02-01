@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row">

            @foreach ($bookings as $book)
                <div class="col-3 card">
                    <div class="card-body">
                        <h3 class="card-title">Prenotazione : {{ $book['id'] }}</h3>
                        <p><strong>Nome -</strong>  {{ $book['guest_full_name'] }}</p>
                        <p> <strong>Stanza -</strong>  {{ $book['room'] }}</p>
                        <p> <strong>Prenotato dal:</strong>  {{ $book['from_date'] }}</p>
                        <p> <strong>Al:</strong>  {{ $book['to_date'] }}</p>
                        <a class="btn btn-outline-danger" href="{{ route('booking.show', $book->id) }}">VISUALIZZA I DETTAGLI</a>
                        <a class="btn btn-outline-warning" href="{{route('booking.edit', $book->id)}}">MODIFICA PRENOTAZIONE</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
