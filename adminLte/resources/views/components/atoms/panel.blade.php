@vite(['resources/js/app.js', 'resources/css/app.css'])

<div class="bg-naranja rounded w-full">
    <div class="m-auto flex text-center text-white justify-around">
        <div class="m-3">
            <p class="text-xl text-bold">{{ $totalPostulantes }}</p>
            <p class="text-sm">Inscritos </p>
        </div>
        <div class="m-3">
            <p class="text-xl text-bold">{{ $countSi }}</p>
            <p class="">Ejercicios terminados</p>
        </div>
        <div class="m-3">
            <p class="text-xl text-bold">{{ $countNo }}</p>
            <p>Ejercicios Sin terminar</p>
        </div>
        <div class="m-3">
            <p class="text-center">{{ $eventos }}</p>
            @foreach ($event as $evento)
                <p>{{ $evento->asistencias_count }}</p>
            @endforeach
        </div>
    </div>
</div>
