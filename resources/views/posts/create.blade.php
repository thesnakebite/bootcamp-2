<x-myLayout meta-title="Create new post" meta-description="Blog create">
    <h1 class="flex justify-center mt-12 font-shadowhand text-7xl">Blog</h1>

    <div class="flex flex-col p-16">
        <h1 class="text-2xl font-worksansbold">{{ __('Create new post') }}</h1>
        <div class="bg-slate-400 w-56 h-5 mb-4"></div>

        <form class="flex flex-col w-3/4" 
              action="{{ route('posts.store') }}"
              method="POST"
        >

            @csrf
           @include('posts.form-field')

            <button class="w-36 bg-white text-black hover:bg-slate-900 hover:text-white font-worksansmedium border-2 border-slate-400 p-2 rounded-md transition-all ease-out">
                {{ __('Post create') }}
            </button>
        </form>
        <br />
        <a href="{{ route('posts.index') }}" class="font-worksansbold uppercase hover:text-blue-800">{{ __('Back') }}</a>

        
    </div>
</x-myLayout>