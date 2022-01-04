<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dog;
use App\Category;
use Illuminate\Support\Str;

class DogController extends Controller
{
    /**
     * Function to show the list view
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $posts = Dog::orderBy('id', 'DESC')
        ->with('category')
        ->get();
        $cats = Category::orderBy('name','ASC')
        ->with('dogs')
        ->get();
        return view('admin/dogs/index', compact('posts', 'cats'));
    }

    /**
     * Function to create a new record
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin/dogs/create');
    }

    /**
     * Function to store a new record
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $valid = $request->validate([
            'name' => 'bail|required|max:255',
            'image' => 'nullable|image',
            'other_names' => 'bail|required|string',
            'origin' => 'bail|required|max:255',
            'male_weight' => 'bail|required|string',
            'female_weight' => 'bail|required|string',
            'life_span' => 'bail|required|digits:2',
            'category_id' => 'bail|required|in:1,2,3,4,5',
            'legitimacy' => 'bail|required|in:No limit,Area limited',
            'description' => 'nullable|string'
        ]);

        $old_name = $request->file('image')->getClientOriginalName();
        $new_name = Str::slug(now(), '-') . '_' . $old_name;

        $request->file('image')->storeAs('public/images', $new_name);

        $valid['image'] = $new_name;
        $post = Dog::create($valid);

        if($post){
            session()->flash('success', 'Record was successfully added!');
        }else{
            session()->flash('error', 'There was a problem!');
        }

        return redirect('admin/dogs');
    }

    /**
     * Function to edit a record
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = Dog::find($id);
        return view('admin/dogs/edit', compact('post'));
    }

    /**
     * Function to update one record
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $valid = $request->validate([
            'id' => 'bail|required|integer',
            'name' => 'bail|required|max:255',
            'image' => 'nullable|image',
            'other_names' => 'bail|required|string',
            'origin' => 'bail|required|max:255',
            'male_weight' => 'bail|required|string',
            'female_weight' => 'bail|required|string',
            'life_span' => 'bail|required|digits:2',
            'category_id' => 'bail|required|in:1,2,3,4,5',
            'legitimacy' => 'bail|required|in:No limit,Area limited',
            'description' => 'nullable|string'
        ]);

        $old_name = $request->file('image')->getClientOriginalName();
        $new_name = Str::slug(now(), '-') . '_' . $old_name;

        $request->file('image')->storeAs('public/images', $new_name);

        $post = Dog::find($valid['id']);

        $valid['image'] = $new_name;

        if($post->update($valid)){
            session()->flash('success', 'Record was successfully edited!');
        }else{
            session()->flash('error', 'There was a problem!');
        }

        return redirect('/admin/dogs');
    }

    /**
     * Function to delete a existing record
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id){
        $valid = $request->validate([
            'id' => 'bail|required|integer'
        ]);

        $post = Dog::find($valid['id']);

        if($post->delete()){
            session()->flash('success', 'Record was successfully deleted!');
        }else{
            session()->flash('error', 'There was a problem!');
        }

        return redirect()->back();
    }
}
