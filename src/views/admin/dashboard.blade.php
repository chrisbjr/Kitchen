@extends('kitchen::admin.layouts.admin')

{{-- Page Title --}}
@section('page_title')
Dashboard
@stop

{{-- Page subtitle --}}
@section('page_subtitle')
statistics and more
@stop

@section('breadcrumbs')
<li>
    <i class="fa fa-home"></i>
    <a href="{{{ url('admin/dashboard') }}}">Dashboard</a>
</li>
@stop