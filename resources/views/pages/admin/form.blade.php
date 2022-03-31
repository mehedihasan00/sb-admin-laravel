@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Charts</li>
    </ol>
    <div class="row">
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header b-card-header">
                    <i class="fas fa-table"></i>
                    Basic Form
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <form>
                            <div class="mb-1">
                                <label for="exampleInputEmail1" class="form-label b-level">Email address</label>
                                <input type="email" class="form-control b-input" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text b-form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-1">
                                <label for="exampleInputPassword1" class="form-label b-level">Password</label>
                                <input type="password" class="form-control b-input" id="exampleInputPassword1">
                            </div>
                            <div class="mb-1 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label b-level" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm b-btn">Sign in</button>
                        </form>
                    </div>
                </div>            
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header b-card-header">
                    <i class="fas fa-table"></i>
                    Horizontal Form
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <form>
                            <div class="row mb-1">
                                <label for="inputEmail3" class="col-sm-2 col-form-label b-level">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control b-input" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label for="inputPassword3" class="col-sm-2 col-form-label b-level">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control b-input" id="inputPassword3">
                                </div>
                            </div>
                            <fieldset class="row mb-1">
                                <legend class="col-form-label col-sm-2 pt-0 ">Radios</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input b-input-check" type="radio" name="gridRadios"
                                            id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label b-level" for="gridRadios1">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input b-input-check" type="radio" name="gridRadios"
                                            id="gridRadios2" value="option2">
                                        <label class="form-check-label b-level" for="gridRadios2">
                                            Second radio
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-1">
                                <legend class="col-form-label col-sm-2 pt-0">Checkbox</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input b-input-check" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label b-level" for="gridCheck1">
                                            Check me out
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm b-btn">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header b-card-header">
                    <i class="fas fa-table"></i>
                    Floating Label
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <div class="form-floating mb-1">
                            <input type="email" class="form-control b-floating-input" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput" class="b-floating-lebel">Email address</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="password" class="form-control b-floating-input" id="floatingPassword"
                                placeholder="Password">
                            <label for="floatingPassword" class="b-floating-lebel">Password</label>
                        </div>
                        <div class="form-floating mb-1">
                            <select class="form-select b-floating-select" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect" class="b-select-floating-lebel">Works with selects</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea" style="height: 100px;"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    File Input
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Small file input example</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div>
                            <label for="formFileLg" class="form-label">Large file input example</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Select
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-select" multiple aria-label="multiple select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Check, Radio & Switch
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Checked checkbox
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"
                                disabled>
                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Default checked radio
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                value="option3" disabled>
                            <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                        </div>
                        <hr>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckDisabled" disabled>
                            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="flexSwitchCheckCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                                switch checkbox input</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Input Group
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                        <label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6">
            <div class="card mb-4" style="font-size: small;">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Sizing
                </div>
                <div class="card-body b-card-body">
                    <div class="bg-light rounded h-100 p-3">
                        <input class="form-control form-control-lg mb-3" type="text" placeholder=".form-control-lg"
                            aria-label=".form-control-lg example">
                        <input class="form-control mb-3" type="text" placeholder="Default input"
                            aria-label="default input example">
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                            aria-label=".form-control-sm example">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection