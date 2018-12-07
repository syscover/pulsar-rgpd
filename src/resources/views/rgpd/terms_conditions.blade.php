<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Cookies</title>
    <meta name="description" content="RGPD Cookies">
    <meta name="author" content="Digital H2">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">

                <h2>{!! __('web.conditions_header') !!}</h2>

                <div>
                    <h3>{!! __('web.conditions_1') !!}</h3>
                    <p>{!! __('web.conditions_1_1', ['link' => nt_route('web.home-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_1_2') !!}</p>
                    <p>{!! __('web.conditions_1_3', ['link' => nt_route('web.contact-' . user_lang())]) !!}</p>

                    <h3>{!! __('web.conditions_2') !!}</h3>
                    <p>{!! __('web.conditions_2_1') !!}</p>
                    <p>{!! __('web.conditions_2_2', ['link1' => nt_route('web.privacy_policies-' . user_lang()), 'link2' =>  nt_route('web.cookies-' . user_lang()), 'link3' =>  nt_route('web.terms_conditions-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_2_3', ['link1' => nt_route('web.privacy_policies-' . user_lang()), 'link2' =>  nt_route('web.cookies-' . user_lang()), 'link3' =>  nt_route('web.terms_conditions-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_2_4') !!}</p>

                    <h3>{!! __('web.conditions_3') !!}</h3>
                    <p>{!! __('web.conditions_3_1') !!}</p>
                    <p>{!! __('web.conditions_3_2', ['link' => nt_route('web.account-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_3_3') !!}</p>
                    <p>{!! __('web.conditions_3_4', ['link' => nt_route('web.privacy_policies-' . user_lang())]) !!}</p>

                    <h3>{!! __('web.conditions_4') !!}</h3>
                    <p>{!! __('web.conditions_4_1') !!}</p>
                    <p>{!! __('web.conditions_4_2') !!}</p>
                    <p>{!! __('web.conditions_4_3') !!}</p>
                    <p>{!! __('web.conditions_4_4') !!}</p>

                    <h3>{!! __('web.conditions_5') !!}</h3>
                    <p>{!! __('web.conditions_5_1') !!}</p>
                    <p>{!! __('web.conditions_5_2') !!}</p>
                    <p>{!! __('web.conditions_5_3') !!}</p>
                    <p>{!! __('web.conditions_5_4') !!}</p>
                    <p>{!! __('web.conditions_5_5') !!}</p>
                    <p>{!! __('web.conditions_5_6') !!}</p>
                    <p>{!! __('web.conditions_5_7') !!}</p>

                    <h3>{!! __('web.conditions_6') !!}</h3>
                    <ul>
                        <li><p>{!! __('web.conditions_6_1') !!}</p></li>
                        <li><p>{!! __('web.conditions_6_2', ['link' => nt_route('web.account-' . user_lang())]) !!}</p></li>
                    </ul>
                    <p>{!! __('web.conditions_6_3') !!}</p>
                    <ul>
                        <li><p>{!! __('web.conditions_6_4') !!}</p></li>
                        <li><p>{!! __('web.conditions_6_5') !!}</p></li>
                    </ul>
                    <p>{!! __('web.conditions_6_6') !!}</p>
                    <p>{!! __('web.conditions_6_7', ['link' => nt_route('web.contact-' . user_lang())]) !!}</p>

                    <h3>{!! __('web.conditions_7') !!}</h3>
                    <p>{!! __('web.conditions_7_1') !!}</p>
                    <p>{!! __('web.conditions_7_2') !!}</p>
                    <p>{!! __('web.conditions_7_3') !!}</p>

                    <h3>{!! __('web.conditions_8') !!}</h3>
                    <p>{!! __('web.conditions_8_1') !!}</p>

                    <h5>{!! __('web.conditions_8_2') !!}</h5>
                    <p>{!! __('web.conditions_8_2_1') !!}</p>
                    <p>{!! __('web.conditions_8_2_2') !!}</p>
                    <p>{!! __('web.conditions_8_2_3', ['link' => nt_route('web.contact-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_8_2_4') !!}</p>
                    <p>{!! __('web.conditions_8_2_5') !!}</p>
                    <p>{!! __('web.conditions_8_2_6') !!}</p>
                    <p>{!! __('web.conditions_8_2_7') !!}</p>
                    <p>{!! __('web.conditions_8_2_8') !!}</p>
                    <p>{!! __('web.conditions_8_2_9') !!}</p>
                    <p>{!! __('web.conditions_8_2_10') !!}</p>

                    <h5>{!! __('web.conditions_8_3') !!}</h5>
                    <p>{!! __('web.conditions_8_3_1') !!}</p>
                    <p>{!! __('web.conditions_8_3_2', ['link' => nt_route('web.contact-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_8_3_3') !!}</p>
                    <p>{!! __('web.conditions_8_3_4') !!}</p>
                    <p>{!! __('web.conditions_8_3_5') !!}</p>
                    <p>{!! __('web.conditions_8_3_6') !!}</p>
                    <p>{!! __('web.conditions_8_3_7') !!}</p>
                    <p>{!! __('web.conditions_8_3_8') !!}</p>
                    <ul>
                        <li><p>{!! __('web.conditions_8_3_9') !!}</p></li>
                        <li><p>{!! __('web.conditions_8_3_10') !!}</p></li>
                    </ul>

                    <h3>{!! __('web.conditions_9') !!}</h3>
                    <p>{!! __('web.conditions_9_1') !!}</p>
                    <p>{!! __('web.conditions_9_2') !!}</p>

                    <h3>{!! __('web.conditions_10') !!}</h3>
                    <p>{!! __('web.conditions_10_1') !!}</p>
                    <p>{!! __('web.conditions_10_2') !!}</p>
                    <p>{!! __('web.conditions_10_3') !!}</p>

                    <h3>{!! __('web.conditions_11') !!}</h3>
                    <p>{!! __('web.conditions_11_1', ['link' => nt_route('web.contact-' . user_lang())]) !!}</p>

                    <h3>{!! __('web.conditions_12') !!}</h3>
                    <p>{!! __('web.conditions_12_1') !!}</p>
                    <p>{!! __('web.conditions_12_2') !!}</p>
                    <p>{!! __('web.conditions_12_3') !!}</p>
                    <p>{!! __('web.conditions_12_4') !!}</p>
                    <p>{!! __('web.conditions_12_5') !!}</p>

                    <h3>{!! __('web.conditions_13') !!}</h3>
                    <p>{!! __('web.conditions_13_1') !!}</p>
                    <p>{!! __('web.conditions_13_2') !!}</p>

                    <h3>{!! __('web.conditions_14') !!}</h3>
                    <p>{!! __('web.conditions_14_1') !!}</p>
                    <p>{!! __('web.conditions_14_2') !!}</p>

                    <h3>{!! __('web.conditions_15') !!}</h3>
                    <p>{!! __('web.conditions_15_1') !!}</p>
                    <p>{!! __('web.conditions_15_2') !!}</p>
                    <ul>
                        <li><p>{!! __('web.conditions_15_3') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_4') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_5') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_6') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_7') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_8') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_9') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_10') !!}</p></li>
                        <li><p>{!! __('web.conditions_15_11') !!}</p></li>
                    </ul>

                    <h3>{!! __('web.conditions_16') !!}</h3>
                    <p>{!! __('web.conditions_16_1') !!}</p>

                    <h3>{!! __('web.conditions_17') !!}</h3>
                    <p>{!! __('web.conditions_17_1') !!}</p>
                    <p>{!! __('web.conditions_17_1') !!}</p>

                    <h3>{!! __('web.conditions_18') !!}</h3>
                    <p>{!! __('web.conditions_18_1') !!}</p>

                    <h3>{!! __('web.conditions_19') !!}</h3>
                    <p>{!! __('web.conditions_19_1') !!}</p>

                    <h3>{!! __('web.conditions_20') !!}</h3>
                    <p>{!! __('web.conditions_20_1') !!}</p>

                    <h3>{!! __('web.conditions_21') !!}</h3>
                    <p>{!! __('web.conditions_21_1') !!}</p>
                    <ul>
                        <li><p>{!! __('web.conditions_21_2') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_3') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_4') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_5') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_6') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_7') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_8') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_9') !!}</p></li>
                        <li><p>{!! __('web.conditions_21_10') !!}</p></li>
                    </ul>
                    <p>{!! __('web.conditions_21_11') !!}</p>

                    <h3>{!! __('web.conditions_22') !!}</h3>
                    <p>{!! __('web.conditions_22_1') !!}</p>
                    <p>{!! __('web.conditions_22_2') !!}</p>
                    <p>{!! __('web.conditions_22_3', ['link' => nt_route('web.contact-' . user_lang())]) !!}</p>
                    <p>{!! __('web.conditions_22_4') !!}</p>
                </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>