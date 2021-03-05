let bouton=document.getElementById("bouton")
bouton.addEventListener("click", function(e) {
    console.log(e)
let erreurText ;
let emailFrm=document.getElementById("emailFrm")


if(emailFrm.value==""){
  emailFrm.classList.add('errorchamps')
  erreurText = "veuiller mettre une adresse mail"
}else {
    emailFrm.classList.remove('errorchamps')
    document.getElementById("errorp").classList.add("off")
}


if(erreurText) {
    document.getElementById('errorp').innerHTML = erreurText
}




});