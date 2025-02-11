@extends('admin.admin_base')

@section('page-title', 'Products')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 mb-3">
                    <a class="btn btn-block btn-success" href="{{ route('admin_products_new') }}">
                        new
                    </a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Products Table</h3>

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
                                    <th>title</th>
                                    <th>lesson</th>
                                    <th>program</th>
                                    <th>duration</th>
                                    <th>price</th>
                                    <th>old_price</th>
                                    <th>price info</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product['id'] }}</td>
                                        <td>{{ $product['title'] }}</td>
                                        <td>{{ $product['lesson'] }}</td>
                                        <td class="text-wrap">{{ $product['program'] }}</td>
                                        <td>{{ $product['duration'] }}</td>
                                        <td>{{ $product['price'] }}</td>
                                        <td>{{ $product['old_price'] }}</td>
                                        <td>{{ $product['price_info'] }}</td>
                                        <td>
                                            <a class="btn btn-block btn-primary"
                                               href="{{ route('admin_products_edit', ['id'=>$product['id']]) }}"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin_products_delete', ['id'=>$product['id']]) }}"
                                                  method="POST"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-block btn-danger"
                                                        onclick="return confirm('Are you really want to delete this order?');"
                                                >
                                                    Delete
                                                </button>
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
