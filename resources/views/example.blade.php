<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Laravel Excel Import</h1>
        <div class="card bg-light mt-4">
            <div>
                <div class="card-header">Header</div>
                <div class="card-body">
                    <form action="{{ route('user#import') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" class="form-control" name="file">
                        <button type="submit">Import</button>

                    </form>
                    <a href="{{ route('user#export') }} " class="btn btn-success text-white">Download</a>
                    <table>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }} </th>
                                <th>{{ $user->name }} </th>
                                <th>{{ $user->email }} </th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
