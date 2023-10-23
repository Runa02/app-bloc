@extends('front.index')
@section('content')
    
    <div class="container">
        <div class="section">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('landing')}}">Cyber Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data -> kategori -> kategori}}</li>
                </ol>
            </nav>
            <h2>{{$data -> judul}}</h2>
            <img src="{{asset('/storage/'.$data->image)}}" alt="" class="rounded" style="height: 80%; width: 100%;">
        </div>

        <div class="article">
            <div class="row mt-5">
                <div class="d-flex gap-5">
                    <div class="col-8">
                        <p align="justify">{{$data -> konten}}</p>
                    </div>
                    <div class="col-md-4">
                        <div class="resume-section">
                            <div class="judul-text" style="font-family: poppins">
                                <h2>Artikel Terkait</h2>
                            </div>
                            @for ($i = 1; $i <= 5; $i++)
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-body d-flex">
                                    <h3 class="card-title me-2">{{ $i }} </h3>
                                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ullam amet nulla sequi, a quia architecto voluptatibus aliquam illo praesentium?</small>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection