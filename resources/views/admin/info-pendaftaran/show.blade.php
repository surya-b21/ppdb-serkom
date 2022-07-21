<x-admin-layout>
    <x-slot name="header">Informasi Pendaftar</x-slot>

    <div class="card card-danger">
        <div class="card-header"></div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <td><b>Nama<b></td>
                        <td>{{ $user->nama }}</td>
                    </tr>
                    <tr>
                        <td><b>Email<b></td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td><b>Tempat Lahir<b></td>
                        <td>{{ $user->tempat_lahir }}</td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Lahir<b></td>
                        <td>{{ $user->tanggal_lahir }}</td>
                    </tr>
                    <tr>
                        <td><b>Alamat<b></td>
                        <td>{{ $user->alamat }}</td>
                    </tr>
                    <tr>
                        <td><b>Foto<b></td>
                        <td><img src="{{ Storage::url($user->foto_path) }}" alt="{{$user->nama.'.jpg'}}" width="50%" height="50%"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
