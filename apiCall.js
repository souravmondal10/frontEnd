// Variable to hold request
var request;
var remoteApiHost = "http://192.168.0.128:8081/"
// Bind to the submit event of our form
$("#userAdd").submit(function (event) {

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("input");

    // Serialize the data in the form
    var serializedData = $form.serialize();
    //console.log(serializedData);

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: remoteApiHost + "storeRedis.php",
        type: "post",
        data: serializedData
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR) {
        // Log a message to the console
        console.log("Data Successfully Stored");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown) {
        // Log the error to the console
        console.error(
            "The following error occurred: " +
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});

function showUsers(source) {
    $.get(remoteApiHost + "showUsers.php" + "?source="+source, function (data, status) {
        //console.log("Data: " + data + "\nStatus: " + status);
        allUsersHtml = '';
        $.each(data, function(index,element) {
            allUsersHtml = allUsersHtml+ '<tr>\n' +
                '            <th scope="row">'+element.userId+'</th>\n' +
                '            <td>'+element.username+'</td>\n' +
                '            <td>'+element.useremail+'</td>\n' +
                '        </tr>';
        });
        $('#allUsersData').html(allUsersHtml);
    });
}
