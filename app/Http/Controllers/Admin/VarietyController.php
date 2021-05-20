<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variety;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VarietyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varieties=Variety::with(['product','photos','attributeValues'])->paginate(10);
        return view('Admin.varietes.index',compact(['varieties']));
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
    public function generateSKU()
    {
        $number=mt_rand(1000,999999);
        if ($this->checkSKU($number)){
            return $this->generateSKU();
        }
        return (string)$number;
    }

    public function checkSKU($number)
    {
        return Variety::where('sku',$number)->exists();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'status' => 'required|numeric',
            'price' => 'required|numeric',
            'discount_price' => 'nullable',
        ]);

        try{
            $variety=new Variety();
            $variety->title=$request->title;
            $variety->sku=$this->generateSKU();
            $variety->slug=$request->slug;
            $variety->status=$request->status;
            $variety->price=$request->price;
            $variety->discount_price=$request->discount_price;
            $variety->product_id=$request->id;
            $variety->user_id=Auth::user()->id;
            $variety->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('photo_id')[0]);
            $variety->photos()->sync($photos);
            $variety->attributeValues()->sync($attributes);
            Session::flash('varietes_success','تنوع با موفقیت ثبت شد');
            return redirect('/varietes');
        }
        catch (\Exception $m){
            Session::flash('varietes_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return $m;
            return redirect('/varietes');
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

        $variety=Variety::with(['attributeValues','photos'])->whereId($id)->first();
        return view('Admin.varietes.edit',compact([['variety']]));
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
            'slug' => 'required|min:3|max:255',
            'status' => 'required|numeric',
            'price' => 'required|numeric',
            'discount_price' => 'nullable',
        ]);

        try{
            $variety=Variety::findorfail($id);
            $variety->title=$request->title;
            $variety->sku=$this->generateSKU();
            $variety->slug=$request->slug;
            $variety->status=$request->status;
            $variety->price=$request->price;
            $variety->discount_price=$request->discount_price;
            $variety->product_id=$request->id;
            $variety->user_id=Auth::user()->id;
            $variety->save();
            $attributes=explode(',',$request->input('attributes')[0]);
            $photos=explode(',',$request->input('photo_id')[0]);
            $variety->photos()->sync($photos);
            $variety->attributeValues()->sync($attributes);
            Session::flash('varietes_success','تنوع با موفقیت ویرایش شد');
            return redirect('/varietes');
        }
        catch (\Exception $m){
            Session::flash('varietes_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return $m;
            return redirect('/varietes');
        }
    }
    public function delete($id)
    {
        try{
            $variety=Variety::findorfail($id);
            $variety->delete();
            Session::flash('varietes_success','تنوع با موفقیت حذف شد');
            return redirect('/varietes');
        }
        catch (\Exception $m){
            Session::flash('varietes_error','خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/varietes');
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
