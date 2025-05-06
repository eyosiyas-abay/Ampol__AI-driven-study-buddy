<x-layouts.app>
    <div class="w-96 bg-white mx-auto mt-14 p-5 rounded-lg">
        <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
            <x-heroicon-o-light-bulb class="w-6 h-6 text-blue-600" />
        </div>

        <h1 class="font-semibold text-lg mt-2">Get Started Now</h1>
        <p class="text-gray-500">Ampol Makes Studying Effortless</p>

        @livewire('auth.register-form')

        <p class="mt-2 text-gray-500">Already registered? <a href="/auth/login" class="text-blue-500">Login</a></p>
    </div>
</x-layouts.app>
