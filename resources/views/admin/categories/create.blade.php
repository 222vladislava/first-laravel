@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('admin.categories.store') }}" method="post" class="card">
                {{ csrf_field() }}

                <div class="card-header">Создать новую категорию</div>

                <div class="card-body">

                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                  <div class="form-group">
                    <label>Название</label>
                    <input type="text" class="form-control" name="title" placeholder="Введите название категории..." value="{{ old('title') }}">
                  </div>
                  <div class="form-group">
                    <label>Описание</label>
                    <textarea class="form-control" name="description" placeholder="Введите название категории..."></textarea>
                  </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Добавить категорию</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
