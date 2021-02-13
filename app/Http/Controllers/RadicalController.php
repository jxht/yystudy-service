<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  "ddd";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function typeList(){
        $a= '{"ret":1,"data":[{ "id": 1, "name": "水与山" },
  { "id": 2, "name": "植物" },
  { "id": 3, "name": "人和人类" },
  { "id": 4, "name": "家畜野生动物" },
  { "id": 5, "name": "衣服" },
  { "id": 6, "name": "房子屋顶" },
  { "id": 7, "name": "器皿容器" },
  { "id": 8, "name": "打猎" },
  { "id": 9, "name": "农耕" },
  { "id": 10, "name": "语言法律" },
  { "id": 11, "name": "历法" },
  { "id": 12, "name": "其他" }]}';
        return $a;
    }
}
