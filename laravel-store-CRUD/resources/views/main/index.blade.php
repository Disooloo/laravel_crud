@extends('layout.layout')
@section('title','Главная')


@section('content')
    <!--Сайдбар-->
    <aside>
        <h3><span>Search</span></h3>
        <div class="search">
            <form action="#" method="post">
                <input type="text" class="text" name="search" placeholder="Search Here...">
                <input type="submit" class="submit" name="submit" value="Search">
            </form>
        </div>
        <div id="sponsors">
            <h3><span>Sponsors</span></h3>
            <div class="first-row">
                <a href="#" target="_blank" class="left"><img src="images/banner-1.jpg" alt="Баннер 1"></a>
                <a href="#" target="_blank" class="right"><img src="images/banner-2.jpg" alt="Баннер 2"></a>
            </div>
            <div class="second-row">
                <a href="#" target="_blank" class="left"><img src="images/banner-3.jpg" alt="Баннер 3"></a>
                <a href="#" target="_blank" class="right"><img src="images/banner-4.jpg" alt="Баннер 4"></a>
            </div>
        </div>
        <div id="subscribe-form">
            <h3><span>Ride Magazine News</span></h3>
            <div class="search">
                <form action="#" method="post">
                    <input type="email" class="text" name="email" required="requared" placeholder="Enter your email">
                    <input type="submit" class="submit" name="subscribe" value="Subscribe">
                </form>
            </div>
        </div>
        <div class="categories">
            <h3><span>Categories</span></h3>
            <ul class="left">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Youtube</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google Plus</a></li>
                <li><a href="#">How To</a></li>
                <li><a href="#">Apple</a></li>
                <li><a href="#">Social Media</a></li>
                <li><a href="#">Tech</a></li>
                <li><a href="#">Entertainment</a></li>
            </ul>
            <ul class="right">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Write For Us</a></li>
            </ul>
            <div class="clear"></div>
        </div>
    </aside>
    <!--Контент-->
    <section>
        @foreach($posts as $post)
            <article>
                <div class="post-img">
                    <img src="{{$post->img}}" alt="{{$post->title}}" width="150">
                </div>
                <div class="post-cont">
                    <h2><a href="#">{{$post->title}}</a></h2>
                    <p>
                        {{$post->text}}
                    </p>
                </div>
            </article>
        @endforeach
    </section>
    <div class="pagination">
        {{ $posts->links() }}
    </div>
    <div class="clear"></div>
@endsection
