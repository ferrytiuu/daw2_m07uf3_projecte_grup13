<table border="1">
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nom i cognoms</th>
            <th>Edat</th>
            <th>Telèfon</th>
            <th>Adreça</th>
            <th>Ciutat</th>
            <th>País</th>
            <th>Email</th>
            <th>Tipus de targeta</th>
            <th>Número de targeta</th>
        </tr>
    </thead>
    <tbody>
        @foreach($client as $client)
        <tr>
            <td>{{$client->dni}} </td>
            <td>{{$client->nomCognoms}} </td>
            <td>{{$client->edat}} </td>
            <td>{{$client->telefon}} </td>
            <td>{{$client->adreca}} </td>
            <td>{{$client->ciutat}} </td>
            <td>{{$client->pais}} </td>
            <td>{{$client->email}} </td>
            <td>{{$client->tipusTargeta}} </td>
            <td>{{$client->numTargeta}} </td>
        </tr>
        @endforeach
    </tbody>
</table>