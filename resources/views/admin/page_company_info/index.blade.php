@extends('admin.admin_base')

@section('page-title', 'CompanyInfo')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-1 mb-3">
                    <a class="btn btn-block btn-success" href="{{ route('admin_page_company_info_new')}}">
                        new
                    </a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Company Info</h3>

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
                                    <th>type</th>
                                    <th>icon</th>
                                    <th>value</th>
                                    <th>active</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($company_info as $company_inf)
                                    <tr>
                                        <td>{{ $company_inf['id'] }}</td>
                                        <td>{{ $company_inf['type'] }}</td>
                                        <td>{{ $company_inf['icon'] }}</td>
                                        <td>{{ $company_inf['value'] }}</td>
                                        <td>{{ $company_inf['active'] }}</td>
                                        <td>
                                            <a class="btn btn-block btn-primary"
                                               href="{{ route('admin_page_company_info_edit', ['id'=>$company_inf['id']]) }}"
                                            >
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin_page_company_info_delete', ['id'=>$company_inf['id']]) }}"
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
