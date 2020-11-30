<?php

namespace App\Http\Controllers;

use App\Models\MenegersModel;
use App\Models\RequestsModel;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class MainController extends Controller {

    public  function welcome(){
        return view('welcome');
    }

    public  function send(){
        return view('send');
    }

    public  function full(){
        return view('full');
    }

    public  function send_check(Request $request){
        $valid = $request->validate([ //Проверка ввеенных данных с формы
            'checkCategory' => 'required',
            'message' => 'required|min:3|max:500'
        ]);

        $table = MenegersModel::all(); //Выборка из бд, всех записей
        $firstStap = true;
        foreach ($table as $meneger) { //Перебор всех строк таблицы
            if ($meneger->checkStatusMeneger($request->checkCategory)){ //Выбираем менеджера у которого есть данная категория и кол-во запросов по ней < 10
                if($firstStap == true){ //Плохая, но быстрая реализация вставки первого подходящего менеджера в объект для дальнейшего сравнения
                    $rightMeneger = $meneger;
                    $firstStap = false;
                }
                if ($rightMeneger->countRequests() > $meneger->countRequests()) //ВЫбираем самого незанятого менеджера
                    $rightMeneger = $meneger;
            }
        }


        if (isset($rightMeneger)) {
            $rightMeneger->addToCount($request->checkCategory); // ++ для столбца в таблице, где указано кол-во запросов менеджера
            $rightMeneger->save();
        }
        else
            return redirect()->route('full');

        $requestToDB = new RequestsModel(); //Создаем объект модели для передачи данных по нужной миграции
        $requestToDB->name = $rightMeneger->name;
        $requestToDB->category = $request->checkCategory;
        $requestToDB->message = $request->message;
        $requestToDB->save();

        return redirect()->route('send');
    }
}
