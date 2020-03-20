// function openNav() {
//   document.getElementById("mySidenav").style.width = "250px";
// }
//
// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
// }

 // var btn= document.querySelector('.left');
 // var nav= document.querySelector('.nav');
 // btn.onclick = function(){
 //   nav.classList.menu('nav_open');
 // }
 // masquer mon bouton "menu"

  // masquer mon bouton "menu"
 function myFunction(x){
   x.classList.toggle("change");
 }



 function PrixU()
 {
   var test = document.getElementById("article").value;

   if(test == 1)
   {
   pu1 = 1500;
 document.getElementById("pu").value = pu1;
 qte = document.getElementById("nombre").value;
  montant = qte*pu1;
    document.getElementById("total").value = montant;
   }
   else if (test == 2)
   {
     pu2 = 3000;
   document.getElementById("pu").value = pu2;
   qte = document.getElementById("nombre").value;
    montant = qte*pu2;
      document.getElementById("total").value = montant;
   }
   else if (test == 3)
   {
     pu3 = 3500;
   document.getElementById("pu").value = pu3;
   qte = document.getElementById("nombre").value;
    montant = qte*pu3;
      document.getElementById("total").value = montant;
   }
   else if (test == 4)
   {
     pu4 = 4000;
   document.getElementById("pu").value = pu4;
   qte = document.getElementById("nombre").value;
    montant = qte*pu4;
      document.getElementById("total").value = montant;
   }
   else if (test == 5)
   {
     pu5 = 4500;
   document.getElementById("pu").value = pu5;
   qte = document.getElementById("nombre").value;
    montant = qte*pu5;
      document.getElementById("total").value = montant;
   }

 }

// required code
// document.getElementById("nombre").attributes["required"] = "remplir ce champ svp";
// document.getElementById("article").attributes["required"] = "remplir ce champ svp";
 // Get the modal
 var modal = document.getElementById("myModal");

 var calcul = document.getElementById("myModal2");
 // var calcul2 = document.getElementById("myModal");


 // Get the button that opens the modal
 var btn = document.getElementById("myBtn");

 var btn2 = document.getElementById("myBtn2");
  // var btnaff = document.getElementById("myBtn");




 // Get the <span> element that closes the modal
 var span = document.getElementsByClassName("close")[0];
 var span2 = document.getElementsByClassName("close2")[0];


 // When the user clicks the button, open the modal
 btn.onclick = function() {
   modal.style.display = "block";
 }
 btn2.onclick = function() {
   calcul.style.display = "block";
 }
 // btnaff.onclick = function(){
 //    calcul.style.display = "block";
 //
 //   }


 // When the user clicks on <span> (x), close the modal
 span.onclick = function() {
   modal.style.display = "none";
 }



 // When the user clicks on <span> (x), close the modal
 span2.onclick = function() {
   calcul.style.display = "none";
 }



 // When the user clicks anywhere outside of the modal, close it
 window.onclick = function(event) {
   if (event.target == modal) {
     modal.style.display = "none";
   }
 }



 function openNav() {
   document.getElementById("mySidenav").style.width = "250px";
   document.getElementById("main").style.marginLeft = "250px";
   document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
 }

 function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
   document.getElementById("main").style.marginLeft= "0";
   document.body.style.backgroundColor = "white";
 }
 
 function validation(){
  var val1 = document.getElementById('nombre').value;
  var val2 = document.getElementById('article').value;
  if (val1 ==''|| val2 =='') {
    alert('veuillez remplir le champ');
  }
  else {
      alert('Achat effectué avec succes');
  }
 }
