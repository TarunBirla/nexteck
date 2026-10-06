<?php

namespace App\Http\Controllers;

use App\Models\LeadRequest;
use App\Mail\AdminLeadNotificationMail;
use App\Mail\UserLeadConfirmationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    public function submitStrategyCall(Request $request)
    {
        $validated = $request->validate([
            'full_name'  => 'required|string|max:255',
            'work_email' => 'required|email|max:255',
            'company'    => 'required|string|max:255',
            'team_size'  => 'nullable|string|max:255',
            'pain_point' => 'nullable|string|max:1000',
        ]);

        $lead = LeadRequest::create($validated);

        try {
            $adminEmail = env('ADMIN_MAIL', 'nasar@nexteck.co.uk');
            if ($adminEmail) {
                Mail::to($adminEmail)->send(new AdminLeadNotificationMail($lead));
            }

            if ($lead->work_email) {
                Mail::to($lead->work_email)->send(new UserLeadConfirmationMail($lead));
            }
        } catch (\Throwable $e) {
            Log::error('Lead email notification error: ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Your slot request has been received successfully.'
        ]);
    }
}
