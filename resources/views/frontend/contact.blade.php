<x-guest-layout>
        <div class="bg-slate-200">
                <x-frontend.navbar :$phone />
                <section class="relative overflow-hidden pb-16 pt-12">
                        <div class="px-5 sm:px-10 lg:container mx-auto">
                                <div class="xl:mx-20 flex flex-wrap lg:justify-between">
                                        <div class="w-full lg:w-1/2 md:px-10">
                                                <x-frontend.contact.details :$contact />
                                        </div>
                                        <div class="w-full lg:w-1/2 md:px-10">
                                                <x-frontend.contact.form />
                                        </div>
                                </div>
                        </div>
                </section>
        </div>
        <x-frontend.footer :$phone />
</x-guest-layout>