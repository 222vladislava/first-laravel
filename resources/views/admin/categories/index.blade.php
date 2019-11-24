@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Список категорий</div>

                <div class="card-body">
                  <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Название</th>
                      <th scope="col">Дата добавления</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <th scope="row">{{ $category->id }}</th>
                      <td>{{ $category->title }}</td>
                      <td>{{ $category->created_at }}</td>
                      <td></td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-dark">Добавить категорию</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
