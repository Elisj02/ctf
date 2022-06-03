<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center">
        <h1 class="estadisticas-del-juego">
            PREGUNTA ID: {{ $myquestion->id }}
        </h1>
    </div>

    <body>
        <main>
            <form action="{{ route('question.update', $myquestion->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <p style="margin-left: 90px; margin-top: 10px;">Categoría: {{ $mycategory[0]->name }}</p>
                <div class="game-quiz-container">
                    <div class="image-question-container">
                        <img class="imagen" src="{{ $myquestion->image }}" />
                        Url de la foto:<input type="text"
                            style="border-radius: 20px; background: none; border: 2px solid #ccc; margin: 5px; width: 80%; text-align:center;" name="image"
                            value="{{ $myquestion->image }}" placeholder="{{ $myquestion->image }}">

                    </div>
                    <div class="container my-4">
                        Pregunta:<input type="text"
                            style="border-radius: 20px; width: 100%; background: none; border: 2px solid #ccc; text-align:center;"
                            value="{{ $myquestion->question }}" placeholder="{{ $myquestion->question }}" name="question">
                    </div>
                    <div class="game-options-container">
                        <div class="boxed">Respuestas:<br>
                            @foreach ($myanswers as $i => $myanswer)
                                @if ($myanswer->option == $myquestion->answer)
                                    <input type="text"
                                        style="border-radius: 20px; border: solid 2px rgb(175, 122, 197); background-color: rgb(215, 189, 226); margin: 5px; width: 45%; text-align:center;"
                                        value="{{ $myanswer->option }}" placeholder="{{ $myanswer->option }}" name="{{$i}}">
                                @else
                                    <input type="text"
                                        style="border-radius: 20px; border: solid 2px #ccc; background: none; margin: 5px; width: 45%; text-align:center;"
                                        value="{{ $myanswer->option }}" placeholder="{{ $myanswer->option }}" name="{{$i}}">
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="md:w-3/12 text-center md:pl-6">
                    <a href="{{ route('question.update', $myquestion->id) }}">
                        <button
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
