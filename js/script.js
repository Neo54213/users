var users;

$(document).ready(function() {
    $.ajax({
        url: "db/db_ajax.php",
        dataType: 'json',
        async: false,
        success: function(data){
            users = data;
        }
    });

    drawUsers(users);
});

function drawUsers(users) {

    var $tbody = $('tbody');

    for (var i = 0; i < users.length; i++) {
        var $tr = $('<tr>');

        for (var j in users[i]) {
            if(j === 'password'){
                continue;
            }

            var $td = $('<td>', {
                text: users[i][j]
            }).appendTo($tr);
        }

        $tr.appendTo($tbody);
    }
}