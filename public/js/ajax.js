// Search Article
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
    
    // Add Komentar
    $('#save').on('click', function(){
        $.ajax({
            url : '/komentar',
            type : 'POST',
            dataType : 'json',
            data : $('#add-komentar').serialize(),
            success : function(data) {
                $('.data-komentar').html(data['view']);
                swal("Success!", "Berhasil nambah boy!");
                $('#add-komentar').trigger("reset");
            },
            error : function(xhr, status) {
                console.log(xhr.error + "ERROR MANG " + status);
            },
            complete: function (){
                alreadyloading = false;
            }
        });
    });
});