<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Http\Requests\FormValidation;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormValidation $request)
    {
        $validatedData = $request->validated();

        $newBook = new Booking();
        $newBook->guest_full_name = $validatedData['guest_full_name'];
        $newBook->guest_credit_card = $validatedData['guest_credit_card'];
        $newBook->room = $validatedData['room'];
        $newBook->from_date = $validatedData['from_date'];
        $newBook->to_date = $validatedData['to_date'];
        $newBook->more_details = $validatedData['more_details'];

        $newBook->save();

        return view('booking.success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleBook = Booking::find($id);

        return view('booking.show', compact('singleBook'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Booking::find($id);

        return view('booking.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormValidation $request, $id)
    {
       
        $validatedData = $request->validated();
        
        $existingBook = Booking::find($id);
        $existingBook->guest_full_name = $validatedData['guest_full_name'];
        $existingBook->guest_credit_card = $validatedData['guest_credit_card'];
        $existingBook->room = $validatedData['room'];
        $existingBook->from_date = $validatedData['from_date'];
        $existingBook->to_date = $validatedData['to_date'];
        $existingBook->more_details = $validatedData['more_details'];

        $existingBook->save();

        

        return view('booking.success');

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
