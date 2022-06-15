<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <div class="informacion-2 justify-content-center max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
            <h1 class="estadisticas-del-juego">
                PREGUNTA ID: {{ $myquestion->id }}
            </h1>
        </div>

        <body>
            <main>
                <p style="margin-left: 90px; margin-top: 10px;">Categoría: {{ $category[0]->name }}</p>
                <div class="game-quiz-container">
                    <div class="image-question-container">
                        <img class="imagen" src="{{ asset($url . $myquestion->image) }}" />
                    </div>
                    <div class="container my-4">
                        <h1 class="text-center">{{ $myquestion->question }}</h1>
                    </div>
                    <div class="game-options-container">
                        <div class="boxed">Respuestas:<br>
                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center; background: none"
                                name="r1" id="r1" placeholder="{{ $myanswers[0]->option }}"
                                value="{{ $myanswers[0]->option }}" readonly>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background: none"
                                name="r2" id="r2" placeholder="{{ $myanswers[1]->option }}"
                                value="{{ $myanswers[1]->option }}" readonly>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background: none"
                                name="r3" id="r3" placeholder="{{ $myanswers[2]->option }}"
                                value="{{ $myanswers[2]->option }}" readonly>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background: none"
                                name="r4" id="r4" placeholder="{{ $myanswers[3]->option }}"
                                value="{{ $myanswers[3]->option }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                    <div class="md:w-3/12 text-center md:pl-6">
                        <a href="{{ route('question.edit', $myquestion->id) }}">
                            <button
                                class="text-white mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                                <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                Editar
                            </button>
                        </a>
                    </div>
                    <div class="w-full p-4 text-right text-gray-500">
                        <form action="{{ route('question.destroy', $myquestion->id) }}" method="post" id="myForm"
                            name="myForm" onsubmit="return enviar()">
                            @csrf
                            @method('DELETE')
                            <button id="btn-submit" type="submit"
                                class="text-white rounded-md text-center bg-red-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                                <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Borrar
                            </button>
                        </form>
                    </div>
                </div>
            </main>
        </body>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function enviar() {
                event.preventDefault();
                Swal.fire({
                    title: '¿Estás seguro de que quieres borrar la pregunta y sus correspondientes respuestas?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si',
                    cancelButtonText: "No",
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.value) {
                        document.getElementById('myForm').submit();
                    }
                    return false;
                })
            }
        </script>
</x-app-layout>
