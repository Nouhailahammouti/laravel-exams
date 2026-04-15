<form action="/supprimer-tous" method="POST">
    @csrf
    <table>
        <tr>
            <th>ID Dossier</th>
            <th>État</th>
            <th>Supprimer</th>
        </tr>
        @foreach($dossiers as $d)
        <tr>
            <td>{{ $d->iddossier }}</td>
            <td>{{ $d->etat }}</td>
            <td><input type="checkbox" name="ids[]" value="{{ $d->iddossier }}"></td>
        </tr>
        @endforeach
    </table>
    <button type="submit">Supprimer Tous</button>
</form>
