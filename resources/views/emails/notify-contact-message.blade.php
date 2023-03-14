@extends('emails.layouts.contact')

@section('content')
    <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
        <tr>
            <td valign="top" class="bg_white" style="padding: 1em 2.5em;">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td class="logo" style="text-align: center;">
                            <h1>
                                <a href="{{ route('landings') }}">
                                    <img src="{{ $imgUrl }}" alt="{{ config('app.name') }}">
                                </a>
                            </h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="middle" class="hero hero-2 bg_white" style="padding: 4em 0;">
                <table>
                    <tr>
                        <td>
                            <div class="text" style="padding: 0 3em; text-align: center;">
                                <h2>
                                    Un nuevo usuario quiere contactarse con
                                    <br>
                                    <strong style="color: #2f89fc;">
                                        {{ config('app.name') }}
                                    </strong>
                                </h2>

                                <p>
                                    Puedes ver el mensaje que envio a continuación.
                                </p>
                                <p>
                                    <strong>Nombre: </strong> {{ $data['name'] }}
                                    <br>
                                    <strong>Email: </strong> {{ $data['email'] }}
                                    <br>
                                    <strong>Mensaje: </strong> {{ $data['message'] }}
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td class="bg_white">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td class="bg_white email-section">
                            <div class="heading-section" style="text-align: center; padding: 0 30px;">
                                <p>
                                    Si no solictaste esta información, por favor ignórala.
                                </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
