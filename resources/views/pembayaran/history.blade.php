

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