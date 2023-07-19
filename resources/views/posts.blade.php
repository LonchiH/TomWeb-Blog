<x-layout>
  <section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center lg:mb-16 mb-8">
            <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">TomWeb Blog</h2>
            <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">"Power resides where men believe it resides. It's a trick, a shadow on the wall. And, a very small man can cast a very large shadow." — Varys.</p>
        </div> @include('components.create')
        <div class="grid gap-8 lg:grid-cols-2 mt-8">

          @foreach ($posts as $post)

            <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="flex justify-between items-center mb-5 text-gray-500">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">Receipt #{{$post->id}}
                    </span>
                    <span class="text-sm">{{$post->created_at->diffForHumans()}}</span>
                </div>
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{$post->title}}</a></h2>
                <p class="mb-5 font-light text-gray-500 dark:text-gray-400 line-clamp-4
                ">{{$post->body}}</p>
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <span class="font-medium dark:text-white">
                          {{$post->author}}
                        </span>
                    </div>
                    <a href="{{ route('show',$post->id) }}" class="inline-flex items-center font-medium text-white dark:text-white hover:underline">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article>      
            
          @endforeach

        </div>  
    </div>
  </section>
    @include('components.footer')

</x-layout>