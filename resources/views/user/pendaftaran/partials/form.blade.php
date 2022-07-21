<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Biodata</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                        value="{{ old('nama') ?? Auth::user()->nama }}" placeholder="Masukkan nama lengkap">
                </div>
                <x-auth-validation-errors name="nama" />
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="tempat_lahir"
                        value="{{ old('tempat_lahir') }}" placeholder="Masukkan tempat lahir">
                </div>
                <x-auth-validation-errors name="tempat_lahir" />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="5" placeholder="Masukkan alamat ..." name="alamat"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir') }}" placeholder="Masukkan tanggal lahir">
                    </div>
                    <x-auth-validation-errors name="tanggal_lahir" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="foto_path">Upload Foto 3x4</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto_path"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                    </div>
                </div>
                <x-auth-validation-errors name="foto_path" />
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Input Nilai</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Matematika</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="matematika"
                        value="{{ old('matematika') }}" placeholder="Masukkan nilai matematika">
                </div>
                <x-auth-validation-errors name="matematika" />
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Bahasa Indonesia</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="bahasa_indonesia"
                        value="{{ old('bahasa_indonesia') }}" placeholder="Masukkan nilai bahasa indonesia">
                </div>
                <x-auth-validation-errors name="bahasa_indonesia" />
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Bahasa Inggris</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="bahasa_inggris"
                        value="{{ old('bahasa_inggris') }}" placeholder="Masukkan nilai bahasa inggris">
                </div>
                <x-auth-validation-errors name="bahasa inggris" />
            </div>
        </div>
    </div>
</div>

<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Pilih Sekolah</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="form-group">
            <label>Pilih Sekolah Tujuan</label>
            <select class="form-control" name="sekolah_id">
                @foreach ($sekolah as $data)
                <option value="{{ $data->id }}">{{$data->nama}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
