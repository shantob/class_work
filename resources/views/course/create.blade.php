<x-master>
    <div class="col-md-8 px-2 mx-3">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('course.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <x-form.select name="category" label="Select Category" name="category" id="category" :options="[
                            'Snikers' => 'Snikers',
                            'T-shirt' => 'T-shirt',
                            'Shirt' => 'Shirt',
                            'Electronic' => 'Electronic',
                 ]" />


                    <x-form.radieo value="HTML" lable="HTML" />
                    <x-form.radieo value="CSS" lable="CSS" />
                    <x-form.radieo value="PHP" lable="PHP" />

                    <select class="form-select" aria-label="Default select example" name="tecnology">
                        <option value="" disabled selected>(select One)</option>
                        <option value="Softwore">Softwore</option>
                        <option value="Data-Science">Data-Science</option>
                        <option value="Web Development">Web Development</option>
                    </select>
                    <label for="duration">Duration</label>
                    <input type="number" name="duration" id="duration" class="form-control" />
                    <br>
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-success">Submit Now</button>
                </form>
            </div>
        </div>
</x-master>