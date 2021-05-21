<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newses=News::with(['photo'])->paginate(10);
        return view('Admin.news.index',compact(['newses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.news.create');

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
            'photo_id' => 'required',
        ]);

        try{
            $news=new News();
            $news->title=$request->title;
            $news->description=$request->description;
            $news->photo_id=$request->photo_id;
            $news->save();
            Session::flash('news_success','خبر با موفقیت ثبت شد');
            return redirect('/news');
        }
        catch (\Exception $m){
            Session::flash('news_error','خطایی در ثبت به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/news');
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
        $news=News::with('photo')->whereId($id)->first();
        return view('Admin.news.show',compact(['news']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $news=News::with(['photo'])->whereId($id)->first();
        return view('Admin.news.edit',compact([['news']]));
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
            'photo_id' => 'required',
        ]);

        try{
            $news=News::findorfail($id);
            $news->title=$request->title;
            $news->description=$request->description;
            $news->photo_id=$request->photo_id;
            $news->save();
            Session::flash('news_success','خبر با موفقیت ویرایش شد');
            return redirect('/news');
        }
        catch (\Exception $m){
            Session::flash('news_error','خطایی در ویرایش به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/news');
        }
    }
    public function delete($id)
    {
        try{
            $news=News::findorfail($id);
            $news->delete();
            Session::flash('news_success','خبر با موفقیت حذف شد');
            return redirect('/news');
        }
        catch (\Exception $m){
            Session::flash('news_error','خطایی در حذف به وجود آمده لطفا مجددا تلاش کنید');
            return redirect('/news');
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
