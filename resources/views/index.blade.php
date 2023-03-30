@extends('layouts.app')

@section('main_content')

<div class="container">
  <h1 class="text-center pt-5">Lista dei treni in partenza il 30 Marzo 2023</h1>
    <div class="row py-5 ">
        @foreach ($trains as $train)
        <div class="col-4">
            @include('partials._train_card')
        @endforeach
    </div>
</div>

@endsection