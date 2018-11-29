@extends('Backend::layouts.master')

@section('title', 'User')

@section('metas')

@endsection

@section('styles')
@endsection

@section('content')
    <!-- Page Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>List User</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>User</li>
                        <li><a href="">List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Header -->

    <!-- Example Block -->
    <div class="block">
        <!-- Example Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                <div class="btn-group">
                    <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default dropdown-toggle enable-tooltip" data-toggle="dropdown" title="Options">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-pencil pull-right"></i>
                                Edit
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-refresh pull-right"></i>
                                Update
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-trash-o fa-fw pull-right"></i>
                                Delete
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <h2>Block</h2>
        </div>
        <!-- END Example Title -->

        <!-- Example Content -->
        <p>...</p>
        <!-- END Example Content -->
    </div>
    <!-- END Example Block -->
@endsection
