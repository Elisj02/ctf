<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Cuenta') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm my-4"
        style="margin-left: 40px; margin-right: 40px; border-radius: 20px;">
        @if ($myuser->id == 32)
            <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                <h2 class="md:w-1/3 max-w-sm mx-auto">TH1S_i5_yOUr_fL@6</h2>
            </div>
        @endif
        <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
            <h2 class="md:w-1/3 max-w-sm mx-auto">Icono</h2>
            <div class="md:w-2/3 max-w-sm mx-auto">
                <img src="{{ asset('/storage/images/' . $myuser->icon) }}"
                    style="width: 20%; margin: 10px auto; display: block;">
            </div>
        </div>
        <hr />
        <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
            <h2 class="md:w-1/3 max-w-sm mx-auto">Cuenta</h2>
            <div class="md:w-2/3 max-w-sm mx-auto">
                <label class="text-sm text-gray-500">Email</label>
                <div class="w-full inline-flex border">
                    <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                        <svg fill="none" class="w-6 text-gray-500 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <input type="email" class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                        placeholder={{ $myuser->email }} readonly />
                </div>
            </div>
        </div>

        <hr />
        <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
            <h2 class="md:w-1/3 mx-auto max-w-sm">Información personal</h2>
            <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                <div>
                    <label class="text-sm text-gray-500">Nombre</label>
                    <div class="w-full inline-flex border">
                        <div class="w-1/12 pt-2 bg-gray-100">
                            <svg fill="none" class="w-6 text-gray-500 mx-auto" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                            placeholder={{ $myuser->name }} readonly />
                    </div>
                </div>
                <div>
                    <label class="text-sm text-gray-500">Apellidos</label>
                    <div class="w-full inline-flex border">
                        <div class="pt-2 w-1/12 bg-gray-100">
                            <svg fill="none" class="w-6 text-gray-500 mx-auto" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                            placeholder={{ $myuser->surnames }} readonly />
                    </div>
                </div>
                <div>
                    <label class="text-sm text-gray-500">Nombre de usuario</label>
                    <div class="w-full inline-flex border">
                        <div class="pt-2 w-1/12 bg-gray-100">
                            <svg fill="none" class="w-6 text-gray-500 mx-auto" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                            placeholder={{ $myuser->username }} readonly />
                    </div>
                </div>
            </div>
        </div>

        <hr />
        <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
            <div class="md:w-3/12 text-center pl-6">
                <a href="{{ route('user.edit', $myuser->id) }}">
                    <button
                        class="text-white mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-3 inline-flex items-center focus:outline-none md:float-left ml-3">
                        <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Editar
                    </button>
                </a>
            </div>
            @if (Auth::user()->role == 'user')
                <div class="w-full p-4 text-right text-gray-500">
                    <form action="{{ route('user.destroy', $myuser->id) }}" method="post" id="myForm" name="myForm"
                        onsubmit="return enviar()">
                        @csrf
                        @method('DELETE')
                        <button id="btn-submit" type="submit"
                            class="text-white mx-auto max-w-sm rounded-md text-center bg-red-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right mr-3">
                            <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Borrar cuenta
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function enviar() {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro de que quieres borrar la cuenta?',
                type: 'warning',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si',
                cancelButtonText: "No",
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.value) {
                    document.myForm.submit();
                }
                return false;
            })
        }
    </script>
</x-app-layout>
