@csrf 

<!-- * start -->
    <label class="uppercase text-gray-700 text-xs">Title</label>

    <span class="text-xs text-red-600">
        @error('title') {{ $message }} @enderror
    </span>

    <input type="text" name="title" class="rounded border-gray-200 text-gray-900 w-full mb-4" value="{{ old('title', $post->title) }}"></input>

<!-- * END -->


<!-- * start -->
    <label class="uppercase text-gray-700 text-xs">Slug</label>

    <span class="text-xs text-red-600">
        @error('slug') {{ $message }} @enderror
    </span>

    <input type="text" name="slug" class="rounded border-gray-200 text-gray-900 w-full mb-4" value="{{ old('slug', $post->slug) }}"></input>

<!-- * END -->


<!-- * start -->
    <label class="uppercase text-gray-700 text-xs">Content</label>

    <span class="text-xs text-red-600">
        @error('body') {{ $message }} @enderror
    </span>


    <textarea name="body" rows="5" class="rounded border-gray-200 text-gray-900 w-full mb-4">{{ old('body', $post->body) }}</textarea>

    <div class="flex justify-between items-center">

        <a href="{{ route('posts.index') }}" class="text-indigo-600">Go back</a>


        <input type="submit" value="Send" class="bg-red-600 text-white rounded px-4 py-2">

    </div>
<!-- * END -->