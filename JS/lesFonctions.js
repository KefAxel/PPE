function AfficherComposantDuMedicament( MED_DEPOTLEGAL)
 { 
     $.ajax 
     (
         {
             type:"get",
             url:"index.php/Ctrl_Gestion_Composant/AfficherComposantMedicaments",
             data:"MED_DEPOTLEGAL="+$('#lstMedicament').val(),
             success:function(data)
             {
                 $('#divComposant').empty();
                $('#divComposant').append(data);
                 
             },
            error:function()
             {
                 alert('Erreur !!!');
            }
         }
 
    ); 
 }