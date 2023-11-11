@extends('front.index')
@section('content')
    
    <div class="container">
        <div class="section-content">
            <div class="text">
                <h2>Rekomendasi</h2>
            </div>
            <div class="image_content d-flex justify-content-center gap-5">
                <div class="Rectangle3" style="width: 400px; height: 400px; left: 169px; top: 751px; background: linear-gradient(360deg, #8E8E8E 0%, #D9D9D9 100%); border-radius: 15px"></div>
                <div class="Rectangle3" style="width: 400px; height: 400px; left: 169px; top: 751px; background: linear-gradient(360deg, #8E8E8E 0%, #D9D9D9 100%); border-radius: 15px"></div>
                <div class="Rectangle3" style="width: 400px; height: 400px; left: 169px; top: 751px; background: linear-gradient(360deg, #8E8E8E 0%, #D9D9D9 100%); border-radius: 15px"></div>
            </div>
        </div>

        <div class="resume-section mb-5 mt-5">
          <div class="row">
              <div class="col-6 d-flex flex-column gap-5">
                  <div>
                      <div class="resume-section">
                          <div class="judul-text" style="">
                              <h2>Artikel Terbaru</h2>
                          </div>
                          @foreach ($datas as $data)
                              <div class="card mb-3 p-3" style="max-width: 100%;">
                                  <!-- Your card content here -->
                                  <div class="row">
                                      <div class="col-md-4">
                                          <img src="{{asset('/storage/'.$data->image)}}" class="img-fluid rounded-start" alt="...">
                                      </div>
                                      <div class="col-md-8">
                                          <div class="card-body">
                                              <span class="badge bg-primary articleCategory">{{$data->kategori->kategori}}</span>
                                              <div class="mt-4">
                                                  <h5 class="card-title"><span>{{$data->judul}}</span></h5>
                                                  <p class="card-text">
                                                      {{ Str::limit($data->konten, 200) }} <!-- Display the first 200 characters of 'konten' -->
                                                      @if (strlen($data->konten) > 200)
                                                          <a href="{{ route('detail-konten', ['id' => $data->id]) }}">Read More</a>
                                                      @endif
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
      
              <div class="col-5 offset-1">
                  <div class="resume-section">
                      <div class="judul-text" style="font-family: poppins">
                          <h2>Artikel Seputar Tips Terpopuler</h2>
                      </div>
                      @foreach ($datas as $data)
                          <div class="card mb-3" style="max-width: 540px;">
                              <!-- Your card content here -->
                              <div class="card-body d-flex">
                                  <h3 class="card-title me-2">{{ $loop->iteration }} </h3>
                                  <small class="text-muted">
                                      <a href="{{ route('detail-konten', ['id' => $data->id]) }}" class="text-black"
                                          style="text-decoration: none;">{{ $data->judul }}</a>
                                  </small>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </div>
          {{$datas->links('pagination::bootstrap-5')}}
      </div>

@endsection