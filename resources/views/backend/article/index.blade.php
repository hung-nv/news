@extends('backend.layouts.app')

@section('title', 'Manage Articles')

@section('pageId', 'post')

@section('breadcrumbs')
    <a href="{{ route('post.index') }}">Articles</a>
    <i class="fa fa-circle"></i>
@endsection

@section('content')
    <h3 class="page-title"> Articles
        <small>All</small>
    </h3>

    @include('backend.blocks.message')

    <div class="row">
        <div class="col-md-12">
            <div class="portlet box">
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a class="btn sbold green" href="{{ route('post.create') }}">
                                        Create
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <div class="row margin-bottom-20">
                            <div class="col-md-8 col-sm-12">
                                <div class="dataTables_length" id="datatable_ajax_length">
                                    <label>
                                        {{ __('pagination.view') }}
                                        <select v-model="pageSize" aria-controls="datatable_ajax"
                                                class="form-control input-xs input-sm input-inline">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                        {{ __('pagination.records') }}
                                    </label>
                                </div>
                                <div class="dataTables_info" id="datatable_ajax_info" role="status"
                                     aria-live="polite"></div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="table-group-actions pull-right">
                                    <input type="text" v-model="name" placeholder="{{ __('article.title') }}"
                                           @keyup.enter="searchArticle()"
                                           class="form-control table-group-action-input input-inline input-medium input-sm">
                                    <span> </span>
                                    <select v-model="idCategory"
                                            class="table-group-action-input form-control input-inline input-small input-sm">
                                        <option value="-1">{{ __('labels.all_category') }}</option>
                                        {!! $templateCategory !!}
                                    </select>
                                    <button class="btn btn-sm green table-group-action-submit"
                                            v-on:click="searchArticle">
                                        <i class="fa fa-search"></i> {{ __('labels.search') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        @include('backend.article._post')

                        {{ $articles->appends(['name' => $name, 'id_category' => $idCategory, 'pageSize' => $pageSize])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection