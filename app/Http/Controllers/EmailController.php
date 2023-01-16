<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InfobipService;

class EmailController extends Controller
{
    public function __construct(protected InfobipService $infobipService)
    {

    }
    public function sendEmail(Request $request)
    {
        // for now, no validation check
        $response = $this->infobipService->sendEmail($request->all());
        return response()->json(['response' => $response]);
    }
}
