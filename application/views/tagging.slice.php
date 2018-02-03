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
                            <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
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
                        <h2 class="header-title"><strong>Text Tagging</strong> <small class="subtitle">Pada halaman ini anda akan melakukan tagging terhadap setiap tweet yang ada. Anda akan melakukan 2 tipe tagging yaitu sentimen terhadap tweet dan sentimen terhadap topik. Selain itu anda dapat menandai tweet yang termasuk tipe sarkastik jika menurut anda tweet tersebut termasuk sarkastik</small></h2>
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
              <p>Dengan <strong>tweet</strong> dan <strong>topik</strong> yang ada. identifikasi apakah tweet tersebut adalah sangat positif, positif, netral, negatif, atau sangat negatif pada umumnya.</p>
              <p>Lakukan juga identifikasi sentimen terhadap topik tersebut apakah sangat positif, positif, netral, negatif, atau sangat negatif juga. </p>
              <p>Jika tweet sarkastik, centang "sarkastik".</p>
            </div>


            <div class="col-md-8 col-lg-9">

                <!-- Card Untuk tweet -->
                @foreach ($tweet as $tweet)

                <input type="text" name="id_tweet" value="{{ $tweet->id_tweet }}" disabled>

                <div class="card b-1 hover-shadow-2 mb-20">
                    <div class="media card-body">
                        <div class="media-body">
                            <div class="mb-2">
                                <strong>"{{ $tweet->text }}"</strong>
                            </div>
                            <br>
                            Secara keseluruhan tweet adalah : 
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sn" value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sn" value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sn" value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sn" value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sn" value="2"> Sangat Positif
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
                            <strong>Topik : {{ $tweet->topic }}</strong>
                        </div>
                        <div>
                            <label class="custom-control custom-control-success custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="sarkastik">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">tweet ini Sarkastik</span>
                            </label>
                        </div>
                        
                    </footer>
                </div>

                @endforeach

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


    
<script>

    function sendTagging() 
    {
        $.ajax({
            type:"POST",
            url: '{{url("/")}}/tagging/taggingUpdate',
            data: {
                'id_tweet' : id_tweet,
                'label_tweet' : label_tweet,
                'label_tweet' : label_topic,
                'sarkastik' : sarkastik

            },
            beforeSend : function () 
            {

            },
            success : function (data) 
            {

            },
            error : function () 
            {
                alert('error');

            }
        });
    }

</script>



@endsection