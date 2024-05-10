<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/imagehover.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }} ">
</head>
<body>
<section class="d-flex justify-content-center align-items-center" style="background-color: hsl(0, 0%, 96%)">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h4 class="my-5 heading-text display-3 ls-tight"
                        style="font-weight: bolder !important; color: #5FCF80 !important;">
                        Welcome To MoneyMakers <br/>
                    </h4>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        MoneyMakers Hub is your go-to destination for mastering the art of making money online. Whether
                        you're a seasoned entrepreneur or just starting out, our platform offers specialized courses,
                        freelancing opportunities, and a supportive community to help you achieve your financial goals.
                    </p>
                </div>

                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="card">
                        <h1 style="color: #4cae4c;font-weight: bolder !important;" class="det-txt text-center m-5">Sign
                            In</h1>
                        <div class="card-body py-5 px-md-5" style="padding-top: 0px !important;">
                            <form method="post" action="{{ route('login') }}">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input id="email" type="email" placeholder="Email address" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus
                                           class="form-control  @error('email') is-invalid @enderror"/>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input id="password" placeholder="Password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                          </span>
                                    @enderror
                                </div>

                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4"
                                        style="background-color: #4cae4c;border: none">
                                    Sign In
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>I Have No Account : <a href="{{ route('register') }}"> sign Up </a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
