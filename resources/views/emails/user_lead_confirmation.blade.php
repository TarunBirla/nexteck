<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Your Nexteck Strategy Call Slot Request</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    <h2 style="color: #0C1B33;">Hi {{ $lead->full_name }},</h2>
    <p>Thank you for requesting a free Business & AI Strategy Call with <strong>Nexteck</strong>.</p>
    
    <p>We have received your details for <strong>{{ $lead->company }}</strong>. Mohammed Nasar or a senior consultant will review your submission and contact you at <strong>{{ $lead->work_email }}</strong> within one business day to confirm your call time.</p>

    <div style="background-color: #F7F5F0; padding: 15px; border-left: 4px solid #B8933F; margin: 20px 0;">
        <h4 style="margin-top: 0;">Summary of your request:</h4>
        <ul style="margin-bottom: 0; padding-left: 20px;">
            <li><strong>Company:</strong> {{ $lead->company }}</li>
            <li><strong>Team Size:</strong> {{ $lead->team_size ?? 'N/A' }}</li>
            <li><strong>Focus Area:</strong> {{ $lead->pain_point ?? 'N/A' }}</li>
        </ul>
    </div>

    <p>If you have any urgent questions prior to our call, feel free to reply directly to this email or reach us at <a href="mailto:hello@nexteck.co.uk">hello@nexteck.co.uk</a>.</p>

    <p>Best regards,<br>
    <strong>Mohammed Nasar</strong><br>
    Principal Consultant, Nexteck</p>
</body>
</html>
