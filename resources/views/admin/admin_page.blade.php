@extends('admin.admin_base')

@section('page-title', 'Dashboard')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @php
                    $blocks = [
                        [ 'title' => 'header', 'body' => '123'],
                        [ 'title' => 'footer', 'body' => 456 ]
                        ]
                @endphp

                @foreach($blocks  as $block)
                    <div class="card card-primary ">
                        <div class="card-header">
                            <h3 class="card-title">{{ $block['title'] }}</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $block['body'] }}
                        </div>
                        <!-- /.card-body -->
                    </div>

                @endforeach


            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Create new Project" class="btn btn-success float-right">
            </div>
        </div>
    </section>
@endsection
