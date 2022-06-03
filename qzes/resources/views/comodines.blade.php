<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jugar') }}
        </h2>
    </x-slot>
    <div class="informacion-2 justify-content-center">
        <h1 class="estadisticas-del-juego">
            COMODINES Y PUNTOS
        </h1>
    </div>
    <div class="comodines-y-puntos-two">
        <p class="coste-y-funcion-de-los-comodiones">
            Coste y función de los comodiones:
        </p>
        <div class="flex-wrapper-one">
            <div class="comodin-regalo">
                <img alt="" class="vector"
                    src="https://static.overlay-tech.com/assets/ad8764d0-f46e-4cd9-b68b-4e36d8444903.svg" />
                <p class="num-3">3</p>
                <img alt="" class="coin"
                    src="https://static.overlay-tech.com/assets/82e5d40a-213e-4db6-bfb0-b005d0e82505.svg" />
            </div>
            <p class="comodin-regalo-3-puntos-funcion-desca">
                Comodín regalo - 3 puntos<br />
                <br />
                Función: descarta una respuesta incorrecta<br />
            </p>
        </div>
        <div class="flex-wrapper-two">
            <div class="comodin-cerdito">
                <div class="piggy-bank-fill">
                    <img alt="" class="vector-two"
                        src="https://static.overlay-tech.com/assets/c5330c1a-ac96-4440-a1f2-a25033769e33.svg" />
                </div>
                <p class="num-2">2</p>
                <img alt="" class="coin-two"
                    src="https://static.overlay-tech.com/assets/862d3340-7f8a-4005-9b73-493a2280ac36.svg" />
            </div>
            <p class="comodin-cerdito-2-puntos-funcion-dupl">
                Comodín cerdito - 2 puntos<br />
                <br />
                Función: duplica el valor de los puntos que <br />
                <br />
                obtendrás al responder correctamente la pregunta<br />
            </p>
        </div>
        <div class="flex-wrapper-two">
            <div class="comodin-flecha">
                <img alt="" class="vector-three"
                    src="https://static.overlay-tech.com/assets/dabc0877-f477-4c87-9bf7-571658514453.svg" />
                <p class="num-5">5</p>
                <img alt="" class="coin-three"
                    src="https://static.overlay-tech.com/assets/9d9226fe-545e-4150-9953-0b0b552f57e0.svg" />
            </div>
            <p class="comodin-cerdito-2-puntos-funcion-dupl">
                Comodín flecha - 5 puntos<br />
                <br />
                Función: pasa a la siguiente pregunta aportando la<br />
                <br />
                respuesta correcta a la pregunta<br />
            </p>
        </div>
        <p class="al-responder-correctamente-a-una-pregunt">
            Al responder correctamente a una pregunta, obtendrás 4
            puntos.
        </p>
        <p class="puntos-actuales-20-puntos-totales-conse">
            Puntos actuales: 20<br />
            <br />
            Puntos totales conseguidos: 380
        </p>
    </div>
</x-app-layout>
