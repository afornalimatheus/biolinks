@props(['title', 'actions'])

<div class="card bg-base-100 w-96 shadow-xl">
  <div class="card-title">{{ $title }}</div>
  <div class="card-body">
    {{ $slot }}
    <div class="card-actions">
      {{ $actions }}
    </div>
  </div>
</div>