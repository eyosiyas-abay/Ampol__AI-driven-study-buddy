<header class="flex items-center justify-between py-4 px-6 w-[1266px] mx-auto bg-[#ffffff] rounded-full">
    <div class="w-24">
        <x-ui.logo />
    </div>

    <x-nav.index />

    <div class="w-40 flex justify-end items-center gap-3">
        @auth
            <div class="relative flex items-center" x-data="{ isOpen: false }">
                <button class="min-w-10 max-h-10 w-10 h-10 cursor-pointer rounded-full" x-on:click="isOpen=!isOpen">
                    <img src="{{ asset('images/avatar.svg') }}" alt="" class="w-full h-full">
                </button>

                <div class="shadow-2xl shadow-blue-500/20 absolute bg-white border-t border-t-gray-100 top-9 right-0 min-w-36 rounded-lg flex flex-col py-1 z-30"
                    x-show="isOpen">
                    <p class="px-4 py-2 text-left text-sm text-gray-500">Eyosiyas A.</p>
                    <form method="POST" action="{{ route('auth.logout') }}" class="w-full">
                        @csrf
                        <button
                            class="px-4 py-2 hover:bg-blue-100 text-left cursor-pointer text-sm border-t border-t-gray-200 flex items-center gap-1.5 w-full"
                            type="submit">
                            <x-heroicon-o-power class="w-3.5 h-3.5 text-red-500" />
                            @lang('Logout')
                        </button>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <x-nav.link type="primary" href="{{ route('get-started') }}">
                @lang('Get Started')
                <x-heroicon-o-arrow-up-right class="w-3.5 h-3.5" />
            </x-nav.link>
        @endguest

        <div class="flex items-center gap-1 relative" x-data="{
            isOpen: false,
            changeLanguage(lang) {
                window.location.href = '/lang/' + lang;
            }
        }">
            <button class="flex items-center gap-1 cursor-pointer" x-on:click="isOpen=!isOpen">
                <x-heroicon-o-globe-europe-africa class="w-5 h-5" />
                <x-heroicon-o-chevron-down class="w-3 h-3" />
            </button>

            <div class="shadow-2xl shadow-blue-500/20 absolute bg-white border-t border-t-gray-100 top-9 right-0 min-w-36 rounded-lg flex flex-col py-1 z-30"
                x-show="isOpen">
                <x-nav.link class="px-4 py-2 hover:bg-blue-100 text-left cursor-pointer text-sm"
                    href="{{ route('language.switch', 'en') }}">
                    English
                </x-nav.link>
                <x-nav.link class="px-4 py-2 hover:bg-blue-100 text-left cursor-pointer text-sm"
                    href="{{ route('language.switch', 'zh') }}">
                    中国人
                </x-nav.link>
                <x-nav.link class="px-4 py-2 hover:bg-blue-100 text-left cursor-pointer text-sm"
                    href="{{ route('language.switch', 'am') }}">
                    አማርኛ
                </x-nav.link>
                <x-nav.link class="px-4 py-2 hover:bg-blue-100 text-right cursor-pointer text-sm"
                    href="{{ route('language.switch', 'ar') }}">
                    عربي
                </x-nav.link>
                <x-nav.link class="px-4 py-2 hover:bg-blue-100 text-left cursor-pointer text-sm"
                    href="{{ route('language.switch', 'hi') }}">
                    हिन्दी
                </x-nav.link>
                <x-nav.link class="px-4 py-2 hover:bg-blue-100 text-left cursor-pointer text-sm"
                    href="{{ route('language.switch', 'es') }}">
                    Española
                </x-nav.link>
            </div>
        </div>
    </div>
</header>
