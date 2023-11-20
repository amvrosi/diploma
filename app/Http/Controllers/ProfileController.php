<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Tool;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('edit_profile', compact('user'));
    }

    public function update(UpdateProfileRequest $request,string $userId)
    {
        $data = $request->validated();
        $user = User::findOrFail($userId);
        $user->update($data);

        return redirect()->route('profile', compact('user'))->with('success', 'Dane zostały zmienione!');
    }
}
