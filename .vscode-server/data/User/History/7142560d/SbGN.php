@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Contact</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="index.html">            
            <strong>Contact</strong> App
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-toggler">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="#" class="nav-link">Companies</a></li>
            <li class="nav-item active"><a href="#" class="nav-link">Contacts</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Add New Contact</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Model</label>
                      <div class="col-md-9">
                        <input type="text" name="first_name" id="first_name" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Year</label>
                      <div class="col-md-9">
                        <input type="text" name="last_name" id="last_name" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Salesperson Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="company_id" class="col-md-3 col-form-label">Manufacturer</label>
                      <div class="col-md-9">
                        <select name="company_id" id="company_id" class="form-control">
                          <option value="">Select Company</option>
                          <option value="1">Company One</option>
                          <option value="2">Company Two</option>
                          <option value="3">Company Three</option>
                        </select>
                      </div>
                    </div>
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="index.html" class="btn btn-outline-secondary">Cancel</a>
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

@endsection