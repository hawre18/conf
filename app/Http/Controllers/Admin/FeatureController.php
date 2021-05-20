<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeatureController extends Controller
{
    public function index()
    {
        $features=Feature::with(['product','photo'])->paginate(10);
        return view('Admin.features.index',compact(['features']));
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
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:10',
        ]);

        try{
            $feature=new Feature();
            $feature->title=$request->title;
            $feature->description=$request->description;
            $feature->product_id=$request->id;
            $feature->photo_id=$request->photo_id;
            $feature->save();
            Session::flash('features_success','امکانات با موفقیت ثبت شد');
            return redirect('/features');
        }
        catch (\Exception $m){
            Session::flash('features_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return $m;
            return redirect('/features');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feature=Feature::with('photo','product')->whereId($id)->first();
        return view('Admin.features.show',compact(['feature']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $feature=Feature::with(['photo'])->whereId($id)->first();
        return view('Admin.features.edit',compact([['feature']]));
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

        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:10',
        ]);

        try{
            $feature=Feature::findorfail($id);
            $feature->title=$request->title;
            $feature->description=$request->description;
            $feature->product_id=$request->id;
            $feature->photo_id=$request->photo_id;
            $feature->save();
            Session::flash('features_success','امکانات با موفقیت ویرایش شد');
            return redirect('/features');
        }
        catch (\Exception $m){
            Session::flash('features_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return $m;
            return redirect('/features');
        }
    }
    public function delete($id)
    {
        try{
            $feature=Feature::findorfail($id);
            $feature->delete();
            Session::flash('features_success','تنوع با موفقیت حذف شد');
            return redirect('/features');
        }
        catch (\Exception $m){
            Session::flash('features_error','خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/features');
        }
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
