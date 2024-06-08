<x-app-layout>
    <div class="container">
        <h1 class="mt-6 text-4xl font-bold text-gray-600 uppercase text-center">Todas las entradas de la etiqueta: <span class="text-indigo-600">{{$tag->name}}</span></h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            @foreach ($posts as $post)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url({{Storage::url($post->image)}})">
                <div class="w-full h-full px-8 flex flex-col justify-center">
                    <div class="text-center">
                        @foreach ($post->tags as $tag)
                            <a class="px-4 h-6 inline-block bg-{{$tag->color}}-600 rounded-full text-white font-semibold" href="{{route('posts.tag', $tag)}}">{{$tag->name}}</a>
                        @endforeach
                    </div>
                    <h2 class="text-4xl text-white text-center leading-8 font-bold">
                        <a class="" href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                    </h2>
                </div>
            </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>