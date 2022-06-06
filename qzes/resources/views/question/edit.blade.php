<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar pregunta') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center">
        <h1 class="estadisticas-del-juego">
            PREGUNTA ID: {{ $myquestion->id }}
        </h1>
    </div>

    <body>
        <main>
            <form method="POST"
                action="{{ route('question.update', $myquestion->id, $myanswers[0]->id, $myanswers[1]->id, $myanswers[2]->id, $myanswers[3]->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <p style="margin-left: 90px; margin-top: 10px;">Categoría:
                    <select name="category" id="category" required
                        style="border-radius: 20px; text-align: center; margin-left: 20px;">
                        @foreach ($categories as $category)
                            @if ($category->id == $myquestion->category_id)
                                <option selected="selected" value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </p>
                <div class="game-quiz-container">
                    <div class="image-question-container">
                        <img class="imagen" src="{{ asset($url . $myquestion->image) }}" />
                        <div class="image-question-container mt-4">
                            Imagen:<input class="w-full px-3 py-2 mb-3 text-sm leading-tight" id="imagen" type="file"
                                name="image" id="image" />
                        </div>

                    </div>
                    <div class="container my-4">
                        Pregunta:<input type="text"
                            style="border-radius: 20px; width: 100%; background: none; border: 2px solid #ccc; text-align:center;"
                            value="{{ $myquestion->question }}" placeholder="{{ $myquestion->question }}"
                            name="question">
                    </div>
                    <div class="container mb-4">
                        <p style="text-align: center">Respuesta correcta:<input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background:none;"
                                name="answer" id="answer" placeholder="{{ $myquestion->answer }}"
                                value="{{ $myquestion->answer }}" required></p>
                    </div>
                    <div class="game-options-container">
                        <div class="boxed">Respuestas:<br>
                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center; background: none"
                                name="r1" id="r1" placeholder="{{ $myanswers[0]->option }}"
                                value="{{ $myanswers[0]->option }}" required>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background: none"
                                name="r2" id="r2" placeholder="{{ $myanswers[1]->option }}"
                                value="{{ $myanswers[1]->option }}" required>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background: none"
                                name="r3" id="r3" placeholder="{{ $myanswers[2]->option }}"
                                value="{{ $myanswers[2]->option }}" required>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;background: none"
                                name="r4" id="r4" placeholder="{{ $myanswers[3]->option }}"
                                value="{{ $myanswers[3]->option }}" required>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/12 text-center md:pl-6">
                    <button type="submit"
                        class="text-white mx-auto max-w-sm rounded-md text-center bg-green-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right mb-5">
                        <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Guardar
                    </button>
                    </a>
                </div>
            </form>
        </main>
    </body>
</x-app-layout>
