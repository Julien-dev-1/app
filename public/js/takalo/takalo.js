var input0 = document.getElementById('id-0');
var input1 = document.getElementById('id-1');
window.onload = initiate;
function initiate(){
	input0.value = null;
	input1.value = null;
}
(function ($){
	"use strict";
$(window).on('load', function() { 
		$('.preloader').fadeOut(); 
		$('#preloader').delay(550).fadeOut('slow'); 
		$('body').delay(450).css({'overflow':'visible'});
	});

})(jQuery);
var ident;
var resp = document.getElementById('for-change-2');
var ans =  document.getElementById('for-change-1');
function show_errors(message){
	ans.style.display = "none";
	resp.style.display = "block";
	resp.innerHTML = "errors :<br>"+message;
}
function setChoice(prime){
	 var ip = document.getElementsByClassName(prime)[0].attributes[0].value;
	  ident = document.getElementById(ip);
}
function validate() {
	if (ident == undefined) {
		show_errors("please, focus the input box of your choice!");
	}else{
		var val = ident.value;
		if(val.lenght == 0 || val == "" || val.trim() == ""){
			show_errors('warnings !!!<br>the fields are empty !');
		}else{
	    var respfloat = parseFloat(val);
	    if(respfloat == undefined || respfloat == null || respfloat < 0){
	    	show_errors("please enter an appropriate value");
	    	}
	    else{
	    	resp.style.display = "none";
	    	ans.style.display = "block";
	    	}
		}
	}
}	
function state_change(id, sid){
	var state = document.getElementById(id).value;
	state = parseFloat(state);
	if (isNaN(state) == true) {
		state = "input a value ! ";
		document.getElementById(sid).innerHTML = state ;
	}
	else{
		document.getElementById(sid).innerHTML = state * 1000 + " Ar";
	}
}

var mainvalue;
function get_x(id){
	x =  document.getElementById(id).value;
	if (x != undefined){return x;}
	else{return false;}
}

function increase(id){
	x = get_x(id);	
	if (x == null || x == "") {x = 0;}
	if (mainvalue == undefined || mainvalue == 0) {mainvalue = x}
	mainvalue = parseFloat(mainvalue);	
	mainvalue += 1;
	document.getElementById(id).value = mainvalue;
	mainvalue = 0;
		
};
function decrease(id){
	x = get_x(id);	
	if (x == null || x == "") {x = 0;}
	if (mainvalue == undefined || mainvalue == 0) {mainvalue = x}
	mainvalue = parseFloat(mainvalue);	
	mainvalue -= 1;
	document.getElementById(id).value = mainvalue;
	mainvalue = 0;
}
