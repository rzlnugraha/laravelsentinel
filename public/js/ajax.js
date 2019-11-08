$(document).ready(function (){
    $('.search').on('keyup', function() {
        $.ajax({
            url : '/article',
            type : 'GET',
            dataType : 'json',
            data : {
                'cari' : $('.search').val()
            },
            success: function(data) {
                $('.data-artikel').html(data['view']);
                console.log(data);
            },
            error : function (xhr, status) {
                console.log(xhr.error + " ERROR MANG : " + status);
            },
            complete: function () {
                alreadyloading = false;
            }
        });
    });
});