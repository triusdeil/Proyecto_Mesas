<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Mesa de Partes</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="public/img/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="public/img/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="public/img/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="public/css/codebase.min.css">
    </head>
    <body>

        <div id="page-container" class="main-content-boxed">
            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('public/img/photos/photo34@2x.jpg');">
                    <div class="row mx-0 bg-black-op">
                        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                           
                        </div>
                        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                            <div class="content content-full">
                                <!-- Header -->
                                <div class="px-30 py-10">
                                    <a class="link-effect font-w700" href="index.html">
                                        <i class="si si-fire"></i>
                                        <span class="font-size-xl text-primary-dark">Mesa de </span><span class="font-size-xl">Partes</span>
                                    </a>
                                    
                                    <h2 class="h5 font-w400 text-muted mb-0">Inicio de Sesion</h2>
                                </div>
                             
                                <form class="js-validation-signin px-30" action="be_pages_auth_all.html" method="post">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="text" class="form-control" id="login-username" name="login-username">
                                                <label for="login-username">Correo Electronico</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="login-password" name="login-password">
                                                <label for="login-password">Contraseña</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Recuerdame</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                            <i class="si si-login mr-10"></i> Acceder
                                        </button>
                                        <div class="mt-30">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="Signup">
                                                <i class="fa fa-plus mr-5"></i> Crear Cuenta
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="RecoverPassword">
                                                <i class="fa fa-warning mr-5"></i> Olvide mi Contraseña
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="public/js/core/jquery.min.js"></script>
        <script src="public/js/core/popper.min.js"></script>
        <script src="public/js/core/bootstrap.min.js"></script>
        <script src="public/js/core/jquery.slimscroll.min.js"></script>
        <script src="public/js/core/jquery.scrollLock.min.js"></script>
        <script src="public/js/core/jquery.appear.min.js"></script>
        <script src="public/js/core/jquery.countTo.min.js"></script>
        <script src="public/js/core/js.cookie.min.js"></script>
        <script src="public/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="public/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="public/js/pages/op_auth_signin.js"></script>
    </body>
</html>