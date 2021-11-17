<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function index(){
        return response()->json("Indexing all Profiles");
    }

    public function store(Request $request){
        return response()->json("Storing all Profiles");
    }

    public function create($id){
        return response()->json("Creating all Profiles");
    }

     public function update(Request $request, $id){
        return response()->json("Updating all Profiles");
    }

    public function show($id){
        return response()->json("Showing all Profiles");
    }

    public function delete($id){
        return response()->json("Deleting all Profiles");
    }
}
