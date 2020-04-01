<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Newa;
use Illuminate\Support\Facades\Redis;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=session('adminuser');
        if(!$user){
            return view('login.login');
        }
       $news=News::leftjoin('new','news.n_id','=','new.n_id')->paginate(2);
       //Ajax分页
         if(request()->ajax()){
              return view('news.ajaxpage',['news'=>$news]);
         }
        return view('news.index',['news'=>$news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=session('adminuser');
        if(!$user){
            return view('login.login');
        }
        $newa=Newa::all();
        //dd($newa);

        return view('news.create',['newa'=>$newa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=session('adminuser');
        if(!$user){
            return view('login.login');
        }
        $post=$request->except('_token');
        $post['new_time']=time();
        //dump($post);
         //文件上传
       if ($request->hasFile('new_logo')) { 
            $post['new_logo']=$this->upload('new_logo');
        }
         $res=News::insert($post);
         //dd($res);
         if($res){
            return redirect('/news/index');
         }
    }
     //文件上传
    public function upload($img){

        //接收文件
            $file=request()->$img;
        //判断上传过程中有误错误
        if($file->isValid()){
            $store_result = $file->store('uploads');
            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
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
        $news=News::find($id);
        $count=Redis::setnx('count'.$id,1)?
        Redis::get('count'.$id):Redis::incr('count'.$id);
        ;
        //dd($news);
        return view('news.edit',['news'=>$news,'count'=>$count]);
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
}
