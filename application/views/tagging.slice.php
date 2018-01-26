@extends('master.layout')
@section('title','tagging')
@section('body')
    <!-- Topbar -->
    <header class="topbar topbar-expand-lg topbar-secondary topbar-inverse">
        <div class="container">
            <div class="topbar-left">
                <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
                <div class="topbar-brand">
                    <a href="{{url('/home')}}"><img src="{{url('assets/img/logo_tagging.png')}}" alt=""></a>
                </div>
                <div class="topbar-divider d-none d-md-block"></div>
                <nav class="topbar-navigation">
                    <ul class="menu">
                        <li class="menu-item">
                            <a class="menu-link" href="{{url('/home')}}">
                                <span class="title">Home</span>
                            </a>
                        </li>
                        <li class="menu-item active">
                            <a class="menu-link" href="{{url('/tagging')}}">
                                <span class="title">Tagging</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="topbar-right">
                <ul class="topbar-btns">
                    <li class="dropdown">
                        <span class="topbar-btn" data-toggle="dropdown"><img class="avatar" src="{{url('assets/img/avatar/1.jpg')}}" alt="..."></span>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-power-off"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- END Topbar -->

    <!-- Main container -->
    <main>

        <header class="header header-inverse">
            <div class="container">
                <div class="header-info">
                    <div class="left">
                        <br>
                        <h2 class="header-title"><strong>Text Tagging</strong> <small class="subtitle">Pada halaman ini anda akan melakukan tagging terhadap setiap tweet yang ada. Anda akan melakukan 2 tipe tagging yaitu sentimen terhadap tweet dan sentimen terhadap topik. Selain itu anda akan menandai tweet yang termasuk tipe sarkastik</small></h2>
                    </div>
                </div>
            </div>
        </header>
        <!--/.header -->

        <div class="container">
          <div class="row gap-y gap-4">

            <div class="col-md-4 col-lg-3">
              <h4><strong>Panduan</strong></h4>
              <hr>
              <p>Dengan <strong>twit</strong> dan <strong>topik</strong> yang ada. identifikasi apakah twit tersebut adalah sangat positif, positif, netral, negatif, atau sangat negatif pada umumnya.</p>
              <p>Lakukan juga identifikasi sentimen terhadap topik tersebut apakah sangat positif, positif, netral, negatif, atau sangat negatif juga. </p>
              <p>Jika twit sarkastik, centang "sarkastik".</p>
            </div>


            <div class="col-md-8 col-lg-9">

                <!-- Card Untuk Twit -->
                <div class="card b-1 hover-shadow-2 mb-20">
                    <div class="media card-body">
                        <div class="media-body">
                            <div class="mb-2">
                                <strong>"Malam min, mohon info untuk daerah Baratajaya, Surabaya mati lampu sejak pukul 18.20, kira-kira ada masalah apa dan nyala lagi jam berapa ya? Terima kasih @pln_123"</strong>
                            </div>
                            <br>
                            Secara keseluruhan twit adalah : 
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="2"> Sangat Positif
                                </label>
                            </div>

                            <br>
                            Sentimen terhadap topik :
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="2"> Sangat Positif
                                </label>
                            </div>  
                        </div>
                    </div>

                    <footer class="card-footer flexbox align-items-center">
                        <div>
                            <strong>Topik : Politik</strong>
                        </div>
                        <div>
                            <label class="custom-control custom-control-success custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Twit ini Sarkastik</span>
                            </label>
                        </div>
                        
                    </footer>
                </div>

                <div class="card b-1 hover-shadow-2 mb-20">
                    <div class="media card-body">
                        <div class="media-body">
                            <div class="mb-2">
                                <strong>"Malam min, mohon info untuk daerah Baratajaya, Surabaya mati lampu sejak pukul 18.20, kira-kira ada masalah apa dan nyala lagi jam berapa ya? Terima kasih @pln_123"</strong>
                            </div>
                            <br>
                            Secara keseluruhan twit adalah : 
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="" value="2"> Sangat Positif
                                </label>
                            </div>

                            <br>
                            Sentimen terhadap topik :
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="" value="2"> Sangat Positif
                                </label>
                            </div>  
                        </div>
                    </div>

                    <footer class="card-footer flexbox align-items-center">
                        <div>
                            <strong>Topik : Politik</strong>
                        </div>
                        <div>
                            <label class="custom-control custom-control-success custom-checkbox">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Twit ini Sarkastik</span>
                            </label>
                        </div>
                        
                    </footer>
                </div>

            </div>

          </div>
        </div>

        <!-- Footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-center text-sm-left">Text Tagging Application</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

    </main>
@endsection