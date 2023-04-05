<body class="font-sans text-gray-900 antialiased">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gris shadow-md overflow-hidden sm:rounded-lg text-black">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Event name -->
            <div>
                <x-input-label for="bootcamp" :value="__('Nuevo bootcamp')" />
                <x-text-input id="bootcamp" class="block mt-1 w-full" type="text" name="bootcamp" :value="old('bootcamp')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="ml-3 bg-naranja">
                    {{ __('Añadir') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</body>
