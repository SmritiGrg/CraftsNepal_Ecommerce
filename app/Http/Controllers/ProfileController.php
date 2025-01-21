<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as Files;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        // Check if an image was uploaded
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete the old image if it exists
            $oldImage = $request->user()->image;
            if ($oldImage && file_exists(public_path('uploads/' . $oldImage))) {
                unlink(public_path('uploads/' . $oldImage));
            }

            // Create a new file name
            $fileName = Str::slug($request->user()->first_name . '-' . $request->user()->last_name) . '-' . time() . '.' . $request->image->extension();

            // Move the uploaded image to the 'uploads' directory
            $request->image->move(public_path('uploads'), $fileName);

            // Update the user's image path
            $request->user()->image = $fileName;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'Profile Updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
