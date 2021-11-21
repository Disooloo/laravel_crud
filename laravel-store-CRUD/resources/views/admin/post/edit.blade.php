@extends('layout.admin_layout')

@section('title', 'Редактирование поста')

@section('content')
    <form action="{{route('post.update', $post['id'])}}" method="POST"  style="margin-left: 280px">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="title" required class="form-control" name="title" value="{{$post->title}}" placeholder="Название статьи"/>

            <div class="text-danger">Это поле необходимо заполнить</div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <textarea name="text">{{$post->text}}</textarea>
        </div>

        <div class="form-group">
            <label for="feature_image">Ссылка на изображение</label>
            <img src="{{$post->img}}" alt="" class="img-uploaded" style="display: block; width: 300px">
            <input type="text" name="img" class="form-control" id="feature_image"
                   name="feature_image" value="{{$post->img}}">
        </div>
        <input type="submit" class="btn btn-block btn-success w-25" value="Обновить">
    </form>
@endsection
