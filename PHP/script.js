/**
* File Name  : script
* Description : js for add,update and remove data from a table . input taken from a form 
* Created date : 14/01/2019
* Author  : Md Wasif Ali
* Comments : 
*/
$(function () {

    loadData();

    //after checking the validation of the form CRUD operation start
    $('.form').on('submit', function (event) {
        event.preventDefault();
        $form = $(this);
        if (isValid($form)) {
            crudRequest($form);
        }
    });


    $('.table').on('click', function (event) {
        event.preventDefault();
        var $anchor = $(event.target).parent('.icon');
        var id = $anchor.attr('data-id');
        if ($anchor.hasClass('icon')) {
            getRecord($anchor.attr('id'), id);
        }
    });
});

/**  
* function-name:loadData
* description: display all data from database to table
* comments:
*/

function loadData() {
    $.ajax({
        url : 'read-database.php',
        method : 'get',
        success : function (response) {
            var response = $.parseJSON(response);
            $('.table').html(response.html);
            //console.log(response);
        }
    });
}

/**  
* function-name:getRecord
* description: display the selected data on modal
* comments:
*/
function getRecord(actionName, id) {
    var $modal = '';
    var $form = '';
    $.ajax({
        url: 'get-record.php',
        method: 'post',
        data: { id: id },
        success: function (response) {
            //console.log(response);
            response = $.parseJSON(response);
            if (response.status == 'success') {
                if (actionName == 'update') {
                    $modal = $('#update-modal');
                }
                else if (actionName == 'delete') {
                    $modal = $('#delete-modal');
                }

                //console.log($modal);
                $form = $modal.find('.form');

                $form.find('.id').val(response.id);
                $form.find('.username').val(response.username);
                $form.find('.email').val(response.email);
                $form.find('.password').val(response.password);
                $modal.modal('show');
            }
        }
    })
}

/**  
* function-name:crudRequest
* description: apply the CRUD operation on the form
* comments:
*/
function crudRequest($form) {
    resetMessage();
    $.ajax({
        url: $form.attr('action'),
        method: $form.attr('method'),
        data: $form.serialize(),
        success: function (response) {
            response = $.parseJSON(response);
            if (response.status == 'success') {
                showSuccessMessage($form, response.message);
            }
            else if (response.status == 'error') {
                showErrorMessage($form, response.message);
            }
            loadData();
            // console.log(response);
        }
    });
}

/**  
* function-name:showErrorMessage
* description: display error message
* comments:
*/
function showErrorMessage($form, message) {
    var $alert = $form.find('.status');
    $alert.addClass('alert');
    $alert.addClass('alert-danger');
    $alert.html(message);
}

/**  
* function-name:showSuccessMessage
* description: display success message
* comments:
*/
function showSuccessMessage($form, message) {
    var $alert = $form.find('.status');
    $alert.addClass('alert');
    $alert.addClass('alert-success');
    $alert.html(message);
}
/**  
* function-name:resetMessage
* description: clean all messages
* comments:
*/
function resetMessage() {
    $('.status').removeClass('alert');
    $('.status').removeClass('alert-danger');
    $('.status').removeClass('alert-success');
    $('.status').html('');
}

/**  
* function-name:isValid
* description: check form validation
* comments:
*/
function isValid($form) {
    var inputTagList = $form.find('input');
    for (var i = 0; i < inputTagList.length; i++) {
        if (inputTagList[i].value == '' || inputTagList[i].value == null) {
            return false;
        }
    }
    return true;
}
