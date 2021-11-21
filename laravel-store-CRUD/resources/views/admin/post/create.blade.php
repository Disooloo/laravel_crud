@extends('layout.admin_layout')

@section('title', 'Добавление поста')

@section('content')
    <form action="{{route('post.store')}}" method="POST"  style="margin-left: 280px">
        @csrf
        <div class="form-group">
            <input type="title" required class="form-control" name="title" placeholder="Название статьи"/>

            <div class="text-danger">Это поле необходимо заполнить</div>
        </div>
        <div class="form-group">
        </div>
        <div class="form-group">
            <textarea name="text"></textarea>
        </div>

        <div class="form-group">
            <label for="feature_image">Ссылка на изображение</label>
            <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
            <input type="text" name="img" class="form-control" id="feature_image"
                   name="feature_image" value="" >
        </div>
        <input type="submit" class="btn btn-block btn-success w-25" value="Добавить">
    </form>
@endsection
