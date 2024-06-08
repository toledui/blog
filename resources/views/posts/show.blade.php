<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {{$post->extract}}
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Contenido principal --}}
            <div class="md:col-span-2">

                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image)}}" alt="">
                </figure>

                <div class="text-base text-gray-500 mt-4">
                    {!!$post->body!!}
                </div>
            </div>
            {{-- Sidebar --}}
            <aside>
                <h2 class="text-2xl font-bold text-gray-600 mb-4">Más en {{$post->category->name}}</h2>
                <ul>
                    @foreach ($similares as $similar)
                    <li class="mb-4">
                        <a class="flex text-gray-600 hover:text-gray-400" href="{{route('posts.show', $similar)}}">
                            <img class=" h-20 object-cover object-center" src="{{Storage::url($similar->image)}}" alt="">
                            <h3 class="ml-2 font-bold text-xl">{{$similar->name}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>