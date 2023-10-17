<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prestasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Data Prestasi Siswa</h1>
                    </div>
                    <div class="card-body">
                        <a href="/add_prestasi" type="button" class="btn btn-success mb-3">Tambah Prestasi<i class="fa-solid fa-trophy"></i>
                        </a>
                        <br/>
                        <br/>
                        @if (session('sukses'))
                        <div class="alert alert-success">
                            {{ session('sukses') }}
                        </div>
                      @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Prestasi</th>
                                        <th>Tingkat</th>
                                        <th>Tanggal</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                       
                                    </tr>
                                </thead>
                            <tbody>
                            @foreach($prestasi as $konten)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $konten->nisn }}</td>
                                    <td>{{ $konten->nama }}</td>
                                    <td>{{ $konten->kelas }}</td>
                                    <td>{{ $konten->alamat }}</td>
                                    <td>{{ $konten->prestasi }}</td>
                                    <td>{{ $konten->tingkat }}</td>
                                    <td>{{ \Carbon\Carbon::parse($konten->tanggal)->translatedFormat('d F Y') }}</td>
                                    <td>
                                        <div class="btn-group">
                                                <a href=/show type="button" class="btn btn-success mb-3">Lihat<i class="fa-solid fa-trophy"></i>
                                                <a href=/edit button type="button" class="btn btn-warning mr-2">Edit</button></a>
                                                <a href="prestasi.destroy {{ $konten->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                                        </div>
                                      </td>
                                    
                                    @endforeach
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>