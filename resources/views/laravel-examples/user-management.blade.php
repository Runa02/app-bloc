@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Administrator's Article</h5>
                        </div>
                        <a href="{{route('article-management')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Tambah Artikel</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2 mt-4">
                    <div class="table-responsive p-0">
                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-secondary text-xxs font-weight-bolder opacity-7">
                                        No.
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $datas as $data )
                                <tr>
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$loop -> iteration}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$data -> judul}}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$data -> created_at}}</span>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('article-delete', $data->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('article-detail', $data -> id)}}" class="mx-3">
                                            <i class="fas fa-newspaper"></i>
                                        </a>
                                        <span>
                                            <i role="button" class="cursor-pointer fas fa-trash text-secondary deleteButton"></i>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
// Menangani klik tombol "Delete"
  $('.deleteButton').click(function (e) {
  e.preventDefault(); // Mencegah form dikirim secara langsung
  
  const form = $(this).closest('form'); // Find the nearest form element
  
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-success',
      cancelButton: 'btn btn-danger mr-3'
    },
    buttonsStyling: false
  });

  swalWithBootstrapButtons.fire({
    title: 'Sudah Yakin?',
    text: "Perubahan tidak akan bisa dikembalikan",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yakin',
    cancelButtonText: 'Tidak',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      // Jika pengguna mengonfirmasi, kirim form penghapusan
      form.submit(); // Submit only the form associated with the clicked button
    } else if (result.dismiss === Swal.DismissReason.cancel) {
      swalWithBootstrapButtons.fire(
        'Dibatalkan',
        'Tidak ada perubahan terhadap data ini',
        'error'
      );
    }
  });
});
});

</script>
 
@endsection