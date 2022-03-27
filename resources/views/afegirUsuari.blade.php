<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Afegir Usuaris') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Afegeix un nou usuari
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
                                <form method="post" action="{{ route('users.store') }}">
                                    <div class="form-group">
                                        @csrf
                                        <label for="name">Nom</label>
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Contrasenya</label>
                                        <input type="password" class="form-control" name="password" pattern='^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,20}$' placeholder="Mínim 1 majúsucla, 1 mínuscula, 1 nombre, 1 símbol (8 a 20 caràcters)"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="tipusTreballador">Tipus d'usuari</label><br>
                                        <input type="radio" name="tipusTreballador" value="C">
                                        <label for="C">C (cap)</label><br>
                                        <input type="radio"name="tipusTreballador" value="N">
                                        <label for="N">N (normal)</label><br>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Envia</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('users') }}">Accés directe a la llista d'usuari</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>