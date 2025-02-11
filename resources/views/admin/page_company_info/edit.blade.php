@extends('admin.admin_base')

@section('page-title', 'Edit info')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{ route('admin_page_company_info_edit', ['id' => $id]) }}" method="POST">
                                @csrf
                                @method('PATCH')
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
                                                   name="icon"
                                                   value="{{ $icon ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>4. Value</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="value"
                                                   value="{{ $value ?? null }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group d-flex align-items-center">
                                            <label class="mr-2">5. Active</label>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="active" value="1"
                                                       class="custom-control-input" id="activeCheckbox"
                                                       @if($active ?? false) checked @endif>
                                                <label class="custom-control-label" for="activeCheckbox"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10">
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{ route('admin_page_company_info_index') }}" class="btn btn-secondary">back</a>
                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-success">save</button>
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
