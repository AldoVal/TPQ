@extends('layout/author')
@section('content')
<h3>Tambahkan Santri</h3>
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        {{-- <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $title }}</h3></div> --}}
                        <div class="card-body">
                            <form action="/santri-simpan" method="post" role="form">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" name="NAMASANTRI" type="text" minlength="3" maxlength="50" placeholder="Nama Santri" required/>
                                        {{-- @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}

                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="GENDER" required>
                                            <option value="" disabled selected hidden>Jenis Kelamin</option>
                                            <option value="M">Laki-Laki</option>
                                            <option value="F">Perempuan</option>
                                        </select>
                                        {{-- @error('gender')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="TGLLAHIR" placeholder="Tanggal Lahir" onfocus="(this.type='date')" required/>
                                        {{-- @error('tgl_lhr')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" maxlength="40" name="KOTALHR" placeholder="Kota Lahir" required/>
                                        {{-- @error('kota_lhr')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" type="text" minlength="3" maxlength="50" name="NAMAORTU" placeholder="Nama Orang Tua" value="{{ old('nama_ortu') }}" required/>
                                        {{-- @error('nama_ortu')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" maxlength="100" name="ALAMATORTU" placeholder="Alamat Orang Tua" required/>
                                        {{-- @error('alamat_ortu')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input  class="form-control" type="number" name="HP" placeholder="Telepon" required/>
                                        {{-- @error('hp')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputEmail" type="email" name="EMAIL" placeholder="Email" required/>
                                        {{-- @error('email')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" maxlength="32" name="PASSWORD" placeholder="Password" required/>
                                        {{-- @error('password')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Tambahkan</button></div>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="card-footer text-center py-3">
                            <div class="small"><a href="login">Punya Akun? Login!</a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
