@extends('layouts.main')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать проект "{{ $project->title }}"</h1>
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
                <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $project->title }}" placeholder="Наименование" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" class="form-control" value="{{ $project->description }}" placeholder="Описание" name="descr" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" value="{{ $project->content }}" class="form-control" placeholder="Контент" name="content" id="content"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input name="image_src" type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Выберите файл</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Сохранить" >
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
