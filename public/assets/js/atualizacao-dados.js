"use strict";
var KTCreateAccount = function() {
    var e, t, i, o, s, r, a = [];
    return {
        init: function() {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e), t = document.querySelector("#kt_create_account_stepper"), i = t.querySelector("#kt_create_account_form"), o = t.querySelector('[data-kt-stepper-action="submit"]'), s = t.querySelector('[data-kt-stepper-action="next"]'), (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) { 7 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), s.classList.add("d-none")) : 8 === r.getCurrentStepIndex() ? (o.classList.add("d-none"), s.classList.add("d-none")) : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), s.classList.remove("d-none")) })), r.on("kt.stepper.next", (function(e) {
                console.log("stepper.next");
                var t = a[e.getCurrentStepIndex() - 1];
                t ? t.validate().then((function(t) { 
                    console.log(e.getCurrentStepIndex()),
                    console.log("validated!"),
                    "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({ text: "Verifique os campos obrigatórios antes de continuar.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn btn-light" } }).then((function() { KTUtil.scrollTop() })) })) : (e.goNext(), KTUtil.scrollTop())
            })), r.on("kt.stepper.previous", (function(e) { console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop() })), 
            
            a.push(FormValidation.formValidation(i, { 
                ///Dados Pessoais
                fields: { 
                    cadastro_nome: { validators: { notEmpty: { message: "Preencha o campo Nome." } } } , 
                    cadastro_escolaridade_id: { validators: { notEmpty: { message: "Preencha o campo Escolaridade." } }  }, 
                    cadastro_estado_id_naturalidade: { validators: { notEmpty: { message: "Preencha o campo Estado." } } } , 
                    cadastro_estado_civil: { validators: { notEmpty: { message: "Preencha o campo Naturalidade - Estado." } }  }, 
                    cadastro_cidade_id_naturalidade: { validators: { notEmpty: { message: "Preencha o campo Naturalidade - Cidade." }  } }, 
                    cadastro_religiao_id: { validators: { notEmpty: { message: "Preencha o campo Religião." } } }, 
                    cadastro_data_nascimento: { validators: { notEmpty: { message: "Preencha o campo Data de Nascimento." } } }, 
                    cadastro_tipo_sanguineo_id: { validators: { notEmpty: { message: "Preencha o campo Tipo Sanguíneo / Fator." } } }, 
                    cadastro_genero_id: { validators: { notEmpty: { message: "Preencha o campo Gênero." } } }, 
                    cadastro_tipo_pessoa: { validators: { notEmpty: { message: "Preencha o campo Tipo de Pessoa." } } }, 
                    cadastro_nome_mae: { validators: { notEmpty: { message: "Preencha o campo Nome da Mãe." } } }, 
                    cadastro_email: { validators: { notEmpty: { message: "Preencha o campo E-mail." } } }, 
                    cadastro_nome_pai: { validators: { notEmpty: { message: "Preencha o campo Nome do Pai." } } }, 
                    cadastro_email_secundario: { validators: { notEmpty: { message: "Preencha o campo E-mail." } } } }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 
            
            a.push(FormValidation.formValidation(i, { 
                ///Documentos
                fields: { 
                    cadastro_rg: { validators: { notEmpty: { message: "Preencha o campo RG." } } }, 
                    cadastro_rg_orgao_emissor: { validators: { notEmpty: { message: "Preencha o campo RG Orgão Emissor." } } }, 
                    cadastro_rg_data_emissao: { validators: { notEmpty: { message: "Preencha o campo RG Data de Emissão." } } }, 
                    cadastro_cpf: { validators: { notEmpty: { message: "Preencha o campo CPF." } } } }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, 
                    bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 
            
            a.push(FormValidation.formValidation(i, { 
                ///Endereço
                fields: { 
                    cadastro_tipo_endereco_id: { validators: { notEmpty: { message: "Preencha o campo Tipo de Endereço." } } }, 
                    cadastro_logradouro: { validators: { notEmpty: { message: "Preencha o campo Logradouro." } } }, 
                    cadastro_numero: { validators: { notEmpty: { message: "Preencha o campo Número." } } }, 
                    cadastro_bairro: { validators: { notEmpty: { message: "Preencha o campo Bairro." } } }, 
                    cadastro_estado_id: { validators: { notEmpty: { message: "Preencha o Estado. " } } }, 
                    cadastro_cidade_id: { validators: { notEmpty: { message: "Preencha o Cidade." } } }, 
                    cadastro_cep: { validators: { notEmpty: { message: "Preencha o campo CEP." } } } }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 
                    
            a.push(FormValidation.formValidation(i, { 
                ///Especialidades
                fields: {  }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 
    
            a.push(FormValidation.formValidation(i, { 
                ///Contatos
                fields: {  }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 
            
            a.push(FormValidation.formValidation(i, { 
                ///TCMS
                fields: { 
                    confirmacao_tcms: { validators: { notEmpty: { message: "Para continuar marque a opção que confirma que você leu e concorda com o TCMS." } } }, 
                }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 
                    
            a.push(FormValidation.formValidation(i, { 
     
                fields: { 
            
                 }, 
                    plugins: { trigger: new FormValidation.plugins.Trigger, bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } })), 

            o.addEventListener("click", (function(e) { 
                a[3].validate().then((function(t) { console.log("validated!"), "Valid" == t ? (
                    e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() { 
                        o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext() }), 2e3)) : Swal.fire({ text: "Verifique os campos obrigatórios antes de continuar.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, entendi!", customClass: { confirmButton: "btn btn-light" } }).then((function() { KTUtil.scrollTop() })) })) })), $(i.querySelector('[name="card_expiry_month"]')).on("change", (function() { a[3].revalidateField("card_expiry_month") })), $(i.querySelector('[name="card_expiry_year"]')).on("change", (function() { a[3].revalidateField("card_expiry_year") })), $(i.querySelector('[name="business_type"]')).on("change", (function() { a[2].revalidateField("business_type") }))
        
        }
    }
}();


KTUtil.onDOMContentLoaded((function() { KTCreateAccount.init() }));