<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Transaction, Category, Customer};

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::get();

        return view('apps.transaction.index')->with('transaction', $transaction);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $customer = Customer::get();
        $category = Category::get();
        return view('apps.transaction.create')->with('customer', $customer)
                                              ->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $transaction = $request->all();
        $transaction['user_id'] = auth()->user()->id;
        Transaction::create($transaction);

        return redirect()->route('transaction');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $customer = Customer::get();
        $category = Category::get();
        return view('apps.transaction.edit')->with('transaction', $transaction)
                                            ->with('customer', $customer)
                                            ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $transaction = Transaction::findOrFail($request->id);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $transaction->update($data);
        return redirect()->route('transaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $transaction = Transaction::findOrFail($request->id);
        $transaction->delete();

        return redirect()->back();
    }
}
