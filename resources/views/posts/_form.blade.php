@csrf 

<label class="uppercase text-gray-700 text-xs">Title</label>
<input type="text" name="title" class="rounded border-gray-200 text-gray-900 w-full mb-4" value="{{ $post->title }}"></input>

<label class="uppercase text-gray-700 text-xs">Content</label>
<textarea name="body" rows="5" class="rounded border-gray-200 text-gray-900 w-full mb-4">{{ $post->body }}</textarea>

<div class="flex justify-between items-center">

    <a href="{{ route('posts.index') }}" class="text-indigo-600">Go back</a>


    <input type="submit" value="Send" class="bg-red-600 text-white rounded px-4 py-2">

</div>