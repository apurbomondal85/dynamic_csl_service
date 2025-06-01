<?php

namespace App\Http\Controllers\Public;

use App\Models\Client;
use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Public\Contact\ContactRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Client::where('is_featured', 1)
            ->where('client_type', 'partner')
            ->get();

        return view('public.pages.partner.index', compact('partners'));
    }
}
