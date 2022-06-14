<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Pregunta') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5 mb-5">
        <div class="informacion-2 justify-content-center min-w-full block my-4">
            <h1 class="estadisticas-del-juego">
                NUEVA PREGUNTA
            </h1>
        </div>
    </div>

    <body>
        <main>
            <form action="{{ route('question.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <p style="margin-left: 90px; margin-top: 10px;">Categoría:
                    <select name="category" id="category" required
                        style="border-radius: 20px; text-align: center; margin-left: 20px;">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </p>
                <div class="game-quiz-container">
                    <div class="image-question-container mt-4">
                        Imagen:<input class="w-full px-3 py-2 mb-3 text-sm leading-tight" id="imagen" type="file"
                            name="image" id="image" required />
                    </div>
                    <div class="container my-4">
                        <p style="text-align: center"> Pregunta:<input type="text"
                                style="border-radius: 20px; width: 85%; border: 2px solid #ccc;margin: 5px; text-align:center;"
                                name="question" placeholder="Escribe aquí tu pregunta" required></p>
                    </div>
                    <div class="container mb-4">
                        <p style="text-align: center">Respuesta correcta:<input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;"
                                name="answer" id="answer" placeholder="respuesta correcta" required></p>
                    </div>
                    <div class="game-options-container">
                        <div class="boxed">Respuestas:<br>
                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;"
                                name="r1" id="r1" placeholder="respuesta 1" required>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;"
                                name="r2" id="r2" placeholder="respuesta 2" required>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;"
                                name="r3" id="r3" placeholder="respuesta 3" required>

                            <input type="text"
                                style="border-radius: 20px; border: solid 2px #ccc; margin: 5px; width: 45%; text-align:center;"
                                name="r4" id="r4" placeholder="respuesta 4" required>
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
                </div>
            </form>
        </main>
    </body>
</x-app-layout>
