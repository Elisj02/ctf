<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
        <div class="informacion-2 justify-content-center max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
            <h1 class="estadisticas-del-juego">
                RANKING
            </h1>
        </div>
    <body>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5 mb-5">
            <table class="min-w-full block md:table">
                <thead class="block md:table-header-group">
                    <tr
                        class="block md:table-row absolute -top-full md:top-auto -center-full md:center-auto  md:relative ">
                        <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                            Posición
                        </th>
                        <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                            Usuario
                        </th>
                        <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                            Puntos
                        </th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($ranking as $key => $r)
                        <tr class="bg-gray-300 block md:table-row">
                            <td class="p-2 text-center block md:table-cell">
                                {{ $key + 1 }}
                            </td>
                            <td class="p-2 text-center block md:table-cell">
                                <img class="rounded-full h-12 w-12 object-cover" style="margin: 0 auto;"
                                    src="{{ asset('/storage/images/' . $r->icon) }}">
                                <p>{{ $r->username }}</p>
                            </td>
                            <td class="p-2 text-center block md:table-cell">
                                {{ $r->puntos * 2 }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</x-app-layout>
