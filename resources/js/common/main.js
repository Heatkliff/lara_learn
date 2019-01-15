$(function () {
    console.log(window.location.href.split('/')[2] );
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
$(document).ready(function() {
    $('#pages_list').DataTable();
    $('#user_list').DataTable();
} );

$('#new-page').on('click',function () {
    $.ajax({
        dataType : 'json',
        type: "POST",
        url: "/ajax-create-page",
        data: {
            'title' : $('.title-edit-page input').val(),
            'body' : $('.content-edit-page textarea').val(),
            'author_id' : $('#author_page').val(),
            'open' : 1,
            'categories_id': '["0","1"]',
        },
        success: function(result){
            location.reload();
        }
    })
});

$('#update-page').on('click',function () {
    $.ajax({
        dataType : 'json',
        type: "POST",
        url: "/ajax-update-page",
        data: {
            'id': $('#page_id').val(),
            'title' : $('.title-edit-page input').val(),
            'body' : $('.content-edit-page textarea').val(),
            'author_id' : $('#author_page').val(),
            'open' : 1,
            'categories_id': '["0","1"]',
        },
        success: function(result){
            location.reload();
        }
    })
});

$('.trash-page-link').on('click',function () {
    var link_domain = window.location.href.split('/')[0] + '//' + window.location.href.split('/')[2] ;
    $.ajax({
        dataType : 'json',
        type: "POST",
        url: "/ajax-delete-page",
        data: {
            'id': $('#page_id').val(),
            'title' : $('.title-edit-page input').val(),
            'body' : $('.content-edit-page textarea').val(),
            'author_id' : $('#author_page').val(),
            'open' : 1,
            'categories_id': 'test'
        },
        success: function(result){
            window.location.replace(link_domain + "/admin/pages");
        }
    })
});

$('.delete-page-admins').on('click', function (e) {
    e.preventDefault();
    console.log(this.id);
    $.ajax({
        dataType : 'json',
        type: "POST",
        url: "/ajax-delete-page",
        data: {
            'id': this.id,
        },
        success: function(result){
            location.reload();
        }
    })
})