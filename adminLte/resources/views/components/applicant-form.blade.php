<body class="font-sans text-gray-900 antialiased">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gris shadow-md overflow-hidden sm:rounded-lg text-black">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <h2 class="font-bold">Añadir postulante</h2>
            <br>

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre y apellidos')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <br>
            </div>

                <!-- Teléfono -->
            <div>
                <x-input-label for="phone" :value="__('Teléfono de contacto')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                <br>
            </div>

                <!-- Url perfil -->
            <div>
                <x-input-label for="profile" :value="__('Url perfil de Codecademy')" />
                <x-text-input id="profile" class="block mt-1 w-full" type="url" name="profile" :value="old('profile')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('profile')" class="mt-2" />
                <br>
            </div>      

            <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ml-4">
                    {{ __('Añadir') }}
                </x-primary-button>
            </div>

        </form>
    </div>
</body>
