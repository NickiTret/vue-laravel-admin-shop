@extends('layouts.main')

@section('content')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Редактировать продукт "{{ $product->title }}"</h1>
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
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $product->title }}" placeholder="Наименование" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" class="form-control" value="{{ $product->description }}" placeholder="Описание" name="description" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea cols="50" rows="10" value="{{ $product->content }}" class="form-control" placeholder="Контент" name="content" id="content"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $product->price }}" placeholder="Цена" name="price" id="price">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" value="{{ $product->count }}" placeholder="Количество на складе" name="count"
                            id="count">
                    </div>


                    <div class="form-group">
                        <select name="category_id" class="form-control select2bs4" style="width: 100%;">
                            <option selected="selected" disabled>Выбор категории</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <select class="tags" name="tags[]" multiple="multiple" data-placeholder="Выбор тегов"
                            style="width: 100%;">
                               @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="colors" name="colors[]" multiple="multiple" data-placeholder="Выбор цвета"
                            style="width: 100%;">
                               @foreach ($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <!-- <label for="customFile">Custom File</label> -->
                        <div class="custom-file">
                            <input name="preview_image" type="file" class="custom-file-input" id="customFile">
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
