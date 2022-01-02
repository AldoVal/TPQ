@extends('layout/guru')
@section('content')
<h3>Tambahkan Kemajuan</h3>
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-body">
                            <form action="{{ url('/kemajuan-simpan',$request->IDKEMAJUAN)  }}" method="post" role="form">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" name="NAMASANTRI" type="text" minlength="3" maxlength="50" placeholder="Nama Santri" required/>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="TGLLAHIR" placeholder="Tanggal Lahir" onfocus="(this.type='date')" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" maxlength="40" name="KOTALHR" placeholder="Kota Lahir" required/>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" type="text" minlength="3" maxlength="50" name="NAMAORTU" placeholder="Nama Orang Tua" value="{{ old('nama_ortu') }}" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" maxlength="100" name="ALAMATORTU" placeholder="Alamat Orang Tua" required/>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input  class="form-control" type="number" name="HP" placeholder="Telepon" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputEmail" type="email" name="EMAIL" placeholder="Email" required/>
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control" id="inputPassword" type="password" minlength="8" maxlength="32" name="PASSWORD" placeholder="Password" required/>
                                    </div>
                                </div>

                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Tambahkan</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
