<div class="table-responsive">
    <table class="table table-striped table-sm table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Motorisation</th>
                <th scope="col">Cylindrée</th>
                <th scope="col">Puissance</th>
                <th scope="col">Couple</th>
                <th scope="col">Energie</th>
                <th scope="col ">Options</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($motorisations as $motorisation)
                <tr>
                    <th scope="row">{{ $motorisation->nom }}</th>
                    <td>{{ $motorisation->cylindree }} L</td>
                    <td>{{ $motorisation->puissance }} Cv</td>
                    <td>{{ $motorisation->couple}} Nm</td>
                    <td>{{ $motorisation->energie}}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
