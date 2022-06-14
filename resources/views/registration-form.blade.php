<!doctype html>
<html lang="en">

<head>
    <title> Laravel 8 Form Validation - Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="{{url('user/create')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-xl-6 m-auto">
                    <div class="card shadow">
                        @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{Session::get('success')}}
                        </div>
                        @elseif(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{Session::get('failed')}}
                        </div>
                        @endif

                        <div class="card-header">
                            <h4 class="card-title font-weight-bold"> Laravel 8 Form Validation </h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="first_name">First Name <span class="text-danger"> * </span> </label>
                                <input type="text" name="first_name" class="form-control" value="{{old('first_name')}}" />
                                {!!$errors->first("first_name", "<span class='text-danger'>:message</span>")!!}
                            </div>
                            <div class="form-group">
                                <label for="last_name">last Name <span class="text-danger"> * </span> </label>
                                <input type="text" name="last_name" class="form-control" value="{{old('last_name')}}" />
                                {!!$errors->first("last_name", "<span class='text-danger'>:message</span>")!!}
                            </div>


                            <div class="form-group">
                                <label for="email"> Email <span class="text-danger"> * </span> </label>
                                <input type="text" name="email" class="form-control" value="{{old('email')}}" />
                                {!!$errors->first("email", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="dob"> DOB <span class="text-danger"> * </span></label>
                                <input type="text" name="dob" class="form-control" value="{{old('dob')}}" />
                                {!!$errors->first("dob", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="password"> Password <span class="text-danger"> * </span></label>
                                <input type="password" name="password" class="form-control" value="{{old('password')}}" />
                                {!!$errors->first("password", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="confirm_password"> Confirm Password <span class="text-danger"> * </span></label>
                                <input type="password" name="confirm_password" class="form-control" value="{{old('confirm_password')}}" />
                                {!!$errors->first("confirm_password", "<span class='text-danger'>:message</span>")!!}
                            </div>

                            <div class="form-group">
                                <label for="address"> Address <span class="text-danger"> * </span></label>
                                <input type="text" name="address" class="form-control" value="{{old('address')}}" />
                                {!!$errors->first("address", "<span class='text-danger'>:message</span>")!!}
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success"> Register </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>