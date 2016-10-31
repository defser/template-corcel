$(function()
{

    $("input").focus(function () {
        $(this).parent().find(".field-validation-error").remove();
    });

    $("textarea").focus(function () {
        $(this).parent().find(".field-validation-error").remove();
    });


    /*===================================================MENSAGENS DE ERRO=============================================*/
    var msgEmail = "digite um email válido!";
    var msgRequired = "campo obrigatório!";
    var msgDate = "preencha com uma data válida!";
    var msgNumberOnly = "o campo só aceita números!";
    var msgRequiredCheckBox = "Selecione pelo menos uma opção!";
    var msgConfirmEmail = "os e-mails não coincidem!";
    /*===============================================FIM MENSAGENS DE ERRO=============================================*/



    /*===================================================VALIDAÇÕES REAL-TIME==========================================*/
    $(function () {
        //Define ao carregar as máscaras e validações simples    
        
        $(".required").keypress(function () { validateRequired($(this)); });
        $(".required").blur(function () { validateRequired($(this)); });

        $(".date").mask("99/99/9999");
        $(".dateToday").mask("99/99/9999");

        $(".cpf").mask("999.999.999-99");

        $(".cep").mask("99999-999");

        $(".cnpj").mask("99.999.999/9999-99");

        //alterado pra comportar 9 números
        $('.phone').focusout(function () {
            var phone, element;
            element = $(this);
            element.unmask();
            phone = element.val().replace(/\D/g, '');
            if (phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        }).trigger('focusout');

        $(".numberOnly").keypress(function (e) { if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) { return false; } });
        $(".numberOnly").keypress(function () { validateNumberOnly($(this)); });

        $(".email").blur(function () { validateEmail($(this)); });
        $(".email").keypress(function () { validateEmail($(this)); });

        $(".date").blur(function () { validateDate($(this)); });
        $(".date").keypress(function () { validateDate($(this)); });

        $(".dateToday").blur(function () { validateDateToday($(this)); });
        $(".dateToday").keypress(function () { validateDateToday($(this)); });

        $(".confirmEmail").blur(function () { validateConfirmEmail($(this)); });
        $(".confirmEmail").keypress(function () { validateConfirmEmail($(this)); });

        $('input[type="button"].button-form').click(function (e) {
            var formId = $(this).closest("form").attr("id");

            if (!validate(formId)) {
                $("html, body").scrollTop($('.field-validation-error').eq(0).parent().offset().top - 80);
                e.preventDefault();
            } else {
                $('#' + formId + ' .contact-response').html('');

                $.ajax({
                    type: 'POST',
                    url: '/send-contact',
                    data: $('#' + formId).serialize(),
                    cache: false,
                    beforeSend: function (result) {
                        $('#' + formId + ' .load-gif').show();
                        $('#' + formId + " .button-form").prop('disabled', true);
                    },
                    success: function (result) {
                        $('#' + formId + ' .load-gif').hide();
                        $('#'+formId + " .button-form").prop('disabled', false);

                        if (result.message == "success") {
                            document.getElementById(formId).reset();
                            $('#' + formId + ' .contact-response').html("Enviado com sucesso! Agradecemos o seu contato.");
                        } else {
                            $('#' + formId + ' .contact-response').html("Erro ao enviar o contato. Por favor, revise os dados e tente novamente.");
                        }
                    }
                });
            }
        });
    });
    /*===============================================FIM VALIDAÇÕES REAL-TIME==========================================*/



    /*===========================================CHAMADA VALIDAÇÕES CLICK / SUBMIT=====================================*/
    function validate(idForm) {

        var go = true;

        $('#' + idForm + ' .required').each(function (i) {        
            if ($(this).is(":visible")) {
                if (!validateRequired($(this))) {
                    go = false;
                }
            }
        });

        $('#' + idForm + ' .email').each(function () {
            if (!validateEmail($(this))) {
                go = false;
            }
        });
        $('#' + idForm + ' .numberOnly').each(function () {
            if (!validateNumberOnly($(this))) {
                go = false;
            }
        });
        $('#' + idForm + ' .date').each(function () {
            if ($(this).is(":visible")) {
                if (!validateDate($(this))) {
                    go = false;
                }
            }
        });
        $('#' + idForm + ' .dateToday').each(function () {
            if ($(this).is(":visible")) {
                if (!validateDateToday($(this))) {
                    go = false;
                }
            }
        });

        $('#' + idForm + ' .requiredCheckbox').each(function () {
            if ($(this).is(":visible") && $(this).html().length > 0) {
                if (!validateOptions($(this), $(this).find("input[type=checkbox]:checked").length)) {
                    go = false;
                }
            }
        });

        $('#' + idForm + ' .requiredRadio').each(function () {
            if ($(this).is(":visible") && $(this).html().length > 0) {
                if (!validateOptions($(this), $(this).find("input[type=radio]:checked").length)) {
                    go = false;
                }
            }
        });
        
        return go;
    }
    /*=======================================FIM CHAMADA VALIDAÇÕES CLICK / SUBMIT=====================================*/


    /*===================================================MÉTODOS PARA VERIFICAÇÃO======================================*/
    function isRequired(obj) {
        return obj.hasClass('required');
    }

    function isFilled(obj) {

        var val = obj.val();//.trim();  

        //Remove mascara de telefone
        val = val.replace('(__) ____-____', '');
        
        return (val != '');
        //return (false);
    }
    function atLeastOneChecked(obj) {
        var countChecked1 = obj.find(":checked").length;
        var countChecked = $('#formEmpresa').find('.required-checkbox:checked').length;

        if (countChecked > 0) {
            return true;
        }

        return false;
    }
    /*===============================================FIM MÉTODOS PARA VERIFICAÇÃO======================================*/



    /*===============================================MÉTODOS MENSAGEM ERRO==============================================*/
    function addError(obj, message) {
        var objError = $(obj).parent().find(".field-validation-error");

        if (objError.html() != undefined) {
            objError.html(message);
        } else {
            
            $(obj).parent().append('<span class="field-validation-error">' + message + '</span>');
            //$('<span class="field-validation-error">' + message + '</span>').prependTo($(obj).parent().find(obj.attr("id")));
        }
    }

    function removeError(obj) {
        var objError = $(obj).parent().find(".field-validation-error");
        if (objError.html() != undefined) {
            objError.remove();
        }
    }
    /*===========================================FIM MÉTODOS MENSAGEM ERRO==============================================*/



    /*=============================================INICIO VALIDAÇÕES===================================================*/

    //OBRIGATORIO
    function validateRequired(obj) {
        if (!isFilled(obj)) {
            //ADD ERROR
            addError(obj, msgRequired);
            return false;
        } else {
            removeError(obj);
        }
        return true;
    }

    //OBRIGATORIO Radio
    function validateRequiredRadio(obj) {
        if (!isFilled(obj)) {
            //ADD ERROR
            addError(obj, msgRequired);
            return false;
        } else {
            removeError(obj);
        }
        return true;
    }

    //EMAIL
    function validateEmail(obj) {
        
        if (isFilled(obj) || isRequired(obj)) {
            var val = obj.val();        
            if (!val.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)) {
                //ADD ERROR
                addError(obj, msgEmail);
                return false;
            } else {
                removeError(obj);
                
            }
        }
        return true;
    }

    //DATA
    function validateDateToday(obj) {
        if (isFilled(obj) || isRequired(obj)) {

            var val = obj.val();

            if (!dateIsHigherThanToday(val) || !validDateExpression(val)) {
                //ADD ERROR
                addError(obj, msgDate);
                return false;
            } else {
                removeError(obj);            
            }
        }
        return true;
    }

    function validateDate(obj) {
        if (isFilled(obj) || isRequired(obj)) {

            var val = obj.val();

            if (!validDateExpression(val)) {
                //ADD ERROR
                addError(obj, msgDate);
                return false;
            } else {
                removeError(obj);
            }
        }
        return true;
    }

    function dateIsHigherThanToday(enteredDate) {
        var date = enteredDate.substring(0, 2);
        var month = enteredDate.substring(3, 5);
        var year = enteredDate.substring(6, 10);

        var myDate = new Date(year, month - 1, date);

        var today = new Date();
        today.setHours(0, 0, 0, 0);

        if (myDate >= today) {
            return true;
        }
        else {
            return false;
        }
    }

    //VALIDAÇÃO DE DATA
    function validDateExpression(value) {    
        //contando chars
        if(value.length!=10) return false;
        // verificando data
        var data        = value;
        var dia         = data.substr(0,2);
        var barra1      = data.substr(2,1);
        var mes         = data.substr(3,2);
        var barra2      = data.substr(5,1);
        var ano         = data.substr(6,4);
        if(data.length!=10||barra1!="/"||barra2!="/"||isNaN(dia)||isNaN(mes)||isNaN(ano)||dia>31||mes>12)return false;
        if((mes==4||mes==6||mes==9||mes==11) && dia==31)return false;
        if(mes==2 && (dia>29||(dia==29 && ano != 0)))return false;
        if(ano < 1900)return false;
        return true;
    }

    //NUMÉRICO
    function validateNumberOnly(obj) {
        if (isFilled(obj) || isRequired(obj)) {
            var val = obj.val();
            var objRegExp = /(^-?\d\d*\.\d*$)|(^-?\d\d*$)|(^-?\.\d\d*$)/;

            if (!objRegExp.test(val)) {
                //ADD ERROR
                addError(obj, msgNumberOnly);
                return false;
            } else {
                removeError(obj);
                
            }
        }
        return true;
    }

    //CheckBox
    function validateOptions(obj, count) {
        if (count <= 0) {
            var objError = $(obj).find(".field-validation-error");

            if (objError.html() != undefined) {
                objError.html(msgRequiredCheckBox);
            } else {
                $(obj).append('<span class="field-validation-error">' + msgRequiredCheckBox + '</span>');
            }
            return false;
        } else {
            var objError = $(obj).find(".field-validation-error");
            if (objError.html() != undefined) {
                objError.remove();
            }
        }
        return true;
    }

    //Confirm Email
    function validateConfirmEmail(obj) {
        var email = $("#email").val();
        var confirmEmail = obj.val();
        //alert(email)
        //alert(confirmEmail)
        if (email != confirmEmail || !validateEmail()) {
            addError(obj, msgConfirmEmail);
        } else {
            removeError(obj);
        }
    }
    /*===============================================FIM VALIDAÇÕES===================================================*/ 

})