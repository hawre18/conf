<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BanerController extends Controller
{
    public function index()
    {
        $baners=Baner::with(['product','photo'])->paginate(10);
        return view('Admin.baners.index',compact(['baners']));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:10',
        ]);

        try{
            $baners=new Baner();
            $baners->title=$request->title;
            $baners->description=$request->description;
            $baners->product_id=$request->id;
            $baners->photo_id=$request->photo_id;
            $baners->save();
            Session::flash('baners_success','بنر با موفقیت ثبت شد');
            return redirect('/baners');
        }
        catch (\Exception $m){
            Session::flash('baners_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return $m;
            return redirect('/baners');
        }
    }
    public function edit($id)
    {

        $baner=Baner::with(['photo'])->whereId($id)->first();
        return view('Admin.baners.edit',compact([['baner']]));
    }
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:10',
        ]);

        try{
            $baner=Baner::findorfail($id);
            $baner->title=$request->title;
            $baner->description=$request->description;
            $baner->product_id=$request->id;
            $baner->photo_id=$request->photo_id;
            $baner->save();
            Session::flash('baners_success','بنر با موفقیت ویرایش شد');
            return redirect('/baners');
        }
        catch (\Exception $m){
            Session::flash('baners_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return $m;
            return redirect('/baners');
        }
    }
    public function delete($id)
    {
        try {
            $baner = Baner::findorfail($id);
            $baner->delete();
            Session::flash('baners_success', 'بنر با موفقیت حذف شد');
            return redirect('/baners');
        } catch (\Exception $m) {
            Session::flash('baners_error', 'خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/baners');
        }
    }
    public function destroy($id)
    {
        //
    }
    public function show($id)
    {

    }
}
