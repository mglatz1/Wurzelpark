<div class="flash-message">
    @if (isset($error))
        <div class="form-group">
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="form-group">
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        </div>
    @endif
</div>
