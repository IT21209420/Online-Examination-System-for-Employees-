function matchPassword(){
	if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value){
        alert("Password Mismatch!");
		return false;
    }	
}

function enableButton()
{
	if(getElementById("checkbox").cheked)
	{
		getElementById("submitbtn").disbled=false;
	}
	else
	getElementById("submitbtn").disabled=true;
}