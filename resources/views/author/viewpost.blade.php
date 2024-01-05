    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <style>
            .custom-table td {
                border: 1px solid white;
            }

            .custom-table {
                border-collapse: separate;
                border-spacing: 0 25px;
            }

            img{
                height: 100px;
                width: 150px;
                align-items: center;

            }

        </style>
    </head>



    <header>
        @include('admin.admin_header')
    </header>

<body  style="background-color:rgb(116, 134, 224)">
    <div class="mt-8 px-4">
        <div style="margin: 30 200px;">
            <table class="min-w-full custom-table" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="text-center px-4 py-2">Title</th>
                        <th class="text-center px-4 py-2">Description</th>
                        <th class="text-center px-4 py-2">Category</th>
                        <th class="text-center px-4 py-2">Image</th>
                        <th class="text-center px-4 py-2">Edit</th>
                        <th class="text-center px-4 py-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="px-4 py-2 text-center">{{ $post->title }}</td>
                            <td class="px-4 py-2 text-center">{{ $post->description }}</td>
                            <td class="px-4 py-2 text-center">{{ $post->category }}</td>
                            <td class="px-10 py-2 text-center"><img src="postimage/{{ $post->image }}" alt=""></td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('post.edit', ['post' => $post]) }}"
                                    class="text-blue-600 hover:underline mr-2">
                                    <i class="fas fa-edit text-white"></i>
                                </a>
                            </td>
                            <td class="px-4 py-2 text-center">
                                <form action="{{ route('post.delete', ['post' => $post]) }}" method="POST">
                                    @csrf
                                    @method('delete')
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
    </div>
</body>
