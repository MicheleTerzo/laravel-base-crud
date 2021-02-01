@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Modifica la prenotazione {{$book->id}}</h3>

                <form action="{{ route('booking.update', $book->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <p><strong>Nome e Cognome</strong></p>
                            <input class="form-control" type="text" name="full-name" placeholder="Inserisci Nome e Cognome" value="{{$book->guest_full_name}}">
                        </div>
                        <div class="col">
                            <p><strong>Carta di pagamento</strong></p>
                            <input class="form-control" type="text" name="credit-card-number"
                                placeholder="Inserisci numero carta" value="{{$book->guest_credit_card}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p><strong>Assegnazione stanza</strong></p>
                            <input class="form-control" type="text" name="room" placeholder="N° Stanza" value="{{$book->room}}">
                        </div>
                        <div class="col-2">
                            <p><strong>Data arrivo</strong></p>
                            <input class="form-control" type="text" name="from" placeholder="Inserisci Data arrivo" value="{{$book->from_date}}">
                        </div>
                        <div class="col-2">
                            <p><strong>Data partenza</strong></p>
                            <input class="form-control" type="text" name="to" placeholder="Inserisci data partenza" value="{{$book->to_date}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><strong>Note</strong></p>
                            <textarea class="form-control" name="details">{{$book->more_details}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input class="btn btn-outline-danger" type="submit" value="Modifica la prenotazione">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
