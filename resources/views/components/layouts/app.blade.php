<x-layouts.base :title="$title ?? 'Dashboard'">
    <div class="min-h-screen flex flex-col">
        <div class="flex flex-1">
            <main class="flex-1 overflow-y-auto">
                <div class="pt-5">
                    <x-layouts.partials.header />
                    <x-hero />
                </div>
                {{ $slot }}
            </main>
        </div>
    </div>

</x-layouts.base>
