@extends('layouts.app')

@section('main_content')
<div class="container">
    <div class="row py-5">
        @foreach ($trains as $train)
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                  {{ $train->azienda }} {{ $train->codice_treno}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    Partenza:  {{ $train->stazione_di_partenza }}
                  </li>
                  <li class="list-group-item">
                    Arrivo: {{ $train->stazione_di_arrivo }}
                  </li>
                  <li class="list-group-item">
                    Orario di partenza: {{ $train->orario_partenza }}
                  </li>
                  <li class="list-group-item">
                    Orario di arrivo:  {{ $train->orario_arrivo }}
                  </li>
                  <li class="list-group-item">
                    Orario di arrivo:  {{ $train->orario_arrivo }}
                  </li>
                   
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection