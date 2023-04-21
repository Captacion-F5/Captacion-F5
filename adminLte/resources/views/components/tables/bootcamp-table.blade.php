<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="px- py-2 text-xs text-white uppercase bg-naranja dark:bg-naranja-700 dark:text-gray-400">
        <tr class="">
            <th scope="col" class="px-6 py-4">
                Aplicante
            </th>
            <th scope="col" class="px-6 py-4">
                Teléfono
            </th>
            <th scope="col" class="px-6 py-4">
                Ejercicios > 50%
            </th>
            @foreach ($bootcamp->event as $evento)
            <th scope="col" class="px-6 py-4">
                {{ $evento->nombre }}
            </th>
                @endforeach
            <th scope="col" class="px-6 py-4">
                Estatus
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bootcamp->postulado as $postulado)
        <tr class="hover:bg-orange-200 ">
            <td  class="px-4 py-2 font-medium text-gray-900  whitespace-nowrap">
                {{$postulado->nombre}}
            </td>
            <td class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap">
                {{ $postulado->telefono }}
            </td>
            <td class="px-5 py-4">
                <span
                    class="inline-block rounded-full text-center px-2 py-1 font-semibold {{ $postulado->ejercicios ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                    {{ $postulado->ejercicios ? 'No' : 'Si' }}
                </span>
            </td>
            @foreach ($asistance as $evento)
            <td class="px-5 py-6">
                @if ($postulado->event->where('id', $evento->id)->count() > 0)
                    {{ $postulado->event->where('id', $evento->id)->first()->asistencia ? 'No asiste' : 'Asiste' }}
                @elseif ($postulado->event ?? null)
                    Pendiente
                @else
                    Sin eventos
                @endif
            </td>
            @endforeach
            <td class="py-4">
                <form action="{{ route('postulado.update_status', $postulado->id) }}" method="post">
                    @csrf
                    @method('put')
                    <select name="estado" onchange="this.form.submit()" class="inline-block rounded-full text-center appearance-none w-full px-2 py-1 font-semibold {{ $postulado->estado === 'seleccionado' ? 'bg-green-300 text-white' : ($postulado->estado === 'descartado' ? 'bg-red-400 text-white' : 'bg-blue-300 text-white')}}">
                        {{ $postulado->estado === 'seleccionado' ? 'seleccionado' : ($postulado->estado === 'descartado' ? 'descartado' : 'en proceso')}}">
                        <option class='bg-green-300 text-white'value="seleccionado" {{ $postulado->estado === 'seleccionado' ? 'selected'  : '' }}>Seleccionado</option>
                        <option  class='bg-red-400 text-white' value="descartado" {{ $postulado->estado === 'descartado' ? 'selected' : '' }}>Descartado</option>
                        <option class= 'bg-blue-300 text-white' value="en proceso" {{ $postulado->estado === 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                    </select>
                </form>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>

