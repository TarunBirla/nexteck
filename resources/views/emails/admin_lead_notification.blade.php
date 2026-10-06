<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Strategy Call Lead Request</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333; line-height: 1.6;">
    <h2 style="color: #0C1B33;">New Strategy Call Lead Received!</h2>
    <p>A new lead has submitted a request for a free strategy call on Nexteck.</p>
    
    <table style="width: 100%; max-width: 600px; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold; width: 180px;">Full Name:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $lead->full_name }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Work Email:</td>
            <td style="padding: 10px; border: 1px solid #ddd;"><a href="mailto:{{ $lead->work_email }}">{{ $lead->work_email }}</a></td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Company:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $lead->company }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Team Size:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $lead->team_size ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Biggest Pain Point:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $lead->pain_point ?? 'N/A' }}</td>
        </tr>
        <tr>
            <td style="padding: 10px; border: 1px solid #ddd; font-weight: bold;">Submitted At:</td>
            <td style="padding: 10px; border: 1px solid #ddd;">{{ $lead->created_at->format('Y-m-d H:i:s') }}</td>
        </tr>
    </table>
    
    <p style="margin-top: 20px; font-size: 0.9em; color: #777;">Nexteck Lead Management System</p>
</body>
</html>
