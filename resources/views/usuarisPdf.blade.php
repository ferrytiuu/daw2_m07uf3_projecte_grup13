<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Correu</th>
            <th>Tipus treballador</th>
            <th>Última hora d'entrada</th>
            <th>Última hora de sortida</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>{{$user->name}} </td>
            <td>{{$user->email}} </td>
            <td>{{$user->tipusTreballador}} </td>
            <td>{{$user->horaEntrada}} </td>
            <td>{{$user->horaSortida}} </td>
        </tr>
        @endforeach
    </tbody>
</table>