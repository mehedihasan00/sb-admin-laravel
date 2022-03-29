<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <div class="row student-info">
            <div class="col-md"></div>
            <div class="col-md-8 col-12">
                <div>
                    <span class="badge bg-success">with Laravel</span>
                    <h3 class="text-center">Student Registration</h3>
                </div>
            <form action="{{ route('store.user') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father Name</label>
                            <input type="text" name="father_name" class="form-control form-control-sm" id="father_name" placeholder="Father Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother Name</label>
                            <input type="text" name="mother_name" class="form-control form-control-sm" id="mother_name" placeholder="Mother Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <select name="class" class="form-select form-select-sm" aria-label="Default select class" id="class">
                                <option selected>Class</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="student_id" class="form-label">Student Id</label>
                            <input type="number" name="student_id" class="form-control form-control-sm" id="student_id" placeholder="01">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="district" class="form-label">District</label>
                            <select name="district" class="form-select form-select-sm" aria-label="Default select district" id="district">
                                <option selected>District</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Bandarban">Bandarban</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control form-control-sm" id="phone_number" placeholder="+880">
                        </div>
                    </div>
                    <div class="col-md-12 col-12">
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" class="form-control form-control-sm" id="address" rows="3" placeholder="23rd street, baltimore"></textarea>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <!-- <input type="submit" value="submit" /> -->
                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-md"></div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="table-responsive">
                <table id="example" class="table">
                    <thead class="bg-success">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>F. Name</th>
                            <th>M. Name</th>
                            <th>Class</th>
                            <th>Stu. Id</th>
                            <th>Email</th>
                            <th>District</th>
                            <th>Ph. Number</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $i=1;
                        @endphp
                        @foreach($userInfo as $user)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->father_name }}</td>
                            <td>{{ $user->mother_name }}</td>
                            <td>{{ $user->class }}</td>
                            <td>{{ $user->student_id }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->district }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                               <div class="d-flex gap-2">
                                    <!-- <a href="{{ url('user/edit/'.$user->id) }}" class="btn btn-info btn-sm">Edit</a> -->
                                    <a href="#staticBackdrop{{ $user->id }}" class="btn btn-info btn-sm text-white"  data-bs-toggle="modal">Edit</a>
                                    <div class="modal fade" id="staticBackdrop{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content modal-background" style="font-family: system-ui">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Update Student Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <form action="{{ url('user/update/'.$user->id) }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="name" class="form-label form-margin-bottom">Name</label>
                                                            <input type="text" name="name" class="form-control form-control-sm" id="name" placeholder="Full Name" value="{{ $user->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="father_name" class="form-label form-margin-bottom">Father Name</label>
                                                            <input type="text" name="father_name" class="form-control form-control-sm" id="father_name" placeholder="Father Name" value="{{ $user->father_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="mother_name" class="form-label form-margin-bottom">Mother Name</label>
                                                            <input type="text" name="mother_name" class="form-control form-control-sm" id="mother_name" placeholder="Mother Name" value="{{ $user->mother_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="class" class="form-label form-margin-bottom">Class</label>
                                                            <select name="class" class="form-select form-select-sm" aria-label="Default select class" id="class">
                                                                <option selected>{{ $user->class }}</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="student_id" class="form-label form-margin-bottom">Student Id</label>
                                                            <input type="number" name="student_id" class="form-control form-control-sm" id="student_id" placeholder="01" value="{{ $user->student_id }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="email" class="form-label form-margin-bottom">Email</label>
                                                            <input type="email" name="email" class="form-control form-control-sm" id="email" placeholder="info@email.com" value="{{ $user->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="district" class="form-label form-margin-bottom">District</label>
                                                            <select name="district" class="form-select form-select-sm" aria-label="Default select district" id="district">
                                                                <option selected>{{ $user->district }}</option>
                                                                <option value="Dhaka">Dhaka</option>
                                                                <option value="Bandarban">Bandarban</option>
                                                                <option value="Sylhet">Sylhet</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="phone_number" class="form-label form-margin-bottom">Phone Number</label>
                                                            <input type="text" name="phone_number" class="form-control form-control-sm" id="phone_number" placeholder="+880" value="{{ $user->phone_number }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-2">
                                                            <label for="address" class="form-label form-margin-bottom">Address</label>
                                                            <textarea name="address" class="form-control form-control-sm" id="address" rows="3" placeholder="23rd street, baltimore">{{ $user->address }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end"> 
                                                        <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a onclick="deleteItem('{{ url('delete/user/'.$user->id) }}')" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>           
                </table>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>