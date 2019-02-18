@extends('layout.main')
@section('title','Home')
@section('contenu')
    <div class="container">
        <h1>DRP</h1>

        <section>
            <h2>Modèles</h2>
            <div class="container">
                @include('layout.tables.modeles')
            </div>
        </section>
        <section>
            <h2>Motorisations</h2>
            <div class="container">
                @include('layout.tables.motorisations')
            </div>
        </section>
    </div>
@endsection
