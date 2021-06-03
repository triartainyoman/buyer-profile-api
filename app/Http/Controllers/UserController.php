<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Interest;
use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        // dd($users);
        return view('users.index', compact(['users']));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        User::create($request->all());
        return redirect('/users');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('users.edit', compact(['user']));
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/users');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }

    public function userInterests(Request $request, $id) {
        $interests = Interest::with(['category', 'user'])->where('user_id', $request->id)->get();
        return view('users.interests', compact(['interests', 'id']));
        // return $interests;
    }

    public function createUserInterest($id) {
        $categories = Category::all();
        return view('users.createInterest', compact(['id', 'categories']));
    }

    public function storeUserInterest(Request $request, $id) {
        Interest::create($request->all());
        return redirect('/users');
    }
}
