<div>
    <label for="{{ $name }}" class="mb-1 flex items-center">
        <input type="radio" value="" name="{{ $name }}"
            @checked(!request($name))>
        <span class="ml-2">All</span>
    </label>
    @foreach($optionsWithLabels as $label => $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input type="radio" value="{{ $option }}" name="{{ $name }}"
                @checked(request($name) === $option)>
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach
</div>
