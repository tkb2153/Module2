<?php

namespace Modules\Module2\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class Module2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function menu1()
    {
        $data = [
            'data' => [
                [
                    'name' => 'name-1',
                    'content' => 'content-1',
                ],
                [
                    'name' => 'name-2',
                    'content' => 'content-2',
                ],
                [
                    'name' => 'name-3',
                    'content' => 'content-3',
                ],
            ]
        ];
        return view('module2::menu1');
    }

    public function menu2()
    {
        $data = [
            'data' => [
                [
                    'name' => 'name-1',
                    'content' => 'content-1',
                ],
                [
                    'name' => 'name-2',
                    'content' => 'content-2',
                ],
                [
                    'name' => 'name-3',
                    'content' => 'content-3',
                ],
            ]
        ];
        throw new \Libraries\FunpodiumAPIClient\Exception\FunpodiumAPIClientException('error');
        return view('module2::menu2');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('module2::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('module2::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('module2::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
