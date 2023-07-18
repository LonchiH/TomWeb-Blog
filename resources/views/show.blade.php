<x-layout>
    <article class="container max-w-screen-md mx-auto p-4">
        
        <p class="p-3 text-gray-500 text-center dark:text-black first-line:uppercase text-7xl">{{$post->title}}</p>
        <div class="flex items-center justify-center">
            <p class="p-3 text-gray-500 text-center dark:text-black text-sm">Created by: <strong>{{$post->author}}</strong></p>
            <p class="p-3 text-gray-500 text-center dark:text-black text-sm">Receipt #{{$post->id}} </p>
            <p class="p-3 text-gray-500 text-center dark:text-black text-sm">Created {{$post->created_at->diffForHumans()}}</p>
        </div>
        
        
        <p class="text-gray-500 dark:text-black text-justify my-9">
            {{$post->body}}
        </p>
    @include('components.edit')
    </article>
</x-layout>