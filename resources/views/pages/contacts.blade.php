@extends('layouts.app')
<style>
	    span{
        font-family: 'ChunkFiveRegular';
        font-size: 38px;
        color: #f03761;
        text-shadow: 2px 2px rgba(134,134,134, 0.4);

    }
#contct-list
{
	overflow-y: scroll;
	height:500px;
	width: 50%;
	margin-left: 25%;
    background-color:white;
    padding-top:40px;
    box-shadow: 10px 10px 5px #888888;

}
</style>

<div class="container-fluid" style="margin-top: 4.5%">
                <div class="row" style="width: 50%; margin-top: 1.5%; margin-left: 0%">
                    @include('partials.notifications')
                </div>
	<div class="row text-center" style="margin-top: -10%; margin-left: 15%">
		<div id="contct-list">
		<span>Contacts</span>
			<div class="row">
				<form class="form-group" action="{{URL::to('composer')}}">
					<label style="font-weight: bold;">Name: </label>Asif<br/>
					<label style="font-weight: bold;">Phone: </label>0900-78601<br/>
					<input type="submit" value="Send Message" class="btn" style="background-color: lightpink"></input>
				</form>
			</div>

			<div class="row">
				<form class="form-group" action="{{URL::to('composer')}}">
					<label style="font-weight: bold;">Name: </label>Asif<br/>
					<label style="font-weight: bold;">Phone: </label>0900-78601<br/>
					<input type="submit" value="Send Message" class="btn" style="background-color: lightpink"></input>
				</form>
			</div>
			<div class="row">
				<form class="form-group" action="{{URL::to('composer')}}">
					<label style="font-weight: bold;">Name: </label>Asif<br/>
					<label style="font-weight: bold;">Phone: </label>0900-78601<br/>
					<input type="submit" value="Send Message" class="btn" style="background-color: lightpink"></input>
				</form>
			</div>
			<div class="row">
				<form class="form-group" action="{{URL::to('composer')}}">
					<label style="font-weight: bold;">Name: </label>Asif<br/>
					<label style="font-weight: bold;">Phone: </label>0900-78601<br/>
					<input type="submit" value="Send Message" class="btn" style="background-color: lightpink"></input>
				</form>
			</div>
			<div class="row">
				<form class="form-group" action="{{URL::to('composer')}}">
					<label style="font-weight: bold;">Name: </label>Asif<br/>
					<label style="font-weight: bold;">Phone: </label>0900-78601<br/>
					<input type="submit" value="Send Message" class="btn" style="background-color: lightpink"></input>
				</form>
			</div>
			<div class="row">
				<form class="form-group" action="{{URL::to('composer')}}">
					<label style="font-weight: bold;">Name: </label>Asif<br/>
					<label style="font-weight: bold;">Phone: </label>0900-78601<br/>
					<input type="submit" value="Send Message" class="btn" style="background-color: lightpink"></input>
				</form>
			</div>

		</div>
	</div>
</div>
</div>