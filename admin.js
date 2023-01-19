
//chack  Admin 
//cree cilent
document.getElementById("client_element").onclick = function(event){
    
    document.getElementById("container2").style.display = " none ";
    document.getElementById("container1").style.display = " none ";

    document.getElementById("form_deposer").style.display = "none";
    
    document.getElementById("element_form").style.display = "block";
    
}
// dépose
document.getElementById("deposer").onclick = function(event){
    
    document.getElementById("container2").style.display = " none ";
    document.getElementById("container1").style.display = " none ";

    document.getElementById("element_form").style.display = "none";
    
    document.getElementById("form_deposer").style.display = "block";
    
}
//list client
document.getElementById("client_element2").onclick = function(event){
    
    document.getElementById("container2").style.display = " none ";

    document.getElementById("element_form").style.display = "none";
    
    document.getElementById("form_deposer").style.display = "none";
    
    document.getElementById("container1").style.display = " block ";
}
// list admin 
document.getElementById("profile").onclick = function(event){
    
    document.getElementById("element_form").style.display = "none";
    
    document.getElementById("form_deposer").style.display = "none";
    
    document.getElementById("container1").style.display = " none ";
    
    document.getElementById("container2").style.display = " block ";
}
