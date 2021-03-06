<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menú') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mt-5">
                        <table class="table">
                            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                                    <div class="underline flex justify-center pt-8 sm:justify-start sm:pt-0">
                                        <h2>Control de lloguers d'apartaments amb BD MySQL i framework Laravel 8</h2>
                                    </div>
                                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                                        <div class="grid grid-cols-1 md:grid-cols-2">
                                            @if (auth()->check() && auth()->user()->tipusTreballador=='C')
                                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"><a href="{{ url('users') }}" class="underline text-gray-900 dark:text-white">Llista d'usuaris i accions (esborra/edita)</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per visualitazar la llista d'usuaris i enllaços a les opcions d'esborrar i modificar dades d'usuaris existents.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-6">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('users/create') }}" class="underline text-gray-900 dark:text-white">Afegeix usuaris</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per afegir nous usuaris a la base de dades.
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"><a href="{{ url('apartaments') }}" class="underline text-gray-900 dark:text-white">Llista d'apartaments i accions (esborra/edita)</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per visualitazar la llista d'apartaments i enllaços a les opcions d'esborrar i modificar dades d'apartaments existents.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-6">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('apartaments/create') }}" class="underline text-gray-900 dark:text-white">Afegeix apartaments</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per afegir nous apartaments a la base de dades.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"><a href="{{ url('clients') }}" class="underline text-gray-900 dark:text-white">Llista de clients i accions (esborra/edita)</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per visualitazar la llista de clients i enllaços a les opcions d'esborrar i modificar dades de clients existents.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-6">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('clients/create') }}" class="underline text-gray-900 dark:text-white">Afegeix clients</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per afegir nous clients a la base de dades.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"><a href="{{ url('lloguers') }}" class="underline text-gray-900 dark:text-white">Llista de lloguers i accions (esborra/edita)</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per visualitazar la llista de lloguers i enllaços a les opcions d'esborrar i modificar dades de lloguers existents.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-6">
                                                <div class="flex items-center">
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                                        <path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                                    </svg>
                                                    <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ url('lloguers/create') }}" class="underline text-gray-900 dark:text-white">Afegeix lloguers</a></div>
                                                </div>

                                                <div class="ml-12">
                                                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                        Accés a la vista per afegir nous lloguers a la base de dades.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                                        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                                            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>