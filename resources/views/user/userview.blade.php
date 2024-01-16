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
         
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary my-2">
                Admin Dashboard
            </a>
            <a
              {{-- href="https://getbootstrap.com/docs/4.4/examples/album/#" --}}
              class="btn btn-secondary my-2"
              >Tanyakan Sekarang !</a
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
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Buy Now !</button>
                           
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

    <footer class="text-muted" style="padding-bottom: 1px;">
       <div class="container bg-dark text-white d-flex justify-content-center">
                <span >....</span>
            </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
 

@endsection