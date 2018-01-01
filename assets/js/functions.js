/* Função para validar CPF => <input type="text" name="cpf" id="cpf" size="11" maxlength="11" onkeyup="maskCPF(cpf)" /> */
function maskCPF(cpf){

	
	var cpf = document.teste.cpf.value;	
	
	document.teste.log.value = cpf; 
	
	
    return cpf;
}
/* Final da Funcão para validar CPF */
/* Função para ativar o Input do campo OUTROS */
$('input[name="planosaude"]').change(function () {
    if ($('input[name="planosaude"]:checked').val() === "Sim") {
        $('.plano').show();
        $('.plano').html('<input type="text" name="qualplano" placeholder="Plano" />');       
    } else {
        $('.plano').hide();
    }
});
/* Final da Função para ativar o Input do campo plano */
/* Função para ativar o Input do campo OUTROS */
$('input[name="residecom"]').change(function () {
    if ($('input[name="residecom"]:checked').val() === "Sim") {
        $('.outros').show();
        $('.outros').html('<input type="text" name="quaisoutros" placeholder="Outros" />');       
    } else {
        $('.outros').hide();
    }
});
/* Final da Função para ativar o Input do campo OUTROS */
/* Funçaõ para controlar Formulário para Cadastro dos Alunos */
$(function(){
    var atual_fs, next_fs, prev_fs;
    var formulario = $('form[name=formulario]');

    $('.prev').click(function(){
        atual_fs = $(this).parent();
        prev_fs  = $(this).parent().prev();

        $('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
        atual_fs.hide(800);
        prev_fs.show(800);
    });

    $('input[name=next1]').click(function(){
        var array = formulario.serializeArray();
        if(array[0].value == '' || array[1].value == '' || array[2].value == '' || array[3].value == '' || array[4].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos !</p></div>');
        } else {
            $('.resp').html('');
            atual_fs = $(this).parent();
            next_fs  = $(this).parent().next();
    
            $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
            atual_fs.hide(800);
            next_fs.show(800);

            next($(this));
        } 
    });

    $('input[name=next2]').click(function(){
        var array = formulario.serializeArray();
        if(array[5].value == '' || array[6].value == '' || array[7].value == '' || array[8].value == '' || array[9].value == '' || array[10].value == '' || array[11].value == '' || array[12].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos !</p></div>');
        } else {
            $('.resp').html('');
            atual_fs = $(this).parent();
            next_fs  = $(this).parent().next();
    
            $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
            atual_fs.hide(800);
            next_fs.show(800);

            next($(this));
        } 
    });

    $('input[name=next3]').click(function(){
        var array = formulario.serializeArray();
        if(array[13].value == '' || array[14].value == '' || array[15].value == '' || array[16].value == '' || array[17].value == '' || array[18].value == '' || array[19].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos !</p></div>');
        } else {
            $('.resp').html('');
            atual_fs = $(this).parent();
            next_fs  = $(this).parent().next();
    
            $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
            atual_fs.hide(800);
            next_fs.show(800);

            next($(this));
        } 
    });

    $('input[name=next4]').click(function(){
        var array = formulario.serializeArray();
        if(array[20].value == '' || array[21].value == '' || array[22].value == '' || array[23].value == '' || array[24].value == '' || array[25].value == '' || array[26].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos !</p></div>');
        } else {
            $('.resp').html('');
            atual_fs = $(this).parent();
            next_fs  = $(this).parent().next();
    
            $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
            atual_fs.hide(800);
            next_fs.show(800);

            next($(this));
        } 
    });

    $('input[name=next5]').click(function(){
        var array = formulario.serializeArray();
        if(array[27].value == '' || array[28].value == '' || array[29].value == '' || array[30].value == '' || array[31].value == '' || array[32].value == '' || array[33].value == '' || array[34].value == '' || array[35].value == '' || array[36].value == '' || array[37].value == '' || array[38].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos !</p></div>');
        } else {
            $('.resp').html('');
            atual_fs = $(this).parent();
            next_fs  = $(this).parent().next();
    
            $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
            atual_fs.hide(800);
            next_fs.show(800);

            next($(this));
        } 
    });

    $('input[name=next6]').click(function(){
        var array = formulario.serializeArray();
        if(array[39].value == '' || array[40].value == '' || array[41].value == '' || array[42].value == '' || array[43].value == '' || array[44].value == '' || array[45].value == '' || array[46].value == '' || array[47].value == ''){
            $('.resp').html('<div class="erros"><p>Preencha todos os campos !</p></div>');
        } else {
            $('.resp').html('');
            atual_fs = $(this).parent();
            next_fs  = $(this).parent().next();
    
            $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
            atual_fs.hide(800);
            next_fs.show(800);

            next($(this));
        } 
    });
});
/* Final da Funçaõ para controlar Formulário para Cadastro dos Alunos */