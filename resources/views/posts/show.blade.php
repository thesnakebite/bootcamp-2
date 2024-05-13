<x-myLayout :meta-title="$post->title"  :meta-description="$post->body">
    <h1 class="flex justify-center mt-12 font-shadowhand text-7xl">Blog</h1>

    <div class="flex flex-col p-16 justify-center items-center">
        <h1 class="flex justify-center items-center text-center h-14 w-80 rounded border-stone-600 border-b text-2xl font-worksansbold mb-8">{{ $post->title }}</h1>
        <div class="w-full text-center">
            {{ $post->body }}
        </div>
        <div class="mt-12">
            <a href="{{ route('posts.index') }}"
               class="font-worksansbold uppercase text-blue-700">
               Volver
            </a>
        </div>
    </div>
</x-myLayout>