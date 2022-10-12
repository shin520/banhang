@extends('layout-master.app')
@section('page-title', 'Danh sách sản phẩm')

@section('main-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>@yield('page-title')</h4>
                                <button type="button" class="btn btn-success mr-2" data-toggle="modal"
                                    data-target="#exampleModal">Thêm sản phẩm</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center pt-3">#</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Danh mục</th>
                                                <th>Giá cũ</th>
                                                <th>Giá mới</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $u)
                                                <tr>
                                                    <td class="text-center pt-2">{{$u->id}}
                                                    </td>
                                                    <td> <img alt="image" src="{{asset('admin')}}/img/users/user-5.png"
                                                        width="35"> {{ $u->name }}</td>
                                                    <td class="align-middle">
                                                        <div class="progress progress-xs">
                                                            <div class="progress-bar width-per-{{ $u->role }}0"></div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $u->email }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- modal add user ↓ --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
            aria-hidden="true">
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
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Tên" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-lock"></i>
                                        </div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label>Quyền truy cập</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-info"></i>
                                        </div>
                                    </div>
                                    <select class="form-control" name="role" id="">
                                        <option value="1">Người dùng</option>
                                        <option value="7">Quản lý</option>
                                        <option value="9">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Lưu lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
