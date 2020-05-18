<?php
/*
		Template Name: Give-a-quotes
		Template Post Type: post, page, quotes;
*/
// It's a custom post type template for doing quotes
//  this template is going to be used in a custom post type

?>
// <!--[if IE 7]>
// <html class="ie ie7" lang="en-US">
// <![endif]-->
// <!--[if IE 8]>
// <html class="ie ie8" lang="en-US">
// <![endif]-->
// <!--[if !(IE 7) | !(IE 8)  ]><!-->
// <!--[if it IE9]>
//       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
//     <![endif]-->

<!-- //* Page notes:
https://github.com/shaunpalmer/quotes
https://github.com/shaunpalmer/repos

Big Resource On the internet here!!!!
https://github.com/bradtraversy/design-resources-for-developers

Hamburgers menu {If you get time todo, it definitely would improve the page}
Hamburgers is a collection of tasty CSS-animated hamburger icons. Also included is the source as a Sass library. It’s modular and customizable, so cook up your own hamburger.
https://github.com/jonsuh/hamburgers
https://zurb.com/playground/foundation-icon-fonts-3

HTML5 has baked in clientside form validation, and polyfills can enable this for legacy browsers as well. Using the defined HTML5 API for constraint validation may be a more maintainable direction than using a jQuery Validation plugin, depending on your team. When detecting this feature, be aware of Safari's half baked support. It does support form validation, but won't highlight invalid fields or present error messages.

Recommended polyfills: hyperform

Due to the shortcomings of localStorage, We Recommended polyfills: Remy’s storage polyfill, sessionstorage

<!-Value ='' To be replace with wp advanced custom Fields  value of the input field, sent on submit
the_field('clients'); /*AdvancedCustomFields


	<!- Value ='' To replace with wp advanced custom Fields  value of the input field is  sent on {with:php} to submit-->

<!-- Is the kind of behaviour I'm looking for my output elements on my contact client details yeah  the element immediately response, to the users input :better user experience then select all or select queries document.getElementById("someInputID").addEventListener("oninput", function(){
	//This input has oninput
});
oninput="#"
<input type="text" id="username" oninput="usernameoninput" onchange="usernameChanged">
  https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_ev_oninput -->

 <!DOCTYPE html5>
// <html lang="en">

<head> <!--start of Header -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>give-a-quotes-booking-area</title>
	<script src="/quotesTable/"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  <!-- <script src="./node_modules/@webcomponents/webcomponentsjs/custom-elements-es5-adapter.js"></script> to set up npm install -g polymer-cli   for mpn www.mpnjs.org  OR git clone https://github.com/PolymerLabs/polymer-3-first-element.git
-->
<!-- <script  src="./node_modules/@webcomponents/webcomponentsjs/webcomponents-loader.js"></script> -->

	<script href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"  type="text/javascript"></script>
  <!-- Please Use Fetch rather than jquery. if you must use jquery. but Switch to es6, Is preference! -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	<script href="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"  type="text/javascript"></script>

		<!-- Linking to the JavaScript file ||  Is it to../ go up  || ./ one down;
     I can never remember!Which it this is. tood check it-->
    <!-- Conditionally load javascript
Use conditional loading We're  possible!
Inject the script element into the DOM using insertBefore() -->
 <script href="./JavaScript-link.js"  type="text/javascript"></script>


	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/quotesTable/sc-style.css">
	<link href="/quotesTable/quf-style.css" rel="stylesheet" type="text/css" >

</head> <!--End of Header -->
<body>

<main  id="content">
 <!--class="container" -->
<div   id="warper" ><!--start of warper -->
<form class="booking-area,booking-wrap"  action="">
<fieldset><legend>Is this a commercial or residential booking?</legend>
<ul style="list-style-type:none">
  	<li>
  		<a link href="#" class="residential" data-booking-type="residentialcleaning" value="residential" >Residential booking</a>

  	</li><br>
  	<li>
  		<a link  href="#" class="commercial"  data-booking-type="commercialcleaning" value="commercial">Commercial booking</a>
  	</li>
  </ul>
 <div class="booking"></div>
</fieldset>

		<fieldset><legend>Clients:Add New Client</legend><div>

      <!--

      Here Is the kind of behaviour I'm looking for my output elements on my contact client details yeah  the element immediately response, to the users input :better user experience then select all or select queries
        https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_ev_oninput

      Please comment all your changes

      the object,	input type object ||  Also  use you select object  , in JavaScript,   the input tyre instantly put out put text(innerText =); straight from the form validated on the Fly to give feedback to the user and the add to localstorage immediately
      This is very intent to output from the form under the name details below id="nameout" and data ID client and   IDClients should be used here JavaScript

      let oninput ="document.getElementById('NewClientname').innerHTML =IDClients
      output id="nameout" data-clientcontact-type="name" value=""> </output>
      the id="IDClients" = id "nameout"  Id=(data-form-control-type="newclientinput");
      data-title-type="clients"

      attributes: NamedNodeMap [ data-title-type="clients", id="NewClientname" ]
      <output id=\"nameout\" data-clientcontact-type=\"name\" value=\"\"> </output>" -->
    <div data-title-type="clients" id="NewClientname">Name</div>Name here, add to localstorage immediately with js<output id="nameout" data-clientcontact-type="name" value="<?php /* the_field('clients'); /*AdvancedCustomFields*/ ?>" oninput="#"  >  </output>
    	<!--
Is frustrated not  being  able to submit a number at all Let's remember to put a pattern in the HTML give the user & Show the pattern  and what the format is.

  Advanced Custom Fields
       Value = To replace with wp advanced custom Fields  value of the input field sent on submit
       HTML Web Storage API
https://www.w3schools.com/html/html5_webstorage.asp
     -->
		<div data-title-type="clients" class="Phone" id="NewClientPhone" >Phone- add to localstorage immediately with js</div><output id="Phoneout" data-clientcontact-type="Phone" value="<?php /* the_field('phone'); /*AdvancedCustomFields | && js add to localstorage here*/ ?>">add to localstorage immediately</output>
	   <div data-title-type="clients" id="NewClientAddress">Address</div><output id="Addressout" data-clientcontact-type="Address" value="<?php /*Recommended polyfills: geo-location-javascript, the_field('address'); /*AdvancedCustomFields*/ ?>"> </output>
    <div data-title-type="clients" id="NewClientDate" name="date" type="datetime-local">Date add to localstorage immediately with js</div><output id="dateout"value=""> </output>
    	<!-- Value = To replace with wp advanced custom Fields  -->
		<div data-title-type="clients" id="NewClientEmail">Email</div><output id="emailout" data-clientcontact-type="email" value="<?php /* the_field('email'); /*AdvancedCustomFields*/ ?>">add to localstorage immediately with js</output>
  </div></fieldset>

  <fieldset><legend>New Client  Contact</legend>
		<div id="IDclientinput">
		<!--/The id value [ container needs fix! ] must be unique To Do/-->
    <br>
		<div  id="IDClientContact1-2"  class="" >
			<div data-form-control-type="newclientinput" > <!-- Add New Client Name -->
			 	<label for="IDClients" class="fas fa-user-plus,.booking-area, .booking-wrap">Name *</label>
        	<!-- Value = To replace with wp advanced custom Fields  -->
			<input type="text"  id="IDClients" class="Name"  oninput="#"  tabindex="1"  placeholder="Your name" data-form-control-type="newclientinput" required   autofocus></div>
		<div data-form-control-type="newclientinput" >
		  <!-- Clients:Add New Phone -->
		 <label for ="IDcellphone">Phone *</label><br>
     <!-- The maximum length of the number is 12 digits ,Allowing for 3 spaces in the phone number ,Cell phone numbers in New Zealand are 9 digits long! To call from within New Zealand: 027-123-4567 -->
     	<!-- Value = To replace with wp advanced custom Fields  -->
		 <span ><input type="tel"  id="IDcellphone" class="phoneNunber, booking-area,booking-wrap, fas fa-phone"  onblur="#"  tabindex="2" placeholder="Your Phone format is 027-123-4567 " data-form-control-type="newclientinput" data-contact-type="cellphone" name="ClientPhone" value="" minimum="9" maximum= "12" required="required"></span></div>


    <div data-form-control-type="newclientinput" class="container"  id="" ><span class="booking-area,booking-wrap "><address class="address,fas fa-address-book"><label class="booking-area,booking-wrap " for="IDAddress">Address *</label>
      	<!-- Value = To replace with wp advanced custom Fields  -->
		  <br><input type="text" id="IDAddress" class=""data-form-control-type="newclientinput" data-contact-type="address" tabindex="3" name="ClientAddress" placeholder="The properties address" value="" maxlength="675" required="required" multiple></address></span></div>
       <!-- This is the calendar drop down I date  & Job Start, Recommended polyfills: webshims, html5widgets -->
    <div id="" class="phoneNunber"   data-form-control-type="newclientinput"  ><label for="Calendar"  class="fas fa-calendar-plus .booking-area, .booking-wrap">Job Start date:</label>
			   <br><span class="#"><input id="IDCalendar" name="Date" tabindex="4" type="date" data-form-control-type="newclientinput"   value="2020-04-22" min="2020-1-1" max="2120-01-31"/></span>
			 </div>
        <!-- Your Submit with {if needed datalist} Conditionally load javascript Neighbourhoods.js here 	Please comment all your changes-->
  			 <div data-form-control-type="newclientinput" class="container"  id="" ><label id=""  class="fas fa-at, booking-area,booking-wrap" for="email" >Email * </label>
				 	<input type="email" id="email"  data-form-control-type="newclientinput" placeholder="Your Email Address" class=".booking-area, .booking-wrap" tabindex="5" data-contact-type="email" size="30" required="required" >
				</div></div></div>
</fieldset><br>

	<br>

		<div>
			<fieldset><legend> House Clean</legend><div class="container"  id="" >
				<label class="booking-area,booking-wrap " id="" for="House Clean" hidden >Choose 4 Option</label><br><br>

				<div class="container"  id=""> <label class="booking-area,booking-wrap " id="" for="House Clean">2 Hours</label><br>
   <input type="radio" id="" name="Clean" value="House Clean 2"> </div>
			<div class="container"  id="" ><label class="booking-area,booking-wrap " id="" for="House Clean"> 3 Hours</label>
			   <input type="radio" id="" name="Clean" value="House Clean 3"></div>
			<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="House Clean"> 4 Hours
 <input type="radio" id="" name="Clean" value="House Clean 4"></label><br></div></div>


	<fieldset><legend>The number of rooms or Wall  to be done-option-1-8 </legend><div>
		<!--  //The number of rooms to be done -->
		<!--The number of Wall to be done <div data-booking-type="wallcleaning > 	Please comment all your changes     https://webdevtrick.com/html-combobox-with-javascript/-->
		<label for="willNumberOfRooms">
	<input  list="willNumberOfRooms"   name="numberOfRooms" type="text" placeholder="choose a selection" data-booking-type="wallcleaning">
	<datalist  id="willNumberOfRooms" name="numberOfRooms" min="1" max="8">
	<option value="one rooms">
	<option value="two rooms">
	<option value="three rooms">
	<option value="four rooms">
	 <option value="five rooms">
		<option value="six rooms">
		 <option value="seven rooms">
			<option value="eight rooms">
	</datalist></label></div>
	</fieldset>

</fieldset>
	<fieldset><legend>lounges to be Clean</legend>
		<div><div class="container"  id="" >
			<label for="lounges" hidden>lounges</label><br>
			<input list="lounges" type="text" name="lounges" placeholder="choose a selection" value="">
			<datalist name="lounges" id="lounges">
			<option value="lounges 1">
			<option value="lounges 2">
			<option value="lounges 3">

		</datalist>
	</div></div></fieldset>

		<fieldset><legend>The number of Kitchen to be done-option-Kitchens +Wall +Dining rooms </legend><div>
			<ul class="container"  id="" >
				<li class="container"  id="" > <label for="Kitchen">Kitchen</label><br>
					<input type="radio" id="" name="Clean" value="1 room"   data-booking-type="kitchencleaning">
				</li>

					<li class="container"  id="" > <label for="Kitchen">Kitchens+  One dining  rooms</label><br>
            	<!-- Value = To replace with wp advanced custom Fields  -->
							<input type="radio" id="Clean" name="Clean" value="Clean"  data-booking-type="kitchencleaning">
						</li>
							<!--	Please comment all your changes -->

		</ul>
    Toggle the entrie datalist; on and off; up and down
		<!--The number of Kitchens to be done -->
		<label for="IDKitchen">The number of Kitchens</label><br>
		<datalist name="rooms" id="IDKitchen">
		<option value="one Kitchens">1</option>
		<option value="two Kitchens">2</option>
		<option value="three Kitchens">3</option>
		<option value="ten Kitchens">4</option>

		</datalist></div>
 <!-- Toggle the entire div on and off up and down 	Please comment all your changes-->
		<fieldset><legend>Oven-Option Single Or Double</legend><div>
			<ul>
			<li id="" class="container"   ><label for="Oven-Clean">Oven Clean (Single)</label><br>
        	<!-- Value = To replace with wp advanced custom Fields  -->
					<input type="radio" id="Oven-Clean" name="Clean" data-form-control-type="radio" value="Clean"></li>
			<li id=""  class="container"  ><label for="Oven-Clean">Oven Clean (Double)</label><br>
        	<!-- Value = To replace with wp advanced custom Fields  -->
					<input type="radio" id="Oven-Clean" name="Clean" data-form-control-type="radio" value="Clean"></li>
		</ul>

		</div></fieldset>

		</fieldset>

<fieldset><legend>Movers Cleans</legend><div>


	<!--The number of room Clean/Movers Clean to be done	Please comment all your changes -->
 <label for="Movers Clean">The number of room to be Clean</label><br>
<datalist name="rooms" id="IDMoversClean">
<option value="one room Clean">1</option>
<option value="two room Clean">2</option>
<option value="three room Clean">3</option>
<option value="four room Clean">4</option>
<option value="five room Clean">5</option>
<option value="six room Clean">6</option>
<option value="seven room Clean">7</option>
</datalist>
	 <!--Movers Clean 5 Hours -->
<div class="container"  id="IDMoversClean5-1div" ><label for="DMoversClean5"> Movers Clean 5 Hours</label><br>
  	<!-- Value = To replace with wp advanced custom Fields  -->
  <input type="radio" class="fa fa-check"   id="IDMoversClean5" name="Clean" value="Movers Clean 5"></div>
 <!-- Movers Clean 8 Hours 	Please comment all your changes-->
			<div class="container"  id="" > <label for="HouseClean8">Movers Clean 8 Hours</label><br>
        	<!-- Value = To replace with wp advanced custom Fields  -->
  <input type="radio" id="IDHouseClean8" name="Clean" value="Movers Clean 8 Hours"></div>

	<div class="container"  id=" " > <label class="booking-area,booking-wrap " id="" for="House Clean">Movers 8 Hours + Oven</label><br>
    	<!-- Value = To replace with wp advanced custom Fields  -->
<input type="radio" id="IDmoversoven" name="Clean" value="Movers 8 Hours + Oven">

</div><br>
<button >
	yes rubbish needed to be taken away
</button><br><br>
<!-- Toggle the entire fieldset on and off up and down -->
<fieldset id="toggletherubbish" data-booking-type="toggletherubbish"><legend>Rubbish Removal &nbsp;&nbsp;<button>No rubbish needed to be taken away	</button></legend>
	<div class="container" >
	<label for="rubbish" hidden>how many trailer loads does it take</label>
  	<!-- Value = To replace with wp advanced custom Fields  -->
	<input list="rubbish" class="phoneNunber" placeholder="choose a selection" name="rubbish">
	<datalist  name="rubbish" id="rubbish" >
		<option value="1 loads">
		<option value="2 loads">
		<option value="3 loads">
		<option value="4 loads">
		<option value="5 loads">
		<option value="6 loads">
	</datalist>
</div>
if( !input load 0 > === true){
  <!-- Conditionally load file
  of 'Booking-rubbish.php'
use of switch or if statement Whatever we can Manege here
Use conditional loading We're  possible!
	Please comment all your changes -->
  	<!-- Use include or require to pull in the rubbish PHP file -->
  	<!-- input  name="rubbish" But because it's going in WordPress you use content part-template()  it's a function in WordPress     https://developer.wordpress.org/reference/functions/get_template_part/
  get_template_part( string $slug, string $name = null )
  -->
  	<!--  'Booking-rubbish.php' -->
  	<!-- Please comment all your changes  -->
  };

  <?php //get_template_part( 'partials/booking-rubbish', 'page' ); ?>
get_template_part( $slug, $name ); -->
	<!--  'Booking-rubbish.php' -->
	<!-- Please comment all your changes  -->
};

</fieldset>

</div>


<fieldset>
<ul>
		<!--//	Please comment all your changes, Are we going to spot clean all the walls  true or false -->
		<li class="container"  id="Wall" > <label for="Wall">Wall per room</label><br>
      	<!-- Value = To replace with wp advanced custom Fields  -->
		 <input type="radio" id="spotcleanwall " name="Clean" value="spotcleanwall"></li>
		<li class="container" ><!--  //The number of rooms to be done -->
				<label   for="fullClean">full clean all Wall </label><br>
        	<!-- Value = To replace with advanced custom Fields  -->
		<input type="radio" id="fullClean" name="Clean" value="fullClean"></li>
	</ul>
</fieldset>
<fieldset><legend>bathrooms-option-1-4</legend>
<!--How many bathrooms are we going to service by select, 	Please comment all your changes-->
<label for="bathrooms">
	<input list="bathrooms" type="text"  placeholder="choose a selection">
<datalist list="bathrooms" id="bathrooms"  name="bathrooms" >
<option value="bathrooms 1">
<option value="bathrooms 2">
<option value="bathrooms 3">
<option value="bathrooms 4">
</datalist></label>
</fieldset>

</fieldset>
<fieldset><legend>Carpets Cleaning</legend>
		<div>
		<div class="container"  id="" > <label class="booking-area,booking-wrap" id="" for="Carpets cleaning">1 room</label><br>
  <input type="radio" id="" name="Clean" value="1 room"> </div>
	 <!--	Please comment all your changes -->
			<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Carpets cleaning"> 2 room</label><br>
  <input type="radio" id="" name="Clean" value="2 room"></div>
	 <!-- 	Please comment all your changes-->
			<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Carpets cleaning">3 room</label><br>
  <input type="radio" id="" name="Carpets cleaning" value="3 room"></div>

	<div class="container"  id="" ><label class="booking-area,booking-wrap " id="" for="Carpets cleaning">4 room</label><br>
<input type="radio" id="" name="Carpets cleaning" value="4 room"></div>
	<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Carpets cleaning">5 room</label><br>
<input type="radio" id="" name="Carpets cleaning" value="5 room"></div>
<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Carpets cleaning">6 room</label><br>
<input type="radio" id="" name="Carpets cleaning" value="6 room"></div>
<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Carpets cleaning">7 room</label><br>
<input type="radio" id="" name="Carpets cleaning" value="7 room"></div>
<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Carpets cleaning">8 room</label><br>
<input type="radio" id="" name="Carpets cleaning" value="8 room"></div>
</div></fieldset>
<fieldset><legend>Windows Cleaning nunber of room</legend>

	<div class="container"  id="" ><label class="booking-area,booking-wrap" id="" for="Windows Cleaning "> </label>
	 <label class="booking-area ,booking-wrap" id="booking-area,  booking-wrap" for="Windows Cleaning" >1</label>
	 <br>
<input type="radio" id="" name="Windows" value="Windows 1 Bedroom"></div>
	<div class="container"  id="" >
		 <label class="booking-area,booking-wrap" id="" for="Windows Cleaning" name="Windows" value="Windows 2 Bedroom">2</label>
			<input type="radio" id="" name="Windows" value="Windows 2 Bedroom" data-booking-type="windowscleaning">
			</div>
	<div class="container"  id="" > <label class="booking-area,booking-wrap"
		 id="" for="Windows Cleaning">3</label><br>
<input type="radio" id="" name="Windows" value="Windows 3 Bedroom" data-booking-type="windowscleaning"> </div>
<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Windows Cleaning">4</label><br>
<input type="radio" id="" name="Windows" value="Windows 4 Bedroom" data-booking-type="windowscleaning"> </div>
<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Windows Cleaning ">5</label><br>
<input type="radio" id="" name="Windows" value="Windows 5 Bedroom" data-booking-type="windowscleaning"> </div>
<div class="container"  id="" > <label  class="booking-area,booking-wrap " id=""  for="Windows Cleaning">6</label><br>
<input type="radio" id="" name="Windows" value="Windows 6 Bedroom"data-booking-type="windowscleaning"></div>
<div class="container"  id="" > <label class="booking-area,booking-wrap " id="" for="Windows Cleaning">7</label><br>
<input type="radio" id="" name="Windows" value="Windows 7 Bedroom" data-booking-type="windowscleaning"> </div>
</div>
</fieldset>

<!--<div>-->
<fieldset><legend>Seater Couch cleaning</legend>
<div class="container"  id="" >
<!--   Couch cleaning 1 -->
<label class="booking-area,booking-wrap " id="" for="SeaterCouchcleaning"> 1 Seater Couch</label><br>
<input type="radio" id="SeaterCouchcleaning" name="SeaterCouch" checked data-seatercouch-type="SeaterCouch" value="Clean"></div>
<!--Couch cleaning 2 -->
<div class="container"   > <label class="booking-area,booking-wrap " id="" for="2SeaterCouch">2 Seater Couch</label><br>
<input type="radio" id="2SeaterCouch" name="Couch" data-seatercouch-type="SeaterCouch" value="3SeaterCouch"></div>

<!--Couch cleaning 3  -->
<div class="container"  id="" > <label   for="CouchCleaning3">3 Seater Couch </label><br>
	<!-- Value = To replace with advanced custom Fields  -->
  <input type="radio" id="Couchcleaning3" name="CouchCleaning" data-seatercouch-type="SeaterCouch" value="Clean3"></div>
<!--Couch cleaning 4    Todo fix ID -->
<div class="container"  id="" ><label  for="Couchcleaning4">4 Seater Couch</label><br>
<input type="radio" id="Couchcleaning4" name="CouchCleaning" data-seatercouch-type="SeaterCouch" value="Clean4"></div>
<!-- Todo fix ID -->
<div class="container"  id="" > <label  for="CouchCleaning5"> 5 Seater Couch</label><br>
<input type="radio" id="Couchcleaning5" name="CouchCleaning" data-seatercouch-type="SeaterCouch" value="Clean4">
</div>
</fieldset>
<input class="QuoteButton" type="submit" value="Make the booking">

</form>

		<div><section>

<!-- Todo fix ID -->
		<div class="container"  id="" >
			<p>
	<!--Todo:	Extras we offer;
  Use conditional loading => Todo:  Toggle switch  the entire div on and off up and down
    Pseudocode
	if ! NoSale == False/True then out put A choice for User
    switch
    case
		Prespray;
    Break;
    case
    Carpet Shampoo;
    Break;
    case
    Pre-shampoo;
    Break;
    case
    	Todo	Vaccuum	$15 	per room : ues Toggle switch
      tood : Add Count nunber; of rooms to add rooms
    Break;
    case
    Deoderise;
    Break;
    case
    Todo	Stain Removal (tough stains)		$20 	per stain input:text
      tood : Add Count nunber; of stains to add rooms
    Break;
    case
    Tood:	Carpet Protector		$35 	per room;	ues Toggle switch
    break;
    Default:
     All included

	Todo	Vaccuum	$15 	per room : ues Toggle switch


		-->
	</p></div>

	</section>

<footer>
  <!-- Footer navigation is appealing for the same reasons as top navigation. It’s easy to implement and makes sense for simpler sites. This pattern is pretty self explanatory, navigation is placed in the footer. Fix to the bottom anchor to the right -->
<nav>
  <!--todo: Please use font-awesome icons in mobile menu  -->
  <ui></ui>
  <ui></ui>
  <ui></ui>
</nav>

</footer>

</div>

</div><!-- end of warper -->
</main>
<script>
	// id="IDClients"
	// id="nameout"

function Client() {
  var txtinput = document.getElementById("IDClients").value;
  document.getElementById("nameout").innerHTML = txtinput;
}
//<!-- Script to  slideToggle() method -->
	$(document).ready(function() {
		$("button").click(function() {
			$("fieldset")[id="toggletherubbish" ].slideToggle();
		});
	});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</body>
</html>
