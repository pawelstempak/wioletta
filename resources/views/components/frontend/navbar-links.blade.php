              <div x-data="{ navbarOpen: false }" class="my-10 lg:my-0">
                <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden">
                  <span class="bg-primary relative my-[6px] block h-[2px] w-[30px]"></span>
                  <span class="bg-primary relative my-[6px] block h-[2px] w-[30px]"></span>
                  <span class="bg-primary relative my-[6px] block h-[2px] w-[30px]"></span>
                </button>
                <nav :class="!navbarOpen && 'hidden' " id="navbarCollapse" class="absolute right-4 top-full w-full max-w-[300px] bg-white lg:bg-transparent rounded-lg py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none z-50">
                  <ul class="block lg:flex">
                    <li>
                      <a href="/" class="{{ request()->is('/') ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white text-primary transition ease-in-out flex pt-3 pb-3 px-3 rounded xl:py-2 text-xl font-medium xl:inline-flex mx-1">
                        &nbsp;OFERTA&nbsp;
                      </a>
                    </li>
                    <li>
                      <a href="/log" class="{{ (request()->is('log') or request()->route()->named('showitem')) ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white text-primary transition ease-in-out flex py-3 px-3 rounded xl:py-2 text-xl font-medium xl:inline-flex mx-1">
                        &nbsp;GALERIA&nbsp;
                      </a>
                    </li>
                    <li>
                      <a href="/contact" class="{{ request()->is('contact') ? 'bg-secondary text-white' : 'bg-transparent'}} hover:bg-secondary/75 hover:text-white text-primary transition ease-in-out flex py-3 px-3 rounded xl:py-2 text-xl font-medium xl:inline-flex mx-1">
                        &nbsp;KONTAKT&nbsp;
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>