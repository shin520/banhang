@extends('layout-master.app')
@section('page-title', 'Danh sách khách hàng')

@section('main-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>@yield('page-title') ({{ Customer::count() }})</h4>
                                <button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#exampleModal">Thêm khách hàng</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-2">
                                        <thead>
                                            <tr>
                                                <th>Tên khách hàng</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Quốc gia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['customer'] as $u)
                                                <tr>
                                                    <td><a data-toggle="modal"
                                                            data-target="#update-customer">{{ $u->name }}</a></td>
                                                    <td>{{ $u->email }}</td>
                                                    <td>{{ $u->phone }}</td>
                                                    <td>{{ $u->Country->name }}</td>
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

        {{-- modal add customer ↓ --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModal">Thêm khách hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('customer.create') }}">
                            @csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Tên" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <div class="input-group">
                                    <input id="phone" type="text" class="form-control"
                                        placeholder="Số điện thoại" name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Địa chỉ</label>
                                <div class="input-group">
                                    <input id="phone" type="text" class="form-control"
                                        placeholder="Địa chỉ" name="address">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Công ty</label>
                                <div class="input-group">
                                    <input id="phone" type="text" class="form-control"
                                        placeholder="Công ty" name="company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Ghi chú</label>
                                <div class="input-group">
                                    <textarea name="note" class="summernote" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="country">Quốc gia</label>
                                <select class="form-control" name="country" id="country">
                                    <option value="">Chọn quốc gia</option>
                                    @foreach ($data['country'] as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Lưu lại</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
