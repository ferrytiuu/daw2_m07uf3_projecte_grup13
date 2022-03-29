<table border="1">
    <thead>
        <tr>
            <th>Codi</th>
            <th>Ref. Catastral</th>
            <th>Ciutat</th>
            <th>Barri</th>
            <th>Nom carrer</th>
            <th>Núm. carrer</th>
            <th>Pis</th>
            <th>Núm. llits</th>
            <th>Num. habitacions</th>
            <th>Ascensor</th>
            <th>Calefacció</th>
            <th>Aire acondicionat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$apartament->codiApartament}} </td>
            <td>{{$apartament->refCatastral}} </td>
            <td>{{$apartament->ciutat}} </td>
            <td>{{$apartament->barri}} </td>
            <td>{{$apartament->nomCarrer}} </td>
            <td>{{$apartament->numCarrer}} </td>
            <td>{{$apartament->pis}} </td>
            <td>{{$apartament->numLlits}} </td>
            <td>{{$apartament->numHabitacions}} </td>
            <td>{{$apartament->ascensor}} </td>
            <td>{{$apartament->calefaccio}} </td>
            <td>{{$apartament->aireAcondicionat}} </td>
        </tr>
    </tbody>
</table>