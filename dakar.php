<!-- Theme Style -->
<link rel="stylesheet" href="css/style.css">
<!-- Modal -->
<div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="modalAppointmentLabel">Rendez-vous</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
       <form action="mail.php" method="post">
         <div class="form-group">
           <label for="appointment_name" class="text-black">Nom & Prenoms</label>
           <input type="text" class="form-control" id="appointment_name">
         </div>
         <div class="form-group">
           <label for="appointment_email" class="text-black">Email</label>
           <input type="text" class="form-control" id="appointment_email">
         </div>
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label for="appointment_date" class="text-black">Contenu</label>
               <textarea class="form-control" id="appointment_date"> </textarea>
             </div>
           </div>

         </div>

         <div>
           <div class="form-group">
             <label for="appointment_message" class="text-black">Cochez l'activité</label><hr>

             <input type="checkbox" >
             <label for="html">Reparation</label>

           <span style="padding-left: 0%;">
             <input type="checkbox">
             <label for="html">Dépanage</label><br>
           </span>

              <span style="padding-left: 0%;">
             <input type="checkbox" >
             <label for="html">Assistanat </label>
             </span>



           </div>
           <div class="form-group">
         </div>
           <input type="submit" value="Envoyer" class="btn btn-primary">
         </div>
       </form>
     </div>

   </div>
 </div>
</div>
