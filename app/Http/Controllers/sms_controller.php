<?php

namespace App\Http\Controllers;
use Twilio\Rest\Client;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;


class sms_controller extends Controller
{
    //
    public function send_sms(Request $request)
    {
        
        try {
            $sid = getenv("TWILIO_SID");
            $token = getenv("TWILIO_TOKEN");
            $client = new Client($sid, $token);
            $client->messages
                ->create(
                    '+91' . $request->number, // to
                    [
                        "body" => $request->message,
                        "from" => "+15005550006"
                    ]
                );

                return redirect()->back()->with('result','SMS sent successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
