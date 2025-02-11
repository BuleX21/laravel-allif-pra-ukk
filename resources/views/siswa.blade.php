@extends('partials.main')

@section('content')

    <div class="container">

    <h1>Data Siswa</h1>
    <a href="/add-siswa" class="btn btn-success">Tambah Data</a>
    <table <table class="table table-bordered border-primary">

        <tr>
            <th class=table-info>No</th>
            <th class=table-info>Nama</th>
            <th class=table-info>Alamat</th>
            <th class=table-info>jenis kelamin</th>
            <th>menu</th>
        </tr>

        @foreach ($siswa as $sw)
        <tr>
            <td class="table-light">{{ $loop->iteration}}</td>
            <td class="table-light">{{$sw->nama}}</td>
            <td class="table-light">{{$sw->alamat }}</td>
            <td class="table-light">{{$sw->jenis_kelamin }}</td>
            <td>
                <div class="d-flex justify-content-center gap-3">


                    gfdgffgsfdsg
                    <form action="{{Route('siswa.delete', $sw['id']) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                    <a class="btn btn-warning" type="submit">edit</a>
                </div>

            </td>
        </tr>
        @endforeach

    </table>
    @endsection
