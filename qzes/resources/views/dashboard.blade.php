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
                <a href="{{ route('prejuego') }}">
                    <button class="button-large-success">
                        <p class="inicio">JUGAR</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div class="informacion-2 justify-content-center max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <h1 class="estadisticas-del-juego">
            ESTADÍSTICAS DEL JUEGO
        </h1>
    </div>
    <div class="pieChart">
        <div id="estadisticas" style="display: none;">
            <h1 class="text-center">Lo siento, no tienes estadísticas. Juega para poder calcularlas</h1>
        </div>
        <div id="tiempo" style="margin-bottom: 20px;">
            <h1 class="text-center">Tiempo de juego: {{ $time }} segundos</h1>
        </div>
        <div id="puntos" style="margin-bottom: 20px;">

            <h1 class="text-center">Puntos: {{ $puntos }}</h1>
        </div>
        <canvas id="myChart" style="width:100%;max-width:700px;margin:auto;display:block;"></canvas>
        <script>
            convertir();
            var xValues = ["Ciencias", "Geografía", "Arte", "Deporte", "Historia",
                "Entretenimiento"
            ];
            var ciencias = 0,
                geografia = 0,
                arte = 0,
                deporte = 0,
                historia = 0,
                entretenimiento = 0;
            <?php echo $correct; ?>.forEach(element => {
                switch (element.category_id) {
                    case 1:
                        ciencias++;
                        break;

                    case 2:
                        geografia++;
                        break;

                    case 3:
                        arte++;
                        break;

                    case 4:
                        deporte++;
                        break;

                    case 5:
                        historia++;
                        break;

                    case 6:
                        entretenimiento++;
                        break;
                }
            });
            if (ciencias == 0 && geografia == 0 && arte == 0 && deporte == 0 && historia == 0 && entretenimiento == 0) {
                estadisticas = document.getElementById('estadisticas');
                estadisticas.style.display = '';
                tiempo = document.getElementById('tiempo');
                tiempo.style.display = 'none';
                tiempo.style.marginBottom = '0';
                puntos = document.getElementById('puntos');
                puntos.style.display = 'none';
                puntos.style.marginBottom = '0';
            }

            function convertir() {
                seconds = <?php echo $time; ?>;
                var hour = Math.floor(seconds / 3600);
                hour = (hour < 10) ? '0' + hour : hour;
                var minute = Math.floor((seconds / 60) % 60);
                minute = (minute < 10) ? '0' + minute : minute;
                var second = seconds % 60;
                second = (second < 10) ? '0' + second : second;
                output = document.getElementById('tiempo');
                output.innerHTML = "<h1 class='text-center'>Tiempo de juego: " + hour + " horas, " + minute + " minutos y " + second + " segundos</h1>";
            }
            var yValues = [ciencias, geografia, arte, deporte, historia, entretenimiento];
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
</x-app-layout>
