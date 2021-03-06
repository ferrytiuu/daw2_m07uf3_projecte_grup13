<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modificar Lloguers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <div class="card mt-5">
                            <div class="card-header">
                                Actualitzaci√≥ de dades
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
                                <form method="post" action="{{ route('lloguers.update', json_encode([$lloguer->dniClient,$lloguer->codiApartament])) }}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="dniClient">DNI del client</label>
                                        <input type="text" class="form-control" name="dniClient" value="{{ $lloguer->dniClient }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="codiApartament">Codi de l'apartament</label>
                                        <input type="text" class="form-control" name="codiApartament" value="{{ $lloguer->codiApartament }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="dataInici">Data inici</label>
                                        <input type="date" class="form-control" name="dataInici" value="{{ $lloguer->dataInici }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="horaInici">Hora inici</label>
                                        <input type="time" class="form-control" name="horaInici" value="{{ $lloguer->horaInici }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="dataFinal">Data final</label>
                                        <input type="date" class="form-control" name="dataFinal" value="{{ $lloguer->dataFinal }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="horaFinal">Hora final</label>
                                        <input type="time" class="form-control" name="horaFinal" value="{{ $lloguer->horaFinal }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="llocLliurament">Lloc lliurament de les claus</label>
                                        <input type="text" class="form-control" name="llocLliurament" value="{{ $lloguer->llocLliurament }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="llocDevolucio">Lloc devoluci√≥ de les claus</label>
                                        <input type="text" class="form-control" name="llocDevolucio" value="{{ $lloguer->llocDevolucio }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="preuDia">Preu per dia</label>
                                        <input type="text" class="form-control" name="preuDia" value="{{ $lloguer->preuDia }}" />
                                    </div>
                                    <div class="form-group">
                                    @if($lloguer->diposit == 'S√≠')
                                        <label for="diposit">Dip√≤sit?</label><br>
                                        <input type="radio" name="diposit" value="S√≠" checked="checked">
                                        <label for="S√≠">S√≠</label><br>
                                        <input type="radio" name="diposit" value="No">
                                        <label for="No">No</label><br>
                                    @else
                                        <label for="diposit">Dip√≤sit?</label><br>
                                        <input type="radio" name="diposit" value="S√≠">
                                        <label for="S√≠">S√≠</label><br>
                                        <input type="radio" name="diposit" value="No" checked="checked">
                                        <label for="No">No</label><br>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="quantitatDiposit">Quantitat del dip√≤sit</label>
                                        <input type="text" class="form-control" name="quantitatDiposit" placeholder="Deixar en buit si no s'ha fet dip√≤sit" value="{{ $lloguer->quantitatDiposit }}"/>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="tipusAsseguranca">
                                            @if($lloguer->tipusAsseguranca == 'Franqu√≠cia fins a 1000 Euros')
                                            <option>Tipus d'asseguran√ßa</option>
                                            <option selected value="Franqu√≠cia fins a 1000 Euros">Franqu√≠cia fins a 1000 Euros</option>
                                            <option value="Franqu√≠cia fins a 500 Euros">Franqu√≠cia fins a 500 Euros</option>
                                            <option value="Sense franqu√≠cia">Sense franqu√≠cia</option>
                                            @elseif($lloguer->tipusAsseguranca == 'Franqu√≠cia fins a 500 Euros')
                                            <option>Tipus d'asseguran√ßa</option>
                                            <option value="Franqu√≠cia fins a 1000 Euros">Franqu√≠cia fins a 1000 Euros</option>
                                            <option selected value="Franqu√≠cia fins a 500 Euros">Franqu√≠cia fins a 500 Euros</option>
                                            <option value="Sense franqu√≠cia">Sense franqu√≠cia</option>
                                            @else
                                            <option>Tipus d'asseguran√ßa</option>
                                            <option value="Franqu√≠cia fins a 1000 Euros">Franqu√≠cia fins a 1000 Euros</option>
                                            <option value="Franqu√≠cia fins a 500 Euros">Franqu√≠cia fins a 500 Euros</option>
                                            <option selected value="Sense franqu√≠cia">Sense franqu√≠cia</option>
                                            @endif
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-danger">Actualitza</button>
                                </form>
                            </div>
                        </div>
                        <br><a href="{{ url('users') }}">Acc√©s directe a la Llista d'usuaris</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>