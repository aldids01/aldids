<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['subject'] }} Email</title>

</head>

<body style="background: #302b63; margin: 0; padding: 0; font-family: 'Nunito', Arial, sans-serif;">
<table width="100%" cellpadding="0" cellspacing="0" style="background: #302b63; min-height: 100vh;">
    <tr>
        <td align="center">
            <table width="100%" cellpadding="0" cellspacing="0"
                   style="max-width: 480px; margin: 40px auto; background: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                <tr>
                    <td align="center" style="padding: 32px 24px 0 24px;">
                        <img src="{{ $message->embed(asset('apple-touch-icon.png')) ?? asset('favicon.svg') }}"
                             alt="Logo" style="height: 48px; margin-bottom: 16px;">
                        <h1 style="font-size: 1.5rem; color: #1e293b; margin: 0 0 16px 0; font-weight: 700;">
                          {{ $data['subject'] }}
                        </h1>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 24px 24px 24px;">
                        <div style="font-size: 1rem; color: #334155; margin-bottom: 24px;">
                            Dear {{ $data['name'] }},<br><br>

                            {{ $data['message'] }}
                        </div>

                        <div
                            style="font-size: 0.95rem; color: #64748b; margin-top: 32px; border-top: 1px solid #302b63; padding-top: 16px; display: flex; align-items: center; justify-content: center; gap: 8px; text-align: center;">
                            <span>&copy; {{ date('Y') }}</span>
                            <img src="{{ $message->embed(asset('apple-touch-icon.png')) ?? asset('favicon.svg') }}"
                                 alt="Logo" style="height: 24px; vertical-align: middle; display: inline-block;">
                            <span>{{ config('app.name') }}</span>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>

</html>
