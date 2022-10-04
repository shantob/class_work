@props(['name', 'label' => ''])

<div class="mb-3">
    @if($label)
    <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif

    <textarea  cols="30" rows="10" name="{{ $name }}"id="{{ $name }}Input" {{ $attributes->merge(['class' => 'form-control']) }}>
    {{ old($name) }}
    </textarea>
    @error($name)
    <div class="form-text text-danger">{{ $message }}</div>
    @enderror

</div>