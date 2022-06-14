@extends('Admin.include.masterLayout')
@section('title') Edit User @endsection
@section('page_title') Edit User @endsection
@section('styles')
@endsection
@section('breadcum')
<li>
    <a href="{{ url('/user') }}">User</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <a href="javascript:;" class="breadcrumbActive">Edit</a>
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
                    <i class="fa fa-gift"></i>Edit User
                </div>

            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                {!! Form::open(array('url' => ('/user/store'),'id' => 'form_sample_3' ,'class' => 'form-horizontal' ,'method'=>'POST', 'files'=>true)) !!}
                <input name="id" value="{{ $result->id }}" type="hidden">
                <div class="form-body">
                    @if ($message = Session::get('danger'))
                    <div class="alert alert-danger display-hide">
                        <button class="close" data-close="alert"></button>
                    </div>
                    @endif

                    <div class="form-group">
                        <label class="control-label col-md-3">
                            First Name <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            {{ Form::text("first_name",$result->first_name,array('required' => 'required','class' => 'form-control', 'id' => 'first_name','placeholder' => 'First Name')) }}
                            @if ($errors->has('first_name'))
                            <div class="error">{{ $errors->first('first_name') }}</div>
                            @endif

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Last Name <span class="required"> * </span>
                        </label>
                        <div class="col-md-4">
                            {{ Form::text("last_name",$result->last_name,array('required' => 'required','class' => 'form-control', 'id' => 'last_name','placeholder' => 'Last Name')) }}
                            @if ($errors->has('last_name'))
                            <div class="error">{{ $errors->first('last_name') }}</div>
                            @endif

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            Email Address <span class="required"> * </span>
                        </label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                {{ Form::text("emailname", $result->email,array('required' => 'required','class' => 'form-control', 'id' => 'email','title'=>'Invalid Formate. Please enter only email front name. System will autometically inserting @aryasteel.in','placeholder' => 'Enter only email front name without domain.')) }}

                                @if ($errors->has('emailname'))
                                <div class="error">{{ $errors->first('emailname') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Date Of Birth<span class="required">
                                * </span></label>
                        <div class="col-md-6">
                            <div class="input-group date date-picker" data-date-format="yyyy-mm-dd" data-error-container="#error_gender">
                                {{ Form::text("dob",$result->DOB,array('required' => 'required','class' => 'form-control', 'id' => 'dob','placeholder' => 'Date Of Birth','readonly')) }}
                                <span class="input-group-btn">
                                    <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <!-- /input-group -->
                            <span class="help-block">
                                Select a Date </span>
                            <div id="error_dob">
                                @if ($errors->has('dob'))
                                <div class="error">{{ $errors->first('dob') }}</div>
                                @endif
                            </div>
                        </div>

                    </div>




                    <div class="form-group">
                        <label class="col-md-3 control-label">Status<span class="required">
                                * </span></label>
                        <div class="col-md-6">
                            <div class="input-group">
                                <div class="icheck-inline">
                                    @if($result->status == 1)
                                    <label>
                                        {!! Form::radio('status', '1',['checked' => 'checked'] ,['class' => 'icheck']) !!} Active
                                    </label>
                                    <label>
                                        {!! Form::radio('status', '0','',['class' => 'icheck']) !!} InActive
                                    </label>
                                    @else
                                    <label>
                                        {!! Form::radio('status', '1','' ,['class' => 'icheck']) !!} Active
                                    </label>
                                    <label>
                                        {!! Form::radio('status', '0',['checked' => 'checked'],['class' => 'icheck']) !!} InActive
                                    </label>
                                    @endif
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
                </form>
                <!-- END FORM-->
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

@endsection
@section('scripts')
@endsection