<?php

namespace App\Http\Controllers;
use App\User;
use App\Category;

use Illuminate\Http\Request;

class adminAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        $output='';
        $i=1;
        foreach($users as $user){
            $output .='<tr><td>'. $i++ .'</td><td>'.$user->name.'</td><td>'.$user->email.'</td><td class="text-right"><a href="javascript:void(0)" id="edituserbtn" value="'.$user->id.'" class="fa fa-edit p-2"></a><a value="'.$user->id.'" id="deluserbtn" class="fa fa-trash" href="javascript:void(0)"></a></td></tr>';
        }
        return($output);
    }
    public function fetch_categories(){
        $categories= Category::get();
        $output='';
        $i=1;
        foreach($categories as $category){
            $output .='<tr><td>'. $i++ .'</td><td>'.$category->title.'</td><td class="text-right"><a href="javascript:void(0)" id="edituserbtn" value="'.$category->id.'" class="fa fa-edit p-2"></a><a value="'.$category->id.'" id="deluserbtn" class="fa fa-trash" href="javascript:void(0)"></a></td></tr>';
        }
        return($output);
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
}
