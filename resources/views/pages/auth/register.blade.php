<x-layouts.app>
    <div class="w-96 bg-white mx-auto mt-14 p-5 rounded-lg">
        <div class="w-12 h-12 rounded-lg bg-blue-100 flex items-center justify-center">
            <x-heroicon-o-light-bulb class="w-6 h-6 text-blue-600" />
        </div>

        <h1 class="font-semibold text-lg mt-2">Get Started Now</h1>
        <p class="text-gray-500">Ampol Makes Studying Effortless</p>

        <div class="mt-5 flex flex-col gap-2.5" x-data='{type: "password"}'>
            <x-forms.input label="Name">
                <x-slot name="left">
                    <x-heroicon-o-user class="w-4 h-4 text-gray-400" />
                </x-slot>
            </x-forms.input>

            <x-forms.input label="Email">
                <x-slot name="left">
                    <x-heroicon-o-envelope class="w-4 h-4 text-gray-400" />
                </x-slot>
            </x-forms.input>
            <x-forms.input label="Password" x-bind:type="type">
                <x-slot name="left">
                    <x-heroicon-o-key class="w-4 h-4 text-gray-400" />
                </x-slot>
                <x-slot name="right">
                    <button class="cursor-pointer" x-on:click="type = type == 'text' ? 'password' : 'text'">
                        <template x-if="type == 'text'">
                            <x-heroicon-o-eye class="w-4 h-4 text-gray-400" />
                        </template>
                        <template x-if="type == 'password'">
                            <x-heroicon-o-eye-slash class="w-4 h-4 text-gray-400" />
                        </template>
                    </button>
                </x-slot>
            </x-forms.input>
            <x-forms.input label="Confirm Password" x-bind:type="type">
                <x-slot name="left">
                    <x-heroicon-o-key class="w-4 h-4 text-gray-400" />
                </x-slot>
                <x-slot name="right">
                    <button class="cursor-pointer" x-on:click="type = type == 'text' ? 'password' : 'text'">
                        <template x-if="type == 'text'">
                            <x-heroicon-o-eye class="w-4 h-4 text-gray-400" />
                        </template>
                        <template x-if="type == 'password'">
                            <x-heroicon-o-eye-slash class="w-4 h-4 text-gray-400" />
                        </template>
                    </button>
                </x-slot>
            </x-forms.input>
            <x-forms.button class="mt-5">
                Login
            </x-forms.button>
        </div>

        <p class="mt-2 text-gray-500">Already registered? <a href="/auth/login" class="text-blue-500">Login</a></p>
    </div>
</x-layouts.app>
