@extends('adminlte::page')
@vite(['resources/js/app.js', 'resources/css/app.css'])



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 m-auto">
            <div class="box">
            <div class="box-body m-auto">
                <table class="table table-bordered">
                    <thead class=" bg-naranja text-white ">
                        <tr class="first-letter:">
                            <th>Aplicante</th>
                            <th>Invitación</th>
                            <th>Fecha</th>
                            <th>Inscripción</th>
                            <th>Notificación</th>
                            <th>Asistencia</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="hover:bg-orange-200">
                            <th scope="row" class=" font-medium text-gray-900 whitespace-nowrap text-center">
                                Ríos, Jéssica
                            </th>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="jessica.rios@example.com">
                            </td>
                            <td class="text-center">
                                12-04-2023
                            </td>

                            <td class="text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="jessica.rios@example.com">
                            </td>
                            <td class="px-3 py-4 text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="">
                                <div class="flex justify-center">
                                    <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr class="hover:bg-orange-200">
                            <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap text-center">
                                Raña, Mónica
                            </th>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="jessica.rios@example.com">
                            </td>
                            <td class="text-center">
                                12-04-2023
                            </td>
                            {{-- <td class="px-3 py-4">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </td> --}}
                            <td class="text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="">
                            </td>
                            <td class="px-3 py-4 text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="">
                                <div class="flex justify-center">
                                    <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-orange-200">
                            <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap text-center">
                                Díaz, Tania
                            </th>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="jessica.rios@example.com">
                            </td>
                            <td class="text-center">
                                12-04-2023
                            </td>
                            {{-- <td class="px-3 py-4">
                            <input id="checkbox-all-search" type="checkbox"
                                class="w-4 h-4 text-naranja bg-gray-100 border-gray-500 rounded focus:ring-naranja dark:focus:ring-naranja dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                        </td> --}}
                            <td class="text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="">
                            </td>
                            <td class="px-3 py-4 text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="">
                                <div class="flex justify-center">
                                    <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="hover:bg-orange-200">

                            <th scope="row" class="px-2 py-4 font-medium text-gray-900  whitespace-nowrap text-center">
                                García, Ana
                            </th>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="">
                            </td>
                            <td class="text-center">
                                12-04-2023
                            </td>
                            <td class="text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>
                            </td>
                            <td class="px-5 py-4 text-center">
                                <input type="checkbox" name="correo-electronico" value="">
                            </td>
                            <td class="px-3 py-4 text-center">
                                <select id="activo" name="activo">
                                    <option value="1">No</option>
                                    <option value="0">Sí</option>
                                </select>

                            </td>
                            <td class="">
                                <div class="flex justify-center">
                                    <div class="w-4 mr-2 transform hover:text-naranja hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>

                                    <div class="w-4 mr-2 transform hover:text-red-800 hover:scale-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        @stop
