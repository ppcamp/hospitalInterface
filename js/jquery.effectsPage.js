$(document).ready(function(){
    // Setting hide and mask defaults
    $(".necessarioResponsavel").hide();
    $("#hideNumeroPlano").hide();
    $("#telefone").mask('(00) 0000-00009');
    $("#cpfPaciente").mask("000.000.000-00");
    $('#noSearch').hide();

    $('#editarAdd').click(function(){
        $(window.document.location).attr('href',"../cadastro-paciente");
    });

    // Clear func
    $("#resetBtn2").click(function(){
        $('#sintomas').val('');
        $('#tratamento').val('');
        $('#medicoResponsavel').val('');
    });
    
    $("#resetBtn").click(function(){
        $(':input').not(':button, :submit, :reset, :hidden, :checkbox, :radio').val('');
        $(':checkbox, :radio').prop('checked', false);
        $('#plano').val('1');// SUS
        $('#numeroPlano').val('');// SUS
        $('#estadoCivil').val('1'); // Solteiro(a)

        $(".necessarioResponsavel").hide(100);
        $(".desnecessarioResponsavel").show(100);
        
    });

    // href to other page in logout
    $("#logout").click(function(){
        $(window.document.location).attr('href',"http://localhost/php/db.logout.php");
    });

    // hidding young func
    $("#menorIdade").click(function(){
        if( $("#menorIdade").prop("checked") ){
            $(".necessarioResponsavel").show(100);
            $(".desnecessarioResponsavel").hide(100);
        }
        else{
            $(".necessarioResponsavel").hide(100);
            $(".desnecessarioResponsavel").show(100);
            
        }
    });

    // hidding health plan
    $("#plano").change(function(){
        var health = $("#plano option:selected").text();
        if( health == 'SUS' ){
            $("#hideNumeroPlano").hide(50);
        }
        else{
            $("#hideNumeroPlano").show(50);
        }
    });
});
