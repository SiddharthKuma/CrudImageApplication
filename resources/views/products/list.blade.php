<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple Laarvel  CRUD</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @if(session::has('success'))
            <div class="col-md-1o">
                {{ session('success') }}
  </div>
            @endif
            <div class="col-md-10">

                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white"> Products </h3>



        <div>
        </div>
    </div>
</div>
</div>
  </body>
</html>
