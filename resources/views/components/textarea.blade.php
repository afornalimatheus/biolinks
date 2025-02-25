@props(['name', 'value'])

<div>
  <textarea class="textarea textarea-bordered w-full" name={{ $name }} {{ $attributes }}>
    {{ $value}}
  </textarea>
  @error($name)
      <div class="text-sm text-error">{{ $message }}</div>   
  @enderror
</div>