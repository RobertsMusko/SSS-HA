@extends('layouts.main')

@section('content')
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Car Details</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="model" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$car->model}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$car->year}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Salesperson email</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$car->salesperson_email}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$car->manufacturer->name}}</p>
                      </div>
                    </div>

                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-info">Edit</a>
                          <a href="{{ route('cars.delete', $car->id)}}" class="btn-delete btn btn-outline-danger">Delete</a>
                          <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary" >Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <form id="form-delete" method="POST" style="display: none">
        @method('DELETE')
        @csrf
    </form>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <script>
        document.querySelector('.btn-delete').addEventListener('click', function (event) {
            event.preventDefault();
            if (confirm('Are you sure?')) {
                let action = "{{ route('cars.delete', $car->id) }}";
                let form = document.getElementById('form-delete');
                window.location.href = "{{ route('cars.index') }}";
                form.setAttribute('action', action);
                form.submit();
            }
        });
    </script>
  </body>
</html>

@endsection