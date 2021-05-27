<?php

namespace App\Http\Controllers;

use App\Models\bus_schedule_booking;
use Illuminate\Http\Request;

class Bus_schedule_bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return bus_schedule_booking::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        return bus_schedule_booking::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bus_schedule_booking  $bus_schedule_booking
     * @return \Illuminate\Http\Response
     */
    public function show(bus_schedule_booking $bus_schedule_booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bus_schedule_booking  $bus_schedule_booking
     * @return \Illuminate\Http\Response
     */
    public function edit(bus_schedule_booking $bus_schedule_booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bus_schedule_booking  $bus_schedule_booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bus_schedule_booking = bus_schedule_booking::find($id);
        $bus_schedule_booking->update($request->all());

        return $bus_schedule_booking;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bus_schedule_booking  $bus_schedule_booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return bus_schedule_booking::destroy($id);
    }
}
