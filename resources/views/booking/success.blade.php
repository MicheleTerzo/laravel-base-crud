@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center success-page">
                <h1>L'inserimento della prenotazione è avvenuto con successo</h1>
                <button class="btn btn-outline-danger"><a href="{{route('booking.index')}}">Torna alla Home</a></button>
            </div>
        </div>
    </div>
@endsection