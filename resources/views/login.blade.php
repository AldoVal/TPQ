@extends('layout/reg-login')
@section('container')
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header"><h3 class="text-center font-weight-light my-4">{{ $title }}</h3></div>
                        <div class="card-body">

                            {{-- jangan d hapus komen ini boiii --}}
                            <form action="/authenticate" method="post">
                                @csrf
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control"  id="inputEmail"  name="id" placeholder="ID" required/>
                                        @error('email')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <input class="form-control"  id="inputPassword" type="password"  maxlength="32" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="form-check mb-3">
                                    {{-- <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" /> --}}
                                    {{-- <label class="form-check-label" for="inputRememberPassword">Ingat Password</label> --}}
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    {{-- <a class="small" href="forgot-password">Lupa Password?</a> --}}
                                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Login</button></div>
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
