@extends('layouts.app')



<script>
function blinker() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}

setInterval(blinker, 1000);
$(function(){
$(".dropdown-menu li a").click(function(){
  $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="glyphicon glyphicon-user pull-right"></span>');
  $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
});
});

$(document).ready(function(){
$("#send").click(function () {
       
       var text = $('.inputField').val();
        
</script>
    <style>

    .container .text-center{
        border:solid 1px;
    }
.col-md-12{
    height:120px;
}
    
    p{
        color: black;
        font-family: 'ChunkFiveRegular';
        font-size: 19px;
        margin-right: 30px;
    }
   .chat{
        margin-left: 105px;
        box-shadow: 10px 10px 5px #888888;
        width: 400px;
        margin-top: 10px;
                margin-bottom:30px;
                
   }
   .dropdown{
    color: blue;
   }

 #dropdownMenu1
            {
                background-color: #FCB53B;
    color: blue;
                padding: 10px;
                color: white;
                width: 400px;
                height:50px;
                font-size: 14px;
                font-weight: bold;
               
            }
   .messages{
     padding: 10px;
                height: 400px;
                background-color:gray;
                border-width: 1px;
                border-color: black;
                border-style: solid;
                overflow-y: scroll;
                
   }
  
            .messages ul
            {
                padding: 0px;
                list-style-type: none;
            }

            .messages ul li
            {
                height: auto;
                margin-bottom: 10px;
                clear: both;
                padding-left: 10px;
                padding-right: 10px;
            }

            .messages ul li span
            {
                display: inline-block;
                max-width: 200px;
                background-color: white;
                padding: 5px;
                border-radius: 4px;
                position: relative;
                border-width: 1px;
                border-style: solid;
                border-color: grey;
            }

            .messages ul li span.left
            {
                float: left;
            }

            .messages ul li span.left:after
            {
                content: "";
                display: inline-block;
                position: absolute;
                left: -8.5px;
                top: 7px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-right: 8px solid white;
            }

            .messages ul li span.left:before
            {
                content: "";
                display: inline-block;
                position: absolute;
                left: -9px;
                top: 7px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-right: 8px solid black;
            }

            .messages ul li span.right:after
            {
                content: "";
                display: inline-block;
                position: absolute;
                right: -8px;
                top: 6px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 8px solid #dbedfe;
            }

            .messages ul li span.right:before
            {
                content: "";
                display: inline-block;
                position: absolute;
                right: -9px;
                top: 6px;
                height: 0px;
                width: 0px;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
                border-left: 8px solid black;
            }

            .messages ul li span.right
            {
                float: right;
                background-color: #dbedfe;
            }

            .clear
            {
                clear: both;
            }

            .input-box
            {
                background-color: white;
                height: 50px;
                padding: 0px;
            }

            .input-box textarea
            {
                padding: 0px;
                width: 278px;
                height: 100%;
                display: inline-block;
                outline: 0px;
                border-width: 0px;
                resize: none;
                border-width: 1px;
                border-color: black;
                border-style: solid;
                font-size: 12px;
                padding: 10px;
                border-top-width: 0px;
            }

               .flexContainer {
    display: flex;
}

.inputField {
    flex: 1;
}

#send {
   
    position: relative;
    float: right;
    border: 0;
    
    cursor: pointer;
    height: 40px;
    width: 110px;
    font: bold 12px 'sans';
    color: #fff;
    text-transform: uppercase;
    background: #f03761;
    border-radius: 0 3px 3px 0;     
    text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
}  


 #send:before { /* left arrow */
    content: '';
    position: absolute;
    border-width: 8px 8px 8px 0;
    border-style: solid solid solid none;
    border-color: transparent #f03761 transparent;
    top: 12px;
    left: -6px;
}

.col-md-3 {
        
        height:515px;
    }
    
    .container .text-center{
        border:solid 1px;
    }
#link{
    color:#f03761;
    font-size: 20px;
    font-weight: 30px;
    text-decoration: underline;

}
    </style>
      <div class="container-fluid" style="margin-top: 7%">
                <div class="row" style="margin-left: 25%">
                <div class="col-lg-9" style="margin-left: -35%; width: 50%">
                    @include('partials.notifications')
                </div>

                    <div class="col-md-6">
                        <div class="chat">
                            <div class="form-group">
                                <label style="font-weight: bold;">TO: </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="+923014430979" required="">
                            </div>
                            <!--
                <div id="header"class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Contact
                    </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#" data-value="Mahnoor Asif">Angela</a></li>
                        <li><a href="#" data-value="Samia Arshad">Samia Arshad</a></li>
                        <li><a href="#" data-value="Maimoona Rafiq">Maimoona Rafiq</a></li>
                      </ul>
                </div>
-->
            <div id="messages" class="messages">
                <ul>
                    <li>
                        <span class="left">AOA</span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="left">How r u ?</span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="right">WS</span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="left">What r u doing ?</span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="right">I'm fine, nothing special..</span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="left">ahan .. </span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="right">I have to go </span>
                        <div class="clear"></div>
                    </li> 
                    <li>
                        <span class="left">Bye</span>
                        <div class="clear"></div>
                    </li> 

                </ul>
                <div class="clear"></div>
            </div>
                <div class="flexContainer">
                    <input type="text" class="inputField">
                    <button type="submit" id="send">Send</button>
                </div>
                 </div>  
                   <div class="container-fluid text-center">
                                    <a href="{{URL::to('dashboard')}}" id="link" class="blink">
                                Disconnect
                            </a>
                     </div>
                     </div>
                            
