
<div class="row text-center text-lg-left">
    @foreach ($constructeurs as $constructeur)
        <div class="col-md-2 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid" src="images/{{$constructeur->nom}}.png" alt="">
            </a>
        </div>
    @endforeach
</div>
