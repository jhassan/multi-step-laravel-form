<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index',compact('products'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepOne(Request $request)
    {
        $job = $request->session()->get('product');

        return view('jobs.create-step-one',compact('job'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        // dd($request->all());
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:products',
        //     'amount' => 'required|numeric',
        //     'description' => 'required',
        // ]);

        // if(empty($request->session()->get('product'))){
        //     $product = new Product();
        //     $product->fill($validatedData);
        //     $request->session()->put('product', $product);
        // }else{
        //     $product = $request->session()->get('product');
        //     $product->fill($validatedData);
        //     $request->session()->put('product', $product);
        // }

        return redirect()->route('jobs.create.step.two');
    }

    /**
     * Show the step Two Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        // $job = $request->session()->get('product');
        $job = "";

        return view('jobs.create-step-two',compact('job'));
    }

    /**
     * Show the step Two Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
    {
    	// $validatedData = $request->validate([
        //     'stock' => 'required',
        //     'status' => 'required',
        // ]);

        // $product = $request->session()->get('product');
        // $product->fill($validatedData);
        // $request->session()->put('product', $product);

        return redirect()->route('jobs.create.step.three');
    }

    /**
     * Show the step Three Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        // $job = $request->session()->get('job');
        $job = "";

        return view('jobs.create-step-three',compact('job'));
    }

    /**
     * Show the step Three Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepThree(Request $request)
    {
    	// $product = $request->session()->get('product');
        // $product->save();

        // $request->session()->forget('product');

        return redirect()->route('jobs.create.step.four');
    }
}
