@extends('admin.admin_base')

@section('page-title', 'New product')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('admin_page_company_info_new') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>1. Type (* Facebook)</label>
                                            <select class="form-control" name="type" required>
                                                <option value="">Select type...</option>
                                                @foreach($types as $option)
                                                    <option value="{{ $option }}" {{ (isset($type) && $type == $option) ? 'selected' : '' }}>
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>2. Icon</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>4. Value</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="value">
                                        </div>
                                    </div>
                                </div>

                                <!-- Чекбокс для "Active" -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group d-flex align-items-center">
                                            <label class="mr-2">5. Active</label>
                                            <div class="custom-control custom-checkbox">
                                                <!-- Скрытое поле, которое передает значение 0, если чекбокс не выбран -->
                                                <input type="hidden" name="active" value="0">
                                                <input type="checkbox" name="active" value="1"
                                                       class="custom-control-input" id="activeCheckbox">
                                                <label class="custom-control-label" for="activeCheckbox"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-11"></div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-success right">Save</button>
                                    </div>
                                </div>
                            </form>
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
