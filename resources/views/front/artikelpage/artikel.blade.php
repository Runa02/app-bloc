@extends('front.index')
@section('content')
    
    <div class="container">
        <div class="section">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Cyber Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Games</li>
                </ol>
            </nav>
            <h2>Artikel Title - September, 2 2023</h2>
            <img src="{{ asset("img/pexels-photo-935949.jpeg") }}" alt="" class="rounded" style="height: 80%; width: 100%;">
        </div>

        <div class="article">
            <div class="row mt-5">
                <div class="d-flex gap-5">
                    <div class="col-8">
                        <p align="justify">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias consequatur ipsum sequi explicabo similique optio rerum sunt excepturi distinctio perferendis laudantium iure delectus ab beatae architecto non cupiditate, nihil, dolorem, deserunt totam ratione possimus labore modi soluta? Laborum nam, ea consequuntur temporibus cumque nisi voluptatem harum alias nostrum odio obcaecati aliquid ipsa corporis perferendis. Rem, porro nisi temporibus accusamus et corrupti eligendi delectus voluptatum aliquid perspiciatis error explicabo amet! Voluptates officia dolor voluptas laboriosam omnis eum doloribus quo repudiandae voluptatibus! Voluptatum saepe quis porro quia soluta deleniti delectus fugit sed ab, asperiores voluptas tenetur voluptate architecto culpa cupiditate aliquam temporibus, nisi, similique tempora sint maxime nostrum eveniet placeat! Aspernatur nisi sed ut cupiditate eos perferendis accusantium totam natus libero magnam velit nihil rem, dignissimos beatae expedita enim, quia, perspiciatis placeat iste minus distinctio corporis. Error, commodi impedit ad iusto aperiam ipsam suscipit soluta repudiandae repellat voluptas expedita qui, est enim!
                        </p>
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