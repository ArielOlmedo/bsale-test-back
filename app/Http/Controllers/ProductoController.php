<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    return Product::orderBy('category','asc')->get();
}
    public function busquedaCatAsc($search=null)
    {
        if(!empty($search)){
            return Product::WHERE('name','LIKE',"%$search%")
                ->orderBy('category','asc')
                ->get();
        }
        else{
            return Product::orderBy('category','asc')->get();
        }
    }

    public function busquedaCatDesc($search=null)
    {
        if(!empty($search)){
            return Product::WHERE('name','LIKE',"%$search%")
                ->orderBy('category','desc')
                ->get();
        }
        else{
            return Product::orderBy('category','desc')->get();
        }
    }

    public function busquedaNameAsc($search=null)
    {
        if(!empty($search)){
            return Product::WHERE('name','LIKE',"%$search%")
                ->orderBy('name','asc')
                ->get();
        }
        else{
            return Product::orderBy('name','asc')->get();
        }
    }

    public function busquedaNameDesc($search=null)
    {
        if(!empty($search)){
            return Product::WHERE('name','LIKE',"%$search%")
                ->orderBy('name','desc')
                ->get();
        }
        else{
            return Product::orderBy('name','desc')->get();
        }
    }

    public function busquedaPriceAsc($search=null)
    {
        if(!empty($search)){
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                ->WHERE('name','LIKE',"%$search%")
                ->orderBy('total','asc')
                ->get();
        }
        else{
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))->OrderBy('total','asc')->get();
        }
    }

    public function busquedaPriceDesc($search=null)
    {
        if(!empty($search)){
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                ->WHERE('name','LIKE',"%$search%")
                ->orderBy('price','desc')
                ->get();
        }
        else{
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))->OrderBy('total','desc')->get();

        }
    }

    public function categories($search=0,$palabra=null)
    {
        if($search>0){
            if($palabra){
                return Product::where('category','LIKE',"%$search%")
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('category','asc')
                    ->get();

            }
            return Product::WHERE('category','LIKE',"%$search%")
                ->orderBy('category','asc')
                ->get();
        }
        else{
            if($palabra){
                return Product::where('name','LIKE',"%$palabra%")
                    ->orderBy('category','asc')
                    ->get();

            }
            return Product::orderBy('category','asc')->get();
        }
    }

    public function categoriesNasc($search=0,$palabra=null)
    {
        if($search>0){
            if($palabra){
                return Product::where('category','LIKE',"%$search%")
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('name','asc')
                    ->get();

            }
            return Product::WHERE('category','LIKE',"%$search%")
                ->orderBy('name','asc')
                ->get();
        }
        else{
            if($palabra){
                return Product::where('name','LIKE',"%$palabra%")
                    ->orderBy('name','asc')
                    ->get();

            }
            return Product::orderBy('name','asc')->get();
        }
    }

    public function categoriesNdesc($search=0,$palabra=null)
    {
        if($search>0){
            if($palabra){
                return Product::where('category','LIKE',"%$search%")
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('name','desc')
                    ->get();

            }
            return Product::WHERE('category','LIKE',"%$search%")
                ->orderBy('name','desc')
                ->get();
        }
        else{
            if($palabra){
                return Product::where('name','LIKE',"%$palabra%")
                    ->orderBy('name','desc')
                    ->get();

            }
            return Product::orderBy('name','desc')->get();
        }
    }


    public function categoriesPasc($search=0,$palabra=null)
    {
        if($search>0){
            if($palabra){
                return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                    ->where('category','LIKE',"%$search%")
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('total','asc')
                    ->get();

            }
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                ->WHERE('category','LIKE',"%$search%")
                ->orderBy('total','asc')
                ->get();
        }
        else{
            if($palabra){
                return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('total','asc')
                    ->get();

            }
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))->orderBy('total','asc')->get();
        }
    }

    public function categoriesPdesc($search=0,$palabra=null)
    {
        if($search>0){
            if($palabra){
                return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                    ->where('category','LIKE',"%$search%")
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('total','desc')
                    ->get();

            }
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                ->WHERE('category','LIKE',"%$search%")
                ->orderBy('total','desc')
                ->get();
        }
        else{
            if($palabra){
                return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))
                    ->where('name','LIKE',"%$palabra%")
                    ->orderBy('total','desc')
                    ->get();

            }
            return Product::SELECT(Product::raw('*,(price - price * discount * 0.01) as total'))->orderBy('total','desc')->get();
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
