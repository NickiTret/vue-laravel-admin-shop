@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт "{{ $product->title }}"</h1>
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
                        <div class="card-header d-flex" style="gap: 10px">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Редактировать</a>
                            <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Изображение</td>
                                        <td>
                                            <img src="{{ asset( 'storage/app/public/' . $product->preview_image) }}" alt="{{ $product->title }}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{ $product->title }}</td>
                                    </tr>

                                    <tr>
                                        <td>Цена</td>
                                        <td>{{ $product->price }} RUB</td>
                                    </tr>
                                    <tr>
                                        <td>Количество</td>
                                        <td>{{ $product->count }} шт.</td>
                                    </tr>
                                    <tr>
                                        <td>Красткое описание</td>
                                        <td>{{ $product->description }}</td>
                                    </tr>
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
