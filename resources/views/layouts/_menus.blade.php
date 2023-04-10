<div class="py-1 text-gray-500">
    <a class="px-6" href="#">
        <img class="mx-auto w-34 h-8" src={{ asset("img/icon/logo.png") }} alt="" loading="lazy" />
    </a>
    <ul class="mt-7 px-4">
        <li class="relative px-6 py-3">
            {!! request()->routeIs('dashboard') ? '<span class="absolute inset-y-0 left-0 w-1 bg-green-1 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold text-green-1 transition-colors duration-150 hover:text-green-1" href="{{route('dashboard')}}">
                <img class="w-5 h-5" src={{ asset("img/icon/dasbor.png") }} alt="" loading="lazy" />
                <span class="ml-4">{{ __('Dasbor') }}</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('forms') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="{{route('forms')}}">
                <img class="w-5 h-5" src={{ asset("img/icon/proyek.png") }} alt="" loading="lazy" />
                <span class="ml-4">Proyek</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('cards') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="{{route('cards')}}">
                <img class="w-5 h-5" src={{ asset("img/icon/sales.png") }} alt="" loading="lazy" />
                <span class="ml-4">Sales</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('charts') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="{{route('charts')}}">
                <img class="w-5 h-5" src={{ asset("img/icon/pelanggan.png") }} alt="" loading="lazy" />
                <span class="ml-4">Pelanggan</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('buttons') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" @click="toggleSubMenu" @keydown.escape="closeSubMenu">
                <img class="w-5 h-5" src={{ asset("img/icon/vendor.png") }} alt="" loading="lazy" />
                <span class="ml-4">Vendor</span>
                <!-- <img class="w-2 h-2 items-left" src={{ asset("img/icon/down.png") }} alt="" loading="lazy" /> -->
                <svg class="w-6 h-6 flex-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <template x-if="isSubMenuOpen">
            <ul @keydown.escape="closeSubMenu">
                <li class="relative px-6 py-3">
                {!! request()->routeIs('modals') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="{{route('modals')}}">
                        <span class="ml-4">Barang</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    {!! request()->routeIs('tables') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="{{route('tables')}}">
                        <span class="ml-4">Jasa</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    {!! request()->routeIs('calendar') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800" href="{{route('calendar')}}">
                        <span class="ml-4">Vendor</span>
                    </a>
                </li>
            </ul>
            </template>
        </li>
    </ul>
</div>
