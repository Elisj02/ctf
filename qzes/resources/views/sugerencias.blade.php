<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center max-w-4xl mx-auto sm:px-6 lg:px-8 my-4">
        <h1 class="estadisticas-del-juego">
            SUGERENCIAS
        </h1>
    </div>
    <div class="sugerencias relative p-8 sm:p-12 shadow-lg my-5">
        <form id="sug" method="POST" action="https://formspree.io/f/mvollwkp" target="_blank">
            <div class="mb-6">
                @if (Auth::user())
                    <input type="email" placeholder="Correo electrónico"
                        class="
                                    w-full
                                    rounded
                                    p-3
                                    text-gray-800
                                    dark:text-gray-800
                                    outline-none
                                    focus-visible:shadow-none
                                    focus:border-primary
                                    "
                        name="email" id="email" value="{{ Auth::user()->email }}" readonly />
                @else
                    <input type="email" placeholder="Correo electrónico"
                        class="
                                    w-full
                                    rounded
                                    p-3
                                    text-gray-800
                                    dark:text-gray-800
                                    outline-none
                                    focus-visible:shadow-none
                                    focus:border-primary
                                    "
                        name="email" id="email" required />
                @endif
            </div>
            <div class="mb-6" id="sugerencia">
                <textarea rows="6" placeholder="Sugerencia"
                    class="w-full rounded p-3 text-gray-800 dark:text-gray-800 outline-none focus-visible:shadow-none focus:border-primary"
                    name="sugerencia" id="sugerencia" required></textarea>
            </div>
            <div>
                <button type="submit" onclick="modal()"
                    class="
                                    w-full
                                    text-white
                                    hover:text-white
                                    bg-zinc-900
                                    rounded
                                    border border-primary
                                    dark:border-slate-600
                                    p-3
                                    transition
                                    ease-in-out
                                    duration-500
                                    hover:bg-zinc-700
                                    ">
                    Enviar sugerencia
                </button>
            </div>
        </form>
        <script>
            function modal() {
                swal("¡Gracias!", "Tu sugerencia ha sido enviada", "success").then(function() {
                    document.getElementById("sug").reset();
                });
            }
        </script>
</x-app-layout>
