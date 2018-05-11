@if ($errors->any())
    <div class="alert alert-danger"  style="margin-top:15px;">
        @foreach($errors->all('message') as $error)
            {{ $error }}
        @endforeach
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success" style="margin-top:15px;">
        <p>{{ Session::get('success') }}</p>
    </div>
@endif