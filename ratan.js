function validateForm(){
    var x = document.forms["myform"]["fname"].value;
    if(x == ""){
        alert("name is must filled out");
        return false;
    }
}