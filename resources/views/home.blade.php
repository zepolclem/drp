@extends('layout.main')
@section('title','Home')
@section('contenu')


<section class="bg-light py-5">
    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-md-5">
                <h2 class="font-weight-light text-center text-lg-left mt-4">Modèles</h2>
                @include('layout.tables.modeles')
            </div>
            <div class="col-md-7">
                <h2 class="font-weight-light text-center text-lg-left mt-4">Motorisations</h2>
                @include('layout.tables.motorisations')
            </div>
        </div>
    </div>
</section>
<section class="bg-dark py-5">
    <div class="container-fluid">
        <h2 class="font-weight-bold text-light text-center text-lg-left mb-4">Constructeurs</h2>
        <div class="container-fluid">
            @include('layout.tables.constructeurs')
        </div>
    </div>
</section>

@endsection
