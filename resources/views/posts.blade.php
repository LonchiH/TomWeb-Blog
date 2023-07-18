<x-layout>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">TomasinoWeb Blog</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Lancelot Bulan - 3CSA</p>
            @include('components.drawer')
          </div>
          
          <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            
            @foreach ($posts as $post)
            
            <article class="flex max-w-xl flex-col items-start justify-between bg-gray-100 p-3 rounded-md">
              <div class="flex items-center gap-x-4 text-xs">
                <time class="text-gray-500">{{$post->created_at}}</time>
                <div class="relative rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Receipt #{{$post->id}}</div>
              </div>
              <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                  <a href="{{ route('posts.show',$post->id) }}">
                    <span class="absolute inset-0"></span>
                    {{$post->title}}
                  </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$post->body}}</p>
              </div>
              <div class="relative mt-8 flex items-center gap-x-4">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                <div class="text-sm leading-6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{$post->author}}
                    </a>
                  </p>
                  {{-- <p class="text-gray-600">Author</p> --}}
                </div>
              </div>
            </article>

            @endforeach

          </div>
        </div>
      </div>
    @include('components.footer')

</x-layout>