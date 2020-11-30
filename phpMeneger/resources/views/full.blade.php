@extends('layout')

@section('title')
    Извините
@endsection

@section('main_content')
    <main role="main" class="m-5 text-center inner cover">
        <h1 class="cover-heading">Просим прощения</h1>
        <p class="lead">Но на данный моменты у нас нет менеджера способного сейчас вам помочь</p>
        <p class="lead">
            <a href="/send" class="btn btn-lg btn-secondary">Перейти</a>
        </p>
    </main>
@endsection
