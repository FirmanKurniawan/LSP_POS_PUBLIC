@extends('layouts.kasir')
@section('content')
<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Dashboard</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                @if($message = Session::get('sukses'))
                <div class="alert alert-primary alert-dismissible fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> <strong>{{$message}}</strong></div>
                @endif
                <div class="row" id="dragdrop">
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-two">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-info">{{$count_user}}</h2><span class="">Total Users</span>
                                        </div>
                                        <img class="ml-3" src="/gleek/gleek/assets/images/icons/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-two">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-danger">{{$count_produk}}</h2><span class="">Total Products</span>
                                        </div>
                                        <img class="ml-3" src="/gleek/gleek/assets/images/icons/2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-two">
                                    <div class="media">
                                        <div class="media-body">
                                            <h2 class="mt-0 mb-1 text-warning">{{$count_order}}</h2><span class="">Total Orders</span>
                                        </div>
                                        <img class="ml-3" src="/gleek/gleek/assets/images/icons/3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card transparent-card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mt-2"> Daftar Transaksi</h4>
                                <div class="table-action float-sm-right mt-4 mt-sm-0">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                                        <thead>
                                            <tr>
                                                <th>#No</th>
                                                <th>User ID</th>
                                                <th>Saldo</th>
                                                <th>Total</th>
                                                <th>Kembalian</th>
                                                <th>Metode</th>
                                                <th>Kode Unik</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transaksi as $transaksis)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td><span class="text-pale-sky">{{$transaksis->user_id}}</span>
                                                </td>
                                                <td class="text-muted">{{$transaksis->saldo}}</td>
                                                <td><span class="text-pale-sky">{{$transaksis->total}}</span></td>
                                                <td><span class="text-pale-sky">{{$transaksis->kembalian}}</span></td>
                                                <td><span class="text-pale-sky">{{$transaksis->metode}}</span></td>
                                                <td><span class="label label-xl label-rounded label-warning">{{$transaksis->kode_unik}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{-- <nav>
                                    <ul class="pagination pagination-rounded pagination-md justify-content-end">
                                        <li class="page-item"><a class="page-link" href="javascript:void()">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void()">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                    </ul>
                                </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@section('js')
    <!-- Chartjs chart -->
    <script src="/gleek/gleek/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="/gleek/gleek/assets/plugins/d3v3/index.js"></script>
    <script src="/gleek/gleek/assets/plugins/topojson/topojson.min.js"></script>
    <script src="/gleek/gleek/assets/plugins/datamaps/datamaps.world.min.js"></script>

    <script src="/gleek/gleek/main/js/plugins-init/datamap-world-init.js"></script>

    <script src="/gleek/gleek/assets/plugins/datamaps/datamaps.usa.min.js"></script>

    <script src="/gleek/gleek/main/js/dashboard/dashboard-1.js"></script>

    <script src="/gleek/gleek/main/js/plugins-init/datamap-usa-init.js"></script>
@endsection
@endsection