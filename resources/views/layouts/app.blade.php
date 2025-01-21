<x-base-layout>
    @include('layouts.partials.header')
    {{$slot}}
    @hasSection('footerLinks')
        <footer>
            @yield('footerLinks')

        </footer>
    @endif
</x-base-layout>


