<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Llistar Apartaments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Llistat d'apartaments</h2>
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($apartament as $apartament)
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
                                    <td class="text-left">
                                        <a href="{{ route('apartaments.show', $apartament->codiApartament)}}" class="btn btn-info btn-sm">PDF</a>
                                        <a href="{{ route('apartaments.edit', $apartament->codiApartament)}}" class="btn btn-success btn-sm">Edita</a>
                                        <form action="{{ route('apartaments.destroy', $apartament->codiApartament)}}" method="post" style="display: inline-block">
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
                    <br><a href="{{ url('apartaments/create') }}">Accés directe a la vista de creació d'apartaments</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>