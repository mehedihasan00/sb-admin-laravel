<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Update Part</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container" style="background-color: antiquewhite">
        <div class="student-update p-2">
            <h3 class="text-center">Student Registration</h3>
            <form action="{{ url('user/update/'.$userInfo->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Full Name" value="{{ $userInfo->name }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father Name</label>
                            <input type="text" name="father_name" class="form-control form-control-sm" id="father_name" placeholder="Father Name" value="{{ $userInfo->father_name }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother Name</label>
                            <input type="text" name="mother_name" class="form-control form-control-sm" id="mother_name" placeholder="Mother Name" value="{{ $userInfo->mother_name }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <select name="class" class="form-select form-select-sm" aria-label="Default select class" id="class">
                                <option selected>{{ $userInfo->class }}</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="student_id" class="form-label">Student Id</label>
                            <input type="number" name="student_id" class="form-control form-control-sm" id="student_id" placeholder="01" value="{{ $userInfo->student_id }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="info@email.com" value="{{ $userInfo->email }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="district" class="form-label">District</label>
                            <select name="district" class="form-select form-select-sm" aria-label="Default select district" id="district">
                                <option selected>{{ $userInfo->district }}</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control form-control-sm" id="phone_number" placeholder="+880" value="{{ $userInfo->phone_number }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" class="form-control form-control-sm" id="address" rows="3" placeholder="23rd street, baltimore">{{ $userInfo->address }}</textarea>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <!-- <input type="submit" value="submit" /> -->
                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>