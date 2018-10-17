//Validator fo the inputs value
let first_name_validator = new NameValidator();

//Validate the inputs value, set the class valid or invalid
function isValid(element,validator,name){
    if(element.value){
        if(validator.isValid(element.value)){
            addValidity(element,true);
	        $("#" + element.id + "_error").hide();
        }else{
            addValidity(element,false);
            $("#" + element.id + "_error").text('! ' + name + ' ' + validator.getErrorMessage() + ' !');
        }
    }else{
        removeValidity(element);
        $("#" + element.id + "_error").hide();
    }
}

function emptyElements(type){
    elements = $("input");
    for (let i = 0; i < elements.length; i++) {
        removeValidity(elements[i]);
        $(elements[i]).val("");
        $(elements[i]).html("");
    }
}

function resetForm(){
    $("form")[0].reset();
}


function addValidity(element,is_valid){
    if(is_valid){
        $(element).addClass("valid");
        $(element).removeClass("invalid");
    }else{
        $(element).addClass("invalid");
        $(element).removeClass("valid");
    }
}

function removeValidity(element){
    $(element).removeClass("valid");
    $(element).removeClass("invalid");
}

$('#first_name').bind("keyup reset", function(){
    isValid(this,first_name_validator,"Nome");
});

$('#last_name').bind("keyup reset", function(){
    isValid(this,first_name_validator,"Cognome");
});

$('#register').click(function(){
    invalidElements = $(".invalid");

    for (let i = 0; i < invalidElements.length; i++) {
        if(element = invalidElements[i]){
            $("#"+element.id + "_error").show();
        }
    }
});

$('#empty').click(function(){
    resetForm();
});
