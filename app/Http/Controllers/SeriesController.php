<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Series;
use App\Enums\SeasonStatus;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Series::with('user')->simplePaginate(10);
        
        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeriesRequest $request)
    {
        
        DB::transaction(function () use ($request) {
            $series = Series::create([
                'user_id' => Auth()->user()->id,
                'name' => $request->name,
                'series_description' => $request->series_description,
                'release_date' => $request->release_date
            ]);
            $series->save();
            
            $seasons = [];
            for($n = 1; $n <= $request->season_number; $n++) {
                $seasons [] = [
                    'series_id' => $series->id,
                    'season_number' => $n,
                    'status' => SeasonStatus::START
                ];
            }     

            Season::insert($seasons);
        });
        
        return to_route('series.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function edit(Series $series)
    {
        return view('series.edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeriesRequest  $request
     * @param  \App\Models\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeriesRequest $request, Series $series)
    {
        $series->update($request->all());

        return to_route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Series  $series
     * @return \Illuminate\Http\Response
     */
    public function destroy(Series $series)
    {
        DB::transaction(function () use ($series) {
            $series->delete();
        });

        return to_route('series.index');
    }
}
