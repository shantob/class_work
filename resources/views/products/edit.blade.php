<x-master>
    <div class="col-md-8 px-2 mx-3">
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
                        <option value="{{ $product->category }}" selected>{{ $product->category }}</option>
                        <option value="Snikers">Snikers</option>
                        <option value="T-shirt">T-shirt</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Electronic">Electronic</option>
                        <option value="Other">Other</option>
                    </select>


                    <div class="form-group">
                        <label><strong>Is Active :</strong></label><br>
                        <label><input type="checkbox" name="is_active" value="is_active"
                                {{ $product->is_active == '1' ? 'checked' : '' }}>
                            Is_active</label>
                    </div>
                    <label for="description">Discription</label>
                    <textarea name="descruotuin" id="description" cols="30" rows="10">{{ $product->discription }}</textarea>

                    <button type="submit" class="btn btn-success">Submit Now</button>
                </form>
            </div>
        </div>
</x-master>
