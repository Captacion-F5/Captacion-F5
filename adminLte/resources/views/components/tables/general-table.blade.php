@vite(['resources/js/app.js', 'resources/css/app.css'])

<?php
use App\Models\Bootcamp;
use App\Models\BootcampPostulado; ?>
<div class="m-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="search filter d-flex">
            <table class="w-full text-base text-center shadow">
                <thead class="px-4 py-6 m-3 text-center text-white uppercase bg-naranja  dark:text-gray-400">
                    <tr>
                        <th class="p-2">Escuela</th>
                        <th class="p-2">Bootcamp</th>
                        <th class="p-2">Inscritos</th>
                        <th class="p-2"> >50%</th>
                        <th class="p-2">RIC</th>
                        <th class="p-2">JPA</th>
                        <th class="p-2">TPB</th>
                        <th class="p-2">TF5</th>
                        <th class="p-2">Proceso</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bootcamps as $bootcamp)
                        <tr class="hover:bg-orange-200">
                            <td class="p-2 m-1">{{ $bootcamp->school->name }}</td>
                            <td class="p-2">{{ $bootcamp->nombre }}</td>
                            <td class="p-2">{{ $bootcamp->postulado_count }}</td>
                            <td class="p-2">{{ $bootcamp->ejercicios_count }}</td>
                            <td class="p-2">{{ $bootcamp->asistencia_ric_count }}</td>
                            <td class="p-2">{{ $bootcamp->asistencia_jpa_count }}</td>
                            <td class="p-2">{{ $bootcamp->asistencia_tpb_count }}</td>
                            <td class="p-2">{{ $bootcamp->asistencia_tf5_count }}</td>
                            <td class="p-2">{{ $bootcamp->active ? 'Sí' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
