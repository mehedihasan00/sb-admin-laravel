<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>* {font-family: 'Open Sans', sans-serif;}</style>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 45px">
            <div class="col-md-4 offset-md-4">
                <h4>Sign Up | Custom Authentication</h4>
                <form action="{{ route('auth.save') }}" method="post">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{ old('name') }}">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                    <br>
                    <a href="{{ route('auth.login') }}">I already have an account, login</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <!-- <body class="bg-primary"> -->
    <body style="background-color: rgba(13, 9, 243, 0.3);">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main style="margin-top: 100px;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header b-card-header"><h3 class="text-center font-weight-light my-2">Create Account</h3></div>
                                    <div class="card-body">
                                        <form class="px-2" action="{{ route('auth.save') }}" method="post">
                                            @if(Session::get('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                            @endif
                                            @csrf
                                            <div class="row my-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-2 mb-md-0">
                                                        <input name="name" class="form-control b-floating-input" id="inputFirstName" type="text" placeholder="Enter your name"  value="{{ old('name') }}" />
                                                        <label for="inputFirstName" class="b-floating-lebel">Name</label>
                                                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-floating my-3">
                                                    <input name="email" class="form-control b-floating-input" id="inputEmail" type="email" placeholder="name@example.com" value="{{ old('email') }}" />
                                                    <label for="inputEmail" class="b-floating-lebel">Email address</label>
                                                    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input name="password" class="form-control b-floating-input" id="inputPassword" type="password" placeholder="Create a password" />
                                                    <label for="inputPassword" class="b-floating-lebel">Password</label>
                                                    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2 mb-0 align-items-center justify-content-end">
                                                <button type="submit" class="btn btn-primary btn-sm">Register</button>
                                                <!-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div> -->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-4">
                                        <div class="small"><a href="{{ route('auth.login') }}">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
    </body>
</html>

