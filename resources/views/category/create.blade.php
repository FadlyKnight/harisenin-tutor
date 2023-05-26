<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>

    <section class="section">
        <div class="container-fluid">
            <h1>Create Category</h1>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('category.index') }}" class="btn btn-outline-primary">
                        Akses Index Category
                    </a>
                    <a href="/category" class="btn btn-outline-primary">
                        Akses Index Category TIDAK MENGGUNAKAN ROUTE NAME
                    </a>
                </div>            </div>

            <div class="card">
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <label for="">Category Name</label>
                        <br>
                        <input type="text" name="category_name" class="form-control">
                        <br>
                        <label for="">Category Description</label>
                        <br>
                        <input type="text" name="category_description" class="form-control">
                        <br>
                        <button type="submit" class="btn btn-success">Submit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>