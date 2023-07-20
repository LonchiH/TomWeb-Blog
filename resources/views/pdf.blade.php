<x-layout>
    <article class="container max-w-screen-md mx-auto p-4">
        <p class="p-3 text-gray-500 text-center dark:text-black first-line:uppercase text-7xl">{{$post->title}}</p>

        <p class="text-gray-500 dark:text-black text-justify my-9">
            {{$post->body}}
        </p>
    </article>
</x-layout>