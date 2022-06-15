<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <p style="text-align: center">
            <a href="https://www.instagram.com/elisj2002/">
                <svg class="float-left" style="width: 25px;" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32"
                    xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Full">
                        <linearGradient gradientUnits="userSpaceOnUse" id="SVGID_2_" x1="16" x2="16" y1="31.2933"
                            y2="0.7067">
                            <stop offset="0" style="stop-color:#FF2D76" />
                            <stop offset="1" style="stop-color:#FB0000" />
                        </linearGradient>
                        <path
                            d="M32,31.292V19.46c0-6.34-3.384-9.29-7.896-9.29c-3.641,0-5.273,2.003-6.182,3.409v-2.924h-6.86   c0.091,1.937,0,20.637,0,20.637h6.86V19.767c0-0.615,0.044-1.232,0.226-1.672c0.495-1.233,1.624-2.509,3.518-2.509   c2.483,0,3.475,1.892,3.475,4.666v11.041H32V31.292z M3.835,7.838c2.391,0,3.882-1.586,3.882-3.567   c-0.044-2.024-1.49-3.564-3.836-3.564S0,2.246,0,4.271c0,1.981,1.489,3.567,3.792,3.567H3.835z M7.265,31.292V10.655H0.406v20.637   H7.265z"
                            fill="url(#SVGID_2_)" />
                    </g>
                </svg>
            </a>&nbsp;
            &nbsp;
        <h1 class="estadisticas-del-juego">
            ELISEA SERRANO JIMÉNEZ
        </h1>&nbsp;
        &nbsp; <a href="https://github.com/Elisj02">
            <svg class="float-right" xmlns="http://www.w3.org/2000/svg" width="32" height="32" version="1">
                <rect style="opacity:0.2" width="25" height="16" x="3" y="12" rx="1.25" ry="1.25" />
                <path style="fill:#bf4b4b"
                    d="M 3,21.75 C 3,22.442 3.5575,23 4.25,23 h 22.5 C 27.442,23 28,22.442 28,21.75 V 8.25 C 28,7.5575 27.442,7 26.75,7 H 14 V 6.25 C 14,5.5575 13.443,5 12.75,5 H 4.25 C 3.5575,5 3,5.5575 3,6.25" />
                <rect style="opacity:0.2" width="25" height="16" x="3" y="10" rx="1.25" ry="1.25" />
                <rect style="fill:#e4e4e4" width="21" height="10" x="5" y="9" rx="1.25" ry="1.25" />
                <rect style="fill:#e25252" width="25" height="16" x="3" y="11" rx="1.25" ry="1.25" />
                <path style="fill:#4f1d1d"
                    d="m 16,14 c -2.761424,0 -5,2.238576 -5,5 7.92e-4,2.207084 1.448598,4.152573 3.5625,4.787109 v -0.804687 c -1.265656,0.2793 -1.630859,-0.556641 -1.630859,-0.556641 -0.206993,-0.534138 -0.50586,-0.478156 -0.50586,-0.478156 -0.413144,-0.28665 0.03125,-0.28125 0.03125,-0.28125 0.347602,0.06261 0.658903,0.39224 0.895691,0.633129 0.164431,0.167279 0.184879,0.270156 0.605672,0.300926 0.258577,0.0367 0.49603,-0.01639 0.619731,-0.07286 0.01736,-0.125399 0.0194,-0.577036 0.02734,-0.814677 C 13.618537,21.281097 13.000263,20.428902 13,19.5 c 0.0014,-0.710006 0.364949,-1.386038 1,-1.859375 V 16 c 0.326285,0 0.718404,0.577667 1.037109,1.134766 C 15.347088,17.046328 15.672359,17.000803 16,17 c 0.327641,8.03e-4 0.652912,0.04633 0.962891,0.134766 C 17.281596,16.577667 17.673715,16 18,16 v 1.638672 c 0.635658,0.473791 0.999296,1.150641 1,1.861328 -0.0014,1.05337 -0.79497,1.993 -1.984375,2.349609 0.01555,0.332327 0.03711,0.714925 0.03711,1.013672 0,0.5207 -0.0028,0.35915 -0.0039,0.574219 v 0.445312 C 19.351442,23.388806 20.997199,21.355003 21,19 21,16.238576 18.761424,14 16,14 Z" />
                <path style="opacity:0.1;fill:#ffffff"
                    d="M 4.25,5 C 3.5575,5 3,5.5575 3,6.25 v 1 C 3,6.5575 3.5575,6 4.25,6 h 8.5 C 13.443,6 14,6.5575 14,7.25 V 8 H 26.75 C 27.442,8 28,8.5575 28,9.25 v -1 C 28,7.5575 27.442,7 26.75,7 H 14 V 6.25 C 14,5.5575 13.443,5 12.75,5 Z" />
            </svg>

        </a>
        </p>
    </div>
    <div class="flex items-center justify-center mt-5">
        <img src="{{ asset('storage/images/eli.jpg') }}" style="width: 40%; border-radius:20px;" />
    </div>
    <div class="informacion-2 justify-content-center max-w-7xl mx-auto sm:px-6 lg:px-8 my-4">
        <h1 class="estadisticas-del-juego">
            HABILIDADES
        </h1>
    </div>

    <div class="pieChart">
        <canvas id="myChart" style="width:100%;max-width:800px;margin:auto;display:block;"></canvas>
        <script>
            var xValues = ["Paciente", "Resolutiva", "Trabajadora", "Autodidacta", "Investigadora",
                "Persistente"
            ];
            var yValues = [40, 50, 50, 60, 70, 90];
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
