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

    // Search Book
    $('#cari').on('keyup', function() {
        $.ajax({
            url : '/book',
            type : 'GET',
            dataType : 'json',
            data : {
                'cari' : $('#cari').val()
            },
            success : function(data) {
                $('.data-buku').html(data['view']);
            },
            error : function(xhr, status) {
                console.log(xhr.error + "ERROR : " + status);
            }
        });
    });
    
    // Add Komentar
    $('#save').on('click', function() {
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

    // Cari Task
    $('#cari-task').on('keyup', function () {
        $.ajax({
           url : '/task',
           type : 'GET',
           dataType : 'json',
           data : {
               'cari' : $('#cari-task').val()
           },
           success : function (data) {
               $('.data-task').html(data['view']);
           },
           error : function (xhr, status) {
               console.log(xhr.status + "ERROR : " + status);
           },
           complete : function () {
               alreadyloading : false
           }
        });
    });

    // $('#button-edit-artikel').on('click', function () {
        // $.ajax({
        //    url : '/' 
        // });
    // });

    // Add Article
    // $('#tambah').on('click', function() {
    //     $.ajax({
    //         url : '/article',
    //         type : 'POST',
    //         dataType : 'json',
    //         data : $('#form-article').serialize(),
    //         success : function(data) {
    //             $('.data-buku').html(['view']);
    //             swal("Success!","Berhasil menambah data");
    //         },
    //         error : function(xhr, status) {
    //             console.log(xhr.error + "ERROR : " + status);
    //         }
    //     });
    // });
});