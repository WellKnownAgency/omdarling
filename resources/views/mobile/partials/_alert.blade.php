@if (Session::has('success'))

  <div id="toast-container" class="toast-top-rightt">
    <div class="toast toast-success" aria-live="polite">
      <div class="toast-message">{{ Session::get('success') }}</div>
    </div>
  </div>

@endif
