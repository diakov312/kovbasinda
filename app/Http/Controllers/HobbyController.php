<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;

class HobbyController extends Controller
{
    //Вывод списка увлечений
    public function getHobbyList() {
        $hobbiesData =[];
        $hobbiesData['hobbiesElements'] = Hobby::all(); //Получаем все увлечения из БД
        return view('hobby', $hobbiesData);
    }

    //Вывод конкретного увлечения
    public function getHobbyElement(Request $request) {
        $hobbyData = [];
        $currHobby = Hobby::find($request->idhobby);    //Получаем увлечене из БД по id
        $hobbyData['hobbyElement'] = $currHobby;
        return view('hobbies.hobbyElement', $hobbyData);
    }
}
