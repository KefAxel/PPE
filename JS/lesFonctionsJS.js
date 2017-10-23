
function afficherLesMedicament(codeDepot){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_A/afficherLesMedicaments",
            data:"codeDepot="+codeDepot,
             success:function(data)
            {
                $('#divMedicament').empty();
                $('#divMedicament').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}
function ModifierComposant()
 {   
    alert($('#txtValeur').val());
     alert($('#lstComposant').val());
     $.ajax 
     (
         {
             type:"get",
             url:"index.php/Ctrl_Gestion_Composant/GetModifierMedicament",
             data:"nomComposant="+$('#libelle').val()+"&code="+$('#lstComposant').val(),
             success:function(data)
             {
                 $('#form-group').empty();
                $('#form-group').append(data);
                 
             },
            error:function()
             {
                 alert('Erreur pendant la modification !!!');
            }
         }
 
    ); 
 }
function afficherLesIndividu(codeIndividus)
{
   
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_A/afficherLesIndividus",
            data:"codeIndividus="+codeIndividus,
             success:function(data)
            {
                $('#divIndividus').empty();
                $('#divIndividus').append(data);
            },
            error:function()
            {
                alert('erreur');
            }
        }
        );
}

