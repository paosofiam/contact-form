function submitRoutine(){
    var messageIsValid = validateAll();
    if(messageIsValid){
        data = readValues();
        submitMail(data);
        console.log('submitted');
    }
    else{
        console.log('Error: Invalid Data');
    }
}

function submitMail(postData){
    fetch("assets/scripts/mailer.php",{
        method: "POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
    },
        body: postData,
    }).then(function(data){
    }).then(myJson => { 
     console.log(myJson);
     return data;
    }).catch(function(error){/**/})
}
/*Read values*/
function readValues(){
    let formData = {
        firstName : document.getElementById('firstName').value,
        lastName : document.getElementById('lastName').value,
        eMail : document.getElementById('eMail').value,
        queryType : document.querySelector('input[name=queryType]:checked').value,
        mMessage : document.getElementById('mMessage').value,
        consentCheck : document.getElementById('consentCheck').checked
    }
    postData = JSON.stringify(formData);
    return postData;
}


