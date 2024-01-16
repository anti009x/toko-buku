@extends('admin.admin')

@section('template_admin')
  <!-- Tombol "Tambah Buku Baru" -->
<div class="d-flex justify-content-end mb-2">
    <button type="button" class="btn btn-primary btn-lg active" data-toggle="modal" data-target="#myModal">Tambah Buku Baru</button>
</div>


<!-- Modal -->
<!-- Lanjutan dari modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Buku Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form tambah buku -->
                <form action="{{ route('admin.crud') }}" method="POST">
                    @csrf <!-- Tambahkan CSRF token untuk keamanan -->
                    
                    <!-- Judul Buku -->
                    <div class="form-group">
                        <label for="title">Judul Buku</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan judul buku" required>
                    </div>
                    
                    <!-- Penulis -->
                    <div class="form-group">
                        <label for="author">Penulis</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Masukkan nama penulis" required>
                    </div>
                    
                    <!-- Penerbit -->
                    <div class="form-group">
                        <label for="publisher">Penerbit</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Masukkan nama penerbit" required>
                    </div>
                    
                    <!-- Tahun Terbit -->
                    <div class="form-group">
                        <label for="publication_year">Tahun Terbit</label>
                        <input type="text" class="form-control" id="publication_year" name="publication_year" placeholder="Masukkan tahun terbit" required>
                    </div>

                    <!-- Kategori -->
                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <input type="text" class="form-control" id="category" name="category" placeholder="Masukkan kategori buku" required>
                    </div>

                    <!-- ISBN -->
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Masukkan ISBN buku" required>
                    </div>

                    <!-- Harga -->
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Masukkan harga buku" required>
                    </div>

                    <!-- Jumlah Halaman -->
                    <div class="form-group">
                        <label for="pages">Jumlah Halaman</label>
                        <input type="text" class="form-control" id="pages" name="pages" placeholder="Masukkan jumlah halaman buku" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Masukkan deskripsi buku" required></textarea>
                    </div>

                    <!-- Stok -->
                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="text" class="form-control" id="stock" name="stock" placeholder="Masukkan jumlah stok buku" required>
                    </div>

                    <!-- URL Gambar Cover -->
                    <div class="form-group">
                        <label for="cover_image_url">URL Gambar Cover</label>
                        <input type="text" class="form-control" id="cover_image_url" name="cover_image_url" placeholder="Masukkan URL gambar cover buku" required>
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


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">DAFTAR BUKU</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>JUDUL</th>
                                <th>IMG</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Publication Year</th>
                                <th>Category</th>
                                <th>ISBN</th>
                                <th>Price</th>
                                <th>Pages</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td class="col-1">{{$book->title}}</td>
                                <td class="col-2"><img src="{{ $book->cover_image_url }}" alt="{{ $book->title }}" width="100%"></td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publisher }}</td>
                                <td class="col-2">{{ $book->publication_year }}</td>
                                <td >{{ $book->category }}</td>
                                <td class="col-2">{{ $book->isbn }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->pages }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->stock }}</td>
                                <td class=" col-2 ">
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $book->id }}">Hapus</button>
                                    <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#editModal{{ $book->id }}">Ubah</button>
                                
                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="deleteModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $book->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel{{ $book->id }}">Konfirmasi Hapus</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin ingin menghapus buku ini?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                                    <form method="POST" action="{{ route('admin.crud.destroy', ['id' => $book->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Ya</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Modal Edit -->
                                <div class="modal fade" id="editModal{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $book->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $book->id }}">Edit Buku</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.crud.update', ['id' => $book->id]) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="title">Judul</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="author">Penulis</label>
                                                        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="publisher">Penerbit</label>
                                                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="publication_year">Tahun Terbit</label>
                                                        <input type="text" class="form-control" id="publication_year" name="publication_year" value="{{ $book->publication_year }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="category">Kategori</label>
                                                        <input type="text" class="form-control" id="category" name="category" value="{{ $book->category }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="isbn">ISBN</label>
                                                        <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="price">Harga</label>
                                                        <input type="text" class="form-control" id="price" name="price" value="{{ $book->price }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pages">Jumlah Halaman</label>
                                                        <input type="text" class="form-control" id="pages" name="pages" value="{{ $book->pages }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description" required>{{ $book->description }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="stock">Stok</label>
                                                        <input type="text" class="form-control" id="stock" name="stock" value="{{ $book->stock }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cover_image_url">URL Gambar Sampul</label>
                                                        <input type="text" class="form-control" id="cover_image_url" name="cover_image_url" value="{{ $book->cover_image_url }}" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </td>
                               
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


