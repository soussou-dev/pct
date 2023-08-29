<?php 
include 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ALLAKRO</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <!-- <link rel="shortcut icon" href="../../assets/images/favicon.ico" /> -->
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <!-- <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="../../assets/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div> -->
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <!-- <div class="nav-profile-image">
                  <img src="../../assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span> -->
                  <!--change to offline or busy as needed-->
                <!-- </div> -->
                <!-- <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">David Grey. H</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i> -->
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="../../index.php">
                <span class="menu-title">Tableau de bord</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#actualite" aria-expanded="false" aria-controls="actualite">
                  <span class="menu-title">Actualités</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="actualite">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/actualites/AjoutActualite.php">Ajouter une actualité</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/actualites/ListeActualite.php">Voir la liste des actualités</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#habitants" aria-expanded="false" aria-controls="habitants">
                  <span class="menu-title">Habitants</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="habitants">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/habitants/AjoutHabitant.php">Ajouter un habitant</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/habitants/ListeHabitant.php">Voir la liste des habitants</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#institution" aria-expanded="false" aria-controls="institution">
                <span class="menu-title">Institutions</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="institution">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item"> <a class="nav-link" href="../../pages/institutions/AjoutInstitution.php">Ajouter une institution</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/institutions/ListeInstitution.php">Voir la liste des institutions</a></li>
                </ul>
              </div>
            </li>
              <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#sante" aria-expanded="false" aria-controls="sante">
                <span class="menu-title">Santés</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="sante">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/santes/AjoutCentre.php">Centre de santé</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/santes/AjoutMaladie.php">Maladies</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/santes/AjoutPharmacie.php">Pharmacies</a></li>
                </ul>
              </div>
            </li>
              <!-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#services" aria-expanded="false" aria-controls="services">
                  <span class="menu-title">Services</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="services">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/services/AjoutService.php">Ajouter un service</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/services/ListeService.php">Voir la liste des services</a></li>
                  </ul>
                </div>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#projets" aria-expanded="false" aria-controls="projets">
                  <span class="menu-title">Projets</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="projets">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"href="../../pages/projets/AjoutProjet.php">Ajouter un projet</a></li>
                    <li class="nav-item"> <a class="nav-link" href="../../pages/projets/ListeProjet.php">Voir la liste des projets</a></li>
                  </ul>
                </div>
              </li>
              

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Habitants </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Habitants</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ajouter un habitant</li>
                </ol>
              </nav>
            </div>
            <form action="traitementhabitant.php" method="post" enctype="multipart/form-data" class="forms-sample">
           
                <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Commune</label>
                        <div class="col-sm-9">
                          <input type="text" name="commune" class="form-control" id="exampleInputMobile" placeholder="Entrer votre commune ">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Rue</label>
                        <div class="col-sm-9">
                          <input type="text" name="rue" class="form-control" id="exampleInputMobile" placeholder="Entrer votre rue">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Quartier</label>
                        <div class="col-sm-9">
                          <input type="text" name="quartier" class="form-control" id="exampleInputMobile" placeholder="Entrer votre quartier">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                        <div class="col-sm-9">
                          <input type="text" name="nom" class="form-control" id="exampleInputUsername2" placeholder="Entrez votre nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Prénom</label>
                        <div class="col-sm-9">
                          <input type="text" name="prenom" class="form-control" id="exampleInputEmail2" placeholder="Entrez votre prénom">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Date de naissance</label>
                        <div class="col-sm-9">
                          <input type="date" name="datedenaissance" class="form-control" id="exampleInputEmail2" placeholder="Entrez votre date de naissance">
                        </div>
                      </div>
                      <div class="form-group row">
                
                    <label class="col-sm-3 col-form-label" for="inlineFormCustomSelect">Genre</label>
                    <div class="col-sm-9">
                    <select class="form-select" id="inlineFormCustomSelect" name="genre">
                        <option selected>choisir</option>
                        <option value="homme">homme</option>
                        <option value="femme">femme</option>
                        <option value="autre">autre</option>
                    </select>
                </div>
            </div>
                      <!-- <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Genre</label>
                        <div class="col-sm-9">
                        <input type="radio" id="homme" name="genre" value="homme">
                            <label for="homme">homme</label><br>
                            <input type="radio" id="femme" name="genre" value="femme">
                            <label for="femme">femme</label><br>
                           
                        </div>
                      </div> -->

                      <div class="form-group row">
                        <label for="exampleInputEmail2"  class="col-sm-3 col-form-label">Profession</label>
                        <div class="col-sm-9">
                          <input type="text" name="profession" class="form-control" id="exampleInputEmail2" placeholder="Entrez votre profession">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2"  class="col-sm-3 col-form-label">savoir faire</label>
                        <div class="col-sm-9">
                          <input type="text" name="savoirfaire" class="form-control" id="exampleInputEmail2" placeholder="Entrez votre savoir faire">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile"  class="col-sm-3 col-form-label">Contact</label>
                        <div class="col-sm-9">
                          <input type="text" name="contact" class="form-control" id="exampleInputMobile" placeholder="Entrer votre numéro de téléphone">
                        </div>
                      </div>
                      
                       <!-- <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Decription de votre quartier</label>
                        <div class="col-sm-9">
                          <input type="text" name="decription"  class="form-control" id="exampleInputMobile" placeholder="Entrer votre quartier">
                        </div>
                      </div>  -->
                      
                      
                      
                     
                
                      <button type="submit" name="save_habitant" class="btn btn-gradient-primary me-2">Enregistrer</button>
                      <button class="btn btn-light">Annuler</button>
                    </form>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>