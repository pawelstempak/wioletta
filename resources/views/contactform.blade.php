<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kontakt
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container flex justify-center mt-10">
                <div class="w-full mx-auto text-center">
                    <form action="/contactform" method="post">
                        @csrf
                        <div class="mb-2 text-xl"><label>Treść pola Nasza siedziba<label></div>
                        <div class="pb-10">
                            <textarea placeholder="Nasza siedziba" class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] h-24 w-1/2" name="siedziba" />{{ $contact->siedziba }}</textarea>
                        </div>
                        <div class="mb-2 text-xl"><label>Treść pola Telefon<label></div>
                        <div class="pb-10">
                            <textarea placeholder="Telefon" class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] h-24 w-1/2" name="telefon" />{{ $contact->telefon }}</textarea>
                        </div>
                        <div class="mb-2 text-xl"><label>Treść pola Adres e-mail<label></div>
                        <div class="pb-10">
                            <textarea placeholder="Adres e-mail" class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] h-24 w-1/2" name="email" />{{ $contact->email }}</textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" name="save_button" value="Zapisz" class="cursor-pointer border-gray-500 hover:bg-primary hover:border-primary inline-flex items-center justify-center rounded-lg border py-[10px] px-[12px] text-center text-base font-semibold text-dark transition-all hover:text-white sm:py-3 sm:px-6 m-1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>