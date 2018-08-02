<?php

namespace App\Http\Controllers\Admin;

use App\Hobby;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Adding hobbies element in DB
        $newHobbyElement = new Hobby();
        $newHobbyElement->name_hobby = $request->input('nameHobby');
        $newHobbyElement->preliminary_description_hobby = $request->input('preliminaryDescriptionHobby');
        $newHobbyElement->full_description_hobby = $request->input('fullDescriptionHobby');

        if($request->hasFile('imageHobby')) {
            $currImg = $request->file('imageHobby')->store('images/hobby','myDisk');
            $newHobbyElement->name_image_hobby = $currImg;
        }

        $newHobbyElement->save();
        return view('adminpanel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(Hobby $hobby)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobby $hobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobby $hobby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Hobby $hobby)
    {
        //Удаляем файл изображения с диска
        $pathFile = $hobby::find($request->idhobby)->name_image_hobby;
        Storage::disk('myDisk')->delete($pathFile);

        //Удаление записи определенного хобби из базы данных
        $hobby::destroy($request->idhobby);

        //После удаления перенаправляем на вывод страницы с хобби.
        return redirect()->route('hobbies');
    }
}
