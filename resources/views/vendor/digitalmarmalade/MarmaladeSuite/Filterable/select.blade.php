<select name="{{ $inputName }}[{{ $name }}]" class="customSelect">
    @foreach ($available as $key => $label)
        <option value="{{ $key }}" {{ ($key === $value ? 'selected' : '') }}>{{ $label }}</option>
    @endforeach
</select>