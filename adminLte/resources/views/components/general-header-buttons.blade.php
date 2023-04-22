
<div class="flex justify-between">
    <div class="m-10">
        <a href="{{ route('general', $bootcamp->id) }}">
            <x-section-button class="m-auto">
                {{ __('General') }}
            </x-section-button>
        </a>
        <a href="{{ route('exercises', $bootcamp->id) }}">
            <x-section-button class="m-auto">
                {{ __('Ejercicios') }}
            </x-section-button>
        </a>

    </div>
</div>