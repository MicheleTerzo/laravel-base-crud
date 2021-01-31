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
                            <input class="form-control" type="text" name="full-name" placeholder="Inserisci Nome e Cognome">
                        </div>
                        <div class="col">
                            <p><strong>Carta di pagamento</strong></p>
                            <input class="form-control" type="text" name="credit-card-number" placeholder="Inserisci numero carta">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p><strong>Assegnazione stanza</strong></p>
                            <input class="form-control" type="text" name="room" placeholder="N° Stanza">
                        </div>
                        <div class="col-2">
                            <p><strong>Data arrivo</strong></p>
                            <input class="form-control" type="text" name="from" placeholder="Inserisci Data arrivo">
                        </div>
                        <div class="col-2">
                            <p><strong>Data partenza</strong></p>
                            <input class="form-control" type="text" name="to" placeholder="Inserisci data partenza">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Note</strong></p>
                            <textarea class="form-control" name="details"></textarea>
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
