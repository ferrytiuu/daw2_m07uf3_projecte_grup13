<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Afegir Apartaments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Afegeix un nou apartament
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
                                <form method="post" action="{{ route('apartaments.store') }}">
                                    <div class="form-group">
                                        @csrf
                                        <label for="codiApartament">Codi de l'apartament</label>
                                        <input type="text" class="form-control" name="codiApartament" />
                                    </div>
                                    <div class="form-group">
                                        <label for="refCatastral">Referència Catastral</label>
                                        <input type="text" class="form-control" name="refCatastral" />
                                    </div>
                                    <div class="form-group">
                                        <label for="ciutat">Ciutat</label>
                                        <input type="text" class="form-control" name="ciutat" />
                                    </div>
                                    <div class="form-group">
                                        <label for="barri">Barri</label>
                                        <input type="text" class="form-control" name="barri" />
                                    </div>
                                    <div class="form-group">
                                        <label for="nomCarrer">Nom del carrer</label>
                                        <input type="text" class="form-control" name="nomCarrer" />
                                    </div>
                                    <div class="form-group">
                                        <label for="numCarrer">Número del carrer</label>
                                        <input type="number" class="form-control" name="numCarrer" />
                                    </div>
                                    <div class="form-group">
                                        <label for="pis">Pis</label>
                                        <input type="number" class="form-control" name="pis" />
                                    </div>
                                    <div class="form-group">
                                        <label for="numLlits">Número de llits</label>
                                        <input type="number" class="form-control" name="numLlits" />
                                    </div>
                                    <div class="form-group">
                                        <label for="numHabitacions">Número d'habitacions</label>
                                        <input type="number" class="form-control" name="numHabitacions" />
                                    </div>
                                    <div class="form-group">
                                        <label for="ascensor">Ascensor?</label><br>
                                        <input type="radio" name="ascensor" value="Sí">
                                        <label for="Sí">Sí</label><br>
                                        <input type="radio" name="ascensor" value="No">
                                        <label for="No">No</label><br>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="calefaccio">
                                            <option selected>Tipus de calefacció</option>
                                            <option value="Elèctrica">Elèctrica</option>
                                            <option value="Gas natural">Gas natural</option>
                                            <option value="Butà">Butà</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ascensor">Aire acondicionat?</label><br>
                                        <input type="radio" name="aireAcondicionat" value="Sí">
                                        <label for="Sí">Sí</label><br>
                                        <input type="radio" name="aireAcondicionat" value="No">
                                        <label for="No">No</label><br>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Envia</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('users') }}">Accés directe a la Llista d'empleats</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>