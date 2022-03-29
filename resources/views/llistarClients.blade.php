<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Llistar Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Llistat de clients</h2>
                        <table class="table">
                            <thead>
                                <tr class="table-primary">
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
                                    <th></th>
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
                                    <td class="text-left">
                                        <a href="{{ route('clients.show', $client->dni)}}" class="btn btn-info btn-sm">PDF</a>
                                        <a href="{{ route('clients.edit', $client->dni)}}" class="btn btn-success btn-sm">Edita</a>
                                        <form action="{{ route('clients.destroy', $client->dni)}}" method="post" style="display: inline-block">
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
                    <br><a href="{{ url('clients/create') }}">Accés directe a la vista de creació de clients</a><br><br>
                    <a href="{{ url('clients/show')}}" class="btn btn-info btn-sm">Imprimeix a PDF</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>