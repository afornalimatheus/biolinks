@props([
  'route', 
  'post' => null,
  'put' => null
])

@php
  $method = $post || $put ? 'post' : 'get'
@endphp

<form {{ $attributes->class(['flex flex-col gap-4']) }} action="{{ $route }}" method="{{ $method }}" id="login-form">
  @csrf
  @if ($put)
    @method('put')
  @endif

  {{ $slot }}
</form>