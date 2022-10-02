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
            <form action="{{ route('product.update', $product->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        placeholder="name............" value="{{ $product->name }}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title"value="{{ $product->title }}">
                </div>
                <select class="form-select" aria-label="Default select example" name="category">
                    <option value="" disabled selected>(select One)</option>
                    <option value="Snikers">Snikers</option>
                    <option value="T-shirt">T-shirt</option>
                    <option value="Shirt">Shirt</option>
                    <option value="Electronic">Electronic</option>
                    <option value="Other">Other</option>
                </select>


                <div class="form-group">
                    <label><strong>Is Active :</strong></label><br>
                    <label><input type="checkbox" name="is_active" value="is_active">
                        Is_active</label>
                </div>
                <label for="description">Discription</label>
                <textarea name="descruotuin" id="description" cols="30" rows="10">{{ $product->discription }}</textarea>

                <button type="submit" class="btn btn-success">Submit Now</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
