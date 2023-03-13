@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить страницу</h1>
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
                <form action="{{ route('page.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Наименование" name="name_page" id="title">
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" class="form-control" placeholder="Описание страницы" name="descr_page" ></textarea>
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" class="form-control" placeholder="Ссылка" name="link_page" ></textarea>
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" class="form-control" placeholder="Заголово первого уровня" name="header_title" ></textarea>
                    </div>
                    <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <div class="custom-file">
                            <input name="image_src" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Выберите файл</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
