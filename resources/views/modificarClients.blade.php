<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar Clients') }}
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
                                <form method="post" action="{{ route('clients.update', $client->dni) }}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="dni">DNI</label>
                                        <input type="text" class="form-control" name="dni" value="{{ $client->dni }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nomCognoms">Nom i cognoms</label>
                                        <input type="text" class="form-control" name="nomCognoms" value="{{ $client->nomCognoms }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="edat">Edat</label>
                                        <input type="number" class="form-control" name="edat" value="{{ $client->edat }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="telefon">Telèfon</label>
                                        <input type="text" class="form-control" name="telefon" value="{{ $client->telefon }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="adreca">Adreça</label>
                                        <input type="text" class="form-control" name="adreca" value="{{ $client->adreca }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="ciutat">Ciutat</label>
                                        <input type="text" class="form-control" name="ciutat" value="{{ $client->ciutat }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pais">País</label>
                                        <input type="text" class="form-control" name="pais" value="{{ $client->pais }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $client->email }}" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="tipusTargeta">
                                            @if($client->tipusTargeta == 'Dèbit')
                                            <option>Tipus de targeta</option>
                                            <option selected value="Dèbit">Dèbit</option>
                                            <option value="Crèdit">Crèdit</option>
                                            @else
                                            <option >Tipus de targeta</option>
                                            <option value="Dèbit">Dèbit</option>
                                            <option selected value="Crèdit">Crèdit</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="numTargeta">Número de la targeta</label>
                                        <input type="text" class="form-control" name="numTargeta" value="{{ $client->numTargeta }}" />
                                    </div>
                                    <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('clients') }}">Accés directe a la Llista d'usuaris</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>