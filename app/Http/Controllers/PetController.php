<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pet;
use App\Models\Kinorg;
use App\Models\UserProfile;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class PetController extends Controller
{
    public function index ()
    {
        $pets = Pet::query()->get();

        return view('pets.index', compact('pets'));
    }

    public function show (Request $request, Pet $pet)
    {

        return view('pets.show', compact('pet'));
    }

    
}
