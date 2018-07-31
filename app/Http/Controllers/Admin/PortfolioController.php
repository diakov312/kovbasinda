<?php

namespace App\Http\Controllers\Admin;

use App\PortfolioElement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
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
        //Adding a portfolio element in DB
        $newPortfolioElement = new PortfolioElement();
        $newPortfolioElement->name_work = $request->input('nameWork');
        $newPortfolioElement->preliminary_description_work = $request->input('preliminaryDescriptionWork');
        $newPortfolioElement->full_description_work = $request->input('fullDescriptionWork');
        $newPortfolioElement->category_work = $request->input('categoryWork');

        if($request->hasFile('imageWork')) {
            $currImg = $request->file('imageWork')->store('images/portfolio','myDisk');
            $newPortfolioElement->name_image_work = $currImg;
        }

        $newPortfolioElement->save();
        return view('adminpanel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PortfolioElement $portfolioElement
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioElement $portfolioElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortfolioElement $portfolioElement
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioElement $portfolioElement)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortfolioElement $portfolioElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioElement $portfolioElement)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortfolioElement  $elementPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PortfolioElement $portfolioElement)
    {
        //Удаление определенного портфолио
        $portfolioElement::destroy($request->idportfolio);
        return redirect()->route('portfolio');
    }
}
