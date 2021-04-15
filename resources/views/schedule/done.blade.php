<!doctype html><html lang="en"><head><meta charset="utf-8" /><link rel="apple-touch-icon" sizes="76x76" href="{{asset('fassets/img/apple-icon.png')}}"><link rel="icon" type="image/png" href="{{asset('fassets/img/favicon.png')}}"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><meta name="twitter:site" content="@fernand0ferry"><meta name="twitter:creator" content="@nndteamdev"><meta name="twitter:card" content="summary_large_image"><meta name="twitter:title" content="Ferry Fernando"><meta name="twitter:description" content="Schedule Meeting by PT Enygma Solusi Negeri"><meta name="twitter:image" content="{{ asset('favicon/favicon.ico') }}"><meta property="og:url" content="https://www.instagram.com/fernandoferry/"><meta property="og:title" content="Ferry Fernando"><meta property="og:description" content="Schedule Meeting by PT Enygma Solusi Negeri"><meta property="og:image" content="{{ asset('favicon/favicon.ico') }}"><meta property="og:image:secure_url" content="{{ asset('favicon/favicon.ico') }}"><meta property="og:image:type" content="image/png"><meta property="og:image:width" content="1200"><meta property="og:image:height" content="600"><title>PT. Arion Indonesia | Set Meeting Schedule</title><meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' /><meta name="viewport" content="width=device-width" /><meta name="description" content="Schedule Meeting by PT Enygma Solusi Negeri"><meta name="author" content="Ferry Fernando"><meta name="keywords" content="Schedule Meeting"/><meta name="csrf-token" content="{{ csrf_token() }}"><link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}"><link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}"><link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}"><link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}"><link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}"><link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}"><link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}"><link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}"><link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}"><link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}"><link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}"><link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}"><link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}"><link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}"><link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon"><link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet"><link href="{{asset('fassets/css/bootstrap.min.css')}}" rel="stylesheet" /><link href="{{asset('fassets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" /><meta http-equiv="refresh" content="3;url=https://www.enygma.id/"><link href="{{asset('fassets/css/demo.css')}}" rel="stylesheet" /> <script type="text/javascript">window.Laravel={!!json_encode(['csrfToken'=>csrf_token(),])!!};</script> </head><body><div class="image-container set-full-height" style="background-image: url('{{asset('fassets/img/bg-home.jpg')}}')"> <a href="{{url('/')}}"><div class="logo-container"><div class="brand"> <b>MEETING</b>SCHEDULE</div></div> </a><div class="container"><div class="row"><div class="col-sm-10 col-sm-offset-1"><div class="wizard-container"><div class="card wizard-card" data-color="red" id="wizard"><form action="{{route('front.post-schedule')}}" method="POST"> @csrf<div class="wizard-header"><h3> <b>ATUR</b> PERTEMUAN ANDA <br></h3></div><div class="tab-content"><h4 class="info-text" style="margin-top:10%;">Data Pertemuan telah berhasil disimpan, selanjutnya kami akan menguhubungi anda untuk menindaklanjuti data ini.</h4></div></form></div></div></div></div></div><div class="footer"><div class="container"> Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com"><b>arion</b>indonesia | supported by #nndproject</a></div></div></div></body> <script src="{{asset('fassets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script> <script src="{{asset('fassets/js/bootstrap.min.js')}}" type="text/javascript"></script> <script src="{{asset('fassets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script> <script src="{{asset('fassets/js/gsdk-bootstrap-wizard.js')}}"></script> <script src="{{asset('fassets/js/jquery.validate.min.js')}}"></script> </html>