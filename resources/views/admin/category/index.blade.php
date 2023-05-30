@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Категории
                    <a href="{{url('admin/category/create')}}" class="btn btn-primary btn-sm text-white float-end">Добавить</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Название</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Описание</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Фото</label>
                            <input type="file" name="image" class="form-control" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Статус</label><br/>
                            <input type="checkbox" name="status" />
                        </div>

                        <div class="col-md-12">
                            <h4>SEO теги</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Мета заголовок</label>
                            <input type="text" name="meta_title" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Мета ключ</label>
                            <input type="text" name="meta_keyword" class="form-control" />
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Мета описание</label>
                            <textarea name="meta_description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Сохранить</button>
                        </div>



                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
