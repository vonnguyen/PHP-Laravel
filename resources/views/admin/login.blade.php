 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Document</title>
 </head>

 <body>

     <section class="vh-100" style="background-color: #508bfc;">
         <div class="container py-5 h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
                 <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                     <div class="card shadow-2-strong" style="border-radius: 1rem;">
                         <div class="card-body p-5 text-center">

                             <h3 class="mb-5">Sign in</h3>

                             {{-- form đăng nhập Admin --}}
                             <div>

                                 @if (session('msg'))
                                     <div class="alert alert-danger">{{ session('msg') }}</div>
                                 @endif
                                 <form method="POST" action="{{ route('postloginadmin') }}">
                                     @csrf
                                     <div class="form-outline mb-2">
                                         <input type="email" name="email" class="form-control form-control-lg"
                                             placeholder="Email" />
                                         <label class="form-label" for="typeEmailX-2"></label>
                                         <input type="password" name="password" class="form-control form-control-lg"
                                             placeholder="Password" />
                                         <label class="form-label" for="typePasswordX-2"></label>
                                     </div>
                                     <div class="form-check d-flex justify-content-start gap-2 mb-3">
                                         <input class="form-check-input" type="checkbox" value=""
                                             id="form1Example3" />
                                         <label class="form-check-label" for="form1Example3"> Remember password </label>
                                     </div>

                                     <button class="btn btn-primary btn-lg btn-block w-100"
                                         type="submit">Login</button>
                                 </form>
                             </div>                    

                             <hr class="my-4">

                             <button class="btn btn-lg btn-block btn-primary w-100 mb-3"
                                 style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i>
                                 Sign in with google</button>
                             <button class="btn btn-lg btn-block btn-primary w-100 mb-2"
                                 style="background-color: #3b5998;" type="submit"><i
                                     class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>

                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </section>

     <script src="https://code.jquery.com/jquery-3.6.1.min.js"
         integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
     {{-- <script>
         $('.message a').click(function() {
             $('form').animate({
                 height: "toggle",
                 opacity: "toggle"
             }, "slow");
         });
     </script> --}}
 </body>

 </html>
