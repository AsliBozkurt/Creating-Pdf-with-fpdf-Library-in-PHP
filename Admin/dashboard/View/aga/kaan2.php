<?php 
   include './apply_internship.php';
  $starting_date = '';
  $ending_date = '';

  if(isset($_GET['starting-date'])){
    $starting_date = $_GET['starting-date'];
  }
  if(isset($_GET['ending-date'])){
    $ending_date = $_GET['ending-date'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Apply Internship 1</title>
  <!-- Favicon -->
  <link href="../../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../../assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="../../assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../../assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <style>
    .internship-form{
        background-color: #EEEEEE;
        padding: 3%;
    }
    .form-logo img{
        text-align: center;
        width: 40%;
    }
    .form-header h2,h3{
        text-align: center;
        font-weight: 800;
        line-height: 0.8;
    }
    .card input{
        border: none;
        overflow: hidden;
        outline: none;
        background-color: #D5DEF5;
        border-radius: 4px;
        text-align: center;
        padding: 10px 5px;
        transition: 0.7s ease-in-out;
        box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.2);
    }
    .card-header{
        box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.2);
    }
    .card input:hover{
        background-color: #D3D5FD;
    }
    .student-info{
        box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
    }
    .internship-info{
        margin-top: 10px;
        box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.5);
        border-radius: 6px;
    }
  </style>
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="../index.php">
        <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="../../assets/img/theme/team-1-800x800.jpg">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="../profile.php" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="../profile.php" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="../profile.php" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="../profile.php" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../index.php">
                <img src="../../assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item  active ">
            <a class="nav-link  active " href="../../index.php">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../profile.php">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../apply_internship.php">
              <i class="ni ni-key-25 text-info"></i> Apply for Internship
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../apply_ime.php">
              <i class="ni ni-circle-08 text-pink"></i> Apply for Workplace Education
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../../index.php">User Profile</a>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="../../assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">Asl?? Bozkurt</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="../profile.php" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="../profile.php" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../profile.php" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- ------------------------------------------------------------------------------------------------------------- -->
    <div class="header pb-4 pt-2 pt-lg-8 d-flex align-items-center">
      <div class="container internship-form">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 form-logo">
                <img src="Kou-logo.png" alt="kocaeli University Logo">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 form-header">
                <h2>T.C</h2>
                <h2>Kocaeli ??niversitesi</h2>
                <h2>Teknoloji Fak??ltesi</h2>
                <h3><i>(Staj ba??vuru ve Kabul formu)</i></h3>
            </div>
        </div>
        <h4 style="float: right;" >Tarih: <?php echo date("Y-m-d");?></h4>
        <h4 style="text-align: center;" class="mt-5">??LG??L?? MAKAMA</h4>
        <div class="card">
            <div class="card-header">
            <!-- ------------------- starting of internship form ------------->
                <form method="post" action="conver_pdf.php">

                    <div class="header-content">
                        <div class="container">
                            <span>Teknoloji Fak??ltesi</span>
                            <input type="text" name="department_name" placeholder="B??l??m Ad??" value="Bili??im Sistemleri" required>
                            <span> M??hendisli??i B??l??m?? </span>
                            <input type="text" name="student_number" placeholder="????renci Numaras??" value="191307094" required>
                            <span> numaral?? ????rencisiyim.Kurumunuzda staj yapmam??n uygun g??r??lmesi halinde bu formun alttaki k??sm??n?? doldurularak fak??ltemiz ilgili b??l??m ba??kanl??????na g??nderilmesini sayg??lar??mla arz ederim.</span><br>
                            <span>????yeri uygulamas?? s??resi i??erisinde al??nan <u>rapor, istirahat vb.</u> belgelerin asl??n?? <u>al??nan g??n i??erisinde</u> b??l??m ba??kanl??????na bildirece??imi <strong>beyan ve taahh??t ederim</strong>.</span><br>
                            <br>
                        </div>
                    </div>
                    <div class="student-info">
                        <div class="container">
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td><strong>Ad Soyad</strong></td>
                                            <td colspan="3">
                                                <input class="form-control" name="student_fullName" type="text" placeholder="Ad ve Soyad" value="Nazir Sharifi" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>T.C Kimlik Numaras??</strong></td>
                                            <td>
                                                <input class="form-control" name="student_tc_kimlik" type="text" placeholder="T.C Kimlik Numaras??" value="99330312332" required>
                                            </td>
                                            <td><strong>Uyru??u</strong></td>
                                            <td>
                                                <input class="form-control" name="student_nationality" type="text" placeholder="Uyruk" value="Afganistan" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ev Tel/ GSM</strong></td>
                                            <td>
                                                <input class="form-control" name="student_phone_number" type="text" placeholder="Telefon Numaras??" value="nazir@gmail.com" required>
                                            </td>
                                            <td><strong>E-posta</strong></td>
                                            <td>
                                                <input class="form-control" name="student_email" type="email" placeholder="Mail Adresi" value="nazir@gmail.com" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Adres</strong></td>
                                            <td>
                                                <strong>??l: </strong>
                                                <input class="form-control" name="s_district_name" type="text" placeholder="??l Ad??" required>
                                            </td>
                                            <td>
                                                <strong>??l??e: </strong>
                                                <input class="form-control" name="s_city_name" type="text" placeholder="??l??e Ad??" required>
                                            </td>
                                            <td>
                                                <strong>Posta Kodu: </strong>
                                                <input class="form-control" name="s_post_code" type="text" placeholder="Posta Kodu" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="internship-info">
                        <div class="container">
                            <div class="card-body">
                                <h4 style="text-align:center ;">Staj Bilgileri</h4>
                                <h3 style="text-align:left ;">Staj 1</h3>
                                <div class="row mt-4">
                                    <div class="col-lg-3">
                                        <label for="">Ba??lama Tarihi</label>
                                        <input name="starting_date" class="form-control"  type="text" value="<?php echo $starting_date;?>" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="">Biti?? Tarihi</label>
                                        <input name="ending_date" class="form-control"  type="text" value="<?php echo $ending_date;?>" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <span>???? G??n??: </span>
                                        <input class="form-control" name="working_day" type="text" placeholder="???? G??n??" required>
                                    </div>
                                    <div class="col-lg-3">
                                         <div class="container">
                                            <input type="radio" name="saturday_work" value="yes"> Cumartesi ??al??????yor <br>
                                            <input type="radio" name="saturday_work" value="no"> Cumartesi ??al????m??yor
                                         </div>
              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="internship-info">
                        <div class="container">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span>Ailemden,  Kendimden veya  Anne-Baba ??zarinden Genel Sa??l??k Sigortas?? Kapsam??nda Sa??l??k Hizmeti Al??yorum</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span>
                                            <input type="radio" class="mr-1" name="saglik_hizmet" value="yes"> Evet
                                            <input type="radio" class="ml-4 mr-1" name="saglik_hizmet" value="no"> Hay??r
                                        </span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span>Genel Sa??l??k Sigortas?? (GSS) (Gelir Testi Yapt??rd??m Pirim ??d??yorum)</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span>
                                            <input  type="radio" class="mr-1" name="genel_saglik_sigorta" value="yes"> Evet
                                            <input type="radio" class="ml-4 mr-1" name="genel_saglik_sigorta" value="no"> Hay??r
                                        </span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span>25 Ya????n?? Doldurdum</span>
                                    </div>
                                    <div class="col-lg-6">
                                        <span>
                                            <input type="radio" class="mr-1" name="25_doldurdum" value="yes"> Evet
                                            <input  type="radio" class="ml-4 mr-1" name="25_doldurdum" value="no"> Hay??r
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align:right;" class="mt-3" name="date_now">Tarih: <?php echo date("Y-m-d");?></h4>
                    <h4 style="text-align:right;">Ad Soyad: <input name="student_fullName" type="text" required></h4>
                    <h4 style="text-align:right;">??mza: <input  type="text"></h4>
                    <br>
                    <div class="student-info">
                        <div class="container">
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                      <h3>Staj Yap??lacak Kurum Bilgileri</h3>
                                        <tr>
                                            <td><strong>Resmi Ad??</strong></td>
                                            <td colspan="3">
                                                <input class="form-control" name="company_name" type="text" placeholder="Kurumun Resmi Ad??"  required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Faaliyet Alan??</strong></td>
                                            <td colspan="3">
                                                <input class="form-control" name="company_workspace" type="text" placeholder="Kurumun Faaliyet Alan??" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Adres</strong></td>
                                            <td>
                                                <strong>??l: </strong>
                                                <input class="form-control" name="company_district_name" type="text"required>
                                            </td>
                                            <td>
                                                <strong>??l??e: </strong>
                                                <input class="form-control" name="company_city_name" type="text" required>
                                            </td>
                                            <td>
                                                <strong>Posta Kodu: </strong>
                                                <input class="form-control" name="company_post_code" type="text" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>??leti??im Bilgileri</strong></td>
                                            <td>
                                                <strong>Tel: </strong>
                                                <input class="form-control" name="company_phone_number" type="text" required>
                                            </td>
                                            <td>
                                                <strong>Fax: </strong>
                                                <input class="form-control" name="company_fax" type="text"  required>
                                            </td>
                                            <td>
                                                <strong>E-posta: </strong>
                                                <input class="form-control" name="company_email_address" type="text" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Staj Sorumlusunun Unvan??</strong></td>
                                            <td>
                                              <span><input type="radio" class="mr-2" name="unvan" value="muhendis"> M??hendis</span>
                                            </td>
                                            <td>
                                              <input type="radio" class="mr-2" name="unvan" value="teknin_ogretmen">Teknik ????retmen
                                            </td>
                                            <td>
                                              <input type="radio" class="mr-2" name="unvan" value="hekim">Hekim
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><strong>Kurum olarak 3308 say??l?? kanundaki devlet katk??s??ndan yararlanmak istiyor musunuz?***</strong></td>
                                            <td>
                                              <input type="radio" class="mr-2" name="3308_sayili_devlet_katkisi_yararlanmak" value="yes">Evet
                                            </td>
                                            <td>
                                              <input type="radio" class="mr-2" name="3308_sayili_devlet_katkisi_yararlanmak" value="no">Hay??r
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <h4 style="text-align:center;" class="mt-5">Yukar??da ad?? ge??en ????rencinin ilgili tarihlerde staj uygulamas??n?? kurumumuzda yapmas?? uygun g??r??lm????t??r.</h4>
                    <h4 style="text-align:right;">Firma Yetkilisinin Ad?? ve Soyad??: <input name="company_owner_fullName"  type="text" required></h4>
                    <h4 style="text-align:right;">Unvan??: <input name="company_owner_degree"  type="text" required></h4>
                    <h4 style="text-align:right;">??mza: <input  type="text"></h4>
                    <p><strong>*3308 say??l?? Meslek?? E??itim Kanunu ve 5510 say??l?? Sosyal Sigortalar ve Genel Sa??l??k Sigortas?? Kanununun 5 inci maddesinin (b) bendi gere??ince zorunlu staja tabi t??m ????rencilere "???? Kazas?? ve Meslek Hastal?????? Sigortas??" yap??lmas?? ve sigorta primlerinin ??niversite taraf??ndan ??denmesi gerekmektedir.  Staj s??resi boyunca ??niversitemiz taraf??ndan ????rencimizin SGK???ya kayd?? yapt??r??lacakt??r.</strong></p><br>
                    <br>
                    <p><strong>**Staja SGK sicil numaras?? al??nd??ktan sonra ba??layacakt??r. Farkl?? firmalarda yap??lacak stajlar i??in ayr?? form doldurulacakt??r. ????renci bu evraktan 2 n??sha d??zenleyip firmaca onayland??ktan sonra bir tanesini belirlenen staj d??neminden en az 1 ay ??nce ilgili b??l??m ba??kanl??????na teslim etmek zorundad??r.</strong></p><br><br>
                    <p><strong>*** Yan??t??n??z Evet ise Ek-1 formunu doldurunuz.</strong></p>
                    <div class="student-info onay">
                      <div class="container">
                        <div class="card-body">
                          <table style="border: 1px solid black;">
                            <tbody>
                              <tr>
                                <td style="border: 1px solid black;">
                                  <strong>T.C. Kocaeli ??niversitesi Teknoloji Fak??ltesi
                                B??l??m ???? Yeri ve Staj Komisyonu Onay??</strong>
                                </td>
                                <td style="border: 1px solid black;">
                                  <strong>
                                  Yukar??da ad?? ge??en ????rencinin ilgili tarihlerde 
                                  staj uygulamas??n?? ilgili kurumda yapmas??; 
                                  Uygundur <span class="mr-3 ml-3"></span> Uygun De??ildir

                                  </strong>
                                </td>
                                <td style="border: 1px solid black;">
                                  <strong>
                                    Onay
                                  </strong>
                                </td>
                              </tr>
                              <tr>
                                <td style="border: 1px solid black;" colspan="3" name="not">
                                  Not:
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <br>
                    <button class="btn btn-primary" type="submit" name="internship_1_apply_submit_form"><a href="" target="_blank"></a>Formu G??nder(Pdf olu??turulacak)</button>
                    <button class="btn btn-outline-cencel" type="button" name="cancel_btn">
                      <a href="http://localhost/stajtakibi/student/dashboard/examples/apply_internship.php">Cancel</a>
                    </button>
                </form>
            <!-- ----------------- ending o internship form --------------- -->
            </div>
        </div>
      </div>
    </div>
    <!-- -------------------------------------------------------------------------------------------------------------- -->
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2022 <a href="#" class="font-weight-bold ml-1">KO?? Bili??im</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="../../assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="../../assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>