<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar Usuaris') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Actualització de dades
                            </div>

                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <form method="post" action="{{ route('users.update', $user->email) }}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contrasenya</label>
                                        <input type="password" class="form-control" name="password" value="{{ $user->password }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="tipusTreballador">Tipus d'usuari</label><br>
                                        <input type="radio" name="tipusTreballador" value="{{ $user->tipusTreballador }}">
                                        <label for="C">C (cap)</label><br>
                                        <input type="radio"name="tipusTreballador" value="{{ $user->tipusTreballador }}">
                                        <label for="N">N (normal)</label><br>
                                    </div>

                                    <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('users') }}">Accés directe a la Llista d'usuaris</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>