<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('profile.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // Validation
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'password'  => 'required|confirmed',
        ]);

        $user->update($request->all());

        return redirect('profile')->with('success','Seus dados foram alterados com sucesso!');
    }

}
