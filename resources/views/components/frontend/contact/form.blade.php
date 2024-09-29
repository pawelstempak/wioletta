<div class="mb-12 lg:mb-0">
    @if(Route::currentRouteName()=="sendcontact")
    Wiadomość została wysłana.
    @endif

    <h2 class="text-primary pl-3 py-2 mb-6 text-[24px] sm:text-[28px] lg:text-[30px] bg-transparent">
        <span class="text-secondary">#</span> Napisz do nas
    </h2>
    <form action="/contact" method="post">
        @csrf
        <div class="mb-6">
            <input required value="{{ old('name') }}" type="text" name="name" placeholder="Imię" class="text-body-color outline-none focus-visible:shadow-none border border-sand_dark focus:border-sand_dark focus:ring-sand_dark bg-[#fffaf5] focus:ring-1 w-full rounded py-3 px-[14px] text-base" />
        </div>
        <div class="mb-6">
            <input required value="{{ old('email') }}" type="email" name="email" placeholder="Email" class="text-body-color outline-none focus-visible:shadow-none border border-sand_dark focus:border-sand_dark focus:ring-sand_dark bg-[#fffaf5] focus:ring-1 w-full rounded py-3 px-[14px] text-base" />
        </div>
        <div class="mb-6">
            <input required value="{{ old('phone') }}" type="text" name="phone" placeholder="Telefon" class="text-body-color outline-none focus-visible:shadow-none border border-sand_dark focus:border-sand_dark focus:ring-sand_dark bg-[#fffaf5] focus:ring-1 w-full rounded py-3 px-[14px] text-base" />
        </div>
        <div class="mb-6">
            <textarea rows="6" name="content" placeholder="Tu wpisz swoje pytanie" class="text-body-color outline-none focus-visible:shadow-none border border-sand_dark focus:border-sand_dark focus:ring-sand_dark bg-[#fffaf5] focus:ring-1 w-full rounded py-3 px-[14px] text-base" required>{{ old('content') }}</textarea>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </div>
        <div class="text-center">
            <button type="submit" class="                
                mt-2
                inline-block 
                rounded-lg
                px-10 py-2 text-xl 
                font-mono font-semibold
                leading-normal 
                text-white
                hover:text-white  
                bg-secondary
                hover:bg-[#008A17]
                hover:border-dark
                focus:border-neutral-800
                focus:text-white 
                focus:outline-none 
                focus:ring-0 
                active:border-primary 
                active:text-white 
                dark:border-neutral-900 
                dark:text-neutral-900 
                dark:hover:border-neutral-900
                dark:hover:bg-neutral-100 
                dark:hover:bg-opacity-10 
                dark:hover:text-neutral-900 
                dark:focus:border-neutral-900 
                dark:focus:text-neutral-900 
                dark:active:border-neutral-900 
                dark:active:text-neutral-900
                hover:scale-105
                transition duration-200 ease-in-out                    
                cursor-pointer
                ">
                Wyślij
            </button>
        </div>
    </form>
</div>