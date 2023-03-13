@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Страница "{{ $page->title }}"</h1>
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
                            <a href="{{ route('page.edit', $page->id) }}" class="btn btn-warning">Редактировать</a>
                            <form action="{{ route('page.delete', $page->id) }}" method="POST">
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
                                        <td>{{ $page->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Наименование</td>
                                        <td>{{ $page->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Красткое описание</td>
                                        <td>{{ $page->descr_page }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ссылка</td>
                                        <td>{{ $page->link_page }}</td>
                                    </tr>
                                    <tr>
                                        <td>Заголовок первого уровня</td>
                                        <td>{{ $page->header_title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Изображение</td>
                                        <td>
                                            <img width="200" src="{{ $page->getImage() }}" alt="{{ $page->title }}">
                                        </td>
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
