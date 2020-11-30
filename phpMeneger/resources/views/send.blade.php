@extends('layout')

@section('title')
    Отправить
@endsection

@section('main_content')
    <h2 class="mt-5 mb-3 text-center">Отправка запроса менеджеру</h2>
        <div class="row justify-content-center">
            <div class="col-5 border bg-white">
                <form method="post" action="/send/check">
                    @csrf
                    <div style=" margin: 20px 20px">
                        <h5>Выберите категорию запроса</h5>
                        <p class="m-0"><input name="checkCategory" type="radio" value="html">  HTML</p>
                        <p class="m-0"><input name="checkCategory" type="radio" value="css">  CSS</p>
                        <p class="m-0"><input name="checkCategory" type="radio" value="php">  PHP</p>
                        <p class="m-0"><input name="checkCategory" type="radio" value="javascript">  JavaScript</p>
                        <p class="m-0"><input name="checkCategory" type="radio" value="aspnet">  ASP.NET</p>
                        <br>
                        <h5>Введите текст запроса</h5>
                        <textarea name="message" id="message" class="form-control" placeholder="Введите текст..."></textarea><br>
                        <button type="submit" class="m btn btn-success">Отправить</button>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        {{--@if($message)
                            <div class="alert alert-danger">
                                <ul>
                                   <li>{{ $message }}</li>
                                </ul>
                            </div>
                        @endif--}}
                </form>
            </div>
        </div>
@endsection
