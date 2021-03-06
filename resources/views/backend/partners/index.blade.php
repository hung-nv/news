@extends('backend.layouts.app')

@section('title', 'Manage Partners')

@section('pageId', 'index-partner')

@section('breadcrumbs')
    <a href="{{ route('user.index') }}">Partners</a>
    <i class="fa fa-circle"></i>
@endsection

@section('content')
    <h3 class="page-title"> Managed Partners
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
                                    <a class="dt-button buttons-print btn btn-sm red btn-outline" href="{{ route('partner.create') }}">
                                        Add partner
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('backend.partners.partial._partner')

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