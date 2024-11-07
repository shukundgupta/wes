@extends("../template.default")

@section("title")
    WAP ERP SOLUTIONS
@endsection


@section("custom-css")
    <link rel="stylesheet" href="{{url('/')}}/lang/css/authenticate.css?cache=<?php echo time(); ?>">
@endsection


@section("content")
    <div class="page py-4">
        <div class="branding">
            <h1 class="text-white text-center">WES</h1>
            <p>WAP ERP SOLUTIONS</p>
        </div>
        <div class="px-4">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#admin" class="nav-link active" data-toggle="tab">ADMIN</a>
                </li>
                <li class="nav-item">
                    <a href="#employee" class="nav-link" data-toggle="tab">EMPLOYEE</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="admin">
                    <form class="admin-form">
                        <div class="form-group">
                            <label>COMPANY ESTD</label>
                            <input type="date" class="form-control border-0 rounded-0" name="company_estd">
                        </div>
                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" class="form-control border-0 rounded-0" name="password" placeholder="******">
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-danger rounded-0 float-left"><i class="fa fa-sign-in"></i> LOGIN</button>
                            <div class="preloader">
                                <div class="spinner"></div>
                                <div class="spinner-2"></div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="tab-pane fade" id="employee">
                    <form class="employee-form">
                        <div class="form-group">
                            <label>USERNAME</label>
                            <input type="text" class="form-control border-0 rounded-0" name="username" placeholder="employee@wes.com">
                        </div>
                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" class="form-control border-0 rounded-0" name="password" placeholder="*******">
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-danger rounded-0 float-left"><i class="fa fa-sign-in"></i> LOGIN</button>
                            <div class="spinner"></div>
                            <div class="spinner-2"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


