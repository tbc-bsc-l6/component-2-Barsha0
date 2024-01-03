<x-app-layout>

    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    </head>

    <header class="bg-gray-800 text-white">
        @include('admin.admin_header')
    </header>

    <div class="mt-8 px-4"> <!-- Added padding to the left and right -->
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{$post->title}}</td>
                        <td class="border px-4 py-2 text-center">{{$post->description}}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{route('post.edit',['post' => $post])}}" class="text-blue-600 hover:underline mr-2">
                                <i class="fas fa-edit text-white"></i>
                            </a>
                        </td>
                        <td class="border px-4 py-2 text-center">
                            <form action="">
                                <button type="submit">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
