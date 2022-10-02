<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <a href="{{ route('student.create') }}"> <button class="btn btn-danger">Add a student</button></a>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date Of Birth</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Hobbys</th>
                        <th scope="col">Nationality</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student as $students)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $students->name }}</td>
                            <td>{{ $students->date_of_birth }}</td>
                            <td>{{ $students->gender }}</td>
                            <td>{{ $students->hobby }}</td>
                            <td>{{ $students->nationality }}</td>
                            <td>
                                <a href="{{ route('student.edit', $students->id) }}"><button
                                        class="btn btn-info">Edit</button></a>
                                <a href="{{ route('student.delete', $students->id) }}"><button type="submit"
                                        class="btn btn-danger">
                                        Delete </button></a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    @if (session('success'))
        <script>
            swal({
                title: "Good job!",
                text: " {{ session('success') }}",
                icon: "success",
            });
        </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
