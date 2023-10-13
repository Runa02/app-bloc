@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Tambah Artikel') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{route('article-management-store')}}" method="POST" enctype="multipart/form-data" role="form text-left">
                    @csrf
                    @if($errors->any())
                        <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">{{ __('Judul') }}</label>
                                <div>
                                    <input class="form-control" type="text" placeholder="Masukkan judul artikel"name="judul">     
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user.phone" class="form-control-label">{{ __('Sumber') }}</label>
                                <div>
                                    <input class="form-control" type="text" placeholder="misal.com" name="sumber">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kategori_id" class="col-md-2 col-form-label text-md-right">{{ __('Kategori') }}</label>
                        <div class="col-md-10">
                            <select class="form-control" id="kategori_id" name="kategori_id">
                                <option value="">Silahkan pilih kategori</option>
                                @foreach ($datas as $data )
                                <option value="{{$data -> id}}">{{$data -> kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Gambar') }}</label>
                                <div>
                                    <input class="form-control" type="file" name="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about">{{ 'Konten Artikel' }}</label>
                        <div>
                            <textarea class="form-control" id="about" rows="3" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur voluptatibus labore modi quasi aperiam, reiciendis vel repellendus architecto eius autem aliquam praesentium molestiae corrupti obcaecati officiis quisquam voluptas a nostrum!
                            " name="konten"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="d-flex flex-row justify-content-between ms-4">   
    <a href="{{route('user-management')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">Kembali</a>
</div>

@endsection