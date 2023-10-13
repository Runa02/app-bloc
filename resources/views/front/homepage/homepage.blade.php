@extends('front.index')
@section('content')

<style>
  .carousel-inner .carousel-item{
    height: 500px;
  }

  .item img{
    position: absolute;
    top: 0;
    left: 0;
    min-height: 500px;
  }
</style>

<div class="container">
  <div class="resume-section">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset("img/WKWKW.png") }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="bottom: -3.75rem;padding-block: 200px;background-color: rgba(0,0,0,0.5); right: 0; left: 50%">
              <div class="row">
                <div class="col-8 text-white text-start px-5">
                  <h5>Berita yang sedang hangat</h5>
                  <h1>Lorem Ipsum</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui excepturi rem.</p>
                  <div class="btn btn-primary">Explore Now</div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset("img/WKWKW.png") }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="bottom: -3.75rem;padding-block: 200px;background-color: rgba(0,0,0,0.5); right: 0; left: 50%">
              <div class="row">
                <div class="col-8 text-white text-start px-5">
                  <h5>Berita yang sedang hangat</h5>
                  <h1>Lorem Ipsum</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui excepturi rem.</p>
                  <div class="btn btn-primary">Explore Now</div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset("img/WKWKW.png") }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="bottom: -3.75rem;padding-block: 200px;background-color: rgba(0,0,0,0.5); right: 0; left: 50%">
              <div class="row">
                <div class="col-8 text-white text-start px-5">
                  <h5>Berita yang sedang hangat</h5>
                  <h1>Lorem Ipsum</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe qui excepturi rem.</p>
                  <div class="btn btn-primary">Explore Now</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="resume-section mb-5 mt-5">
    <div class="row">
      <div class="col-6 d-flex flex-column gap-5">
        <div class="d-flex align-items-center gap-4">
          <div class="Rectangle3" style="width: 433px; height: 392px; left: 169px; top: 751px; background: linear-gradient(360deg, #8E8E8E 0%, #D9D9D9 100%); border-radius: 15px"></div>
          <div class="d-flex flex-column gap-4">
            <div class="Rectangle4" style="width: 201px; height: 182px; left: 628px; top: 751px; background: linear-gradient(360deg, #8E8E8E 0%, #D9D9D9 100%); border-radius: 10px"></div>
            <div class="Rectangle4" style="width: 201px; height: 182px; left: 628px; top: 751px; background: linear-gradient(360deg, #8E8E8E 0%, #D9D9D9 100%); border-radius: 10px"></div>
          </div>
        </div>
        <div>
          <div class="resume-section">
            <div class="judul-text" style="">
              <h2>Artikel Terbaru</h2>
            </div>
            @for ($i = 0; $i < 5; $i++)
            <div class="card mb-3 p-3" style="max-width: 100%;">
              <div class="row">
                <div class="col-md-4">
                  <img src="{{ asset("img/WKWKW.png") }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                      <span class="badge bg-primary">Games</span>
                    <div class="mt-4">
                      <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endfor
          </div>
        </div>
      </div>
      <div class="col-5 offset-1">
        <div class="resume-section">
          <div class="judul-text" style="font-family: poppins">
            <h2>Artikel Terpopuler</h2>
          </div>
          @for ($i = 1; $i <= 10; $i++)
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
    {{-- <div class="row row-cols-2 row-cols-md-2">
      <div class="col">
        <div class="card" style="width: 25rem;">
          <img src="{{ asset("img/hoho.jpg") }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="{{ asset("img/hoho.jpg") }}" class="card-img-top" alt="...">
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 12rem;">
          <img src="{{ asset("img/hoho.jpg") }}" class="card-img-top" alt="...">
        </div>
      </div>
    </div> --}}
  </div>
</div>

<div class="container">
  <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
</div>
@endsection