@vite(['resources/js/app.js', 'resources/css/app.css'])

<div class="m-auto pt-5 pb-5">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="search filter d-flex">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="px-1 py-2 text-center text-xs text-white uppercase bg-naranja  dark:text-gray-400">
                    <tr>

                        <th scope="col">
                            Aplicante
                        </th>
                        <th scope="col">
                            Perfil
                        </th>
                        <th scope="col" class="px-10">
                            Notificación
                        </th>
                        <th scope="col" class="">
                            Ejercicios < 50%
                        </th>
                        <th scope="col">
                            Notificación
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($postulados as $postulado)
                    <tr>
                        <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $postulado->nombre }}
                        </th>
                        <td class="px-2 py-4 whitespace-nowrap">
                            {{ $postulado->url_perfil }}
                        </td>
                        <td class="">
                            <x-mail-button></x-mail-button>
                        </td>
                        <td class="px-2 py-4 whitespace-nowrap">
                            {{ $postulado->ejercicios ? 'Sí' : 'No' }}
                        </td>
                        <td class="">
                            <x-mail-button></x-mail-button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
