@extends('layout-master.app')
@section('page-title', 'Danh mục sản phẩm')

@section('main-content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>@yield('page-title')</h4>
                        <button type="button" class="btn btn-success mr-2" data-toggle="modal"
                            data-target="#exampleModal">@yield('page-title')</button>
                    </div>
                    <div class="card-body">
                        {{-- <ul>
                            @foreach ($categories as $category)
                                <li>{{ $category->seo->name }}</li>
                                <ul>
                                    @foreach ($category->childrenCategories as $childCategory)
                                        @include('products.child_category', [
                                            'child_category' => $childCategory,
                                        ])
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- modal add user ↓ --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Thêm người dùng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            @foreach ($langs as $lang)
                                <li class="nav-item">
                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="x{{ $lang->lang }}"
                                        data-toggle="tab" href="#{{ $lang->lang }}" role="tab" aria-controls="home"
                                        aria-selected="true"><span class="fi fi-{{ $lang->flag }}"></span>
                                        {{ $lang->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content tab-bordered s_clear_ulli" id="myTab3Content">
                            <form action="{{ route('category.create') }}" method="post">
                                @csrf
                                <ul>
                                    {{-- @foreach ($categories as $category)
                                        <li>
                                            <label for="cate-{{ $category->id }}">
                                                {{ $category->seo->name }}
                                            </label>
                                        </li>
                                        <input type="radio" id="cate-{{ $category->id }}" name="category_id"
                                            value="{{ $category->id }}">
                                        <ul>
                                            @foreach ($category->childrenCategories as $childCategory)
                                                @include('products.child_category', [
                                                    'child_category' => $childCategory,
                                                ])
                                            @endforeach
                                        </ul>
                                        </option>
                                    @endforeach --}}
                                    @foreach ($categories as $category)
                                        <ul>
                                            <li>
                                                <label class="selectgroup-item" for="cate-{{ $category->id }}">
                                                    <input type="radio" name="category_id" value="{{ $category->id }}" class="selectgroup-input-radio" id="cate-{{ $category->id }}">
                                                    <span class="selectgroup-button selectgroup-button-icon">{{ $category->seo->name }}</span>
                                                </label>
                                                <ul>
                                                    @foreach ($category->childrenCategories as $childCategory)
                                                        @include('products.child_category', [
                                                            'child_category' => $childCategory,
                                                        ])
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    @endforeach

                                    
                                </ul>
                                @foreach ($langs as $lang)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="{{ $lang->lang }}" role="tabpanel" aria-labelledby="x{{ $lang->lang }}">
                                        @include('element.seo')
                                        <input type="text" name="seo[{{ $lang->lang }}][lang]" hidden
                                            value="{{ $lang->lang }}">
                                        <button class="btn btn-primary">Lưu</button>
                                    </div>
                                @endforeach
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- modal add user ↓ --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Thêm người dùng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="">
                        @include('element.seo');
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Lưu lại</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
