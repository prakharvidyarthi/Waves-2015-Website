$(function() {
    $( "#accordion" ).accordion({
    	collapsible: true,
        active:false
    });
  });
function ValidateRequiredFields()
{
    var flag=new Boolean(1);


    var name=document.forms["form"]["name"].value;
    var email=document.forms["form"]["email"].value;
    var contact_no=document.forms["form"]["contact_no"].value;
    var city=document.forms["form"]["city"].value;
    var college=document.forms["form"]["college"].value;
    var password=document.forms["form"]["password"].value;
    var c=(document.querySelectorAll('input[type="checkbox"]:checked').length);
    for(i=0;i<email.length;i++){
    	if(email[i]=='@'){
    		flag= new Boolean(1);
    		break;
    	}
    	else{
    		flag= new Boolean(0);
    	}
    }
    if(c==0){
    	swal("Select at least one event");
    	flag= new Boolean(0);
    }
    if(Math.floor(contact_no)!=contact_no){
    	flag= new Boolean(0);
    }
    if (name==null || name==""){
        flag = new Boolean(0);
    }
    else if  (password==null || password==""){
        flag = new Boolean(0);
    }
    else if (contact_no==null || contact_no==""){
        flag = new Boolean(0);
    }
    else if (city==null || city==""){
        flag = new Boolean(0);
    }
    else if (college==null || college==""){
        flag = new Boolean(0);
    }
    if (flag == false){
        if(event.preventDefault){
        	swal("Kindly fill up the required fields and choose atleast one event");
            event.preventDefault();
        }else{
            event.returnValue = false; // for IE as dont support preventDefault;
        }
    }

    return flag;
}
var value;
$( "#email").keyup(function() {
    value = $( this ).val();
    swal(value);
  })
 

function check_email(yolo){
	console.log(value);
	console.log(yolo);
	var email_id=document.getElementById(yolo).innerHTML;
	swal(email_id);
	var flag=false;
}
function trial(){
	swal(value);
}