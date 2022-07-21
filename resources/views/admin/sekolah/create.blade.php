<x-admin-layout>
    <x-slot name="header">
        <h3>Tambah Data Sekolah</h3>
    </x-slot>

    <form action="{{ route('admin.sekolah.store') }}" method="POST">
        @csrf
        @include('admin.sekolah.partials.form')

        <div class="row">
            <div class="col text-center pb-3">
                <button type="submit" class="btn btn-lg btn-block btn-success">Submit</button>
            </div>
        </div>
    </form>
</x-admin-layout>
