@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('product.create') }}" class="btn btn-primary">Добавить</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Изображение</th>
                                        <th>Наименование</th>
                                        <th>Цена</th>
                                        <th>Количество</th>
                                        <th>Краткое описание</th>
                                        {{-- <th>Цвет</th>
                                        <th>Категория</th>
                                        <th>Теги</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td><img width="200" src="{{ $product->getImage() }}" alt="{{ $product->title }}">
                                            </td>
                                            <td>
                                                <a href="{{ route('product.show', $product->id) }}">{{ $product->title }}</a>
                                            </td>
                                            <td>{{ $product->price }} RUB</td>
                                            <td>{{ $product->count }} шт.</td>
                                            <td>{!! $product->description !!}</td>
                                            {{-- <td>
                                                @foreach ($product->colors as $color)
                                                    <div
                                                        style="width: 16px; height: 16px; background-color: {{ '#' . $color->title }}">
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td>{{ $product->category }}</td>
                                            <td>
                                                @foreach ($product->tags as $tag)
                                                    <div
                                                        style="width: 16px; height: 16px; background-color: {{ '#' . $tag->title }}">
                                                    </div>
                                                @endforeach
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
