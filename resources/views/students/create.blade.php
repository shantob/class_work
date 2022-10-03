<x-master>
        <div class="col-md-8 px-2 mx-3">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('student.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        placeholder="name............">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="date_of_birth">
                </div>
                <select class="form-select" aria-label="Default select example" name="gender">
                    <option selected value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>


                <div class="form-group">
                    <label><strong>Hobbys :</strong></label><br>
                    <label><input type="checkbox" name="category[]" value="Programmer"> Programmer</label>
                    <label><input type="checkbox" name="category[]" value="Desiginer"> Desiginer</label>
                    <label><input type="checkbox" name="category[]" value="Etc"> Etc</label>
                </div>
                <select class="form-select" aria-label="Default select example" name="nationality">
                    <option selected value="Bangladeshi">Bangladeshi</option>
                    <option value="Other">other</option>
                </select>

                <button type="submit" class="btn btn-success">Resister Now</button>
            </form>
        </div>
    </div>
</x-master>
