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
                
            <h2>{!! __('rgpd-privacy_policy.privacy_header') !!}</h2>
            
            <div>
                <h3>{!! __('rgpd-privacy_policy.privacy_1') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_1_1', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_1_2', ['website_url' => config('pulsar-rgpd.website_url')]) !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_2') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_2_1', ['trademark' => config('pulsar-rgpd.trademark'), 'company' => config('pulsar-rgpd.company')]) !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_2_2', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_3') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_3_1') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_3_2') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_3_3', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p>

                <h5>{!! __('rgpd-privacy_policy.privacy_3_4') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_3_4_1') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_3_4_2') !!}</p>

                <h5>{!! __('rgpd-privacy_policy.privacy_3_5') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_3_5_1', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_2') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_3') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_4') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_5', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p></li>
                </ul>

                <h5>{!! __('rgpd-privacy_policy.privacy_3_6') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_3_6_1') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_3_6_2') !!}</p>

                <h5>{!! __('rgpd-privacy_policy.privacy_3_7') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_3_7_1') !!}</p>

                <h5>{!! __('rgpd-privacy_policy.privacy_3_8') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_3_8_1', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_4') !!}</h3>
                <h5>{!! __('rgpd-privacy_policy.privacy_4_1') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_4_1_1') !!}</p>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_2') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_3') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_4') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_5') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_6') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_7') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_8') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_9') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_10') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_11') !!}</p></li>
                </ul>
                <p>{!! __('rgpd-privacy_policy.privacy_4_1_12') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_4_1_13', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_14') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_15') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_16') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_17') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_18') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_19') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_20') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_21') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_22') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_23') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_24') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_25') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_26') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_27') !!}</p></li>
                </ul>
                <p>{!! __('rgpd-privacy_policy.privacy_4_1_28') !!}</p>

                <h5>{!! __('rgpd-privacy_policy.privacy_4_2') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_4_2_1') !!}</p>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_2') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_3', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_4') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_5') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_6') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_7') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_8') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_9') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_10') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_11') !!}</p></li>
                </ul>

                <h3 id="sec_5_1">{!! __('rgpd-privacy_policy.privacy_5') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_5_1') !!}</p>

                <h5>{!! __('rgpd-privacy_policy.privacy_5_2') !!}</h5>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_1') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_2') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_3') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_4') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_5') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_6') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_7') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_8') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_9') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_10') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_11') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_12') !!}</p></li>
                    <li id="sec_5_2"><p>{!! __('rgpd-privacy_policy.privacy_5_2_13') !!}</p></li>
                </ul>

                <h5>{!! __('rgpd-privacy_policy.privacy_5_3') !!}</h5>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_1') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_2') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_3') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_4') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_5') !!}</p></li>
                </ul>

                <h5>{!! __('rgpd-privacy_policy.privacy_5_4') !!}</h5>
                <p>{!! __('rgpd-privacy_policy.privacy_5_4_1') !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_6') !!}</h3>
                <p id="sec_7">{!! __('rgpd-privacy_policy.privacy_6_1') !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_7') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_7_1') !!}</p>
                <ul>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_2') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_3') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_4') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_5') !!}</p></li>
                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_6') !!}</p></li>
                </ul>

                <h3>{!! __('rgpd-privacy_policy.privacy_8') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_8_1') !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_9') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_9_1') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_9_2') !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_10') !!}</h3>
                <p id="sec_11">{!! __('rgpd-privacy_policy.privacy_10_1', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_11') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_11_1') !!}</p>
                <p>{!! __('rgpd-privacy_policy.privacy_11_2') !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_12') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_12_1', ['link' => nt_route('rgpd-privacy_policy.contact-' . user_lang())]) !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_13') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_13_1') !!}</p>

                <h3>{!! __('rgpd-privacy_policy.privacy_14') !!}</h3>
                <p>{!! __('rgpd-privacy_policy.privacy_14_1') !!}</p>
            </div>
            
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

@section('content')
    <section class="menuBackgroundToggle"></section>
    <section id="dataSection">
        <div class="data-wrapper">
            <div class="container-narrow">
                <div class="row">
                    <div class="col-md-12">
                        <div class="data-content">
                            <div class="data-header">
                                <h2>{!! __('rgpd-privacy_policy.privacy_header') !!}</h2>
                            </div>
                            <div class="data-body">

                                <h3>{!! __('rgpd-privacy_policy.privacy_1') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_1_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_1_2') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_2') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_2_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_2_2') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_3') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_2', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_3') !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_3_4') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_4_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_4_2', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_3_5') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_5_1', ['link' => nt_route('rgpd-privacy_policy.login-' . user_lang())]) !!}</p>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_2') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_3') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_4') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_5_5') !!}</p></li>
                                </ul>

                                <h5>{!! __('rgpd-privacy_policy.privacy_3_6') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_6_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_6_2', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_3_6_3') !!}</p></li>
                                </ul>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_6_4', ['link' => nt_route('rgpd-privacy_policy.login-' . user_lang())]) !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_3_7') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_7_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_7_2') !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_3_8') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_8_1', ['link' => '#']) !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_3_9') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_3_9_1', ['link' => nt_route('rgpd-privacy_policy.contact-' . user_lang())]) !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_4') !!}</h3>
                                <h5>{!! __('rgpd-privacy_policy.privacy_4_1') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_4_1_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_2') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_3') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_4') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_5') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_6') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_7') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_8') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_9') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_10') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_11') !!}</p></li>
                                </ul>
                                <p>{!! __('rgpd-privacy_policy.privacy_4_1_12') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_4_1_13', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_14') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_15') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_16') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_17') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_18') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_19') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_20') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_21') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_22') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_23') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_24') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_25') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_26') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_1_27') !!}</p></li>
                                </ul>
                                <p>{!! __('rgpd-privacy_policy.privacy_4_1_28') !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_4_2') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_4_2_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_2') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_3', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_4') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_5') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_6') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_7') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_8') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_9') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_10') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_4_2_11') !!}</p></li>
                                </ul>

                                <h3 id="sec_5_1">{!! __('rgpd-privacy_policy.privacy_5') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_5_1') !!}</p>

                                <h5>{!! __('rgpd-privacy_policy.privacy_5_2') !!}</h5>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_1') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_2') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_3') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_4') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_5') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_6') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_7') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_8') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_9') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_10') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_11') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_2_12') !!}</p></li>
                                    <li id="sec_5_2"><p>{!! __('rgpd-privacy_policy.privacy_5_2_13') !!}</p></li>
                                </ul>

                                <h5>{!! __('rgpd-privacy_policy.privacy_5_3') !!}</h5>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_1') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_2') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_3') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_4') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_5_3_5') !!}</p></li>
                                </ul>

                                <h5>{!! __('rgpd-privacy_policy.privacy_5_4') !!}</h5>
                                <p>{!! __('rgpd-privacy_policy.privacy_5_4_1') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_6') !!}</h3>
                                <p id="sec_7">{!! __('rgpd-privacy_policy.privacy_6_1') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_7') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_7_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_2') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_3') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_4') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_5') !!}</p></li>
                                    <li><p>{!! __('rgpd-privacy_policy.privacy_7_6') !!}</p></li>
                                </ul>

                                <h3>{!! __('rgpd-privacy_policy.privacy_8') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_8_1') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_9') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_9_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_9_2') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_10') !!}</h3>
                                <p id="sec_11">{!! __('rgpd-privacy_policy.privacy_10_1', ['link' => nt_route('rgpd-privacy_policy.account-' . user_lang())]) !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_11') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_11_1') !!}</p>
                                <p>{!! __('rgpd-privacy_policy.privacy_11_2') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_12') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_12_1', ['link' => nt_route('rgpd-privacy_policy.contact-' . user_lang())]) !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_13') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_13_1') !!}</p>

                                <h3>{!! __('rgpd-privacy_policy.privacy_14') !!}</h3>
                                <p>{!! __('rgpd-privacy_policy.privacy_14_1') !!}</p>
                            </div>
                        </div>
                        <!-- /.contact-content -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.contact-wrapper -->
    </section>
@endsection

