<div class="container-fluid" id="container-wrapper">
    <div class="text-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Prestasi</h1>
    </div>
<div class="row mb-3">

<!-- Form Edit Prestasi -->
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-header">
                <form class="row g-3" action="/update_prestasi/{{ $prestasi->id }}" method="POST">
                @csrf
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                    value="{{ old('name',$prestasi->name) }}">
                    @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror 
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">NISN</label>
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" 
                    value="{{ old('nisn',$prestasi->nisn) }}">
                    @error('nisn')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="input-group col-12 mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" >Kelas</label>
                    </div>
                    <select name="kelas" class="form-control @error('kelas') is-invalid @enderror">
                      <option value="{{ old('kelas', $prestasi->kelas) }}">{{ old('kelas', $prestasi->kelas) }}</option>
                      <option value="7A" @if(old('kelas') == '7A') selected @endif>7A</option>
                      <option value="7B" @if(old('kelas') == '7B') selected @endif>7B</option>
                      <option value="8A" @if(old('kelas') == '8A') selected @endif>8A</option>
                      <option value="8B" @if(old('kelas') == '8B') selected @endif>8B</option>
                      <option value="9A" @if(old('kelas') == '9A') selected @endif>9A</option>
                      <option value="9B" @if(old('kelas') == '9B') selected @endif>9B</option>
                    </select>
                        @error('kelas')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror    
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Perolehan Prestasi</label>
                    <input type="text" name="juara" class="form-control @error('juara') is-invalid @enderror"
                    value="{{ old('juara',$prestasi->juara) }}">
                    @error('juara')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                    value="{{ old('alamat',$prestasi->alamat) }}">
                    @error('alamat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror  
                </div>

                <div class="input-group col-12 mb-4">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Tingkat</label>
                    </div>
                        <select class="form-control @error('tingkat') is-invalid @enderror" name="tingkat">
                            <option value="{{ old('tingkat', $prestasi->tingkat) }}">{{ old('tingkat', $prestasi->tingkat) }}</option>
                            <option value="Kota/Kabupaten" @if(old('tingkat') == 'Kota/Kabupaten') selected @endif>Kota/Kabupaten</option>
                            <option value="Provinsi" @if(old('tingkat') == 'Provinsi') selected @endif>Provinsi</option>
                            <option value="Nasional" @if(old('tingkat') == 'Nasional') selected @endif>Nasional</option>
                            <option value="Internasional" @if(old('tingkat') == 'Internasional') selected @endif>Internasional</option>
                        </select>
                        @error('tingkat')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                </div>

                        <p class="col-lg-12 mb-4">
                          <label for="date">Tanggal</label>
                          <input type="date" name="date" value="{{ $prestasi->tanggal }}" id="date">
                        </p>

            </div >
                        <div class="d-flex justify-content-center mb-4">
                            <button type="submit" class="ml-2 btn btn-primary">Simpan</button>
                        </div>