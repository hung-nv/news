@extends('backend.layouts.app')

@section('title', 'Create Partner')

@section('pageId', 'create-update-partner')

@section('breadcrumbs')
    <a href="{{ route('partner.index') }}">Partners</a>
    <i class="fa fa-circle"></i>
@endsection

@section('content')
    <h3 class="page-title"> Managed Partners
        <small>Create</small>
    </h3>

    <div class="row">

        <div class="col-md-12">

            <div class="portlet box red">

                @include('backend.common.pageHeading')

                <div class="portlet-body form">

                    @include('backend.blocks.message')

                    <form action="{{ route('partner.store') }}" class="form-horizontal form-row-seperated" role="form"
                          method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        @include('backend.blocks.errors')

                        @include('backend.partners.partial._form')

                        @include('backend.common.actionForm')

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="{{ asset('/libs/select2/css/select2.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('/libs/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('/admin/css/fileinput.min.css') }}"
          rel="stylesheet" type="text/css"/>
@endsection

@push('script')
    <script src="{{ asset('/libs/select2/js/select2.full.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('/libs/fileinput.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('/libs/piexif.min.js') }}"
            type="text/javascript"></script>
@endpush