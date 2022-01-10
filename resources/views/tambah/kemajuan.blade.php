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
                            <form action="{{('/kemajuan-simpan')  }}" method="post" role="form">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <select class="form-control" name="IDSANTRI" required>
                                            @foreach ( $santri as $s)
                                            <option value={{ $s->IDSANTRI }}>{{ $s->NAMASANTRI }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                      <div class="col-md-12">
                                            <select class="form-control" name="IDPENGURUS" required>
                                                @foreach ($pengurus as $p)
                                                <option value={{ $p->IDPENGURUS }}>{{ $p->NAMA }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="TANGGAL" placeholder="Tanggal" onfocus="(this.type='date')" required/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                          <select class="form-control" name="STATUS" required>
                                              <option value="" disabled selected hidden>Status</option>
                                              <option value="N">Naik</option>
                                              <option value="T">Tetap</option>
                                              <option value="M">Mundur</option>
                                          </select>
                                  </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Tambah</button></div>
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
