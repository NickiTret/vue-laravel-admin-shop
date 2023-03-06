@extends('layouts.main')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать пользователя "{{ $user->surname . ' ' . $user->name . ' ' . $user->patronymic }}"</h1>
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
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->surname }}" placeholder="Фамилия" name="surname" id="surname">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->name }}" placeholder="Имя" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->patronymic }}" placeholder="Отчество" name="patronymic" id="patronymic">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $user->address }}" placeholder="Адресс" name="address" id="address">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" value="{{ $user->age }}" placeholder="День рождения" name="age" id="age">
                    </div>

                    <div class="form-group">
                        <select name="gender" id="exmpleSelectBorder" class="custom-select form-control">
                            <option {{ $user->gender == 1 ? ' selected' : '' }} value="1">Мужской</option>
                            <option {{ $user->gender == 2 ? ' selected' : '' }} value="2">Женский</option>
                        </select>
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
