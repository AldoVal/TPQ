@extends('layout/author')
@section('content')
<h3>Tambah Peran</h3>
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        {{-- <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $title }}</h3></div> --}}
                        <div class="card-body">
                            <form action="/peran-simpan" method="post" role="form">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input class="form-control" id="inputName" name="IDPERAN" type="text" placeholder="ID" required/>
                                        {{-- @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}

                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="PERAN" placeholder="Nama Peran" required/>
                                        {{-- @error('tgl_lhr')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror --}}
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

