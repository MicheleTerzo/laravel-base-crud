@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Registra una nuova prenotazione</h3>
                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <p><strong>Nome e Cognome</strong></p>
                            <input class="form-control" type="text" name="guest_full_name" placeholder="Inserisci Nome e Cognome">
                            @error('guest_full_name')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="col">
                            <p><strong>Carta di pagamento</strong></p>
                            <input class="form-control" type="text" name="guest_credit_card" placeholder="Inserisci numero carta">
                            @error('guest_credit_card')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p><strong>Assegnazione stanza</strong></p>
                            <input class="form-control" type="text" name="room" placeholder="N° Stanza">
                            @error('room')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="col-2">
                            <p><strong>Data arrivo</strong></p>
                            <input class="form-control" type="text" name="from_date" placeholder="Inserisci Data arrivo">
                            @error('from_date')
                                {{$message}}
                            @enderror
                        </div>
                        <div class="col-2">
                            <p><strong>Data partenza</strong></p>
                            <input class="form-control" type="text" name="to_date" placeholder="Inserisci data partenza">
                            @error('to_date')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Note</strong></p>
                            <textarea class="form-control" name="more_details"></textarea>
                            @error('more_details')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="btn btn-outline-danger" type="submit" value="Aggiungi la prenotazione">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
