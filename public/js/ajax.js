import { format } from "path";

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
});

// Add Komentar
$(document).ready(function (){
    $('#save').on('click', function(){
        console.log('Halo');
        $.ajax({
            url : '/komentar',
            type : 'POST',
            dataType : 'json',
            data : $('#add-komentar').serialize(),
            success : function(data) {
                $('.data-komentar').html(data['view']);
                swal("Success!", "Berhasil namabh!", "success");
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