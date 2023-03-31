@vite(['resources/js/app.js', 'resources/css/app.css'])

<!--Tabla-->
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-12 mt-10">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200 ">
                    <thead class="bg-naranja ">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider ">
                                Apellidos, nombre
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Perfil Code
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Ejercicios > 50%
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Recordatorio
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-orange-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                Santos, Ana
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-md font-medium text-gray-900">
                                https://www.codecademy.com/
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-md text-left text-gray-500">
                                NO
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-500">
                                Enviado
                            </td>
                        </tr>
                        <tr class="hover:bg-orange-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                Rodríguez, Alex
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-md font-medium text-gray-900">
                                https://www.codecademy.com/
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-md text-left text-gray-500">
                                NO
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500">
                                No enviado
                            </td>
                        </tr>
                        <tr class="hover:bg-orange-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                Pérez, Juan
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-md font-medium text-gray-900">
                                https://www.codecademy.com/
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-md text-left text-gray-500">
                                NO
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-green-500">
                                Enviado
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
