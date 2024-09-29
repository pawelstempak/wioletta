<x-guest-layout>
    <section class="bg-slate-200">
        <x-frontend.navbar :$phone />

        <section class="pt-10 pb-10 lg:pt-20 lg:pb-20 px-5">
            <div class="md:container mx-auto">
            <h1 class="py-3 text-primary block text-6xl font-exo">Galeria</h1>     
                <p class="py-3 px-2 sm:px-10 mb-1 block text-3xl text-secondary mx-auto">#{{$logitem->name}}</p>   
                @if($logitem->description) 
                <p class="text-body-color text-base pl-2 sm:pl-10 pb-5">
                    {{ $logitem->description }}
                </p>       
                @endif
                <div class="-mx-4 flex flex-wrap">                    
                    @foreach($logitemlist as $log)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3" x-data="{modalImg{{$log->id}}: false}">
                        <div class="mx-auto mb-10 bg-sand/25 p-2 rounded-lg shadow-md">
                            <div class="h-60 overflow-hidden rounded">
                                <a @click="modalImg{{$log->id}} = true" class="cursor-pointer"><img src="{{Storage::url('blog/'.$log->filename)}}" alt="image" class="object-cover w-full h-full" /></a>
                            </div>                            
                        </div>
                        <x-modal-img url="{{Storage::url('blog/'.$log->filename)}}" id="{{$log->id}}"/>
                    </div>
                    @endforeach
                </div>
                <div class="text-center"><a href="/log" class="rounded p-2 bg-secondary hover:bg-secondary/75 text-white">Powrót</a></div>
            </div>
        </section>

        <x-frontend.footer :$phone />
    </section>
</x-guest-layout>