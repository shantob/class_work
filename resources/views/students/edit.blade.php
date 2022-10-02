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
        <div class="card-body">
            <form action="{{ route('student.update', $student->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        placeholder="name............" value="{{ $student->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="date_of_birth"
                        value="{{ $student->date_of_birth }}">
                </div>
                <select class="form-select" aria-label="Default select example" name="gender">

                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>


                <div class="form-group">
                    <label><strong>Hobbys :</strong></label><br>
                    <label><input type="checkbox" name="category" value="Programmer"> Programmer</label>
                    <label><input type="checkbox" name="category" value="Desiginer"> Desiginer</label>
                    <label><input type="checkbox" name="category" value="Etc"> Etc</label>
                </div>
                <select class="form-select" aria-label="Default select example" name="nationality">
                    <option selected value="Bangladeshi">Bangladeshi</option>
                    <option value="Other">other</option>
                </select>

                <button type="submit" class="btn btn-success">Resister Now</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
