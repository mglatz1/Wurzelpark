@if (isset($success))
    <div class="form-group">
        <div class="alert alert-success">
            {{ $success }}
        </div>
    </div>
@endif
@if (session('success'))
    <div class="form-group">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    </div>
@endif
