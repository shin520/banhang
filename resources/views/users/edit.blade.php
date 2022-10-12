@extends('layout-master.app')
@section('page-title', 'Cập nhật thông tin người dùng')

@section('main-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Danh sách người dùng</h4>
                                <a href="{{ route('user.list') }}" class="btn btn-primary">Chế độ xem</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th class="text-center pt-3">
                                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup"
                                                            data-checkbox-role="dad" class="custom-control-input"
                                                            id="checkbox-all">
                                                        <label for="checkbox-all"
                                                            class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Tên người dùng</th>
                                                <th>Quyền truy cập</th>
                                                <th>Email</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                                        <tbody>
                                            @foreach ($data as $u)
                                                <tr>
                                                    <td class="text-center pt-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input"
                                                                id="checkbox-{{ $u->id }}">
                                                            <label for="checkbox-{{ $u->id }}"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $u->id }}" type="text"
                                                            value="{{ $u->name }}" class="name form-control">
                                                    </td>
                                                    <td class="align-middle">
                                                        <select class="role form-control" data-id="{{ $u->id }}"
                                                            id="">
                                                            <option value="1" {{ $u->role == 1 ? 'selected' : '' }}>
                                                                Người dùng</option>
                                                            <option value="7" {{ $u->role == 7 ? 'selected' : '' }}>
                                                                Quản lý</option>
                                                            <option value="9" {{ $u->role == 9 ? 'selected' : '' }}>
                                                                Admin</option>
                                                        </select>
                                                    </td>
                                                    {{-- <td>
                                                <img alt="image" src="{{asset('admin')}}/img/users/user-5.png"
                                                    width="35">
                                            </td> --}}
                                                    <td><input data-id="{{ $u->id }}" type="text"
                                                            class="email form-control" value="{{ $u->email }}"></td>

                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <form action="{{ route('user.delete', $u->id) }}"
                                                                method="post">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-xs btn-danger">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
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
    </div>
@endsection

@push('custom-scripts')
    <script>
        $('.name').change(function() {
            var id = $(this).attr('data-id');
            var name = $(this).val();
            var _token = $('#csrf-token').val();
            $.ajax({
                type: "PUT",
                url: "user-update",
                data: {
                    id: id,
                    name: name,
                    _token: _token
                },
                success: function() {
                    alert("Đã cập nhật tên người dùng");
                },
                error: function() {
                    alert('Có lỗi xảy ra');
                }
            });
        });
        // $('.password').change(function() {
        //     var id = $(this).attr('data-id');
        //     var password = $(this).val();
        //     var _token = $('#csrf-token').val();
        //     $.ajax({
        //         type: "PUT",
        //         url: "user-update",
        //         data: {
        //             id: id,
        //             password: password,
        //             _token: _token
        //         },
        //         success: function() {
        //             alert("Đã cập nhật mật khẩu người dùng");
        //         },
        //         error: function() {
        //             alert('Có lỗi xảy ra');
        //         }
        //     });
        // });

        $('.email').change(function() {
            var id = $(this).attr('data-id');
            var email = $(this).val();
            var _token = $('#csrf-token').val();
            $.ajax({
                type: "PUT",
                url: "user-update",
                data: {
                    id: id,
                    email: email,
                    _token: _token
                },
                success: function() {
                    alert("Đã cập nhật email người dùng");
                },
                error: function() {
                    alert('Có lỗi xảy ra');
                }
            });
        });

        $('.role').change(function() {
            var id = $(this).attr('data-id');
            var role = $(this).find(":selected").val();
            var _token = $('#csrf-token').val();
            $.ajax({
                type: "PUT",
                url: "user-update",
                data: {
                    id: id,
                    role: role,
                    _token: _token
                },
                success: function() {
                    alert("Đã cập nhật quyền truy cập của người dùng");
                },
                error: function() {
                    alert('Có lỗi xảy ra');
                }
            });
        });
    </script>
@endpush
