<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();

        $user->fill($request->validated())->save();

        return back()
            ->with('message', 'Perfil atualizado!');
    }
}
