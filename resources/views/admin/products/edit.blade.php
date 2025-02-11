@extends('admin.admin_base')

@section('page-title', 'Edit product')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="{{route('admin_products_edit', ['id' => $id])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>1. Title (* Класична) </label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="title"
                                                   value="{{ $title ?? null }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>2. Lesson (* 5 занять)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="lesson"
                                                   value="{{ $lesson ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>3. Program (* <span>Програма:</span> Вивчення весільного вальсу з
                                                постановкою вашого танцю)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="program"
                                                   value="{{ $program ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>4. schedule (*  <span>Розклад занять:</span>  Заняття проходять за зручним
                                                для вас розкладом)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="schedule"
                                                   value="{{ $schedule ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>5. duration (* <span>Тривалість:</span> 5 годин)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="duration"
                                                   value="{{ $duration ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>6. price (* 1650 грн/курс)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="price"
                                                   value="{{ $price ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>7. old_price (* 1650 грн/курс)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="old_price"
                                                   value="{{ $old_price ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>8. price info (* додаткове заняття 300 грн)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="price_info"
                                                   value="{{ $price_info ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>9. product_id (* продукт в базі)</label>
                                            <input type="text" class="form-control" placeholder="Enter ..."
                                                   name="product_id"
                                                   value="{{ $product_id ?? null }}"
                                            >
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-10">
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{ route('admin_products_index') }}" class="btn btn-secondary" >back</a>
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
