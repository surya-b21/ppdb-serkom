<form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('user.pendaftaran.partials.form')

    <div class="row">
        <div class="col text-center pb-3">
            <button type="submit" class="btn btn-lg btn-block btn-success">Submit</button>
        </div>
    </div>
</form>
