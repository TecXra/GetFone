@extends("layouts.app")

<script>
$(function() {
	$('#img').hide();
	$('#img').
})
	
</script>
<div class="container-fluuid" style="margin-top: 5%">
	<div class="row">
		<div class="col-lg-3" style="margin-top: 5%">
			<ul class="nav nav-pills nav-stacked" style="margin-top: 5%">
				<li role="presentation" class="active"><a href="#" style="background-color:rgba(110,220,100,155);font-weight: bold;">Composer</a></li>
				<li role="presentation" class="active"><a href="{{action('PagesController@contacts',[$user->id])}}" style="background-color: rgba(110,220,100,155); font-weight: bold;">Contacts</a></li>
			</ul>
		</div>
		<div class="col-lg-9">
			<img id="img" src="{{ asset ('img/1f.jpg')}}" style="height: 90%;width: 100%">

		</div>
	</div>
</div>
