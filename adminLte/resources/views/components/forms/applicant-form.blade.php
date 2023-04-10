<body class="font-sans text-gray-900 antialiased">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gris shadow-md overflow-hidden sm:rounded-lg text-black">
        <form method="POST" action="{{ route('postulado.store') }}">
            @csrf

            <h2 class="font-bold">Añadir postulante</h2>
            <br>

            <!-- Name -->
            <div>
                <x-input-label for="nombre" :value="__('Nombre y apellidos')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="mail" :value="__('Email')" />
                <x-text-input id="mail" class="block mt-1 w-full" type="email" name="mail" :value="old('mail')" required autocomplete="mail" />
                <x-input-error :messages="$errors->get('mail')" class="mt-2" />
                <br>
            </div>

                <!-- Teléfono -->
            <div>
                <x-input-label for="telefono" :value="__('Teléfono de contacto')" />
                <x-text-input id="telefono" class="block mt-1 w-full" type="tel" name="telefono" :value="old('telefono')" required autofocus autocomplete="telefono" />
                <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                <br>
            </div>

                <!-- Url perfil -->
            <div>
                <x-input-label for="url_perfil" :value="__('Url perfil de Codecademy')" />
                <x-text-input id="profile" class="block mt-1 w-full" type="text" name="url_perfil" :value="old('url_perfil')" required autofocus autocomplete="url_perfil" />
                <x-input-error :messages="$errors->get('url_perfil')" class="mt-2" />
                <br>
            </div>      

            <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ml-4 bg-naranja">
                    {{ __('Añadir') }}
                </x-primary-button>
            </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

        </form>
    </div>
</body>
