@extends('layouts.app')
<script>
function blinker() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blinker, 1000);
</script>
    <style>
   .col-md-3, .col-md-6{
    	
    	height:700px;
    }
    body{
        background-color: rgba(134,134,134, 0.4);
    }
    #login{
            background-color:white;
            margin-top:50px;
            padding-top:40px;
            height: 550px;
            box-shadow: 10px 10px 5px #888888;
    }
    #welcome{
       margin-bottom: 20px;
    }
    span{
        font-family: 'ChunkFiveRegular';
        font-size: 38px;
        color: #f03761;
        text-shadow: 2px 2px rgba(134,134,134, 0.4);

    }
input, textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
textarea{
    height: 200px;
}
label{
    color: #FCB53B;
}
button {
    background-color: #f03761;; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
#submitMsg {
    background-color:  #f03761; 
    color:white;
   width: 100%;
   margin-top: 20px;
   margin-bottom: 20px;
   height:50px;
}
#link{

    text-align: center;
    color: #FCB53B;
}
    
    </style>
      <div class="container-fluid">
 	 	        <div class="row">
   		 			<div class="col-md-3">
				    </div> 
                    <div class="col-md-6">
                         <div class="row" id="login">
                           <div class="col-md-3" >
                           </div>
                              <div class="col-md-6" id="login-form">
                    <form class="form" style="height: 100%" action="{{URL::to('login')}}">
                        <fieldset class="form">
                                   <div class="container-fluid text-center" id="welcome">
                                    <span>
                                SignUp! it's free
                            </span>
                     </div>
						<div class="form-group">
  							<label>Full Name</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full Name" required="">
						</div>
						<div class="form-group">
	  						<label>User Name</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="User Name" required="">
						</div>

						<div class="form-group">
		  					<label>Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
						</div>
						<div class="form-group">
						    <label>Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            <input type="submit" value="Signup" class="btn btn-primary"style="margin-top: 1.5%;background-color: rgba(110,220,100,155)"></input>
                            <div class="container-fluid text-center">
                                    <a href="{{URL::to('login')}}" id="link" class="blink">
                                Already a member? Login here.
                            </a>
                     </div>
                        </fieldset>
                        </form>
                    </div> 
                            <div class="col-md-3"> </div>
                         </div>
                    </div> 
                    <div class="col-md-3"> </div> 
                    </div>
	 </div>