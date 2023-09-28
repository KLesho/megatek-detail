<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = Detail::all();
        return view('details.index',['details'=>$details]);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSmallEsl()
    {
        $details = Detail::all();
        return view('details.eslSmall',['details'=>$details]);
    }

    public function getBigEsl()
    {
        $details = Detail::all();
        return view('details.eslBig',['details'=>$details]);
    }

    public function getHomePage()
    {
        $details = Detail::all();
        return view('details.homePage',['details'=>$details]);
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
        $detail = Detail::where('code', $id)->first();
        return view('details.detail',['detail'=>$detail]);

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

      /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        
        $validator = Validator::make($request->all(), [
            'code' => 'required|numeric|max_digits:6'

        ],$messages = [
            'required' => 'Kodi nuk mund te lihet bosh.',
            'numeric' => 'Kodi mund te jete vetem numra.',
            'max_digits' => 'Kodi duhet te jete vetem me 6 numra.'
        ]);
 
        if ($validator->fails()) {
            return redirect('details/detail')
                        ->withErrors($validator)
                        ->withInput();
        }
 
        // Retrieve the validated input...
        $validated = $validator->validated();

       // dd($data);
       $code = $validated['code'];
       
        $detail = Detail::where('code', $code)->first();
        return view('details.detail',['detail'=>$detail]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function getComparison()
    {
        return view('details.comparison',['detail'=>null,'secondDetail'=>null]);
    }


     /**
     * Search the specified resource from storage.
    * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchComparison(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstCode' => 'required|numeric|max_digits:6',
            'secondCode' => 'required|numeric|max_digits:6'


        ],$messages = [
            'required' => 'Kodi nuk mund te lihet bosh.',
            'numeric' => 'Kodi mund te jete vetem numra.',
            'max_digits' => 'Kodi duhet te jete vetem me 6 numra.'
        ]);
 
        if ($validator->fails()) {
            return redirect('/comparison')
                        ->withErrors($validator)
                        ->withInput();
        }
 
        // Retrieve the validated input...
        $validated = $validator->validated();


       // dd($data);
       $firstCode = $validated['firstCode'];
       $secondCode = $validated['secondCode'];

        $firstDetail = Detail::where('code', $firstCode)->first();
        $secondDetail = Detail::where('code', $secondCode)->first();

        return view('details.comparison',['detail'=>$firstDetail,'secondDetail'=>$secondDetail]);
    }
}
