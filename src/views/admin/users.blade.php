@extends('kitchen::admin.layouts.admin')

{{-- Page Title --}}
@section('page_title')
Users
@stop

{{-- Page subtitle --}}
@section('page_subtitle')
user management
@stop

@section('breadcrumbs')
<li>
    <i class="fa fa-home"></i>
    <a href="{{{ url(Config::get('kitchen::adminRoute')) }}}">Dashboard</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <a href="javascript:;">Users</a>
</li>
@stop


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="portlet box grey-cascade">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>Managed Table
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse">
                    </a>
                    <a href="#portlet-config" data-toggle="modal" class="config">
                    </a>
                    <a href="javascript:;" class="reload">
                    </a>
                    <a href="javascript:;" class="remove">
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <button id="sample_editable_1_new" class="btn green">
                            Add New <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="sample_1">
                    <thead>
                    <tr>
                        <th class="table-checkbox">
                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Points
                        </th>
                        <th>
                            Joined
                        </th>
                        <th>
                            Status
                        </th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('javascript')
{{ HTML::script('packages/chrisbjr/kitchen/assets/admin/pages/scripts/table-managed.js') }}
@stop