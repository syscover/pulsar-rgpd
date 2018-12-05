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

            <h2>{!! __('web.cookies_header') !!}</h2>

            <div>
                <h3>{!! __('web.cookies_1') !!}</h3>
                <p>{!! __('web.cookies_1_1') !!}</p>
                <p>{!! __('web.cookies_1_2') !!}</p>

                <h3>{!! __('web.cookies_2') !!}</h3>
                <p>{!! __('web.cookies_2_1', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p>

                <h3>{!! __('web.cookies_3') !!}</h3>
                <p>{!! __('web.cookies_3_1') !!}</p>
                <p>{!! __('web.cookies_3_2') !!}</p>

                <h5>{!! __('web.cookies_3_3') !!}</h5>
                <p>{!! __('web.cookies_3_3_1') !!}</p>
                <ul>
                    <li><p>{!! __('web.cookies_3_3_2') !!}</p></li>
                    <li><p>{!! __('web.cookies_3_3_3') !!}</p></li>
                </ul>
                <p>{!! __('web.cookies_3_3_4') !!}</p>
                <p>{!! __('web.cookies_3_3_5') !!}</p>
                <p>{!! __('web.cookies_3_3_6') !!}</p>

                <h5>{!! __('web.cookies_3_4') !!}</h5>
                <p>{!! __('web.cookies_3_4_1') !!}</p>
                <ul>
                    <li><p>{!! __('web.cookies_3_4_2') !!}</p></li>
                    <li><p>{!! __('web.cookies_3_4_3') !!}</p></li>
                </ul>

                <h5>{!! __('web.cookies_3_5') !!}</h5>
                <p>{!! __('web.cookies_3_5_1') !!}</p>
                <ul>
                    <li><p>{!! __('web.cookies_3_5_2') !!}</p></li>
                </ul>

                <h5>{!! __('web.cookies_3_6') !!}</h5>
                <p>{!! __('web.cookies_3_6_1') !!}</p>
                <ul>
                    <li><p>{!! __('web.cookies_3_6_2') !!}</p></li>
                </ul>
                <p>{!! __('web.cookies_3_6_3') !!}</p>
                <p>{!! __('web.cookies_3_6_4') !!}</p>
                <ul>
                    <li><p>{!! __('web.cookies_3_6_5') !!}</p></li>
                    <li><p>{!! __('web.cookies_3_6_6') !!}</p></li>
                    <li><p>{!! __('web.cookies_3_6_7', ['trademark' => config('pulsar-rgpd.trademark')]) !!}</p></li>
                    <li><p>{!! __('web.cookies_3_6_8') !!}</p></li>
                    <li><p>{!! __('web.cookies_3_6_9') !!}</p></li>
                </ul>
                <p>{!! __('web.cookies_3_6_10', ['company' => config('pulsar-rgpd.company')]) !!}</p>

                <h3>{!! __('web.cookies_4') !!}</h3>
                <p>{!! __('web.cookies_4_1') !!}</p>

                <p>{!! __('web.cookies_4_2') !!}</p>
                <ul>
                    <li><p>{!! __('web.cookies_4_2_1') !!}</p></li>
                    <li><p>{!! __('web.cookies_4_2_2') !!}</p></li>
                    <li><p>{!! __('web.cookies_4_2_3') !!}</p></li>
                    <li><p>{!! __('web.cookies_4_2_4') !!}</p></li>
                </ul>

                <p>{!! __('web.cookies_4_3') !!}</p>
                <p>{!! __('web.cookies_4_4', ['update_date' => config('pulsar-rgpd.update_date')]) !!}</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>



@extends('web.layouts.default')

@section('title', __('web.cookies_title'))

@section('content')
    <section class="menuBackgroundToggle"></section>
    <section id="dataSection">
        <div class="data-wrapper">
            <div class="container-narrow">
                <div class="row">
                    <div class="col-md-12">
                        <div class="data-content">
                            <div class="data-header">
                                <h2>{!! __('web.cookies_header') !!}</h2>
                            </div>
                            <div class="data-body">

                                <h3>{!! __('web.cookies_1') !!}</h3>
                                <p>{!! __('web.cookies_1_1') !!}</p>

                                <h3>{!! __('web.cookies_2') !!}</h3>
                                <p>{!! __('web.cookies_2_1') !!}</p>

                                <h3>{!! __('web.cookies_3') !!}</h3>
                                <p>{!! __('web.cookies_3_1') !!}</p>
                                <p>{!! __('web.cookies_3_2') !!}</p>

                                <h5>{!! __('web.cookies_3_3') !!}</h5>
                                <p>{!! __('web.cookies_3_3_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('web.cookies_3_3_2') !!}</p></li>
                                    <li><p>{!! __('web.cookies_3_3_3') !!}</p></li>
                                </ul>
                                <p>{!! __('web.cookies_3_3_4') !!}</p>
                                <p>{!! __('web.cookies_3_3_5') !!}</p>
                                <p>{!! __('web.cookies_3_3_6') !!}</p>

                                <h5>{!! __('web.cookies_3_4') !!}</h5>
                                <p>{!! __('web.cookies_3_4_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('web.cookies_3_4_2') !!}</p></li>
                                    <li><p>{!! __('web.cookies_3_4_3') !!}</p></li>
                                </ul>

                                <h5>{!! __('web.cookies_3_5') !!}</h5>
                                <p>{!! __('web.cookies_3_5_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('web.cookies_3_5_2') !!}</p></li>
                                </ul>

                                <h5>{!! __('web.cookies_3_6') !!}</h5>
                                <p>{!! __('web.cookies_3_6_1') !!}</p>
                                <ul>
                                    <li><p>{!! __('web.cookies_3_6_2') !!}</p></li>
                                </ul>
                                <p>{!! __('web.cookies_3_6_3') !!}</p>
                                <p>{!! __('web.cookies_3_6_4') !!}</p>
                                <ul>
                                    <li><p>{!! __('web.cookies_3_6_5') !!}</p></li>
                                    <li><p>{!! __('web.cookies_3_6_6') !!}</p></li>
                                    <li><p>{!! __('web.cookies_3_6_7') !!}</p></li>
                                    <li><p>{!! __('web.cookies_3_6_8') !!}</p></li>
                                    <li><p>{!! __('web.cookies_3_6_9') !!}</p></li>
                                </ul>
                                <p>{!! __('web.cookies_3_6_10') !!}</p>

                                <h3>{!! __('web.cookies_4') !!}</h3>
                                <p>{!! __('web.cookies_4_1') !!}</p>
                                <p>{!! __('web.cookies_4_2') !!}</p>
                                <p>{!! __('web.cookies_4_3') !!}</p>
                                <p>{!! __('web.cookies_4_4') !!}</p>
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

