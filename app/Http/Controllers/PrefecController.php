<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prefec;
use JavaScript;

class PrefecController extends Controller
{
    public function index()
    {
        JavaScript::put([
            'prefec' => Prefec::all()
        ]);
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function search(Request $request)
    {
        $input = $request->input('search');
        return DB::table('prefecs')->where('prefec', 'LIKE', $input.'%')->get();
    }
}
