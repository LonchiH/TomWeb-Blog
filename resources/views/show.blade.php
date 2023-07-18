<x-layout>
    <article class="container max-w-screen-md mx-auto">
        <p class="p-3 text-gray-500 dark:text-black-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-black dark:first-letter:text-black first-letter:mr-3 first-letter:float-left">{{$post->title}}</p>

        <p class="text-gray-500 dark:text-black-400 text-justify">
            {{$post->body}}
        </p>
        <a href="/">Return</a>
    @include('components.edit')

    </article>
</x-layout>