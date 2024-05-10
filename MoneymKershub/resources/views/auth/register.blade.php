<!-- Section: Design Block -->
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
                    <h4 class="heading-text my-5 display-3 ls-tight"
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
                            Up</h1>
                        <div class="card-body py-5 px-md-5" style="padding-top: 0px !important;">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="text" placeholder="First name" name="name"
                                                   id="form3Example1"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   required autocomplete="first_name" value="{{ old('name') }}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                            <input placeholder="Last name" name="last_name" type="text"
                                                   id="form3Example2"
                                                   class="form-control"/>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input id="email" placeholder="Enter Email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-1">
                                    <input id="password" placeholder="Enter Password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <p class="m-0 ml-3 mt-3" style="text-align: start">I am</p>
                                <div class="col-md-12 d-flex mb-4">
                                    <div class="form-check" style="margin-right: 10px">
                                        <input type="radio" class="form-check-input" id="radio1" name="role" value="{{ \App\Models\User::TEACHER }}">
                                        <label class="form-check-label" for="radio1">Teacher</label>
                                    </div>
                                    <div class="form-check" style="margin-right: 10px">
                                        <input type="radio" class="form-check-input" id="radio2" name="role" value="{{ \App\Models\User::STUDENT }}">
                                        <label class="form-check-label" for="radio2">Student</label>
                                    </div>
                                    <div class="form-check" style="margin-right: 10px">
                                        <input type="radio" class="form-check-input" id="radio3" name="role" value="{{ \App\Models\User::FREELANCER }}">
                                        <label class="form-check-label" for="radio3">Freelancer</label>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                        class="btn btn-primary btn-block mb-4"
                                        style="background-color: #4cae4c;border: none">
                                    Sign up
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Already Have Account : <a href="{{ route('login') }}"> Sign In </a></p>
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
<!-- Section: Design Block -->
