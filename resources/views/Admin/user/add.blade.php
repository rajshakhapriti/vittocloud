@extends('Admin.include.masterLayout')
@section('title') User Add @endsection
@section('page_title') Add User @endsection
@section('styles')
@endsection
@section('breadcum')
<li>
    <a href="{{ url('admin/user') }}">User</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <a href="javascript:;" class="breadcrumbActive">Add</a>
</li>
@endsection
@section('content')
<!-- BEGIN CONTENT -->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Add User
                </div>

            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                {!! Form::open(array('url' => ('/user/store'),'id' => 'form_sample_3' ,'class' => 'form-horizontal' ,'method'=>'POST', 'files'=>true)) !!}
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                <input type="hidden" name="Captchaaction" value="validate_captcha">
                <div class="form-body">
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))

                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                        @endforeach

                    </div> <!-- end .flash-message -->
                    <div class="form-group">
                        <label class="control-label col-md-3">First Name <span class="required">* </span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-check"></i>
                                </span>
                                {{ Form::text("first_name", '',array('required' => 'required','class' => 'form-control', 'id' => 'first_name','placeholder' => 'First Name')) }}
                            </div>
                            @if ($errors->has('first_name'))
                            <div class="text-danger">{{ $errors->first('first_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Last Name <span class="required">* </span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-check"></i>
                                </span>
                                {{ Form::text("last_name", '',array('required' => 'required','class' => 'form-control', 'id' => 'last_name','placeholder' => 'Last Name')) }}
                            </div>
                            @if ($errors->has('last_name'))
                            <div class="text-danger">{{ $errors->first('last_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Email Address <span class="required"> * </span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                {{ Form::email("emailname", '',array('required' => 'required','class' => 'form-control', 'id' => 'email','placeholder' => 'Enter only email')) }}

                            </div>
                            @if ($errors->has('emailname'))
                            <div class="text-danger">{{ $errors->first('emailname') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password <span class="required"> * </span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                {{ Form::password("password",array('required' => 'required','class' => 'form-control', 'id' => 'password','placeholder' => 'Enter password')) }}

                            </div>
                            @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"> Date Of Birth <span class="required"> * </span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group date date-picker" data-date-format="yyyy-mm-dd" data-error-container="#error_gender">
                                <span class="input-group-btn">
                                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                                {{ Form::text("dob", '',array('required' => 'required','class' => 'form-control', 'id' => 'dob','placeholder' => 'Date Of Birth','readonly')) }}

                            </div>
                            @if ($errors->has('dob'))
                            <div class="text-danger">{{ $errors->first('dob') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Status<span class="required">
                                * </span></label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="icheck-inline">
                                    <label>
                                        {!! Form::radio('status', '1',['checked' => 'checked'] ,['class' => 'icheck']) !!} Active
                                    </label>
                                    <label>
                                        {!! Form::radio('status', '0','',['class' => 'icheck']) !!} InActive
                                    </label>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            {!! Form::submit('Submit', array('class' => 'btn green','id'=> 'submit')) !!}
                            <a href="{{ url('/user') }}" class="btn default">Cancel</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

@endsection
@section('scripts')
<script src="https://www.google.com/recaptcha/api.js?render=6LfgDFkgAAAAADdrMToI_rk_Azhtrb88c73N104V"></script>

<script>
    var sitekey = '6LfgDFkgAAAAADdrMToI_rk_Azhtrb88c73N104V';

    $(document).ready(function() {
        grecaptcha.ready(function() {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha.execute(sitekey, {
                    action: 'validate_captcha'
                })
                .then(function(token) {
                    // add token value to form
                    document.getElementById('g-recaptcha-response').value = token;
                });
        });
    });
</script>
@endsection