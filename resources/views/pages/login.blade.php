@extends('Layouts.app')
<script>
function blinker() 
{
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blinker, 1000);
</script>
<style>
    body{
        background-color: rgba(134,134,134, 0.4);
    }

   .col-md-3, .col-md-6
   {
        height:665px;
    }
    
    #login{
            background-color:white;
            margin-top:70px;
            padding-top:100px;
            height: 500px;
            box-shadow: 10px 10px 5px #888888;
    }
    #welcome{
       margin-bottom: 20px;
    }
    span{
        font-family: 'ChunkFiveRegular';
        font-size: 40px;
        color: #f03761;
        text-shadow: 2px 2px rgba(134,134,134, 0.4);

    }
input, textarea{
    width: 50%;
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

<div class="row" id="login" style="height: 80%; width: 50%; margin-left: 20%">
		<form class="form" action="{{URL::to('dashboard')}}"> 
			<fieldset class="form">
				<div class="container-fluid text-center" id="welcome">
						<span>
						Welcome back!
						</span>
				</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
						</div>
						<div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            <div style="text-align:center">
                            <input type="submit" value="login" class="btn btn-primary" style="margin-top: 1.5%; background-color: rgba(110,220,100,155)"></input>
                            </div>
						 </div>
						<div class="form-group">
                            <div class="container-fluid text-center">
                                    <a href="{{URL::to('signup')}}" id="link" class="blink" >
                                		New Here? Create an account.
                            		</a>
                            </div>
                        </div>
            </fieldset>
        </form>
</div> 



