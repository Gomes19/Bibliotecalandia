<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jogos BookItel</title>
   <!-- FontAwesome-cdn include -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Google fonts include -->
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;800&family=Russo+One&display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="./assetss/css/bootstrap.min.css">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="./assetss/css/animate.min.css">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="./assetss/css/style.css">
</head>
<body>
   <div class="wrapper position-relative overflow-hidden py-5">
      <!-- Top content -->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="logo_area mx-2">
                 <h1 class=" px-5 py-5 animate__animated animate__fadeInRight animate_25ms" style="color:rgb(114, 114, 221)">BOOKGAMES</h1>
               </div>
            </div>
            <div class="col-md-12 d-none d-md-block">
               <div class="count_box d-flex flex-row align-items-center pe-2 mt-2 float-end rounded-pill">
                 
                
                 
               </div>
            </div>
         </div>
      </div>
      <div class="container  ">
         <div class="row align-items-center">
            <div class="col-md-2">
             

            </div>
            <div class="col-md-8">

               
               <form class=" bg-white position-relative overflow-hidden" id="wizard" method="POST" action="../thankyou/index-1.html">
                  <!------------------------- Step-1 ----------------------------->
                  <div class="multisteps_form_panel step">
                     <div class="question_number ps-5 pt-3">
                       
                     </div>
                     <div class="question_title">
                        <h1 class="text-center px-5 py-5 animate__animated animate__fadeInRight animate_25ms"> {{Session::get("nextq")}}FIM DO JOGO</h1>
                     </div>

                     <div class="row form_items">
                        <div class="col-md-12">
                           <div class=" bg-white text-center position-relative active ate__animated animate__fadeInRight animate_50ms">
                              <label for="" class="d-block">
                                 <span class="">
                                    <!--<img src="assetss/images/item-img/item_1.png" alt="image-not-found">-------->
                                 </span>
                                 <a href=""><span class="form_items_text pt-2 d-block">
                                    <td></td>
                                 </span></a>
                                 <label for="">Acertados <small> {{Session::get('correctans')}} </small>  </label>
                                 <span class="">
                                    <span><input id="" type="" name="" value=""></span>
                                 </span>
                              </label>

                              <label for="" class="d-block">
                                <span class="">
                                   <!--<img src="assetss/images/item-img/item_1.png" alt="image-not-found">-------->
                                </span>
                                <a href=""><span class="form_items_text pt-2 d-block">
                                   <td></td>
                                </span></a>
                                <label for="">Errados <small> {{Session::get('wrongans')}} </small>  </label>
                                <span class="">
                                   <span><input id="" type="" name="" value=""></span>
                                </span>
                             </label>

                              
                           </div>
                        </div>
                     
                       
                     </div> 
                   
                    
                     <!-- Progress bar -->
                    
                  </div>
                  
                 
              
            </div>
         </div>
      </div>
      <!-- jQuery-js include -->
      <script src="./assetss/js/jquery-3.6.0.min.js"></script>
      <!-- Bootstrap-js include -->
      <script src="./assetss/js/bootstrap.min.js"></script>
      <!-- jQuery-validate-js include -->
      <script src="./assetss/js/jquery.validate.min.js"></script>
      <!-- jQuery-Countdown-js include -->
      <script src="./assetss/js/countdown.js"></script>
      <!-- Custom-js include -->
      <script src="./assetss/js/script.js"></script>
   </body>
   </html>