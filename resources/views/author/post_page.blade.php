<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <!-- Link your CSS file or place the styles within a style tag in the head section -->

    <style>
        /* Your CSS styles here */
        body {
            background-color: #4D5CAD;
            /* Blue */
            font-family: Arial, sans-serif;
            color: #ffffff;
            /* White text on the dark background */
            margin: 0;
            padding: 0;
        }

        .card {
            width: 80%;
            max-width: 800px;
            /* Set a maximum width */
            margin: 40px auto;
            /* Center the card with top and bottom margin */
            padding: 30px;
            /* Increased padding */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            /* White */
        }

        .post-title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            color: #4D5CAD;
            /* Blue text */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #4D5CAD;
        }

        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="file"] {
            width: calc(100% - 10px);
            padding: 8px;
            border: 1px solid #4D5CAD;
            background-color: #ffffff;
            border-radius: 4px;
            font-size: 16px;
            color: #4D5CAD;
        }

        .form-group input[type="submit"] {
            background-color: #4D5CAD;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            border: none;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            /* Added transition for smooth effect */
        }

        .form-group input[type="submit"]:hover {
            background-color: #ffffff;
            color: #4D5CAD;
            border: 1px solid #4D5CAD;
            /* Change border color on hover */
        }

        .alert {
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .close {
            float: right;
            cursor: pointer;
        }
    </style>

</head>

<body>
    <x-app-layout>
        <header>
            @include('admin.admin_header')
        </header>

        <div class="card">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <span class="close" data-dismiss="alert" aria-hidden="true">&times;</span>
                    {{ session()->get('message') }}
                </div>
            @endif

            <h1 class="post-title">Add Post</h1>

            <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="description">Post Description</label>
                    <textarea id="description" name="description"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Add Image</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="form-group">
                    <input type="submit" name="btn-submit">
                </div>
            </form>
        </div>
    </x-app-layout>
</body>

</html>
