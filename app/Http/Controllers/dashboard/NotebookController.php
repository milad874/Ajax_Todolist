<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Requests\notebookRequest;
use App\Notebook;
use App\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class NotebookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      /*  User::create([
            'name'=>'ali',
            'email'=>'ali@gmail.com',
            'password'=> bcrypt('12345678')
        ]);*/

       //$notebooks = Notebook::paginate(10);
//        $notebooks= auth()->user()->notebooks()->search($request->all());
        $notebooks= auth()->user()->notebooks()->paginate(10);

        return view('notebook.all',compact('notebooks'));
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
    public function store(notebookRequest $request)
    {
        $request['user_id'] =auth()->user()->id;
        $post= Notebook::create($request->all());
        $newdate = $post['created_at']->toDateTimeString();
        $post1['created_at']=Verta::instance($newdate)->formatDifference();

       return response()->json(collect($post)->merge($post1));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function show(Notebook $notebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function edit(Notebook $notebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notebook $notebook)
    {
       $notebook->update($request->all());
        $post=  Notebook::find($notebook->id);
        $newdate = $post['created_at']->toDateTimeString();
        $post1['created_at']=Verta::instance($newdate)->formatDifference();

        return response()->json(collect($post)->merge($post1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notebook  $notebook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notebook $notebook)
    {
        $post=  $notebook->delete();
        return response()->json($post);
    }

    public function delete(Request $request)
    {
      $post=  Notebook::find($request->id)->delete();
        return response()->json($post);
    }

    public function searchNotebook(Request $request)
    {
        $notebooks= Notebook::search($request->all());
        return view('notebook.all',compact('notebooks'));
    }
}
