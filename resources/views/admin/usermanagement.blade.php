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

        img {
            height: 100px;
            width: 150px;
            align-items: center;

        }
    </style>
</head>



<header>
    @include('admin.admin_header')
</header>

<body style="background-color:rgb(116, 134, 224)">
    <div class="mt-8 px-4">
        <div style="margin: 30 200px;">
            <table class="min-w-full custom-table" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="text-center px-4 py-2">Id</th>
                        <th class="text-center px-4 py-2">Name</th>
                        <th class="text-center px-4 py-2">E-mail</th>
                        <th class="text-center px-4 py-2">User Type</th>
                        <th class="text-center px-4 py-2">User Status</th>
                        <th class="text-center px-4 py-2">Approve</th>
                        <th class="text-center px-4 py-2">Decline</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="px-4 py-2 text-center">{{ $user->id }}</td>
                            <td class="px-4 py-2 text-center">{{ $user->name }}</td>
                            <td class="px-4 py-2 text-center">{{ $user->email }}</td>
                            <td class="px-10 py-2 text-center">{{ $user->usertype }}</td>
                            <td class="px-10 py-2 text-center">{{ $user->user_status }}</td>
                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('user.approve', ['user' => $user->id]) }}"
                                    class="text-blue-600 hover:underline mr-2">
                                    <i class="fas fa-check text-success"></i>

                                </a>
                            </td>

                            <td class="px-4 py-2 text-center">
                                <a href="{{ route('user.decline', ['user' => $user->id]) }}"
                                    class="text-blue-600 hover:underline mr-2">
                                    <i class="fas fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
