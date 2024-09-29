<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Oferta
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container flex justify-center mt-10">
                <div class="w-full mx-auto text-center">
                    <form action="/offer" method="post">
                        @csrf
                        <div class="mb-2 text-xl"><label>Treść pola Oferta<label></div>
                        <div class="pb-10">
                            <textarea placeholder="Treść pola Oferta" class="border-form-stroke text-body-color placeholder-body-color focus:border-primary active:border-primary rounded-lg border-[1.5px] py-3 px-5 font-medium outline-none transition disabled:cursor-default disabled:bg-[#F5F7FD] h-96 w-1/2" name="text1" />{{ $offer->text1 }}</textarea>
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