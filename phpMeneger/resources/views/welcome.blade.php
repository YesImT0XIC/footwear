@extends('layout')

@section('title')
    Ссылка
@endsection

@section('main_content')
    <main role="main" class="m-5 text-center inner cover">
        <h1 class="cover-heading">Добро пожаловать!!!</h1>
        <p class="lead">На данном ресурсе, вы можете задать вопросы нашим менеджерам по одной из доступных категорий</p>
        <p class="lead">
            <a href="/send" class="btn btn-lg btn-secondary">Перейти</a>
        </p>
    </main>
@endsection
