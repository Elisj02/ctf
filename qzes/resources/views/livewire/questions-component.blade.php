<div>
    <div class="row">
        <div class="form-group has-search col-md-4 ml-4">
            <span class="bi bi-search form-control-feedback"></span>
            <input wire:model="pregunta" class="form-control inpTxt" type="text" placeholder="Buscar por pregunta">
        </div>
        <div class="form-group has-search col-md-3 offset-md-4">
            <select wire:model="category" class="form-control">
                <option value="">Todas las categorías</option>
                @foreach ($categories as $categ)
                    <option value="{{ $categ->id }}">{{ $categ->name }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <form action="{{ route('question.create') }}" style="margin-left: 30px; margin-bottom:70px;">
        @csrf
        <button id="btn-submit" type="submit"
            class="text-white rounded-md text-center bg-sky-400 py-1 px-1 inline-flex items-center focus:outline-none md:float-left">
            <svg fill="none" class="w-4 mr-2" viewBox="0 0 16 16" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Nueva pregunta
        </button>
    </form>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <table class="min-w-full block md:table">
            <thead class="block md:table-header-group">
                <tr class="block md:table-row absolute -top-full md:top-auto -center-full md:center-auto  md:relative ">
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Id
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Pregunta
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Respuesta
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Categoría
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Imagen
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Ver
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Editar
                    </th>
                    <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                        Borrar
                    </th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                @foreach ($myquestions as $myquestion)
                    <tr class="bg-gray-300 block md:table-row">
                        <td class="p-2 text-center block md:table-cell">
                            {{ $myquestion->id }}
                        </td>
                        <td class="p-2 text-center block md:table-cell">
                            {{ $myquestion->question }}
                        </td>
                        <td class="p-2 text-center block md:table-cell">
                            {{ $myquestion->answer }}
                        </td>
                        <td class="p-2 text-center block md:table-cell">
                            {{ $myquestion->category_id }}
                        </td>
                        <td class="p-2 text-center block md:table-cell"><img
                                src="{{ asset($url . $myquestion->image) }}">
                        </td>

                        <td class="p-2 text-center block md:table-cell">
                            <a href="{{ route('question.show', $myquestion->id) }}">
                                <button
                                    class="text-white mx-auto max-w-sm rounded-md text-center bg-green-500 py-1 px-1 inline-flex items-center focus:outline-none md:float-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye mr-2" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                    Ver
                                </button>
                            </a>
                        </td>

                        <td class="p-2 text-center block md:table-cell">
                            <a href="{{ route('question.edit', $myquestion->id) }}">
                                <button
                                    class="text-white mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-1 px-1 inline-flex items-center focus:outline-none md:float-right">
                                    <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Editar
                                </button>
                            </a>
                        </td>

                        <td class="p-2 text-center block md:table-cell">
                            <form action="{{ route('question.destroy', $myquestion->id) }}" method="post" id="myForm"
                                name="myForm" onsubmit="return enviar()">
                                @csrf
                                @method('DELETE')
                                <button id="btn-submit" type="submit"
                                    class="text-white rounded-md text-center bg-red-400 py-1 px-1 inline-flex items-center focus:outline-none md:float-right">
                                    <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $myquestions->links() }}
    </div>
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
