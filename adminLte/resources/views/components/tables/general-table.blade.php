@vite(['resources/js/app.js', 'resources/css/app.css'])


<table class="w-full text-sm text-gray-500 dark:text-gray-400 text-center">
    <thead class="px-3 py-2 text-xs text-white uppercase bg-naranja dark:text-gray-400">
        <tr>
            <th scope="col" class="p-4">Escuela</th>
            <th scope="col" class="p-4">Bootcamp</th>
            <th scope="col" class="p-4">Inscritos</th>
            <th scope="col" class="p-4"> >50%</th>
            <th scope="col" class="p-4">RIC</th>
            <th scope="col" class="p-4">JPA</th>
            <th scope="col" class="p-4">TPB</th>
            <th scope="col" class="p-4">TF5</th>
            <th scope="col" class="p-4">PROCESO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bootcamps as $bootcamp)
            <tr>
                <td scope="col" class="p-4">{{ $bootcamp->school->name }}</td>
                <td>{{ $bootcamp->nombre }}</td>
                <td>{{ $bootcamp->postulado_count }}</td>
                <td>{{ $bootcamp->ejercicios_count }}</td>
                <td>{{ $bootcamp->asistencia_ric_count }}</td>
                <td>{{ $bootcamp->asistencia_jpa_count }}</td>
                <td>{{ $bootcamp->asistencia_tpb_count }}</td>
                <td>{{ $bootcamp->asistencia_tf5_count }}</td>
                <td
                    class="text-center inline-block rounded-full p-4 font-bold {{ $bootcamp->active ? ' text-green font-bold' : 'text-red font-bold' }}">
                    {{ $bootcamp->active ? 'Abierto' : 'Cerrado' }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
