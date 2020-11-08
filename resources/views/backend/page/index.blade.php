@extends('backend.layouts.app')

@section('title', 'Manage Pages')

@section('pageId', 'post')

@section('breadcrumbs')
    <a href="{{ route('page.index') }}">Pages</a>
    <i class="fa fa-circle"></i>
@endsection

@section('content')
    <h3 class="page-title"> Manage Page
        <small>All</small>
    </h3>

    @include('backend.blocks.message')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a class="dt-button buttons-print btn btn-sm red btn-outline" href="{{ route('page.create') }}">
                                        Add page
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dataTables_wrapper no-footer">
                        @include('backend.page.partial._page')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="{{ asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('/libs/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection

@push('script')
    <script src="{{ asset('/libs/custom/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/libs/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/libs/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"
            type="text/javascript"></script>
@endpush
