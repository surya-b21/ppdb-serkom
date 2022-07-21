<x-admin-layout>
    <x-slot name="header">List Sekolah</x-slot>

    @if ($pesan = Session::get('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {!! $pesan !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Tabel List Sekolah</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <a class="btn btn-primary" href="{{ route('admin.sekolah.create') }}">
                    Tambah Data
                </a>
            </div>
            <div class="row mt-3">
                <table id="sekolah" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Limit</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            $(function() {
                $('#sekolah').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    ajax: '{{ route("admin.getsekolah") }}',
                    columns: [
                        {data:'DT_RowIndex', orderable: false},
                        {data:'nama', name:"nama"},
                        {data:'alamat', name:"alamat"},
                        {data:'limit', name:"limit"},
                    ]
                });
            });
        </script>
    </x-slot>
</x-admin-layout>
