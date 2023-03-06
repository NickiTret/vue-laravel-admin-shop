@extends('layouts.main')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать группу "{{ $group->title }}"</h1>
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
                <form action="{{ route('group.update', $group->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Наименование" value="{{ $group->title }}" name="title" id="title">
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
