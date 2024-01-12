@extends('layouts.main')

@section('content')

<html lang="en">
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Car Models</h2>
                    <div class="ml-auto">
                      <a href="{{ route('cars.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
          

                    @if($manufacturers->count())

                      @foreach ($manufacturers as $index => $manufacturer)

                        <tr>
                          <th scope="row">{{$index + 1}}</th>
                          <td>{{$manufacturer -> name}}</td>
                          <td>{{$manufacturer -> address}}</td>
                          <td>{{$manufacturer -> phone}}</td>
                        </tr>

                      @endforeach
                    @endif

                  </tbody>
                </table> 


              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

@endsection