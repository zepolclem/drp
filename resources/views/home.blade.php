@extends('layout.main')
@section('title','Home')
@section('contenu')



        <h1 class="font-weight-italic">DRP</h1>
        <h3 class="font-weight-bold">Project.GTR</h3>



        <section>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-md-3">
                        <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Modèles</h2>
                        <hr class="mt-2 mb-5">
                        <div class="container-fluid">
                            @include('layout.tables.modeles')
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Motorisations</h2>
                        <hr class="mt-2 mb-5">
                        <div class="container-fluid">
                            @include('layout.tables.motorisations')
                        </div>
                    </div>
                </div>
            </div>
        <section>
                <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Constructeurs</h2>
                <hr class="mt-2 mb-5">
                <div class="container">
                    @include('layout.tables.constructeurs')
                </div>
            </section>
@endsection
