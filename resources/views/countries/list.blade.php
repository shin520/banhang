@extends('layout-master.app')
@section('page-title', 'Quốc gia')

@section('main-content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>@yield('page-title') ({{Country::count()}})</h4>
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
                                                <th>Tên quốc gia</th>
                                                <th>ISO</th>
                                                <th>ISO3</th>
                                                <th>Mã</th>
                                                <th>Mã điện thoại</th>
                                            </tr>
                                        </thead>
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
                                                    <td>{{ $u->nicename }}</td>
                                                    <td>{{ $u->iso }}</td>
                                                    <td>{{ $u->iso3 }}</td>
                                                    <td>{{ $u->numcode }}</td>
                                                    <td>{{ $u->phonecode }}</td>
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
