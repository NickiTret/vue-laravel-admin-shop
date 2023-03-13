@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователь {{ $user->surname . ' ' . $user->name . ' ' . $user->patronymic }}</h1>
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
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Редактировать</a>
                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Фамилия</td>
                                        <td>{{ $user->surname }}</td>
                                    </tr>
                                    <tr>
                                        <td>Имя</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Отчество</td>
                                        <td>{{ $user->patronymic }}</td>
                                    </tr>
                                    <tr>
                                        <td>Элктронная почта</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Адресс</td>
                                        <td>{{ $user->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Возраст</td>
                                        <td>{{  $user->age }}</td>
                                    </tr>
                                    @if (!empty($user->gender))
                                    <tr>
                                        <td>Пол</td>
                                        <th>{{ $user->genderTitle }}</th>
                                    </tr>
                                    @endif

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
