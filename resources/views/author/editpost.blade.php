<x-app-layout>

    <header class="bg-gray-800 text-white">
        @include('admin.admin_header')
    </header>

    <form method="post" action="{{ route('post.update', ['post' => $post]) }}" enctype="multipart/form-data"
        class="max-w-md mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mt-8 mb-4">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Title: </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" type="text" name="title" placeholder="Name" value="{{ $post->title }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">Description: </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" type="text" name="description" placeholder="Description"
                value="{{ $post->description }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="post_image">Image: </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="image" type="file" name="image" placeholder="Image" value="{{ $post->image }}">
        </div>

        <div class="flex items-center justify-between">
            <input
                class="bg-red-500 hover:bg-skyblue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit" value="Update Post">
        </div>
    </form>
</x-app-layout>
