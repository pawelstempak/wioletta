      <!-- ====== Navbar Section Start -->
      <header class="flex w-full items-center">
        <div class="mx-auto bg-white w-full shadow-xl">
          <div class="bg-primary text-white text-center p-2 shadow-xl">
            Metaloplastyka, bramy, ogrodzenia, okucia metalowe, elementy ozdobne z metalu <span class="xs:inline-block sm:block md:inline-block mt-1 md:mt-0"><a href="tel:{{ $phone->telefon }}" class="ml-2 border bg-secondary hover:text-white hover:bg-secondary/75 border-secondary hover:border-white rounded text-primary py-1 px-3">{{ $phone->telefon }}</a></span>
          </div>
          <div class="sm:container xs:px-5 mx-auto">
            <div class="relative -mx-4 flex items-center justify-between">
              <div class="w-80 max-w-full px-4">
                <a href="/" class="block w-full py-2 transition ease-in-out delay-50 duration-300 hover:scale-105">
                  <p class="text-4xl">TIMMSPAWTECH</p>
                </a>
              </div>
              <div class="flex w-full items-end justify-end px-4">
                <x-frontend.navbar-links />
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ====== Navbar Section End -->