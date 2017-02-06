$(document).ready(function(){

	init_validator();
	init_SmartWizard();
	init_daterangepicker_reservation();

	$("#department").change(function(){
		var id =$(this).val();
		$.get( BASE_URL+'index.php/home/get_departmental_budget', { department : id },function( data ) {
		  
		  var res = $.parseJSON(data);
		  var percentage = (res.amount_spent/res.amount_allocated) * 100;

		  $( "#yearly-budget" ).val( res.amount_allocated );
		  $( "#percentage" ).val( percentage.toFixed(2));
		  $( "#balance" ).val( res.balance );

		});
	});

})

/* DATE RANGE PICKER */
function init_daterangepicker_reservation() {
	      
	if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
	console.log('init_daterangepicker_reservation');
 
	$('#dates').daterangepicker(null, function(start, end, label) {
	  console.log(start.toISOString(), end.toISOString(), label);
	  var duration = moment.duration(end.diff(start));
	  var days = Math.round(duration.asDays());

	  $("#days").val(days);
	});

	
}

/* SMART WIZARD */

function init_SmartWizard() {
	
	if( typeof ($.fn.smartWizard) === 'undefined'){ return; }
	console.log('init_SmartWizard');
	

	// Smart Wizard         
    $('#wizard').smartWizard({
       // onLeaveStep:leaveAStepCallback,
        onFinish:onFinishCallback
    });          

	$('.buttonNext').addClass('btn btn-success');
	$('.buttonPrevious').addClass('btn btn-primary');
	$('.buttonFinish').addClass('btn btn-default');
	
};

function leaveAStepCallback(obj, context){
        //alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
        return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
}

function onFinishCallback(objs, context){
    // if(validateAllSteps()){
        
    // }else{
    // 	alert("Form has errors");
    // }
    $('#travel-details').submit();
    $('#added-details').submit();
    $('#project-details').submit();
    $('#budget-details').submit();
}

function validateSteps(stepnumber){
    var isStepValid = true;
    // validate step 1
    if(stepnumber == 1){
    	//alert(stepnumber)
		// evaluate the form using generic validating
		if (!validator.checkAll($("form #travel-details"))) {
		  isStepValid = false;
		}
    }

    return isStepValid;
}

function validateAllSteps(){
    var isStepValid = true;
    
    if (!validator.checkAll($("form #travel-details"))) {
		  isStepValid = false;
	}

	if (!validator.checkAll($("form #project-details"))) {
		  isStepValid = false;
	}

	if (!validator.checkAll($("form #budget-details"))) {
	  isStepValid = false;
	}

    return isStepValid;
}

/* VALIDATOR */

function init_validator () {
 
	if( typeof (validator) === 'undefined'){ return; }
	console.log('init_validator'); 

	// initialize the validator function
	validator.message.date = 'not a real date';

	// validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
	$('form')
		.on('blur', 'input[required], input.optional, select.required', validator.checkField)
		.on('change', 'select.required', validator.checkField)
		.on('keypress', 'input[required][pattern]', validator.keypress);

	$('.multi.required').on('keyup blur', 'input', function() {
	validator.checkField.apply($(this).siblings().last()[0]);
	});

	$('form').submit(function(e) {
		e.preventDefault();
		var submit = true;

		// evaluate the form using generic validaing
		if (!validator.checkAll($(this))) {
		  submit = false;
		}

		if (submit)
		  this.submit();

		return false;
	});

};

var fields = 1;

function add_fields() {
	fields++;

	var content = '<div class="form-group">';
        content+= '<label class="control-label col-md-3 col-sm-3 col-xs-12" for="datepicker"> Additional Cost ' +fields+'</label>';
        content+= '<div class="col-md-3 col-sm-3 col-xs-12">';
        content+= '<input id="dates" class="datepicker form-control col-md-7 col-xs-12" required="required" type="text" name="additional_name[]" placeholder="Name">';
        content+= '</div>';
        content+= '<div class="col-md-3 col-sm-3 col-xs-12">';
       	content+= '<input id="days" class="form-control col-md-7 col-xs-12" type="text" name="additional_amount[]" placeholder="Amount">';
        content+= '</div>';
        content+= '</div>';

	$("#first_child").append(content)
}
