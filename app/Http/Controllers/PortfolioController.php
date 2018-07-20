<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortfolioElement;

class PortfolioController extends Controller
{
    //
    public function getPortfolioList() {
        $portfolioData =[];

        $portfolioData['elementsFirstCategory'] = PortfolioElement::where('category_work', 1)->get();
        $portfolioData['elementsSecondCategory'] = PortfolioElement::where('category_work', 2)->get();
        $portfolioData['elementsThirdCategory'] = PortfolioElement::where('category_work', 3)->get();

        return view('portfolio', $portfolioData);
    }

    public function getPortfolioElement(Request $request) {
        $workData = [];
        $currWork = PortfolioElement::find($request->idwork);    //Получаем увлечение из БД по id
        $workData['workElement'] = $currWork;
        return view('portfolio.portfolioElement', $workData);
    }
}
