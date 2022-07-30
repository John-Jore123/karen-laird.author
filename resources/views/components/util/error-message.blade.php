<div x-data="{show:true}" x-init="setTimeout(() => show = false, 5000)" x-show="show"> 
  @if (Session::has('success'))
    <div class="alert alert-success text-center">
        {{ Session::get('success') }}
    </div>
  @endif
</div>