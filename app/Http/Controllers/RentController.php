<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;
use App\Models\Device;
use Illuminate\Http\Request;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rents.index', [
            'rents' => Rent::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rents.create', [
            'devices' => Device::get(),
            'users' => User::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'price' => 'required|max:255',
            'waktu_sewa' => 'required',
        ]);

        $validate['device_id'] = 'required';
        $validate['user_id'] = auth()->user()->id;

        Rent::create($validate);

        return redirect('/rents')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show(Rent $rent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function edit(Rent $rent)
    {
        return view('admin.rents.edit', [
            'rent' => $rent,
            'devices' => Device::latest()->get(),
            'users' => auth()->user()->id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rent $rent)
    {
        $rules = [
            'price' => 'required|max:255',
            'waktu_sewa' => 'required',
        ];

        $rules['device_id'] = 'required';
        $rules['user_id'] = auth()->user()->id;

        $validate = $request->validate($rules);

        Rent::where('id', $rent->id)->update($validate);

        return redirect('/rents')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rent $rent)
    {
        Rent::destroy($rent->id);

        return redirect('/rents')->with('success', 'Deleted Successfully!');
    }
}
