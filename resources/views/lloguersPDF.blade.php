<table border="1">
    <thead>
        <tr>
            <th>DNI client</th>
            <th>Codi apartament</th>
            <th>Data inici</th>
            <th>Hora inici</th>
            <th>Data finalització</th>
            <th>Hora finalització</th>
            <th>Lloc lliurament claus</th>
            <th>Lloc devolució claus</th>
            <th>Preu/dia</th>
            <th>Dipòsit</th>
            <th>Quantitat dipòsit</th>
            <th>Tipus assegurança</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$lloguer->dniClient}} </td>
            <td>{{$lloguer->codiApartament}} </td>
            <td>{{$lloguer->dataInici}} </td>
            <td>{{$lloguer->horaInici}} </td>
            <td>{{$lloguer->dataFinal}} </td>
            <td>{{$lloguer->horaFinal}} </td>
            <td>{{$lloguer->llocLliurament}} </td>
            <td>{{$lloguer->llocDevolucio}} </td>
            <td>{{$lloguer->preuDia}} </td>
            <td>{{$lloguer->diposit}} </td>
            <td>{{$lloguer->quantitatDiposit}} </td>
            <td>{{$lloguer->tipusAsseguranca}} </td>
        </tr>
    </tbody>
</table>