<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'user_id' => 'required|exists:users,id',
            'original_url' => 'required|url',
        ]);

        $shortCode = Str::random(6);

        $url = Url::create([
            'user_id' => $attributes['user_id'],
            'original_url' => $attributes['original_url'],
            'short_code' => $shortCode,
        ]);

        return redirect()->back()->with('short_url', url($shortCode));
    }

    public function show($shortCode)
    {
        $url = Url::where('user_id', auth()->user()->id)
            ->where('short_code', $shortCode)
            ->firstOrFail();

        return redirect($url->original_url);
    }

}
