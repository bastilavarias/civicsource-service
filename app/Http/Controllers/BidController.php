<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function index(Request $request)
    {
        return customResponse()
            ->data(
                Bid::with('property')->paginate(
                    (int) $request->get(
                        'per_page',
                        $request->get('per_page')
                            ? $request->get('per_page')
                            : 3
                    ),
                    ['*'],
                    'page',
                    (int) $request->get(
                        'page',
                        $request->get('page') ? $request->get('page') : 1
                    )
                )
            )
            ->message('Property found.')
            ->success()
            ->generate();
    }
}
