@vite(['resources/js/app.js', 'resources/css/app.css'])

<div class="m-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex">
            <table class="w-full text-md text-center shadow">
                <thead class="px-4 py-6 m-3 text-center text-white uppercase bg-naranja  dark:text-gray-400">
                    <tr>
                        <th class=" ml-5 p-2 text-left">Escuela</th>
                        <th class=" text-left">Bootcamp</th>
                        <th>Inscritos</th>
                        <th> >50%</th>
                        <th>RIC</th>
                        <th>JPA</th>
                        <th>TPB</th>
                        <th>TF5</th>
                        <th>Proceso</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bootcamps as $bootcamp)
                        <tr class="hover:bg-orange-200">
                            <td class="p-2 m-1 text-left">{{ $bootcamp->school->name }}</td>
                            <td class="p-2 text-left">{{ $bootcamp->nombre }}</td>
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
