@vite(['resources/js/app.js', 'resources/css/app.css'])

<div class="search filter d-flex">
    <table class="w-full text-sm text-gray-500 dark:text-gray-400 text-center">
        <thead class="px-2 py-2 text-xs text-white uppercase bg-naranja dark:text-gray-400">
            <tr class="text-center">
                <th>Aplicante</th>
                <th>Perfil</th>
                <th>Notificación</th>
                <th>Ejercicios < 50%</th>
                <th>Notificación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postulados as $postulado)
                <tr class="mt-2">
                    <td scope="row" class="px-2  font-medium text-gray-900 whitespace-nowrap">
                        {{ $postulado->nombre }}
                    </td>
                    <td class=" whitespace-nowrap">
                        {{ $postulado->url_perfil }}
                    </td>
                    <td class="">
                        <x-mail-button></x-mail-button>
                    </td>
                    <td class="">
                        <select id="ejercicios" name="ejercicios"
                            class="block text-center  border border-gray-400 hover:border-gray-500  rounded shadow leading-tight focus:outline-none focus:shadow-outline autofocus">
                            <option value="1" @if ($postulado->ejercicios === 1) selected @endif>Si</option>
                            <option value="0" @if ($postulado->ejercicios === 0) selected @endif>No</option>
                        </select>
                    </td>
                    <td class="">
                        <x-mail-button></x-mail-button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
