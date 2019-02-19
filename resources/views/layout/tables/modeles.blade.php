<div class="table-responsive">
    <table class="table table-striped table-sm table-hover">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Constructeur</th>
            <th scope="col">Modèle</th>
            <th scope="col">Année</th>
            <th scope="col">Moteur</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($modeles as $modele)
                <tr>
                    <th scope="row">{{ $modele->constructeur }}</th>
                    <td>{{ $modele->nom }}</td>
                    <td>{{ $modele->annee }}</td>
                    <td>{{ $modele->motorisation}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

