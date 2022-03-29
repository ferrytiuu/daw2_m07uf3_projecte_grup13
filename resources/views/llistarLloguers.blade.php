<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Llistar Lloguers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Llistat de lloguer</h2>
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lloguer as $lloguer)
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
                                    <td class="text-left">
                                    <a href="{{ route('lloguers.edit', $lloguer->dni)}}" class="btn btn-success btn-sm">Edita</a>
                                    <form action="{{ route('lloguers.destroy', $lloguer->dni)}}" method="post" style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" type="submit">Esborra</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br><a href="{{ url('lloguers/create') }}">Accés directe a la vista de creació de lloguers</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>