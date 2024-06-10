<x-myLayout meta-title="Blog" meta-description="Blog description">
    <h1 class="flex justify-center mt-12 font-shadowhand text-7xl">Blog</h1>

    <div class="flex flex-col p-16">
        <h1 class="text-4xl font-worksansbold">Publicaciones</h1>
        <div class="bg-slate-400 w-56 h-5 mb-14"></div>

        <table class="border-collapse w-full">
            <thead>
                <tr>
                    <th class="p-3 font-bold uppercase bg-gray-300 text-gray-900 border border-gray-300 hidden lg:table-cell font-worksansbold">Título</th>
                    <th class="p-3 font-bold uppercase bg-gray-300 text-gray-900 border border-gray-300 hidden lg:table-cell font-worksansbold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post )
                    <tr class="bg-white lg:hover:bg-gray-50 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-[-25px] w-full left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Título</span>
                            <a href="{{ route('posts.show', $post)  }}" class="font-worksansmedium">
                                {{ $post->title }}
                            </a>
                        </td>
                        
                        <td class="w-full mt-6 lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                            <span class="lg:hidden absolute top-[-25px] w-full left-0 bg-transparent px-2 py-1 text-xs text-blue-500 font-bold uppercase">Acciones</span>
                            <div class="flex justify-center items-center">
                                <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 font-worksansbold">Editar</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 font-extrabold pl-6 font-worksansbold">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        <div class="lg:absolute lg:bottom-32 lg:right-11 w-full flex justify-center pb-12 lg:py-0 lg:w-auto lg:flex-none">
            <a href="{{ route('posts.create') }}" 
               class="border-2 border-slate-700 hover:bg-slate-400 hover:text-white rounded-md py-2 px-5 w-full transition-all ease-out text-center">
               Crear un nuevo post
            </a>
        </div>
    </div>




</x-myLayout>