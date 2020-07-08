$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'get-json');
            return false;
        }
    );
});

function sendAjaxForm(result_form, ajax_form, url) {
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
            myFunction();
            result = $.parseJSON(response);
            $('#result_form').html('Email: '+result.email);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

function myFunction() {
    var popup = document.getElementById("btn");
    popup.classList.toggle("show");
    console.log("sad");
}
