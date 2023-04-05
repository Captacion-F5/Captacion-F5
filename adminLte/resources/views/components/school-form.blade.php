<x-guest-layout>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Event name -->
        <div>
            <x-input-label for="school" :value="__('Escuela')" />
            <x-text-input id="school" class="block mt-1 w-full" type="text" name="school" :value="old('school')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('Añadir') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
