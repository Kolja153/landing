@php
    use Illuminate\Support\Carbon;
@endphp

@extends('admin.admin_base')

@section('page-title', 'Orders')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Orders Table</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                           placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>name</th>
                                    <th>phone</th>

                                    <th>title</th>
                                    <th>duration</th>
                                    <th>price</th>
                                    <th>created at</th>
                                    <th>product in baza</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order['id'] }}</td>
                                        <td>{{ (new Carbon($order['created_at']))->format('d-m-Y') }}</td>
                                        <td>{{ (new Carbon($order['created_at']))->format('H:i') }}</td>
                                        <td>{{ $order['name'] }}</td>
                                        <td>{{ $order['phone'] }}</td>
                                        @if($order['snap_product'])
                                            @php
                                                $snapProduct =  json_decode($order['snap_product'], 1);
                                            @endphp
                                            <td>{{ $snapProduct['title'] }}</td>
                                            <td>{{ $snapProduct['duration'] }}</td>
                                            <td>{{ $snapProduct['price'] }}</td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($snapProduct['created_at'])->format('d F Y h:i') }}
                                            </td>
                                            <td>{{ $snapProduct['product_id'] }}</td>
                                        @else
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        @endif
                                        <td>
                                            <form action="{{ route('admin_products_delete', ['id'=>$order['id']]) }}"
                                                  method="POST"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-block btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->


        </div><!-- /.container-fluid -->
    </section>
@endsection
