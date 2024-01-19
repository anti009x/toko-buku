

@extends('layout.layout')

@section('template')

<style>



 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 p {
     font-size: 0.875rem;
     margin-bottom: .5rem;
     line-height: 1.5rem
 }

 .table-responsive {
     display: block;
     width: 100%;
     overflow-x: auto;
     -webkit-overflow-scrolling: touch;
     -ms-overflow-style: -ms-autohiding-scrollbar
 }

 .table,
 .jsgrid .jsgrid-table {
     width: 100%;
     max-width: 100%;
     margin-bottom: 1rem;
     background-color: transparent
 }

 .table thead th,
 .jsgrid .jsgrid-table thead th {
     border-top: 0;
     border-bottom-width: 1px;
     font-weight: 500;
     font-size: .875rem;
     text-transform: uppercase
 }

 .table td,
 .jsgrid .jsgrid-table td {
     font-size: 0.875rem;
     padding: .875rem 0.9375rem
 }

 .badge {
     border-radius: 0;
     font-size: 12px;
     line-height: 1;
     padding: .375rem .5625rem;
     font-weight: normal
 }
</style>

<body style="background-color: bisque">
    <h4 class=" d-flex justify-content-center text-muted text-dark mt-4" style="color: black col-3 blockquote">
      INFORMASI TRANSAKSI</h4>
    <div class="container mb-10 shadow-lg p-3  bg-white rounded mb-2 mt-4">

        <div class="d-flex justify-content-end mb-2">
            <button type="button" class="btn btn-primary btn-md " data-toggle="modal" data-target="#myModal">Berikan Rating Anda</button>
        </div>
        <div class="d-flex justofy-content-start mb-2" >
            <a href="{{ route('user.view') }}" style="width: 20%">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 485.963" width="20" height="20">
                        <path fill="#F03B31" d="M238.441 171.532l256.495-19.808c9.347-.722 17.064 7.689 17.064 17.061v148.393c0 9.373-7.704 17.783-17.064 17.061l-256.495-19.808v.369l35.318 100.96c19.779 51.211-12.189 91.873-49.588 57.439L24.189 281.561c-32.252-32.255-32.252-45.759 0-78.011L224.171 11.913c36.273-32.432 69.367 6.228 49.588 57.436l-35.318 100.963v1.22z"/>
                    </svg>
                </p>
            </a>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Berikan Rating Anda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form tambah buku -->
                        <form action="{{route('rating.send')}}" method="POST">
                            @csrf 
                            <!-- Judul Buku -->
                            <div class="form-group">
                                <label for="title">Berikan Rating Anda</label>
                                <select class="form-select form-select-sm w-xl" name="rating" id="rating">
                                    <option value="1" selected="">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="deskripsi">Komentar</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Komentar" required></textarea>
                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
            <div class="container ">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>CODE</th>
                          <th>NAME</th>
                          <th>AMOUT</th>
                          <th>JUDUL</th>
                          <th>STATUS</th>
                          <th>TANGGAL pembelian</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($history as $historys)
                        <tr>
                          <td>{{$historys->id  }}</td>
                          <td>{{$historys->code }}</td>
                          <td>{{$historys->name }}</td>
                          <td>{{$historys->amount }}</td>
                          <td>{{$historys->judul }}</td>
                          <td>{{$historys->status}}</td>
                          <td>{{$historys->created_at }}</td>
                    
                        </tr>
                     
                   
                      </tbody>
                      @endforeach
                    </table>
                
                </div>
</div>
        </body>
@endsection