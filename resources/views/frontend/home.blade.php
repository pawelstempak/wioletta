<x-guest-layout>
        <x-frontend.navbar :$phone />

        <x-frontend.home.slider />
        <x-frontend.home.counting />
        <x-frontend.home.text-panel :$offer />

        <x-frontend.footer :$phone />
</x-guest-layout>