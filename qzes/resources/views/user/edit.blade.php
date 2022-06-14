<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm my-4"
        style="margin-left: 40px; margin-right: 40px; border-radius: 20px;">
        <form method="POST" action="{{ route('user.update', $myuser->id) }}"
            class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="md:inline-flex space-y-2 md:space-y-0 w-full p-2 text-gray-500 items-center">
                <h2 class="md:w-1/3 max-w-sm mx-auto">Icono</h2>
                <div class="md:w-2/3 max-w-sm mx-auto">
                    <img src="{{ asset('/storage/images/' . $myuser->icon) }}"
                        style="width: 20%; margin: 10px auto; display: block;">
                    <div class="w-full inline-flex border">
                        <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                            <svg fill="none" class="w-6 text-gray-500 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <input type="file" name="icon" id="icon"
                            class="w-11/12 focus:outline-none focus:text-gray-600 p-2" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="md:inline-flex space-y-2 md:space-y-0 w-full p-2 text-gray-500 items-center">
                <h2 class="md:w-1/3 max-w-sm mx-auto">Cuenta</h2>
                <div class="md:w-2/3 max-w-sm mx-auto">
                    <label class="text-sm text-gray-500">Email</label>
                    <div class="w-full inline-flex border">
                        <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                            <svg fill="none" class="w-6 text-gray-500 mx-auto" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="email" name="email" id="email"
                            class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="Email"
                            value={{ $myuser->email }} required />
                    </div>
                </div>
            </div>

            <hr />
            <div class="md:inline-flex  space-y-2 md:space-y-0  w-full p-2 text-gray-500 items-center">
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
                            <input type="text" name="name" id="name"
                                class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="Nombre"
                                value={{ $myuser->name }} required />
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
                            <input type="text" name="surnames" id="surnames"
                                class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="Apellidos"
                                value={{ $myuser->surnames }} required />
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
                            <input type="text" name="username" id="username"
                                class="w-11/12 focus:outline-none focus:text-gray-600 p-2"
                                placeholder="Nombre de usuario" value={{ $myuser->username }} required />
                        </div>
                    </div>
                </div>
            </div>

            <hr />
            <div class="md:inline-flex w-full space-y-2 md:space-y-0 p-8 text-gray-500 items-center">
                <div class="md:w-3/12 text-center md:pl-6">
                    <button type="submit"
                        class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-green-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                        <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
