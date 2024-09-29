<!-- ====== Modal Section Start -->
<div
    x-show="modalImg{{$id}}"
    x-transition.duration.500ms
    class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-black bg-opacity-90 px-4 py-5 z-50"
  >
    <div
      @click.outside="modalImg{{$id}} = false"
      class="w-full max-w-[960px] max-h-screen"
    >
    <div class="relative max-h-screen">
    <img src="{{$url}}" @click="modalImg{{$id}} = false">
    <p @click="modalImg{{$id}} = false" class="cursor-pointer absolute top-2 right-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-white bi bi-x-square-fill" viewBox="0 0 16 16">
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
        </svg>
    </p>
    </div>
    </div>
  </div>
<!-- ====== Modal Section End -->
