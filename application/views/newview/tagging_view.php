
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweet Tagging</title>

    <!-- Style -->
    <link href="<?php echo base_url('assets/css/core.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/app.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.min.css') ?>" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>">
    <link rel="icon" href="<?php echo base_url('assets/img/favicon.png') ?>">

</head>
<body>

    <!-- Topbar -->
    <header class="topbar topbar-expand-lg topbar-secondary topbar-inverse">
        <div class="container">
            <div class="topbar-left">
                <span class="topbar-btn topbar-menu-toggler"><i>&#9776;</i></span>
                <div class="topbar-brand">
                    <a href=""><img src="" alt=""></a>
                </div>
                <div class="topbar-divider d-none d-md-block"></div>
                <nav class="topbar-navigation">
                    <ul class="menu">
                        <!-- <li class="menu-item">
                            <a class="menu-link" href="">
                                <span class="title">Home</span>
                            </a>
                        </li> -->
                        
                        <li class="menu-item active">
                            <a class="menu-link" href="">
                                <span class="title">Tagging</span>
                            </a>
                        </li>
                    </ul>
                </nav>
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
          <div class="row  gap-4">

            <div class="col-md-4 col-lg-3">
              <h4><strong>Panduan</strong></h4>
              <hr>
              <p>Dengan <strong>tweet</strong> dan <strong>topik</strong> yang ada. identifikasi apakah tweet tersebut adalah sangat positif, positif, netral, negatif, atau sangat negatif pada umumnya.</p>
              <p>Lakukan juga identifikasi sentimen terhadap topik tersebut apakah sangat positif, positif, netral, negatif, atau sangat negatif juga. </p>
              <p>Jika tweet sarkastik, centang "sarkastik".</p>
              <hr>
              <h5>Anda masuk sebagai<br><br> <button class="btn btn-primary btn-sm"><?php echo $userx?></button>&nbsp&nbsp&nbsp<a class="btn btn-danger btn-sm" href="<?php echo base_url('home/logout')?>">Logout</a></h5>
              <br>
              
            </div>


            <div class="col-md-8 col-lg-9">

                <!-- Card Untuk tweet -->

                <form method="post" accept-charset="utf-8" action="<?php echo base_url('newhome/submit_tag2')?>">
                
                <?php for ($i=0; $i < count($tw); $i++) { ?>
                


                <div class="card b-1 hover-shadow-2 mb-20">
                    <div class="media card-body">
                        <div class="media-body">
                            <div class="mb-2">
                                <h3><b><?php echo $tw[$i]->text ?></b></h3>
                                <input type="text" name="id_tweet-<?php echo $i ?>" class="form-control input-sm" readonly value="<?php echo $tw[$i]->id_tweet ?>">
                            </div>
                            <br>
                            Secara keseluruhan tweet adalah : 
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" checked required name="sentimen1-<?php echo $i ?>"  value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen1-<?php echo $i ?>"  value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen1-<?php echo $i ?>"  value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen1-<?php echo $i ?>"  value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen1-<?php echo $i ?>"  value="2"> Sangat Positif
                                </label>
                            </div>

                            <br>
                            Sentimen terhadap topik :
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" checked required name="sentimen2-<?php echo $i ?>" id="" value="-2"> Sangat Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen2-<?php echo $i ?>" id="" value="-1"> Negatif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen2-<?php echo $i ?>" id="" value="0"> Netral
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen2-<?php echo $i ?>" id="" value="1"> Positif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" required name="sentimen2-<?php echo $i ?>" id="" value="2"> Sangat Positif
                                </label>
                            </div>  
                        </div>
                    </div>

                    <footer class="card-footer flexbox align-items-center">
                        <div>
                            <strong>Topik : <?php echo $tw[$i]->topic ?></strong>
                        </div>
                        <div>
                            <label class="custom-control custom-control-success custom-checkbox">
                                <input type="checkbox" class="custom-control-input" value="1" name="sarkastik-<?php echo $i ?>">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">tweet ini Sarkastik</span>
                            </label>
                        </div>
                        
                    </footer>
                </div>

                <?php } ?>

                
                <input type="hidden" name="pic" value="<?php echo $pic ?>">
                <input type="hidden" name="user" value="<?php echo $userx?>">
                <input type="hidden" name="size" value="<?php echo count($tw)?>">

                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-lg btn-block btn-primary"> SUBMIT </button>
                        </div>
                    </div>

                <br><br>
                <?php echo form_close() ?>


                

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


    <script src="<?php echo base_url('/assets/js/core.min.js') ?>" data-provide="sweetalert"></script>
    <script src="<?php echo base_url('/assets/js/app.min.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/script.min.js') ?>"></script>
</body>
</html>