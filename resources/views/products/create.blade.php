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
        <h3 class="text-white text-center">Simple Laarvel 11 CRUD</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">

                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>

                    <form action="{{ route('products.store') }}" method="post" >
                        @csrf

                        <!-- Name field -->
                        <div class="mb-3">
                            <label for="name" class="form-label h5">Name</label>
                            <input  value="{{ old('name') }}"type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" name="name" placeholder="Name">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="sku" class="form-label h5">Sku</label>
                            <input value="{{ old('sku') }}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" name="sku" placeholder="SKU">
                            @error('sku')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Price field -->
                        <div class="mb-3">
                            <label for="price" class="form-label h5">Price</label>
                            <input value="{{ old('price') }}" type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" name="price" placeholder="Price">
                            @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="mb-3">
                        <label for="" class="form-label h5">Description</label>
                       <textarea  value="{{ old('description') }}" placeholder="description" class="form-control"name="description"  cols="30" rows="5"></textarea>
                    </div>

                <div class="mb-3">
                    <label for="" class="form-label h5">Image</label>
                    <input type="file" class="form-control form-control-lg" placeholder="Name"
                    name="Image">
                </div>
                <div class="d-grid">
                    <button class="btn btn-lg btn-primary">Submit</button>
                </div>
            </form>

        <div>
        </div>
    </div>
</div>
</div>
  </body>
</html>
