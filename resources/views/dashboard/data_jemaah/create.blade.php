@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Jemaah Baru</h1>
    </div>
    <div class="col-lg-10 mb-5">
        <form action="/dashboard/datajemaah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="label h4 text-center mb-4"> Formulir Pendaftaran Jemaah Umroh </div>
            <div class="row mt-4">
                <div class="col-lg-4">
                    <input type="text" class="form-control @error('no_pendaftaran') is-invalid @enderror" name="no_pendaftaran" id="no_pendaftaran" placeholder="Nomor Pendaftaran"> <br>
                    @error('no_pendaftaran')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="date" class="form-control @error('pergi') is-invalid @enderror" name="pergi" id="pergi" placeholder="Jadwal Pergi">
                    <small>Tanggal Keberangkatan</small><br>
                    @error('pergi')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-4">
                    <input type="date" class="form-control @error('pulang') is-invalid @enderror" name="pulang" id="pulang" placeholder="Jadwal Pulang">
                    <small>Tanggal Kedatangan </small> <br>
                    @error('pulang')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="label flex-wrap text-center text-white h5 mt-4 mb-4 flex-fill bg-dark bg-opacity-50"> Data Paket dan Tipe Kamar</div>
            <div class="d-flex justify-content-evenly">
                <select class="form-select w-25 @error('paket') is-invalid @enderror" name="paket" aria-label="Default select example">
                    <option>Paket Umrah</option>
                    <option value="9_HARI"> 9 Hari </option>
                    <option value="12 HARI"> 12 Hari </option>
                    <option value="UMRAH_PLUS"> 12 Hari </option>
                    <option value="PAKET_CUSTOM">Paket Custom</option>
                </select>
                @error('paket')
                    <small>{{ $message }}</small>
                @enderror

                <select class="form-select w-25 @error('tipe_kamar') is-invalid @enderror" name="tipe_kamar" aria-label="Default select example">
                    <option> Tipe Kamar </option>
                    <option value="QUAD"> Quad </option>
                    <option value="TRIPLE"> Triple </option>
                    <option value="DOUBLE"> Double </option>
                    <option value="CUSTOM"> Custom </option>
                </select>
                @error('tipe_kamar')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="form-control w-25 @error('keterangan_paket_khusus') is-invalid @enderror" name="keterangan_paket_khusus" id="keterangan_paket_khusus" placeholder="Deskripsi Paket Khusus" > <br>
                @error('keterangan_paket_khusus')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="label h4 flex-wrap text-center text-white h5 mt-4 mb-3 flex-fill bg-dark bg-opacity-50"> Biodata Calon Jemaah Umrah </div>
            <div class="d-flex justify-content-between">
                <input type="text" class="form-control w-30 me-3 @error('nik') is-invalid @enderror" name="nik" id="nik" placeholder="NIK">
                @error('nik')
                    <small>{{ $message }}</small>
                @enderror
                <input type="text" class="form-control w-30 @error('no_pendaftaran') is-invalid @enderror" name="nama_jemaah" id="nama_jemaah" placeholder="Nama Calon Jemaah">
                @error('nama_jemaah')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="row mt-2">
                <div class="col-lg-3">
                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
                    @error('tempat_lahir')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <input type="date" class="form-control me-2 @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
                    <small class="text-muted text-center"> Tanggal Lahir </small>
                    @error('tanggal_lahir')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <select class="form-select @error('gender') is-invalid @enderror" name="gender" aria-label="Default select example">
                        <option> Jenis Kelamin </option>
                        <option value="1"> Laki-Laki </option>
                        <option value="2"> Perempuan </option>
                    </select>
                    @error('gender')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-lg-3">
                    <select class="form-select @error('pernikahan') is-invalid @enderror" name="pernikahan" aria-label="Default select example">
                        <option> Status Nikah </option>
                        <option value="1"> Menikah </option>
                        <option value="2"> Cerai </option>
                        <option value="2"> Lainnya </option>
                    </select>
                    @error('pernikahan')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <input type="text" class="form-control w-50 me-2 @error('nama_ayah') is-invalid @enderror" name="nama_ayah" id="nama_ayah" placeholder="Nama Ayah Kandung">
                @error('nama_ayah')
                    <small>{{ $message }}</small>
                @enderror
                <input type="text" class="form-control w-50 @error('nama_ibu') is-invalid @enderror" name="nama_ibu" id="nama_ibu" placeholder="Nama Ibu Kandung">
                @error('nama_ibu')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <input type="text" class="form-control mt-2 @error('alamat') is-invalid @enderror" name="alamat" id="alamat" placeholder="Domisili/Alamat">
            @error('alamat')
                <small>{{ $message }}</small>
            @enderror

            <div class="row">
                <div class="col-lg-4">
                    <input type="text" class="form-control mt-2 @error('no_paspor') is-invalid @enderror" name="no_paspor" id="no_passpor" placeholder="No Seri Passpor">
                    @error('no_paspor')
                    <small>{{ $message }}</small>
                @enderror
                </div>
                <div class="col-lg-4">
                    <input type="date" class="form-control mt-2 @error('terbit') is-invalid @enderror" name="terbit" id="terbit">
                    <small> Tanggal Terbit </small>
                    @error('terbit')
                    <small>{{ $message }}</small>
                @enderror
                </div>
                <div class="col-lg-4">
                    <input type="date" class="form-control mt-2 @error('expired') is-invalid @enderror" name="expired" id="expired">
                    <small> Tanggal Habis Masa Laku</small>
                    @error('expired')
                    <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <select class="form-select w-50 me-2 @error('no_pendaftaran') is-invalid @enderror" name="pendidikan" aria-label="Default select example">
                    <option> Pendidikan </option>
                    <option value="Diploma/Sarjana"> Diploma/Sarjana </option>
                    <option value="SMA"> SMA </option>
                    <option value="SMP"> SMP </option>
                    <option value="SD"> SD </option>
                </select>
                <input type="text" class="form-control w-50 me-2 @error('no_pendaftaran') is-invalid @enderror" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan">
            </div>

            <div class="d-flex justify-content-between mt-3">
                <input type="text" class="form-control me-2 @error('no_tlp') is-invalid @enderror" name="no_tlp" id="no_tlp" placeholder="No. Telepon Pribadi">
                @error('no_tlp')
                    <small>{{ $message }}</small>
                @enderror
                <input type="text" class="form-control me-2 @error('no_tlp_1') is-invalid @enderror" name="no_tlp_1" id="no_tlp_1" placeholder="No. Telepon Keluarga 1">
                @error('no_tlp_1')
                    <small>{{ $message }}</small>
                @enderror
                <input type="text" class="form-control me-2 @error('no_tlp_2') is-invalid @enderror" name="no_tlp_2" id="no_tlp_2" placeholder="No. Telepon Keluarga 2">
                @error('no_tlp_2')
                    <small>{{ $message }}</small>
                @enderror
            </div>

            <div class="mt-3 d-flex flex-row">
                <select class="form-select w-50 me-2 @error('status_pembayaran') is-invalid @enderror" name="status_pembayaran" aria-label="Default select example">
                    <option> Status Pembayaran </option>
                    <option value="1"> DP </option>
                    <option value="2"> Menunggu Pelunasan </option>
                    <option value="3"> Lunas </option>
                </select>
                @error('status_pembayaran')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="form-control w-50 @error('slug') is-invalid @enderror" name="slug" class="slug" placeholder="Abaikan Kolom Ini">
                @error('slug')
                    <small>{{ $message }}</small>
                @enderror

            </div>

                <button type="submit" class="btn btn-primary mt-4"><span data-feather="folder-plus"></span> Tambah </button>
                <button type="reset" class="btn btn-danger mt-4"><span data-feather="refresh-cw"></span> Reset </button>

        </form>

        <script>
            const nama = document.querySelector('#nama_jemaah');
            const slug = document.querySelector('#slug');

            nama.addEventListener('change',function(){
            fetch('/dashboard/datajemaah/checkSlug?nama=' + nama.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
        </script>
    </div>
@endsection
