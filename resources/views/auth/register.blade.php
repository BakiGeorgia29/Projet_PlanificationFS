<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <meta name= "description" content="">
    <meta name="author" content="">
    <title>Enregistrer</title>
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset ('admin_assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col col-lg-5 flex flex-col-reverse justify-start text-darkflex">
                        <img src="{{asset('admin_assets/img/logo.png')}}" alt="" class="img-fluid" style="height:auto; margin:20% 0 20% 0; max-width:100%;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Creer un Compte </h1>
                            </div>
                            <form action= "{{ route('register.save')}}" method="POST" class="user">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="nom" type="text" class="form-control form-control-user @error('password')is-invalid @enderror"
                                            id="exampleInputnom" placeholder="Nom">
                                            @error('nom')
                                            <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6"> 
                                        <input name="matricule" type="text" class="form-control form-control-user @error('password')is-invalid @enderror"
                                                id="exampleInputmatricule" placeholder="Matricule">
                                            @error('matricule')
                                            <span class="invalid-feedback">{{$message}}</span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">                                
                                    <input name="email" type="email" class="form-control form-control-user @error('email')is-invalid @enderror" id="exampleInputEmail"
                                    placeholder="Adresse Mail">
                                     @error('email')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input name="password" type="password" class="form-control form-control-user @error('password')is-invalid @enderror"
                                            id="exampleInputPassword" placeholder="Mot de Passe">
                                        @error('password')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input name="password_confirmation"  type="password" class="form-control form-control-user @error('password_confirmation')is-invalid @enderror"
                                            id="exampleRepeatPassword" placeholder="Réecrire mot de passe">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Enregistrez-vous </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Avez-vous un autre compte ? Connectez-vous </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>