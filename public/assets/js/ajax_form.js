$( document ).ready(function() {
    $("#btn1").click(
        function(){
            subscribeAjaxForm('subscribe_result_form', 'ajax_form', 'subscribe');
            return false;
        }
    );
});

function subscribeAjaxForm(result_form, ajax_form, url) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            //popUp();

            result = $.parseJSON(response);
            $('#result_form').html('Email: '+result.email);
        },

        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

$( document ).ready(function() {
    $("#btn2").click(
        function(){
            sendMessageAjaxForm('send_message_result_form', 'ajax_form', 'send-message');
            return false;
        }
    );
});
/*
function sendMessageAjaxForm(result_form, ajax_form, url) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            //popUp();

            result = $.parseJSON(response);
            $('#result_form').html('Name: '+result.name+' Email: '+result.email+' Subject: '+result.subject+' message: '+result.message);
        },

        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}
*/

//function popUp() {
//    var popup = document.getElementById("btn");
//    popup.classList.toggle("show");
//    console.log("sad");
//}
