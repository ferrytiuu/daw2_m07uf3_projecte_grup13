<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Afegir Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Afegeix un nou client
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
                                <form method="post" action="{{ route('clients.store') }}">
                                    <div class="form-group">
                                        @csrf
                                        <label for="dni">DNI</label>
                                        <input type="text" class="form-control" name="dni" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nomCognoms">Nom i cognoms</label>
                                        <input type="text" class="form-control" name="nomCognoms" />
                                    </div>
                                    <div class="form-group">
                                        <label for="edat">Edat</label>
                                        <input type="number" class="form-control" name="edat" />
                                    </div>
                                    <div class="form-group">
                                        <label for="telefon">Telèfon</label>
                                        <input type="text" class="form-control" name="telefon" />
                                    </div>
                                    <div class="form-group">
                                        <label for="adreca">Adreça</label>
                                        <input type="text" class="form-control" name="adreca" />
                                    </div>
                                    <div class="form-group">
                                        <label for="ciutat">Ciutat</label>
                                        <input type="text" class="form-control" name="ciutat" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pais">País</label>
                                        <input type="text" class="form-control" name="pais" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="tipusTargeta">
                                            <option selected>Tipus de targeta</option>
                                            <option value="Dèbit">Dèbit</option>
                                            <option value="Crèdit">Crèdit</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="numTargeta">Número de targeta</label>
                                        <input type="text" class="form-control" name="numTargeta" />
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Envia</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('clients') }}">Accés directe a la lista de clients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>