@if (session('status'))
    <div class="form-group">
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    </div>
@endif