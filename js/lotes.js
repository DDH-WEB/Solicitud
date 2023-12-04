$(document).ready(function(){
    $(document).off("click","**");
    
    $(document).on('click','#enviar',function(){
        //alert("hola");

        if($.isNumeric($('#dni').val())==false){
            $('#dni').focus();
            return;
        }
        if($('#vall').val() == ""){
            $('#vall').focus();
            return;
        }
        if ($('#zona').val() == "0") {
            return;
        }
            $.ajax({
                async:true,
                url: "consultas/consulta_soli.php",
                type:"GET",
                data:{
                    dni:$('#dni').val(),
                    nom:$('#nom').val(),
                    ape:$('#ape').val(),
                    tel:$('#tel').val(),
                    ema:$('#ema').val(),
                    tip:$('#tip').val(),
                    mon:$('#mon').val(),
                    zon:$('#zona').val(),
                    msg:$('#msg').val(),
                opcion:"registrar_soli"
                },
                success: function(response){
                    alert(response);
                }
            });
        })
});