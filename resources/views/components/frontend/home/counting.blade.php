<section class="md:pt-20 pb-10" x-data="counting()">
    <div class="mx-auto sm:container xs:px-8" x-init="toggleCounting()">
        <div class="md:flex md:justify-between w-full mt-10 md:mt-0">
            <div class="mx-auto w-full text-center">
                <div class="mb-5 py-6 md:mr-10 lg:mr-20 bg-primary md:py-[48px] xl:py-12">
                    <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white">Lata</span><br />
                    <span class="text-2xl md:text-xl lg:text-2xl font-exo text-lightSecondary">doświadczenia</span>
                </div>
            </div>
            <div class="mx-auto w-full text-center">
                <div class="mb-5 py-6 md:py-12 md:mr-5 md:ml-5 lg:mx-10 bg-primary">
                    <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="fromSquareFootageValue"></span><br />
                    <span class="text-2xl md:text-xl lg:text-2xl font-exo text-lightSecondary">ton użytej stali</span>
                </div>
            </div>
            <div class="mx-auto w-full text-center">
                <div class="py-6 md:py-12 md:ml-10 lg:ml-20 bg-primary">
                    <span class="text-4xl md:text-2xl lg:text-6xl font-exo text-white" x-text="parkingSpacesValue"></span><br />
                    <span class="px-0 text-2xl md:px-1 lg:px-0 md:text-xl lg:text-2xl font-exo text-lightSecondary">różnych projektów</span>
                </div>
            </div>
        </div>
        <div id="second"></div>
    </div>
</section>