<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Motorisation</th>
            <th scope="col">Cylindrée</th>
            <th scope="col">Puissance</th>
            <th scope="col">Couple</th>
            <th scope="col">energie</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($motorisations as $motorisation)
                <tr>
                    <th scope="row">{{ $motorisation->nom }}</th>
                    <td>{{ $motorisation->cylindree }}</td>
                    <td>{{ $motorisation->puissance }}</td>
                    <td>{{ $motorisation->couple}}</td>
                    <td>{{ $motorisation->energie}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
