<div class="row text-center text-lg-left">

    @foreach ($constructeurs as $constructeur)
        <div class="col-lg-3 col-md-4 col-4">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid img-thumbnail" src="images/{{$constructeur->nom}}.png" alt="">
            </a>
        </div>
    @endforeach

</div>
