<label for="title" class=" font-worksansmedium">{{ __('Title') }}</label>
<input name="title" id="title" type="text" class="border-2 border-slate-400 p-2 mb-4" value="{{ old('title', $post->title) }}">
@error('title')
    <small class="bg-red-200 border-red-500 border-2 rounded p-2 mb-2 text-red-500">{{ $message }}</small>
@enderror

<label for="body" class="font-worksansmedium">{{ __('Body') }}</label>
<textarea name="body" id="body" cols="30" rows="10" class="border-2 border-slate-400 mb-4">{{old('body', $post->body)}}</textarea>
@error('body')
    <small class="bg-red-200 border-red-500 border-2 rounded p-2 mb-2 text-red-500">{{ $message }}</small>
@enderror