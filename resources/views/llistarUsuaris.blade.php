<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Llistar Usuaris') }}
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
                                    <th>Nom</th>
                                    <th>Correu</th>
                                    <th>Tipus treballador</th>
                                    <th>Última hora d'entrada</th>
                                    <th>Última hora de sortida</th>
                                    <th></th>
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
                                    <td class="text-left">
                                        <a href="{{ route('users.edit', $user->email)}}" class="btn btn-success btn-sm">Edita</a>
                                        <form action="{{ route('users.destroy', $user->email)}}" method="post" style="display: inline-block">
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
                    <br><a href="{{ url('users/create') }}">Accés directe a la vista de creació d'empleats</a>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>