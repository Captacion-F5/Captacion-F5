<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Event name -->
        <div>
            <x-input-label for="bootcamp" :value="__('Nuevo bootcamp')" />
            <x-text-input id="bootcamp" class="block mt-1 w-full" type="text" name="bootcamp" :value="old('bootcamp')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Añadir') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
