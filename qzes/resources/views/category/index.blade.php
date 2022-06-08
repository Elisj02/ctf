<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar pregunta') }}
        </h2>
    </x-slot>

    <body>
        <main>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5 mb-5">
                <table class="min-w-full block md:table">
                    <thead class="block md:table-header-group">
                        <tr
                            class="block md:table-row absolute -top-full md:top-auto -center-full md:center-auto  md:relative ">
                            <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                                Categoría
                            </th>
                            <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                                Descripción
                            </th>
                            <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                                Número de preguntas
                            </th>
                            <th class="bg-stone-900 p-2 text-white font-bold text-center block md:table-cell">
                                Imagen
                            </th>
                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group">
                        @foreach ($categories as $category)
                            <tr class="bg-gray-300 block md:table-row">
                                <td class="p-2 text-center block md:table-cell">
                                    {{ $category->name }}
                                </td>
                                <td class="p-2 text-center block md:table-cell">
                                    {{ $category->description }}
                                </td>
                                <?php $count = 0 ?>
                                @foreach ($questions as $question)
                                    @if ($question->category_id == $category->id)
                                        <?php $count = $count +1; ?>
                                    @endif
                                @endforeach
                                <td class="p-2 text-center block md:table-cell">
                                    {{ $count }}
                                </td>
                                <td class="p-2 text-center block md:table-cell"><img class="imagenCateg"
                                        src="{{ asset($url . $category->icon) }}">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </body>
</x-app-layout>
