@extends('layouts.header')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Informazioni aggiuntive sulla prenotazione numero: {{ $singleBook['id'] }}</h3>
                <p><strong>Numero della carta:</strong> {{$singleBook['guest_credit_card']}}</p>
                <p><strong>Intestata a:</strong> {{$singleBook['guest_full_name']}}</p>
                <p><strong>Date prenotazione:</strong><br>
                    {{$singleBook['from_date']}}  -  {{$singleBook['to_date']}} 
                </p>
                <p><Strong>Note:</Strong> {{$singleBook['more_details']}}</p>
            </div>
        </div>
    </div>
@endsection
