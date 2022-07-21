<div class="card card-danger">
    <div class="card-header">
        <h3 name="card-title"></h3>

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
                    <label for="exampleInputEmail1">Nama Sekolah</label>
                    <x-auth-validation-errors name="nama" />
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama"
                        value="{{ old('nama') }}" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Limit</label>
                    <x-auth-validation-errors name="limit" />
                    <input type="number" class="form-control" id="exampleInputEmail1" name="limit"
                        value="{{ old('limit') }}" placeholder="Masukkan limit">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Sekolah</label>
                    <x-auth-validation-errors name="alamat" />
                    <textarea class="form-control" rows="5" placeholder="Masukkan alamat ..." name="alamat">{{ old("alamat") }}</textarea>
                </div>
            </div>
        </div>

    </div>
</div>
