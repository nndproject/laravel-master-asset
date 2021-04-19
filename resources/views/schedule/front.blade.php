<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('fassets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" href="{{asset('fassets/img/favicon.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <!-- Twitter -->
    <meta name="twitter:site" content="@fernand0ferry">
    <meta name="twitter:creator" content="@nndteamdev">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ferry Fernando">
    <meta name="twitter:description" content="Schedule Meeting by PT Enygma Solusi Negeri">
    <meta name="twitter:image" content="{{ asset('favicon/favicon.ico') }}">
    <!-- Facebook -->
    <meta property="og:url" content="https://www.instagram.com/fernandoferry/">
    <meta property="og:title" content="Ferry Fernando">
    <meta property="og:description" content="Schedule Meeting by PT Enygma Solusi Negeri">
    <meta property="og:image" content="{{ asset('favicon/favicon.ico') }}">
    <meta property="og:image:secure_url" content="{{ asset('favicon/favicon.ico') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> 

	<title>PT Enygma Solusi Negeri | Set Meeting Schedule</title>
    
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="description" content="Schedule Meeting by PT Enygma Solusi Negeri">
    <meta name="author" content="Ferry Fernando">
    <meta name="keywords" content="Schedule Meeting"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico') }}">
    <link rel="icon" href="{{ asset('favicon/favicon.ico') }}" type="image/x-icon">

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <link href="{{asset('fassets/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('fassets/css/gsdk-bootstrap-wizard.css')}}" rel="stylesheet" />

	<link href="{{asset('fassets/css/custom.css')}}" rel="stylesheet" />
    <script type="text/javascript">
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
      </script>
    <style>


    </style>
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('{{asset('fassets/img/bg-home.jpg')}}')">
    <!--   Creative Tim Branding   -->
    <a href="{{url('/')}}">
         <div class="logo-container">
            <div class="brand">
               <b>MEETING</b>SCHEDULE
            </div>
        </div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="red" id="wizard">
                    <form action="{{route('front.post-schedule')}}" method="POST">
                        @csrf
                <!--        You can switch ' data-color="azzure" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>ATUR</b> PERTEMUAN ANDA <br>
                        	   <small>Masukan data dengan benar</small>
                        	</h3>
                    	</div>
						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#cat-meeting" data-toggle="tab">Jenis Instansi</a></li> 
	                            <li><a href="#type-meeting" data-toggle="tab">Jenis Pertemuan</a></li> 
	                            <li><a href="#details" data-toggle="tab">Details</a></li>
	                            <li><a href="#description" data-toggle="tab">Description</a></li>
	                        </ul>
						</div>
                        <div class="tab-content">
                            <div class="tab-pane" id="cat-meeting">
                                <h4 class="info-text">Jenis Instansi? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-3 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio wiz2" rel="tooltip" title="Dari Instansi Kementerian">
                                                <input type="radio" name="typeInstansi" value="KEMENTERIAN" required>
                                                <div class="icon icon-cate">
                                                    <h1>K</h1>
                                                </div>
                                                <h6>KEMENTERIAN</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="choice" data-toggle="wizard-radio wiz2" rel="tooltip" title="Dari Instansi Pemerintahan Daerah">
                                                <input type="radio" name="typeInstansi" value="PEMERINTAH DAERAH" required>
                                                <div class="icon icon-cate">
                                                    <h1>P</h1>
                                                </div>
                                                <h6>PEMERINTAH DAERAH</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="choice" data-toggle="wizard-radio wiz2" rel="tooltip" title="Dari Instansi Universitas">
                                                <input type="radio" name="typeInstansi" value="UNIVERSITAS" required>
                                                <div class="icon icon-cate">
                                                    <h1>U</h1>
                                                </div>
                                                <h6>UNIVERSITAS</h6>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="type-meeting">
                                <h4 class="info-text">Jenis Meeting yang diinginkan? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Pertemuan dilakukan secara online menggunakan video conference">
                                                <input type="radio" name="category" value="online" required>
                                                <div class="icon">
                                                    <i class="fa fa-desktop"></i>
                                                </div>
                                                <h6>WEBINAR</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Pertemuan dilakukan secara tatap muka/secara langsung">
                                                <input type="radio" name="category" value="offline" required>
                                                <div class="icon">
                                                    <i class="fa fa-building"></i>
                                                </div>
                                                <h6>PERTEMUAN LANGSUNG</h6>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="details">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Data Pertemuan Lebih Lanjut</h4>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Nama Instansi/Kementrian/Universitas</label>
                                        <input type="text" name="instansi" class="form-control" placeholder="ex: DINAS PENDIDIKAN Kota Malang" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-5 ">
                                      <div class="form-group">
                                        <label>Nama Kontak</label>
                                        <input type="text" name="cp" class="form-control" placeholder="Nama Penanggung jawab" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>Nomor Telepon</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Masukan Nomor Telpon yang bisa dihubungi" required>
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Perkiraan Anggota Rapat</label>
                                        <input type="number" min="1" name="audient" class="form-control" placeholder="Masukan Nomor Telpon yang bisa dihubungi">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div id="set_location"></div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                        <div class="form-group">
                                            <label>Tanggal Pertemuan yang diharapkan</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="date" name="date" class="form-control" required>
                                            </div>
                                        </div>  
                                    
                                  </div>
                                  <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Waktu Pertemuan yang diharapkan</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" name="time" class="form-control" placeholder="HH:MM">
                                        </div>
                                    </div>  
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Lokasi Pertemuan</h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Alamat Lokasi</label>
                                            <textarea class="form-control" name="description" rows="9" placeholder="Masukan alamat lengkap lokasi pertemuan yang anda inginkan. Lewati jika memilih Kantor kami"></textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label>Example</label>
                                            <p class="description">"Ruang Meeting 424 Dinas Pendidikan Kota Malang<br>
                                            Jl. Veteran No.19, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145"
                                            </p>
                                          </div>
                                    </div>
                                    <div class="col-sm-11 col-sm-offset-1">
                                        <div class="form-group">
                                        <input class="" type="checkbox" name="sk" required>
                                        <label class="form-check-label" for="remember">Dengan ini saya menyatakan telah mengisi data dengan sebenar-benarnya</label>
                                        </div>
                                        <i class="text-danger">**Selanjutkan tim kami akan menghubungi anda melalui nomor telpon yang telah dimasukkan pada form ini guna mengkonfimasi dan menindaklanjuti rencana pertemuan.</i>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd btn-sm' name='next' value='Next' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Finish' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com"><b>arion</b>indonesia | supported by #nndproject</a>
        </div>
    </div>


</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('fassets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('fassets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('fassets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('fassets/js/gsdk-bootstrap-wizard.js')}}"></script>

	<script src="{{asset('fassets/js/jquery.validate.min.js')}}"></script>
</html>
