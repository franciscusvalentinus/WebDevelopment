<?php

namespace App\Http\Controllers;

use App\Models\Fragrance;
use App\Models\Supplier;
use Illuminate\Http\Request;

class FragranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fragrances = Fragrance::all();
        $suppliers = Supplier::all();
        return view('fragrance.index', compact('fragrances', 'suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('fragrance.addFragrance', compact('suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'supplied_by' => 'required|integer',
            'nameFragrance' => 'required|string',
            'brandFragrance'=>'required|string',
            'priceFragrance' => 'required|string',
            'typeFragrance' => 'required|string',
            'aromaFragrance' => 'required|string',
        ]);

        Fragrance::create([
            'supplied_by' => $data['supplied_by'],
            'nameFragrance' => $data['nameFragrance'],
            'brandFragrance' => $data['brandFragrance'],
            'priceFragrance' => $data['priceFragrance'],
            'typeFragrance' => $data['typeFragrance'],
            'aromaFragrance' => $data['aromaFragrance'],
        ]);

        return redirect()->route('fragrance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fragrance  $fragrance
     * @return \Illuminate\Http\Response
     */
    public function show(Fragrance $fragrance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fragrance  $fragrance
     * @return \Illuminate\Http\Response
     */
    public function edit(Fragrance $fragrance)
    {
        $suppliers = Supplier::all();
        return view('fragrance.editFragrance', compact('fragrance', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fragrance  $fragrance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fragrance $fragrance)
    {
        $fragrance->update($request->all());
        return redirect()->route('fragrance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fragrance  $fragrance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fragrance $fragrance)
    {
        $fragrance->delete();
        return redirect()->route('fragrance.index');
    }
}
