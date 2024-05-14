<x-myLayout meta-title="Blog" meta-description="Blog description">
    <h1 class="flex justify-center mt-12 font-shadowhand text-7xl">Blog</h1>

    <div class="flex flex-col p-16">
        <h1 class="text-4xl font-worksansbold">Publicaciones</h1>
        <div class="bg-slate-400 w-2/4 h-5 mb-4"></div>

        @foreach ($posts as $post)
                <h2 class=" text-xl font-worksansmedium">
                    <a href="{{ route('posts.show', $post)  }}">
                        {{ $post->title }}
                    </a>
                    <small class="text-xs text-pink-700 uppercase ">
                        <a href="{{ route('posts.edit', $post) }}">Editar</a>
                    </small>
                </h2>
                
        @endforeach
    </div>

    <div class="absolute bottom-32 right-11">
        <a href="{{ route('posts.create') }}" 
           class="border-2 border-slate-700 hover:bg-slate-700 hover:text-white rounded-md p-6 transition-all ease-out">
           Crear un nuevo post
        </a>
    </div>
</x-myLayout>