<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="informacion-1 justify-content-center">
        <div class="group-7">
            <a href="{{ url('/dashboard') }}">
                <img alt="" class="sector2-2"
                    src="https://static.overlay-tech.com/assets/7ca997db-bbfc-4b34-a36d-2b37e0f03942.png" />
            </a>
            <div>
                <a href="{{ route('login') }}">
                    <button class="button-large-success">
                        <p class="inicio">Iniciar sesión</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="max-w-7xl sm:px-6 lg:px-8 my-4">
        <div class="informacion-2 justify-content-center min-w-full block">
            <h1 class="estadisticas-del-juego">
                ESTADÍSTICAS DEL JUEGO
            </h1>
        </div>
    </div>
    <div class="pieChart">
        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
        <script>
            var xValues = ["Ciencias", "Geografía", "Arte", "Deporte", "Historia",
                "Entretenimiento"
            ];
            var yValues = [50, 50, 50, 50, 50, 50];
            var barColors = [
                "#00cc66",
                "#008ae6",
                "#b30000",
                "#ff7300",
                "#732673",
                "#ff80aa"
            ];

            new Chart("myChart", {
                type: "pie",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues,
                    }]
                },
            });
        </script>
    </div>
</x-app-layout>
