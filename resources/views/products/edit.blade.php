<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <x-form.input type="text" name="name" label="Name Of Product" product="{{$product->name}}" class="text-dark"  placeholder="Name Of product" />

                    <x-form.input type="text" name="title" label="Title" class="text-dark" placeholder="Product Title" />


                    <x-form.select name="category" label="Select Category" name="category" id="category" :options="[
        'Snikers' => 'Snikers',
        'T-shirt' => 'T-shirt',
        'Shirt' => 'Shirt',
        'Electronic' => 'Electronic',
]" />

                    <x-form.checkbox type="checkbox" name="is_active" lable="Is Active :" id="pre-checked-2" value="1" />

                    <x-form.textarea name="description" label="Description" class="text-dark" placeholder="Write Here ............." />


                    <button type="submit" class="btn btn-success">Submit Now</button>
                </form>
            </div>
        </div>
</x-master>