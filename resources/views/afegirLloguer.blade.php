<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Afegir Lloguers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Afegeix un nou lloguer
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
                                <form method="post" action="{{ route('lloguers.store') }}">
                                    <div class="form-group">
                                        @csrf
                                        <label for="dniClient">DNI del client</label>
                                        <input type="text" class="form-control" name="dniClient" />
                                    </div>
                                    <div class="form-group">
                                        <label for="codiApartament">Codi de l'apartament</label>
                                        <input type="text" class="form-control" name="codiApartament" />
                                    </div>
                                    <div class="form-group">
                                        <label for="dataInici">Data inici</label>
                                        <input type="date" class="form-control" name="dataInici" />
                                    </div>
                                    <div class="form-group">
                                        <label for="horaInici">Hora inici</label>
                                        <input type="time" class="form-control" name="horaInici" />
                                    </div>
                                    <div class="form-group">
                                        <label for="dataFinal">Data final</label>
                                        <input type="date" class="form-control" name="dataFinal" />
                                    </div>
                                    <div class="form-group">
                                        <label for="horaFinal">Hora final</label>
                                        <input type="time" class="form-control" name="horaFinal" />
                                    </div>
                                    <div class="form-group">
                                        <label for="llocLliurament">Lloc lliurament de les claus</label>
                                        <input type="text" class="form-control" name="llocLliurament" />
                                    </div>
                                    <div class="form-group">
                                        <label for="llocDevolucio">Lloc devolució de les claus</label>
                                        <input type="text" class="form-control" name="llocDevolucio" />
                                    </div>
                                    <div class="form-group">
                                        <label for="preuDia">Preu per dia</label>
                                        <input type="text" class="form-control" name="preuDia" />
                                    </div>
                                    <div class="form-group">
                                        <label for="diposit">Dipòsit?</label><br>
                                        <input type="radio" name="diposit" value="Sí">
                                        <label for="Sí">Sí</label><br>
                                        <input type="radio" name="diposit" value="No">
                                        <label for="No">No</label><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantitatDiposit">Quantitat del dipòsit</label>
                                        <input type="text" class="form-control" name="quantitatDiposit" placeholder="Deixar en buit si no s'ha fet dipòsit" />
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="tipusAsseguranca">
                                            <option selected>Tipus d'assegurança</option>
                                            <option value="Franquícia fins a 1000 Euros">Franquícia fins a 1000 Euros</option>
                                            <option value="Franquícia fins a 500 Euros">Franquícia fins a 500 Euros</option>
                                            <option value="Sense franquícia">Sense franquícia</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Envia</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('lloguers') }}">Accés directe a la llista d'usuari</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>