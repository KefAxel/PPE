function AfficherComposantDuMedicament()
 { 
     $.ajax 
     (
         {
             type:"get",
             url:"AfficherComposantMedicaments",
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