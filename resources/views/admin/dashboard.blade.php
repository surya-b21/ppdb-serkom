<x-admin-layout>
    <x-slot name="header">Informasi User</x-slot>

    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Tabel Data User</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <table id="users" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            $(function() {
                $('#users').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    ajax: '{{ route("admin.getuser") }}',
                    columns: [
                        {data:'DT_RowIndex', orderable: false},
                        {data:'nama',name:'nama'},
                        {data:'email',name:'email'},
                    ]
                });
            });
        </script>
    </x-slot>
</x-admin-layout>
