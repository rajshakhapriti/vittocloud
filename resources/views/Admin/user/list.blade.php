@extends('Admin.include.masterLayout')
@section('title') User @endsection
@section('page_title') User @endsection
@section('styles')
@endsection
@section('breadcum')
<li>
    <a href="{{ url('/user') }}" class="breadcrumbActive">User</a>
</li>
@endsection
@section('content')
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="flash-message" id="alert" data-auto-dismiss="2000">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
    @endif
    @endforeach
</div> <!-- end .flash-message -->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Users
                </div>

            </div>
            <div class="portlet-body">

                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <a href="{{ url('/user/add') }}">
                                    <button id="sample_editable_1_new" class="btn green">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </a>

                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>

                {!! Form::open(array('url' => ('admin/user/updatemultirecode'),'method'=>'POST', 'files'=>true)) !!}
                <table id="user" class="table table-striped table-bordered table-hover dataTable no-footer">

                    <thead>
                        <tr>


                            <th>Id</th>

                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Verified</th>
                            <th>Created Date</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    @foreach($result as $key=>$value)
                    <tr>
                        <td>{{$value->id}}</td>

                        <td>{{$value->first_name}}</td>
                        <td>{{$value->last_name}}</td>
                        <td>{{$value->email}}</td>
                        <td>
                            @if($value->status == 1)
                            Active
                            @else
                            Inactive
                            @endif
                        </td>
                        <td> {{ Carbon\Carbon::parse($value->created_at)->format('d/M/Y') }}</td>
                        <td>
                            <a href=" {{ url('/user/edit/' . $value->id) }} " class="btn btn-success btn-sm" title="{{ trans('label.edit') }} "><i class="fa fa-edit"></i></a>
                            <a href="{{ url('/user/delete/') }}/{{ $value->id }}" class="btn btn-danger btn-sm" onclick="if (confirm(' {{ trans('you want to delete this record') }} ')) {
                    return true; } else { return false; }" title="{{ trans('Delete') }}">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>

                    </tr>
                    @endforeach

                </table>
                <div class="table-toolbar showActionHeight">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="showmultiaction" style="display: none;">
                                <div class="table-group-actions pull-left removeLeftPadding">
                                    <select name="action" class="table-group-action-input form-control input-inline input-small input-sm" required="">
                                        <option value="active">Active</option>
                                        <option value="inactive">InActive</option>
                                        <option value="delete">Delete</option>
                                    </select>
                                </div>
                                <button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
                                <!--                    {!! Form::submit('Submit', array('class' => 'btn btn-primary submit')) !!}-->
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('resources/admin-assets/plugins/global/datatables/plugins/bootstrap/dataTables.bootstrap.js') }}"></script>

<!-- <script type="text/javascript">
    $(function() {
        $(".ui-jqgrid-titlebar").hide();
        $("#load_list1").text("Loading...");
        $('#users-table').DataTable({
            serverSide: false,
            processing: true,
            ajax: "{{ url('user/array-data') }}",
            columns: [{
                    data: 'checkbox',
                    orderable: false,
                    "width": "5%"
                },
                {
                    data: 'id',
                    orderable: true,
                    searchable: true
                },

                {
                    data: 'first_name',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'last_name',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'email',
                    orderable: true,
                    searchable: true
                },


                {
                    data: 'status',
                    orderable: true
                },
                {
                    data: 'created_at',
                    orderable: true,
                    searchable: true
                },
                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    orderable: false
                }
            ],
            "language": {
                "paginate": {
                    next: '<i class="fa fa-angle-right"></i>',
                    previous: '<i class="fa fa-angle-left"></i>'
                }
            },
            "order": []
        });

    });


    function onoff(id) {

        //if (confirm('Are you sure you want to do this ?') == true) {
        $.ajax({
            type: "GET",
            url: "{{ url('admin/user/change-status') }}/" + id,
            success: function(data) {
                //alert(data);
            }
        });
    }
</script> -->
@endsection