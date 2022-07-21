<x-user-layout>
    <x-slot name="header">
        Hasil Pendaftaran
    </x-slot>

    @if ($status == false)
        <h2><span class="badge badge-danger">Ditolak</span></h2>
    @else
        <h2><span class="badge badge-success">Diterima</span></h2>

        <div class="card card-danger">
            <div class="card-header"></div>
            <div class="card-body">
                <div class="row">
                    <table id="hasil" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sekolah</th>
                                <th>Nama</th>
                                <th>Rata-rata</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $data)
                                <tr>
                                    <td>{{ $data->sekolah->nama }}</td>
                                    <td>{{ $data->user->nama }}</td>
                                    <td>{{ $data->rata_rata }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
</x-user-layout>
