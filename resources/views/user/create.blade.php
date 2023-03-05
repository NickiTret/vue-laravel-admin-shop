@extends('layouts.main')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Добавить пользователя</h1>
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
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('surname') }}" placeholder="Фамилия" name="surname" id="surname">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Имя" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('patronymic') }}" placeholder="Отчество" name="patronymic" id="patronymic">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" value="{{ old('password') }}" placeholder="Пароль" name="password" id="password">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" value="{{ old('password_confirmation') }}" placeholder="Подтверждение пароля" name="password_confirmation" id="password_confirmation">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" value="{{ old('email') }}" placeholder="Электронный ящик" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ old('address') }}" placeholder="Адресс" name="address" id="address">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" value="{{ old('age') }}" placeholder="День рождения" name="age" id="age">
                    </div>

                    <div class="form-group">
                        <select name="gender" id="exmpleSelectBorder" class="custom-select form-control">
                            <option disabled selected>Пол</option>
                            <option value="1">Мужской</option>
                            <option value="2">Женский</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Добавить" >
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
