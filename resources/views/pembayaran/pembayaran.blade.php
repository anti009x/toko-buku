@extends('layout.layout')

@section('template')
<style>
    body {
        margin-top: 20px;
        background-color: #f1f3f7;
    }

    .avatar-lg {
        height: 5rem;
        width: 5rem;
    }

    .font-size-18 {
        font-size: 18px !important;
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    a {
        text-decoration: none !important;
    }

    .w-xl {
        min-width: 160px;
    }

    .card {
        margin-bottom: 24px;
        -webkit-box-shadow: 0 2px 3px #e4e8f0;
        box-shadow: 0 2px 3px #e4e8f0;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #eff0f2;
        border-radius: 1rem;
    }

    html {
        font-size: 1rem;
    }

    h4 {
        font-size: 1.6rem;
    }
</style>

<body style="background-color: bisque">

    <div class="container mb-10 shadow-lg p-3 mb-5 bg-white rounded">
        <h4 class="mb-10 d-flex justify-content-center text-muted text-dark" style="color: black col-3 blockquote">
            Tolong Lanjutkan Pembayaran : {{$books->title}}</h4>

        <div class="container mt-4">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
                integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

            <div class="container ">
                <div class="row">
         
                    <div class="col-xl-8">
                        <!-- end card -->
                        <div class="card border shadow-none">
                            <div class="card-body">
                                <div class="d-flex align-items-start border-bottom pb-3">
                                    <div class="me-4">
                                        <img src="{{ $books->cover_image_url }}" alt="{{ $books->title }}" class="avatar-lg rounded">
                                    </div>
                                    <div class="flex-grow-1 align-self-center overflow-hidden">
                                        <div>
                                            <h5 class="text-truncate font-size-18">{{ $books->title }}</h5>
                                            <p class="text-muted mb-0">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                            </p>
                                            <p class="mb-0 mt-1">Author : <span
                                                    class="fw-medium">{{ $books->author }}</span></p>
                                        </div>
                                    </div>
                                    <div class="flex-shrink-0 ms-2">
                                        <ul class="list-inline mb-0 font-size-16">
                                            <li class="list-inline-item">
                                                <a href="#" class="text-muted px-1">
                                                    <i class="mdi mdi-trash-can-outline"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="text-muted px-1">
                                                    <i class="mdi mdi-heart-outline"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mt-3">
                                            
                                                <h5 class="mb-0 mt-2"><span class="text-muted me-2"><del
                                                             class="font-size-16 fw-normal"></del></span>Rp.{{ $books->price }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mt-3">
                                                <p class="text-muted mb-2">Quantity</p>
                                                <div class="d-inline-flex">
                                                    <select id="quantitySelect" class="form-select form-select-sm w-xl" onchange="calculateTotal()">
                                                        <option value="1" selected="">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mt-3">
                                                {{-- <p class="text-muted mb-2">{{ $books->price }}</p>
                                                <h5>{{ $books->price }}</h5> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="row my-4">
                            <div class="col-sm-6">
                                <a href="{{route('user.view')}}" class="btn btn-link text-muted">
                                    <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                                    <a href="{{route('history.history')}}" class="btn btn-link text-muted">
                                        <i class="mdi mdi-arrow-left me-1"></i> Riwayat Transkaksi </a>
                            </div> <!-- end col -->
                            <div class="text-sm-end mt-2 mt-sm-0">
                                {{-- input api midtrans --}}
                                <form id="donation-form" method="POST" action="{{ route('donation.pay') }}">
                                    @csrf
                            
                                    <input type="hidden" name="buku_id" value="{{ $books->id }}">
                                    <input type="hidden" name="amount" id="amount" value="{{ $books->price }}">
                            
                                    {{-- Add a required field for 'judul' --}}
                                    <input type="hidden" id="judul" name="judul" value="{{ $books->title }}">

                            
                                    {{-- Add other form fields as needed --}}
                                    <button type="submit" class="btn btn-success" id="pay-button">
                                        <i class="mdi mdi-cart-outline me-1"></i>
                                        Checkout
                                    </button>
                                </form>
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div>
                    <div class="col-xl-4">
                        <div class="mt-5 mt-lg-0">
                            <div class="card border shadow-none">
                                <div class="card-header bg-transparent border-bottom py-3 px-4">
                                    <h5 class="font-size-16 mb-0">Order Summary <span class="float-end">{{ $books->id }}</span></h5>
                                </div>
                                <div class="card-body p-4 pt-2">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total :</td>
                                                    <td id="subPrice" class="fw-bold" class="text-end">Rp.{{ $books->price }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount : </td>
                                                    <td class="text-end">- $ 0</td>
                                                </tr>
                                                <tr>
                                                    <td>Shipping Charge :</td>
                                                    <td class="text-end">$ 0</td>
                                                </tr>
                                                <tr>
                                                    <td>Estimated Tax : </td>
                                                    <td class="text-end">$ 0</td>
                                                </tr>
                                                <tr class="bg-light">
                                                    <th  >Total :</th>
                                                    <td class="text-end">
                                                        <span id="totalPrice" class="fw-bold" class="text-end">Rp.{{ $books->price }}</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>

    <script>
        function calculateTotal() {
            var price = {{ $books->price }};
            var quantity = document.getElementById('quantitySelect').value;
            var total = price * quantity;
    
            // Perbarui nilai amount pada form
            document.getElementById('amount').value = total;
            document.getElementById('judul').value = '{{ $books->title }}';
    
            // Perbarui tampilan total harga dan subtotal pada halaman
            document.getElementById('totalPrice').innerText = 'Rp.' + total;
            document.getElementById('subPrice').innerText = 'Rp.' + total;
        }
    </script>
 <script>
    function calculateTotal() {
        var price = {{ $books->price }};
        var quantity = document.getElementById('quantitySelect').value;
        var total = price * quantity;

        // Perbarui nilai amount pada form
        document.getElementById('amount').value = total;

        // Perbarui tampilan total harga dan subtotal pada halaman
        document.getElementById('totalPrice').innerText = 'Rp.' + total;
        document.getElementById('subPrice').innerText = 'Rp.' + total;
    }
</script>
   <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
   <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
   <script type="text/javascript">
   $('#pay-button').click(function (event) {
event.preventDefault();

$.post("{{ route('donation.pay') }}", {
   _token: '{{ csrf_token() }}',
   name: $('#name').val(),
   judul: $('#judul').val(),
   email: $('#email').val(),
   amount: $('#amount').val(),
   note: $('#note').val()
},
function (data, status) {
   snap.pay(data.snap_token, {
       onSuccess: function (result) {
           location.reload();
       },

       onPending: function (result) {
           location.reload();
       },

       onError: function (result) {
           location.reload();
       }
   });
   return false;
});
});
   </script>
   
</body>
@endsection
