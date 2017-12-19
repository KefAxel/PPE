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
 
 function AfficherPresentationMedicament()
 {
     $.ajax
     (
        {    
             type:"get",
             url:"AfficherPresentationMedicaments",
             data:"MED_DEPOTLEGAL="+$('#lstMedicament2').val(),
             success:function(data)
             {
                 $('#divPresentation').empty();
                $('#divPresentation').append(data);
                  
             },
             error:function()
             {
                 alert('Erreur !!!');
            }
             
     }       
             );
 }
     
     function ModifierQuantite()
     {
         //alert($('#lstMedicament').val()+ " - " +$('#txtQte').val());
         $.ajax
        (
           {    
                type:"get",
                url:"ModifierQuantite",
                data:"num="+$('#lstMedicament').val()+"&qte="+$('#txtQte').val()+"&numComp="+$('#lstComposant').val(),
                success:function(data)
                {


                },
                error:function()
                {
                    alert('Erreur !!!');
               }

           }       
             );
 }
     

     
     
     
     
     
 