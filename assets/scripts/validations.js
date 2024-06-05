function validateAll(){
    var validation1 = rejectTextField('firstName');
    var validation2 = rejectTextField('lastName');
    var validation3 = rejectEmail('eMail');
    var validation4 = rejectTextField('mMessage');
    var validation5 = rejectRadio('queryType');
    var validation6 = rejectCheckbox('consentCheck');
    if(validation1 || validation2 || validation3 || validation4 || validation5 || validation6){
        return false
    }
    else{
        return true;
    }
}
/*Text Fields*/
function rejectTextField(name){
    var inputIsEmpty = isEmpty(name);
    if(inputIsEmpty){
        document.querySelector('[for='+name+']').classList.add('formCard__field--Empty');
        document.querySelector('[for='+name+']').classList.remove('formCard__email--invalid');
        return true;
    }
    else{
        document.querySelector('[for='+name+']').classList.remove('formCard__field--Empty');
        return false;
    }
}

function isEmpty(id){
    var inputValue = document.getElementById(id).value;
    if(inputValue == ''){
        return true;
    }
    else{
        return false;
    }
}
/*Radio Fields*/
function rejectRadio(name){
    var checked = isSelected(name);
    if(checked){
        document.getElementById(name).classList.remove('formCard__field--Empty');
        return false;
    }
    else{
        document.getElementById(name).classList.add('formCard__field--Empty');
        return true;
    }
}

function isSelected(name){
    var checked = document.querySelector('input[name='+name+']:checked');
    if(checked !== null){
        return true;
    }
    else{
        return false;
    }
}
/*Checkbox Fields*/
function rejectCheckbox(name){
    var checked = isChecked(name);
    if(checked){
        document.querySelector('[for='+name+']').classList.remove('formCard__field--Empty');
        return false;
    }
    else{
        document.querySelector('[for='+name+']').classList.add('formCard__field--Empty');
        return true;
    }
}

function isChecked(id){
    var checked = document.getElementById(id).checked;
    return checked;
}
/*Valid Email*/
function rejectEmail(ID){
    var isEmpty = rejectTextField('eMail');
    if(!isEmpty){
        var isValid = validateEmail(ID);
        if(isValid){
            document.querySelector('[for='+ID+']').classList.remove('formCard__email--invalid');
            return false;
        }
        else{
            document.querySelector('[for='+ID+']').classList.add('formCard__email--invalid');
            return true;
        }
    }
}

function validateEmail(ID){
	var emailField = document.getElementById(ID);
	const validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;	
	if( validEmail.test(emailField.value) ){// Using test we can check if the text match the pattern
		return true;
	}else{
		return false;
	}
}