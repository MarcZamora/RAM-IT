$(document).ready(function(){
//click button
    $("#send-btn").on("click", function(){
        $value = $("#data").val();
        $msg = '<div class="d-flex align-items-baseline text-end justify-content-end mb-4">'+
        '<div class="pe-2">'+
        '<div>'+
        '<div class="card card-text d-inline-block p-2 px-3 m-1">'+ $value + '</div>'+
        '</div>'+
        '<div>'+
        '<div class="small">'+'01:09 PM'+'</div>'+
        '</div>'+
        '</div>'+
        '<div class="position-relative avatar">'+
        '<img src="res/res-chatbot/profile.png" class="img-fluid rounded-circle" alt="">'+
        '<span class="position-absolute bottom-0 start-100 translate-middle p-1 "> <span class="visually-hidden">New alerts</span></span>'+
        '</div>'+
        '</div>';
        $(".card-body").append($msg);
        $("#data").val('');
        
        // start ajax code
        $.ajax({
            url: 'code/components/message.php',
            type: 'POST',
            data: 'text='+$value,
            success: function(result){
                $replay = '<div class="d-flex align-items-baseline mb-4">'+
                '<div class="position-relative avatar"><img src="res/res-chatbot/itro.png" class="img-fluid rounded-circle" alt="">'+
                ' <span class="position-absolute bottom-0 start-100 translate-middle p-1 "><span class="visually-hidden">New alerts</span></span>'+
                '</div>'+
                '<div class="pe-2">'+
                '<div>'+
                '<div class="card card-text d-inline-block p-2 px-3 m-1">' + result +
                '</div>'+
                '<div>'+
                '<div class="small">'+'01:10 PM'+'</div>'+
                '</div>'+
                '</div>'+
                '</div>'
                '<div style="height:10%;"></div>';
                $(".card-body").append($replay);
                // when chat goes down the scroll bar automatically comes to the bottom
                $(".card-body").scrollTop($(".card-body")[0].scrollHeight);
            }
        });
    });
    
    //enter button
    $("#data").keypress(function(event) {
        if (event.keyCode === 13) {
            $("#send-btn").click();
        }
    });
});