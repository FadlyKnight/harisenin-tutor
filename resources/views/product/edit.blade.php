<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h1>Edit Produk</h1>
                </div>
            </div>
            <form action="{{ route('product.update', $product->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea name="deskripsi_produk" class="form-control">{{ $product->deskripsi_produk }}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="harga_produk">Harga Produk</label>
                        <input type="number" name="harga_produk" value="{{ $product->harga_produk }}" class="form-control">
                    </div>
                    <hr>
                    <h5>Category</h5>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="category_id">Pilih Kategori</label>
                            <select id="category_id" name="category_id" class="form-control">
                                <option value="">-- Pilih Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Edit Product</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>