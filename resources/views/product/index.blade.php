<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">          
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h1>List Produk</h1>
                            <a href="{{ route('product.create') }}" class="btn btn-outline-primary btn-sm">
                                Create Product
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session()->has('sukses'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('sukses') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Kategori</th>
                                    <th>Harga Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->nama_produk }}</td>
                                        <td>{{ $product->category->nama_kategori ?? 'Tidak Ada Kategori' }}</td>
                                        <td>Rp. {{ $product->harga_produk }}</td>
                                        <td>
                                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-outline-secondary">
                                                Detail
                                            </a>
                                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-outline-warning">
                                                Edit
                                            </a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-md-6">          
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h1>List Kategori</h1>
                            <a href="{{ route('category.create') }}" class="btn btn-outline-primary btn-sm">
                                Create Kategori
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->nama_kategori }}</td>
                                        <td>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>