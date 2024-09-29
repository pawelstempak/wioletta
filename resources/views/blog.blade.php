<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Galeria
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl">



                <!-- ====== Table Section Start -->
                <section class="bg-white">
                    <div class="container mx-auto">
                        <div class="-mx-4 flex flex-wrap">
                            <div class="w-full">
                                <div class="max-w-full shadow-xl mx-4">
                                    <table class="w-full table-auto">
                                        <thead>
                                            <tr class="bg-dark text-center">
                                                <th class="w-1/2 border-l border-primary py-4 px-3 text-lg font-semibold text-left text-white lg:py-2 lg:px-4">
                                                    Nazwa
                                                </th>
                                                <th class="w-1/6 border-r border-primary py-4 px-3 text-lg font-semibold text-right text-white lg:py-2 lg:px-4">
                                                    <a href="/blog/add" class="border-white/50 text-primary bg-white hover:bg-primary inline-block rounded border px-2 py-1 hover:text-white text-sm">Dodaj</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bloglist as $sl)
                                            <tr>
                                                <td class="text-dark border-l border-b border-[#E8E8E8] py-2 px-4 text-left text-base font-medium">
                                                {{$sl->name}}
                                                </td>
                                                <td class="text-dark border-b border-r border-[#E8E8E8] bg-white py-2 px-4 text-right text-base font-medium">
                                                    <a href="blog/edit/{{$sl->id}}" class="border-primary text-primary/75 hover:bg-primary inline-block rounded border px-4 py-1 hover:text-white text-sm">
                                                        Edytuj
                                                    </a>
                                                    <button type="button" class="border-alert text-alert/75 hover:bg-alert inline-block rounded border px-4 py-1 hover:text-white text-sm" data-te-toggle="modal" data-te-target="#delete{{$sl->id}}" data-te-ripple-init data-te-ripple-color="light">
                                                        Usuń
                                                    </button>
                                                    <x-modal-delete type="blog" :id="$sl->id" />
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Table Section End -->



            </div>
        </div>
    </div>
</x-app-layout>