function ValidateRequiredFields()
{
    var flag=new Boolean(1);

    var email=document.forms["form"]["email"].value;
    var password=document.forms["form"]["password"].value;
    for(i=0;i<email.length;i++){
    	if(email[i]=='@'){
    		flag= new Boolean(1);
    		break;
    	}
    	else{
    		flag= new Boolean(0);
    	}
    }
 
    if  (password==null || password==""){
        flag = new Boolean(0);
    }
    if (flag == false){
        if(event.preventDefault){
        	swal("Kindly fill up your personal detail");
            event.preventDefault();
        }else{
            event.returnValue = false; // for IE as dont support preventDefault;
        }
    }

    return flag;
}