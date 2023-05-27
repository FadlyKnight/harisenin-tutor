<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h1>Detail Produk ({{ $product->nama_produk }})</h1>
                </div>
            </div>
            <div class="card-body">
                <h5>Deskripsi Produk</h5>
                <p>
                    {{ $product->deskripsi_produk }}
                </p>
                <h5>Harga Produk</h5>
                <p>
                    Rp. {{ $product->harga_produk }}
                </p>
                <h5>Tanggal Dibuat</h5>
                <p>
                    {{ $product->created_at }}
                </p>
                <h5>Terakhir Diubah</h5>
                <p>
                    {{ $product->updated_at }}
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ route('product.index') }}" class="btn btn-outline-primary btn-sm">
                    Kembali
                </a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>