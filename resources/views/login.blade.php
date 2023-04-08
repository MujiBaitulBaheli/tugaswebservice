@extends('app')
@section('content')

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Input Data Mahasiswa</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
<link href="{{asset ('assets/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Favicons -->
<meta name="theme-color" content="#7952b3">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset ('assets/sticky-footer-navbar.css')}}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

<header>
  <!-- Fixed navbar -->
  <img style ="height: 695px; width: 1350px;" src="/images/login.jpg" class="img-fluid" alt="Responsive image">
  <section style= "margin-top: -550px; margin-left: -95px;" class= "vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{ route('auth')}}" method="POST" >

            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">

            </div>
            <div class="d-flex align-items-center mb-3 pb-1">
                <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                <span class="h1 fw-bold mb-0">Login</span>
              </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter a Email" name="email"> />
                <p class="text-white">Email</p>


            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Enter password" name="password" />
                <p class="text-white">Password</p>

            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />

                <label class="form-check-label" for="form2Example3">
                    <p class="text-white">Remember me</p>
                </label>
              </div>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">
                 Login
            </button>
              <p class="small fw-bold mt-2 pt-1 mb-0, text-white">Don't have an account?
                <a href="/register" class= "text-danger"> Register </a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</header>

<!-- Begin page content -->

    <script src="{{asset ('assets/bootstrap.bundle.min.js')}}" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>

@endsection
