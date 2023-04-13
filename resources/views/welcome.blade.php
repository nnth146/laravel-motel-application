<x-app>
    <x-slot name="navigation">
        <x-navigation>
            <x-slot name="left">
                <x-buttons.laravel></x-buttons.laravel>
            </x-slot>
            <x-slot name="right">
                @if (Auth::user())

                @else
                    <div class="flex items-center gap-2">
                        <x-buttons.login></x-buttons.login>
                        <x-buttons.register></x-buttons.register>
                    </div>
                @endif
            </x-slot>
        </x-navigation>
    </x-slot>
    <x-slot name="main">

    </x-slot>
</x-app>
