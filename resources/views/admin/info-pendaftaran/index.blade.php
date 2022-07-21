<x-admin-layout>
    <x-slot name="header">Informasi Pendaftaran</x-slot>

    <div class="card card-danger">
        <div class="card-header"></div>
        <div class="card-body">
            <table id="info" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Sekolah</th>
                        <th>Nama</th>
                        <th>Rata-Rata</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            $(function() {
                $('#info').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    ajax: '{{ route("admin.get.pendf") }}',
                    columns: [
                        {data:'DT_RowIndex', orderable: false},
                        {data:'sekolah_id', name:"sekolah_id"},
                        {data:'user_id', name:"user_id"},
                        {data:'rata_rata', name:"rata_rata"},
                    ]
                });
            });
        </script>
    </x-slot>
</x-admin-layout>
