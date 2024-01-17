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
      <div class="navbar navbar-dark bg-dark shadow-sm">
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
            <strong>Wibooks</strong>
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
          <h1 class="mt-2">Wibooks</h1>
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
       <div class=" bg-dark text-white ">
                <section style=" #f3f2f2;">
                  <div class="container py-5">
                    <div class="row d-flex justify-content-center">
                      <div class="col-md-10 col-xl-8 text-center">
                        <h3 class="fw-bold mb-4">Testimonials</h3>
                        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                          numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                          quisquam eum porro a pariatur veniam.
                        </p>
                      </div>
                    </div>
                
                    <div class="row text-center">
                      <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card">
                          <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Teresa May</h5>
                            <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star-half-alt fa-sm text-info"></i>
                              </li>
                            </ul>
                            <p class="mb-2">
                              <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                              consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                              ad velit ab hic tenetur.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-4 mb-md-0">
                        <div class="card">
                          <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                                class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Maggie McLoan</h5>
                            <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                            </ul>
                            <p class="mb-2">
                              <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                              sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                              labore laboriosam.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-0">
                        <div class="card">
                          <div class="card-body py-4 mt-2">
                            <div class="d-flex justify-content-center mb-4">
                              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                                class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                            <h5 class="font-weight-bold">Alexa Horwitz</h5>
                            <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
                            <ul class="list-unstyled d-flex justify-content-center">
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="fas fa-star fa-sm text-info"></i>
                              </li>
                              <li>
                                <i class="far fa-star fa-sm text-info"></i>
                              </li>
                            </ul>
                            <p class="mb-2">
                              <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                              nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                              vestibulum in tempus viverra turpis.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
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