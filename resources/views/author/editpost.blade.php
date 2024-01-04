<x-app-layout>

    <header class="bg-gray-800 text-white">
        @include('admin.admin_header')

        <style>
            .post-title {
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                margin-bottom: 20px;
                color: #4D5CAD;
            }
        </style>

    </header>

    <div class="flex justify-center"><!-- Center the form vertically -->
        <form method="post" action="{{ route('post.update', ['post' => $post]) }}" enctype="multipart/form-data"
            class="max-w-3xl w-full bg-white shadow-md rounded-lg px-8 pt-8 pb-10 mt-6 mb-4">

            @csrf

            @method('PUT')

            <div class="mb-5">

                <h1 class="post-title">Add Post</h1>

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name" style="color: #4D5CAD;" >Title:</label>
                <input
                    class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" name="title" placeholder="Name" value="{{ $post->title }}">
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description" style="color: #4D5CAD;">Description:</label>
                <input
                    class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" type="text" name="description" placeholder="Description"
                    value="{{ $post->description }}">
            </div>

            <div class="mb-5">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="post_image" style="color: #4D5CAD;">Image:</label>
                <input
                    class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="image" type="file" name="image" placeholder="Image" value="{{ $post->image }}">
            </div>

            <div class="flex items-center justify-center mt-4"><!-- Adjusted the top margin -->
                <input
                    class="bg-blue-900 hover:bg-white hover:text-blue-900 text-white font-bold py-3 px-6 rounded border-2 border-blue-900 focus:outline-none transition duration-300"
                    type="submit" value="Update Post">
            </div>
        </form>
    </div>

</x-app-layout>
