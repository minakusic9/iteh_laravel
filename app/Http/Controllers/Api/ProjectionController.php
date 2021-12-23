<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Projection;
use Illuminate\Http\Request;

class ProjectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \response()->json(Projection::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            return response()->json(Projection::create($request->all()));
        } catch (\Throwable $th) {
           return \response()->json($th->getMessage(),500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projection  $projection
     * @return \Illuminate\Http\Response
     */
    public function show(Projection $projection)
    {
        return \response()->json($projection);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projection  $projection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projection $projection)
    {
        try {
            $projection->update($request->all());
            return response()->json($projection);
        } catch (\Throwable $th) {
           return \response()->json($th->getMessage(),500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projection  $projection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projection $projection)
    {
        try {
            $projection->delete();
            return \response()->noContent();
         } catch (\Throwable $th) {
            return \response()->json($th->getMessage(),500);
         }
    }
}
