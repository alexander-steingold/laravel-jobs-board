<div>
    <label for="{{ $name }}" class="mb-1 flex items-center">
        @if($allOption)
            <input
                @click="$refs['{{$formRef}}'].submit()"
                type="radio"
                value=""
                name="{{ $name }}"
                @checked(!request($name))>
            <span class="ml-2">All</span>
        @endif
    </label>
    @foreach($optionsWithLabels as $label => $option)
        <label for="{{ $name }}" class="mb-1 flex items-center">
            <input
                @click="$refs['{{$formRef}}'].submit()"
                type="radio"
                value="{{ $option }}"
                name="{{ $name }}"
                @checked(($value ?? request($name)) === $option)>
            <span class="ml-2">{{ $label }}</span>
        </label>
    @endforeach
    @error($name)
    <div class="mt-1 text-xs text-red-500">
        {{ $message }}
    </div>
    @enderror
</div>
