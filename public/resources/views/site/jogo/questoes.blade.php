<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BOOKITEL GAMES</title>
   <!-- FontAwesome-cdn include -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- Google fonts include -->
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800;900&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
   <!-- Bootstrap-css include -->
   <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
   <!-- Animate-css include -->
   <link rel="stylesheet" href="./asset/css/animate.min.css">
   <!-- Main-StyleSheet include -->
   <link rel="stylesheet" href="./asset/css/style.css">
</head>
<body>
   <div class="wrapper overflow-hidden">
      <!-- Top content -->
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-6">
               <div class="logo_area pt-5 ps-5">
                  <a href="index.html" style="font-size: 2.5rem; color: orange">
                    BOOKGAMES
                  </a>
               </div>
            </div>
            <div class="col-sm-6 d-none d-sm-block">
               <div class="count_box d-flex float-end pt-5 pe-5">
                  <div class="count_clock countdown_timer d-flex align-items-center pe-5 me-3" data-countdown="2023/10/24">
                  </div>
                  <!-- <div id="countdown"></div> -->
                  <!-- Step Progress bar -->
                 <!-- <div class="count_progress clip-1">
                     <span class="progress-left">
                        <span class="progress_bar"></span>
                     </span>
                     <span class="progress-right">
                        <span class="progress_bar"></span>
                     </span>
                     <div class="progress-value">
                        <div id="value">11%</div>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <form class="multisteps_form bg-white position-relative overflow-hidden" id="wizard" method="POST" action="{{route('submitjogo.store',$question->id)}}">
        
            @csrf
            

       
			<div class="multisteps_form_panel step">
				<div class="question_title text-center text-uppercase">
				   <h1 class="animate__animated animate__fadeInRight animate_25ms"> {{Session::get("nextq")}} {{$question->question}}</h1>
				</div>
				<div class="question_number text-center text-uppercase text-white">
				   <span class="rounded-pill">Pergunta  {{Session::get("nextq")}} de {{ $dados}}</span>
				</div>
				<div class="row pt-5 mt-4 form_items">
				   <div class="col-6">
					  <ul class="list-unstyled p-0">
						 <li class="active step_1 animate__animated animate__fadeInRight animate_50ms">
							<input checked="true" id="opt_1" type="radio" name="answer" value="a">
							<label for="opt_1"> {{$question->a}}</label>
 
						 </li>
					  </ul>
				   </div>
				   <div class="col-6">
					  <ul class="list-unstyled p-0">
						 <li class="step_1 animate__animated animate__fadeInRight animate_100ms">
							<input id="opt_2" type="radio" name="answer" value="b">
							<label for="opt_2"> {{$question->b}}</label>
						 </li>
					  </ul>
				   </div>
				   <div class="col-6">
					  <ul class="list-unstyled p-0">
						 <li class="step_1 animate__animated animate__fadeInRight animate_150ms">
							<input id="opt_3" type="radio" name="answer" value="c">
							<label for="opt_3">{{$question->c}}</label>
						 </li>
					  </ul>
				   </div>
				   <div class="col-6">
					  <ul class="list-unstyled p-0">
						 <li class="step_1 animate__animated animate__fadeInRight animate_200ms">
							<input id="opt_4" type="radio" name="answer" value="d">
							<label for="opt_4">{{$question->d}}</label>
						 </li>
					  </ul>
				   </div>
				   <input name="dbans" value="{{$question->answer}}" style="visibility: hidden;">
			
				</div>
			 </div>	
		
         
           
            <!---------- Form Button ---------->
            <div class="form_btn">
               <button type="button" class="prev_btn position-absolute text-uppercase border-0" id="prevBtn" onclick="nextPrev(-1)"> <span><i class="fas fa-arrow-left"></i></span> Anterior</button>
               <button type="submit" class="next_btn rounded-pill position-absolute text-uppercase text-white" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
            </div>
         </form>
      </div>
   </div>
   <!-- jQuery-js include -->
   <script src="./asset/js/jquery-3.6.0.min.js"></script>
   <!-- Bootstrap-js include -->
   <script src="./asset/js/bootstrap.min.js"></script>
   <!-- jQuery-counter-up-js include -->
   <script src="./asset/js/countdown.js"></script>
   <!-- jQuery-validate-js include -->
   <script src="./asset/js/jquery.validate.min.js"></script>
   <!-- Custom-js include -->
   <script src="./asset/js/script.js"></script>
</body>
</html>