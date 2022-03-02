<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', [
            'users' => User::all()
        ]);
    }

    public function show()
    {
        return view('admin.profile.update', [
            'user' => \Auth::user()
        ]);
    }

    public function update(AdminProfileUpdateRequest $request)
    {
        $user = \Auth::user();

        $user->name = $request->post('name');
        $user->email = $request->post('email');

        if (!empty($request->post('password'))) {
            $user->password = \Hash::make($request->post('password'));
        }

        $user->save();

        return redirect()->route('admin.profile.show');
    }

    public function create()
    {
        return view('admin.profile.create');
    }

    public function save(Request $request)
    {
        $user = new User();

        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = \Hash::make($request->post('password'));
        $user->is_admin = $request->boolean('is_admin');

        $user->save();

        return redirect()->route('admin.profile.create')
            ->withInput();
    }

    public function edit(int $id)
    {
        return view('admin.profile.edit', [
            'user' => User::find($id)
        ]);
    }

    public function store(Request $request, int $id)
    {
        $user = User::find($id);

        $user->name = $request->post('name');
        $user->email= $request->post('email');
        $user->password = \Hash::make($request->post('password'));
        $user->is_admin = $request->boolean('is_admin');

        $user->save();

        return redirect()->route('admin.profile.edit', ['id' => $id]);
    }

    public function destroy(int $id)
    {
        User::destroy($id);

        return redirect()->route('admin.profile.index');
    }
}
