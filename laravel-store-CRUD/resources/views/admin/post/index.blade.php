@extends('layout.admin_layout')
@section('title', 'Посты')


@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <a href="{{route('post.create')}}" class="btn btn-dark">Добавить пост</a>
                </div>
                <table class="table table-hover text-nowrap" style="margin-left: 250px; width: 70vw; margin-top: 50px;" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Картинка</th>
                        <th>Дата создания</th>
                        <th colspan="2">Действие</th>
                     </tr>
                    </thead>
                    <tbody>
                    @foreach($post as $posts)
                        <tr>
                            <td>{{$posts->id}}</td>
                            <td>{{$posts->title}}</td>
                            <td><img src="{{asset($posts->img)}}" alt="{{$posts->title}}" width="50px"></td>
                            <td>{{$posts->created_at}}</td>
                            <th><a href="{{route('post.edit', $posts['id'])}}" class="btn btn-info">
                                    <i class="fas fa-pen"></i>
                                    Редактировать
                                </a>
                            </th>
                            <th>
                                <form action="{{route('post.destroy', $posts['id'])}}" method="POST"
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash"></i>
                                        Удалить
                                    </button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        </div>
        </div>
@endsection
