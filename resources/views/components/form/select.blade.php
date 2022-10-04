@props(['name','options', 'label' => ''])


<div class="mb-3">
    @if($label)
    <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif

    <select class="form-select" aria-label="Default select example">
        <option value="" disabled selected>(Select {{$name}})</option>
        @foreach ($options as $equipo)

        @endphp
        <option value="{{ $equipo }}">
            {{ $equipo }}
        </option>
        @endforeach

    </select>
    @error('gender')
    <div class="form-text text-danger">{{ $message }}</div>
    @enderror

</div>