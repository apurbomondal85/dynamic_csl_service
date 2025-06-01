<?php

namespace App\Http\Controllers\Public;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Public\Contact\ContactRequest;
use App\Models\Solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $single_solution = Solution::where('id', $id)->first();

        return view('public.pages.solution.index', compact('single_solution'));
    }
}
