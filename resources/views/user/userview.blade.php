@extends('layout.layout')
@section('template')



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .card {
  border-radius: .7rem;
}
    </style>
    <!-- Custom styles for this template -->


  <body cz-shortcut-listen="true">
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">
                Add some information about the album below, the author, or any
                other background context. Make it a few sentences long so folks
                can pick up some informative tidbits. Then, link them off to
                some social networking sites or contact information.
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li>
                  <a
                    {{-- href="https://getbootstrap.com/docs/4.4/examples/album/#" --}}
                    class="text-white"
                    >Follow on Twitter</a
                  >
                </li>
                <li>
                  <a
                    {{-- href="https://getbootstrap.com/docs/4.4/examples/album/#" --}}
                    class="text-white"
                    >Like on Facebook</a
                  >
                </li>
                <li>
                  <a
                    {{-- href="https://getbootstrap.com/docs/4.4/examples/album/#" --}}
                    class="text-white"
                    >Email me</a
                  >
                </li>
                <li>
                  <a
                    {{-- href="https://getbootstrap.com/docs/4.4/examples/album/#" --}}
                    class="text-white"
                    >
                    
                    <form id="logout.perform" action="{{ route('logout.perform') }}" method="POST">
                    @csrf
    <button type="submit" class="btn-sm btn-primary ">Logout</button>
</form>
</a>
                </li>
         
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
      <div class="navbar fixed-top navbar-dark bg-dark shadow-sm ">
        
        <a href="{{route('history.history')}}" >
          <span class="d-flex justify-content-end">
          <svg  height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 486.569 486.569" xml:space="preserve">
<g>
	<path fill="white" d="M146.069,320.369h268.1c30.4,0,55.2-24.8,55.2-55.2v-112.8c0-0.1,0-0.3,0-0.4c0-0.3,0-0.5,0-0.8c0-0.2,0-0.4-0.1-0.6
		c0-0.2-0.1-0.5-0.1-0.7s-0.1-0.4-0.1-0.6c-0.1-0.2-0.1-0.4-0.2-0.7c-0.1-0.2-0.1-0.4-0.2-0.6c-0.1-0.2-0.1-0.4-0.2-0.6
		c-0.1-0.2-0.2-0.4-0.3-0.7c-0.1-0.2-0.2-0.4-0.3-0.5c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.2-0.3-0.3-0.5c-0.1-0.2-0.3-0.4-0.4-0.6
		c-0.1-0.2-0.2-0.3-0.4-0.5c-0.1-0.2-0.3-0.3-0.4-0.5s-0.3-0.3-0.4-0.5s-0.3-0.3-0.4-0.4c-0.2-0.2-0.3-0.3-0.5-0.5
		c-0.2-0.1-0.3-0.3-0.5-0.4c-0.2-0.1-0.4-0.3-0.6-0.4c-0.2-0.1-0.3-0.2-0.5-0.3s-0.4-0.2-0.6-0.4c-0.2-0.1-0.4-0.2-0.6-0.3
		s-0.4-0.2-0.6-0.3s-0.4-0.2-0.6-0.3s-0.4-0.1-0.6-0.2c-0.2-0.1-0.5-0.2-0.7-0.2s-0.4-0.1-0.5-0.1c-0.3-0.1-0.5-0.1-0.8-0.1
		c-0.1,0-0.2-0.1-0.4-0.1l-339.8-46.9v-47.4c0-0.5,0-1-0.1-1.4c0-0.1,0-0.2-0.1-0.4c0-0.3-0.1-0.6-0.1-0.9c-0.1-0.3-0.1-0.5-0.2-0.8
		c0-0.2-0.1-0.3-0.1-0.5c-0.1-0.3-0.2-0.6-0.3-0.9c0-0.1-0.1-0.3-0.1-0.4c-0.1-0.3-0.2-0.5-0.4-0.8c-0.1-0.1-0.1-0.3-0.2-0.4
		c-0.1-0.2-0.2-0.4-0.4-0.6c-0.1-0.2-0.2-0.3-0.3-0.5s-0.2-0.3-0.3-0.5s-0.3-0.4-0.4-0.6c-0.1-0.1-0.2-0.2-0.3-0.3
		c-0.2-0.2-0.4-0.4-0.6-0.6c-0.1-0.1-0.2-0.2-0.3-0.3c-0.2-0.2-0.4-0.4-0.7-0.6c-0.1-0.1-0.3-0.2-0.4-0.3c-0.2-0.2-0.4-0.3-0.6-0.5
		c-0.3-0.2-0.6-0.4-0.8-0.5c-0.1-0.1-0.2-0.1-0.3-0.2c-0.4-0.2-0.9-0.4-1.3-0.6l-73.7-31c-6.9-2.9-14.8,0.3-17.7,7.2
		s0.3,14.8,7.2,17.7l65.4,27.6v61.2v9.7v74.4v66.5v84c0,28,21,51.2,48.1,54.7c-4.9,8.2-7.8,17.8-7.8,28c0,30.1,24.5,54.5,54.5,54.5
		s54.5-24.5,54.5-54.5c0-10-2.7-19.5-7.5-27.5h121.4c-4.8,8.1-7.5,17.5-7.5,27.5c0,30.1,24.5,54.5,54.5,54.5s54.5-24.5,54.5-54.5
		s-24.5-54.5-54.5-54.5h-255c-15.6,0-28.2-12.7-28.2-28.2v-36.6C126.069,317.569,135.769,320.369,146.069,320.369z M213.269,431.969
		c0,15.2-12.4,27.5-27.5,27.5s-27.5-12.4-27.5-27.5s12.4-27.5,27.5-27.5S213.269,416.769,213.269,431.969z M428.669,431.969
		c0,15.2-12.4,27.5-27.5,27.5s-27.5-12.4-27.5-27.5s12.4-27.5,27.5-27.5S428.669,416.769,428.669,431.969z M414.169,293.369h-268.1
		c-15.6,0-28.2-12.7-28.2-28.2v-66.5v-74.4v-5l324.5,44.7v101.1C442.369,280.769,429.669,293.369,414.169,293.369z"/>
</g>
</svg>
</span>
        </a>

        <div class="container d-flex justify-content-between">
          <a
            {{-- href="https://getbootstrap.com/docs/4.4/examples/album/#" --}}
            class="navbar-brand d-flex align-items-center"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              aria-hidden="true"
              class="mr-2"
              viewBox="0 0 24 24"
              focusable="false"
            >
              <path
                {{-- d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" --}}
              ></path>
              <circle cx="12" cy="13" r="4"></circle>
            </svg>
            <strong>KStore</strong>
            
       
          </a>
          <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarHeader"
          aria-controls="navbarHeader"
          aria-expanded="false"
          aria-label="Toggle navigation"
          id="ButtonClickYa" 
      >
          <span class="navbar-toggler-icon"></span>
      </button>
        </div>
      </div>
    </header>

    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="mt-2">KStore</h1>
          <p class="lead text-muted">
"Selamat datang di ritel terlengkap kami. Jika ada pertanyaan, jangan ragu untuk bertanya lebih lanjut. Kami di sini untuk membantu Anda menemukan apa yang Anda butuhkan dan memberikan rekomendasi terbaik. Apakah Anda mencari sesuatu yang spesifik, atau hanya ingin menjelajahi koleksi kami? Staf kami selalu siap untuk memberikan bantuan dan informasi terkini tentang produk-produk kami. Terima kasih telah memilih kami, dan semoga Anda memiliki pengalaman belanja yang menyenangkan!"
          </p>
          <p>
         
            {{-- <a href="{{ route('admin.dashboard') }}" class="btn btn-primary my-2">
                Admin Dashboard
            </a> --}}
              <a   class="btn btn-secondary my-2" href="{{ route('message.message') }}" class="btn btn-primary my-2" >Tanyakan Sekarang !</a
            >
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ $book->cover_image_url }}" alt="{{ $book->title }}" width="100%" >
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">
                                    Author: {{ $book->author }}<br>
                                    Publisher: {{ $book->publisher }}<br>
                                    Publication Year: {{ $book->publication_year }}<br>
                                    Category: {{ $book->category }}<br>
                                    ISBN: {{ $book->isbn }}<br>
                                    Price: {{ $book->price }}<br>
                                    Pages: {{ $book->pages }}<br>
                                    Description: {{ $book->description }}<br>
                                    Stock: {{ $book->stock }}<br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">


                                      <button type="button" class="btn btn-sm btn-outline-secondary" onclick="redirectToPayment('{{ route('id.bayar', ['id' => $book->id]) }}')">Buy Now !</button>
                           

                                    </div>
                                    <small class="text-muted">Updated: {{ $book->updated_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    
      </div>
    </main>

    <footer >

      <div class="bg-dark text-white ">
        <section class="bg-dark " >
            <div class="container py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-xl-8 text-center">
                        <h3 class="fw-bold mb-4">TESTIMONI</h3>
                    </div>
                </div>
              {{-- <div class=" container "> --}}
                <div id="carouselExampleIndicators" class="carousel " data-ride="carousel" >
                    <ol class="">

                    </ol>
                    <div class="carousel-inner">
                        @foreach ($ratings as $key => $rating)
                            <div  class="carousel-item{{ $key == false ? ' active' : '' }} mb-5">
                                <div class="row text-center  ">
                                    <div class=" mb-1 mb-md-0 mt-4 d-flex justify-content-center ">
                                        <div class="card w-50 ">
                                            <div class="card-body py-4 mt-2">
                                                <div class="mb-4">
                                                    <img src="https://images-cdn.ubuy.co.id/634e8cbd790d3a63056bd094-x-kites-face-kite-marvel-avengers-iron.jpg"
                                                        class="rounded-circle shadow-1-strong" width="100" height="100" />
                                                </div>
                                                <h5 class="font-weight-bold">{{ $rating->name }}</h5>
                                                <ul class="list-unstyled d-flex justify-content-center">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $rating->rating)
                                                            <li><i class="fas fa-star fa-sm text-info"></i></li>
                                                        @else
                                                            <li><i class="far fa-star fa-sm text-info"></i></li>
                                                        @endif
                                                    @endfor
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>{{ $rating->deskripsi }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            {{-- </div> --}}
          </div>
        </section>
    </div>
    
            
    </footer>
   <script>
      function redirectToPayment(url) {
          window.location.href = url;
      }

      </script>
      <script >
        function chat(url){
          window.location.href =url;
        }
      </script>

<script>

  var ButtonClickYa = document.getElementById('ButtonClickYa'){
    ButtonClickYa.addEventListener('clic', function()){
      var tutup_buka = ButtonClickYa.contains('collapased')
      if (tutup_buka){
        ButtonClickYa.classLIst.remove('collpased')
      }else{
        ButtonClickYa.classLIst.add('collpased')
      }
    }
  }

</script>
  </body>
 

@endsection