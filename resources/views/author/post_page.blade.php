<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>

    <style type="text/css">
        .post-title {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
        }

        .div_center {
            text-align: center;
            padding: 30px;
        }

        .div_center label {
            display: inline-block;
            width: 300px;
        }

        .div_center input {
            background-color: gray;
        }

        .div_center textarea {
            background-color: gray;
        }

        /* sucessful alert */

        .alert {
            position: relative;
            padding: 0.75rem 1.25rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: 0.25rem;
        }

        .alert-success {
            color: #64ba78;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
        }
    </style>

</head>

<body>
    <x-app-layout>
        <header>
            @include('admin.admin_header')
        </header>


        <div class="page-content">

            @if (session()->has('message'))
                <div class="alert alert-sucess">

                    <button type="button" class="close" data-dismiss = "alert" aria-hideen="true">x</button>
                    {{ session()->get('message') }}

                </div>
            @endif

            <h1 class="post-title">Add Post</h1>

            <div>

                <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_center">
                        <label>Post Title</label>
                        <input type="text" name="title">
                    </div>

                    <div class="div_center">
                        <label>Post Description</label>
                        <textarea name="description"></textarea>
                    </div>

                    <div class="div_center">
                        <label>Add Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_center">
                        <input type="submit" name="btn-submit">
                    </div>

                </form>

            </div>

        </div>
    </x-app-layout>
</body>

</html>
