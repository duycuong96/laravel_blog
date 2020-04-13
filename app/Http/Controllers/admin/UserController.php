<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::with('post')->get();
        // $users = User::all();
        return view('admin.users.index', [
            'users' => $users,

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = Arr::except($request->all(), [
            '_token',
            'avatar'
        ]);
        $data['avatar'] = $request->file('avatar')->store('avatar', 'public');
        $data['password'] = bcrypt(($data['password']));

        $user = User::create($data);
        //
        return redirect()->route('users.index');
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
        $user = User::find($id);
        return $user;
        // return view('admin.users.create');
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
        $user = User::find($id);
        return view('admin.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        //
        $user = User::find($id);
        $data = Arr::except($request->all(), [
            '_token',
            'avatar'
        ]);
        if($request['avatar'] != null){
            $user['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        // dd($user['avatar']);
        if($data['password'] != null){
            $user->password = bcrypt($data['password']);
        }
        // $data['avatar'] = $request->file('avatar')->store('avatar', 'public');
        // $data['password'] = bcrypt(($data['password']));
        // $data = $request->all();
        $user->update($data);
        // dd(1);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
