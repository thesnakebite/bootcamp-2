<x-myLayout meta-title="Create new post" meta-description="Blog create">
    <h1 class="flex justify-center mt-12 font-shadowhand text-7xl">Blog</h1>

    <div class="flex flex-col p-16">
        <h1 class="text-2xl font-worksansbold">Crear un post</h1>
        <div class="bg-slate-400 w-56 h-5 mb-4"></div>

        <form class="flex flex-col w-3/4" 
              action="{{ route('posts.store') }}"
              method="POST"
        >

            @csrf
            <label for="title" class=" font-worksansmedium">Título</label>
            <input name="title" id="title" type="text" class="border-2 border-slate-400 p-2 mb-4" value="{{ old('title') }}">
            @error('title')
                <small class="bg-red-200 border-red-500 border-2 rounded p-2 mb-2 text-red-500">{{ $message }}</small>
            @enderror

            <label for="body" class="font-worksansmedium">Contenido</label>
            <textarea name="body" id="body" cols="30" rows="10" class="border-2 border-slate-400 mb-4">{{old('body')}}</textarea>
            @error('body')
                <small class="bg-red-200 border-red-500 border-2 rounded p-2 mb-2 text-red-500">{{ $message }}</small>
            @enderror

            <button class="w-36 bg-white text-black hover:bg-slate-900 hover:text-white font-worksansmedium border-2 border-slate-400 p-2 rounded-md transition-all ease-out">
                Crear post
            </button>
        </form>

        
    </div>
</x-myLayout>