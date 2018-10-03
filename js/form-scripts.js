$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "¿ Completaste el formulario correctamente ?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});
$("#contactFormModal").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formErrorModal();
        submitMSGModal(false, "¿ Completaste el formulario correctamente ?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitFormModal();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
	var telefono = $("#telefono").val();
    var message = $("#message").val();
    var desde = $("#desde").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
        data: "desde=" + desde + "&name=" + name + "&email=" + email + "&telefono=" + telefono + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}
function submitFormModal(){
    // Initiate Variables With Form Content
    var name = $("#nameModal").val();
    var email = $("#emailModal").val();
	var telefono = $("#telefonoModal").val();
    var message = $("#messageModal").val();
    var desde = $("#desde").val();

    $.ajax({
        type: "POST",
        url: "php/form-process.php",
         data: "desde=" + desde + "&name=" + name + "&email=" + email + "&telefono=" + telefono + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccessModal();
            } else {
                formErrorModal();
                submitMSGModal(false,text);
            }
        }
    });
}
function formSuccess(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Mensaje Enviado !");
}
function formSuccessModal(){
    $("#contactFormModal")[0].reset();
    submitMSGModal(true, "Mensaje Enviado !");
}


function formError(){
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}
function formErrorModal(){
	$("#contactFormModal").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        $(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
function submitMSGModal(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
	$("#msgSubmitModal").removeClass().addClass(msgClasses).text(msg);
}
