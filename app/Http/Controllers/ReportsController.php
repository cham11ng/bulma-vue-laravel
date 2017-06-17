<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ReportsController
 * @package App\Http\Controllers
 */
class ReportsController extends Controller
{
    /**
     * ReportsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::selectRaw('url, count(*) times')
                         ->groupBy('url')
                         ->orderByRaw('times desc')
                         ->get();

        return view('report.report', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'url'    => 'required|min:2',
                'reason' => 'required'
            ]
        );

        auth()->user()->claim(
            new Report($request->all())
        );

        if ($request->expectsJson()) {
            return response()->json(
                [
                    'status'      => 'Report Submitted',
                    'status_type' => 'success'
                ]
            );
        }

        return back()->with(
            [
                'status'      => 'Report Submitted Successfully.',
                'status_type' => 'success'
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
