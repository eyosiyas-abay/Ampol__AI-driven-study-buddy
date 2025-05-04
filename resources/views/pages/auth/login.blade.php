<x-layouts.app>
    <div class="w-96 bg-white mx-auto mt-14 p-5 rounded-lg">
        <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
            <x-heroicon-o-light-bulb class="w-6 h-6 text-blue-600" />
        </div>

        <h1 class="font-semibold text-lg mt-2">Welcome Back</h1>
        <p class="text-gray-500">Ampol Makes Studying Effortless</p>

        @livewire('auth.login-form')

        <p class="mt-2 text-gray-500">New to Ampol? <a href="/auth/register" class="text-blue-500">Register</a></p>
    </div>
</x-layouts.app>
