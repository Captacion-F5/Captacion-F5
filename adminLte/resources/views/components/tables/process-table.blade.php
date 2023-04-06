@vite(['resources/js/app.js', 'resources/css/app.css'])

{{-- <div class="m-auto">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="search filter d-flex">
            {{-- <div class="p-3">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative mt-1">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-800 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="bg-gray-100 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-naranja focus:border-naranja block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-naranja dark:focus:border-naranja"
                        placeholder="Buscar aplicante">

                </div>
            </div> --}}
            {{-- <div>
                <!-- dropdown filter -->
                <div class="group inline-block mt-4">
                    <button
                        class="outline-none focus:outline-none border px-3 py-1 bg-white rounded-sm flex items-center min-w-32">
                        <span class="pr-1 font-semibold flex-1">Filtrar por</span>
                        <span>
                            <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
          transition duration-150 ease-in-out"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </span>
                    </button>
                    <ul
                        class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute
    transition duration-150 ease-in-out origin-top min-w-32">
                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Ejercicios no completos</li>
                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Fecha incorporación</li>
                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Estatus</li>
                        <li class="rounded-sm px-3 py-1 hover:bg-gray-100">A-Z</li>
                    </ul>
                </div>

                <style>
                    /* since nested groupes are not supported we have to use
       regular css for the nested dropdowns
    */
                    li>ul {
                        transform: translatex(100%) scale(0)
                    }

                    li:hover>ul {
                        transform: translatex(101%) scale(1)
                    }

                    li>button svg {
                        transform: rotate(-90deg)
                    }

                    li:hover>button svg {
                        transform: rotate(-270deg)
                    }

                    /* Below styles fake what can be achieved with the tailwind config
       you need to add the group-hover variant to scale and define your custom
       min width style.
         See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
         for implementation with config file
    */
                    .group:hover .group-hover\:scale-100 {
                        transform: scale(1)
                    }

                    .group:hover .group-hover\:-rotate-180 {
                        transform: rotate(180deg)
                    }

                    .scale-0 {
                        transform: scale(0)
                    }

                    .min-w-32 {
                        min-width: 8rem
                    }
                </style>
            </div> --}}
        </div> --}}
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="px- py-2 text-xs text-white uppercase bg-naranja dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <div class="flex items-center">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-800 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </div>
                    </th>
                    <th scope="col" class="">
                        Aplicante
                    </th>
                    <th scope="col" class="">
                        Ejercicios > 50%
                    </th>
                    <th scope="col" class="">
                        RIC
                    </th>
                    <th scope="col" class="">
                        JPA
                    </th>
                    <th scope="col" class="">
                        TPB
                    </th>
                    <th scope="col" class="">
                        TF5
                    </th>
                    <th scope="col" class="">
                        Estatus
                    </th>
                    <th scope="col" class="">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Ríos, Jéssica
                    </th>
                    <td class="px-5 py-4">
                        Si
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="py-4">
                        <a href="#" class="p-2 rounded-full font-medium text-blue bg-blue-200 hover:underline">En
                            proceso</a>
                    </td>
                    <td class="">
                        <div class="flex">
                            <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Raña, Mónica
                    </th>
                    <td class="px-5 py-4">
                        Si
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class=" py-4">
                        <a href="#"
                            class="p-2 rounded-full font-medium text-green bg-green-200 hover:underline">Admisión</a>

                    </td>
                    <td class="">
                        <div class="flex">
                            <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        Díaz, Tania
                    </th>
                    <td class="px-5 py-4">
                        No
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class=" py-4">
                        <a href="#"
                            class="p-2 rounded-full font-medium text-red bg-red-200 hover:underline">Descarte</a>
                    </td>
                    <td class="">
                        <div class="flex">
                            <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-orange-200">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-2 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        García, Ana
                    </th>
                    <td class="px-5 py-4">
                        No
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class="px-3 py-4">
                        <input id="checkbox-all-search" type="checkbox"
                            class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </td>
                    <td class=" py-4">
                        <a href="#" class="p-2 rounded-full font-medium text-blue bg-blue-200 hover:underline">En
                            proceso</a>

                    </td>
                    <td class="">
                        <div class="flex">
                            <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    {{-- </div>
</div> --}}
