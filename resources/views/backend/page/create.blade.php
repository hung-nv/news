@extends('backend.layouts.app', ['viewData' => [
    'oldName' => $name,
    'oldSlug' => $slug
]])

@section('title', 'Create Page')

@section('pageId', 'create-edit-page')

@section('breadcrumbs')
    <a href="{{ route('page.index') }}">Pages</a>
    <i class="fa fa-circle"></i>
@endsection

@section('content')
    <h3 class="page-title"> Pages</h3>

    <div class="row">

        <div class="col-md-12">

            <div class="portlet box red">

                @include('backend.common.pageHeading')

                <div class="portlet-body form">

                    @include('backend.blocks.message')

                    <form action="{{ route('page.store') }}" class="horizontal-form" role="form"
                          method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-body">
                            <div class="row">

                                @include('backend.blocks.errors')

                                @include('backend.page.partial._form')
                            </div>
                        </div>
                        <input type="hidden" name="type" value="{{ $type }}" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <link href="{{ asset('/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/libs/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('/admin/css/fileinput.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@push('script')
    <script src="{{ asset('/libs/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/libs/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/libs/fileinput.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/libs/piexif.min.js') }}" type="text/javascript"></script>
@endpush
