<x-layouts.base :title="$title ?? 'Dashboard'">
    <div class="min-h-screen flex flex-col">
        <div class="flex flex-1">
            <main class="flex-1 overflow-y-auto">
                @if (request()->routeIs('home'))
                    <div class="w-full pt-5 bg-no-repeat bg-cover bg-center"
                        style="background-image: url('{{ asset('images/rect_light.svg') }}');">
                        <x-layouts.partials.header />
                        <x-hero />
                    </div>
                @else
                    <div class="w-full pt-5">
                        <x-layouts.partials.header />
                    </div>
                @endif

                {{ $slot }}
            </main>
        </div>
    </div>

</x-layouts.base>
