<div class="form-group">

    <label><strong>{{$lable}}</strong></label><br>
    <label><input type="radio"> {{$value}}</label>
    @error('hobby')
    <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>