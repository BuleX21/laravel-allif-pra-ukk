@extends('partials.main')

@section('content')

    <h1>FORM TAMBAH DATA</h1>

    <form action="{{Route('siswa.add.process') }}" method="post">
        @csrf

    <div class="row col-5">

        <div class="mb-3">
            <label for="nama" class="form-label">Nama
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" rows="3" name="alamat" placeholder="masukkan alamat anda"></textarea>
          </div>

        <div>
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                <option selected>Jenis Kelamin</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
                <option value="wandu">wandu</option>
              </select>
        </div>

        <div class="class mt-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

    </div>
</form>


@endsection
