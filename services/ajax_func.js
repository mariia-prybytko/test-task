$(document).ready(function () {
    get_table_items();

    $("#add_new_item").click(function () {
        add_new_item();
    });
});


function get_table_items() {
    $.getJSON("services/select.php", function (result) {
        $('#tbody').empty();
        $.each(result, function (i, field) {
            $('#tbody').append(
                '<tr param-id=' + (i+1) + '>' +
                '<td id="input'+ field['id'] + 'date" contenteditable="true" onkeydown="save(' + field['id'] + ', \'date\');">' + field['date'] + '</td>' +
                '<td id="input'+ field['id'] + 'header" contenteditable="true" onkeydown="save(' + field['id'] + ', \'header\');">' + field['header'] + '</td>' +
                '<td id="input'+ field['id'] + 'body" contenteditable="true" onkeydown="save(' + field['id'] + ', \'body\');">' + field['body'] + '</td>' +
                '<td id="input'+ field['id'] + 'status" contenteditable="true" onkeydown="save(' + field['id'] + ', \'status\');">' + field['status'] + '</td>' +
				'<td class="center">' +
                '<img class="del-icon" src="del_icon.png" onclick="delete_item('+ field['id'] +')">' +
                '</td>' +
                '</tr>'
            );
        });
    });
}

function add_new_item() {
    var date = $("#input_date").val();
    var header = $("#input_header").val();
    var body = $("#input_body").val();
	var status = $("#input_status").val();
    $.ajax({
        type: "POST",
        url: "services/insert.php",
        dataType: "json",
        data: {date: date, header: header, body: body, status: status}
    }).done(function (data) {
        $('#tbody').empty();
        get_table_items();
    }).fail(function () {
        alert('Fatal error');
    }).always(function () {
        $("#input_date").val('');
        $("#input_header").val('');
        $("#input_body").val('');
		$("#input_status").val('');
    });
}


function delete_item(id) {
    $.ajax({
        type: "POST",
        url: "services/delete.php",
        dataType: "json",
        data: {id: id}
    }).done(function (data) {
        $('#tbody').empty();
        get_table_items();
    }).fail(function () {
        alert('Fatal error');
    });
}

function update_item(col,value,id) {
    $.ajax({
        type: "POST",
        url: "services/update.php",
        dataType: "json",
        data: {col: col, value: value, id: id}
    }).done(function (data) {
        alert("Update success!")
    }).fail(function () {
        alert('Fatal error');
    });
	get_table_items();
}

function save(id,col) {
    if (event.keyCode == 13) {
        var selector = "#input" + id + col;

        $(selector).attr('contenteditable','false');

        var value = $(selector).html();

        update_item(col,value,id);

        $(selector).attr('contenteditable','true');
    }
}

