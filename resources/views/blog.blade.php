<x-myLayout meta-title="Blog" meta-description="Blog description">
    <h1 class="flex justify-center mt-12 font-shadowhand text-7xl">Blog</h1>

    <div class="flex flex-col p-16">
        <h1 class="text-2xl font-worksansbold">Publicaciones</h1>
        <div class="bg-slate-400 w-2/3 h-5 mb-4"></div>
        @foreach ($posts as $post)
                <h2 class=" text-xl font-worksansmedium">
                    <a href="#">
                        {{ $post->title }}
                    </a>
                </h2>
        @endforeach
    </div>
</x-myLayout>