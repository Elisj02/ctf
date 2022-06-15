<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <h1 class="estadisticas-del-juego">
            ANTES DE JUGAR...
        </h1>
    </div>

    <body>
        <p class="text-center mb-5">Cada partida tiene 10 preguntas, cada respuesta correcta vale 2 puntos. <br> Tienes
            30 segundos para responder cada pregunta. <br> Si se acaba el tiempo la pregunta contará como incorrecta y
            pasará a la siguiente. <br>Hay un comodín que aporta la respuesta correcta, solo puedes usar uno por
            partida. <br>Al finalizar la partida puedes ver tus estadísticas en la página principal.<br><br>
            <a href="{{ route('dashboard') }}">
                <button
                    class="text-black mx-2 max-w-sm rounded-md text-center btnGrad py-2 px-2 inline-flex items-center focus:outline-none mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-controller mr-2" viewBox="0 0 16 16">
                        <path
                            d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778l-5.5 5.5zM8.5.015V7.5h7.485A8.001 8.001 0 0 0 8.5.015z" />

                    </svg>
                    Ir al inicio
                </button>
            </a>
            <a href="{{ route('qya.index') }}">
                <button
                    class="text-black mx-2 max-w-sm rounded-md text-center btnGrad py-2 px-2 inline-flex items-center focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-controller mr-2" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />

                    </svg>
                    Jugar
                </button>
            </a>
        </p>

    </body>
</x-app-layout>
