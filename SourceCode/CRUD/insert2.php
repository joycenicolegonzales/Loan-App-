$(document).on('click', '.delete_data', function() {
    var employee_id = $(this).attr("id");  
    if(employee_id != '')  
    {  
        $('#delete_id').val(employee_id); // Set the employee_id to the hidden input in the modal
        $('#delete_data_Modal').modal('show');  
    }    
});

function deleteData() {
    var id = $('#delete_id').val(); // Get the employee_id from the hidden input in the modal

    $.ajax({  
        url: "delete.php",  
        method: "POST",  
        data: {delete_data: true, delete_id: id},  
        success: function(data){  
            alert(data); // Display the response message (Data Deleted or Data Not Deleted)
            window.location.reload(); // Refresh the page after deletion
        }  
    });  
}
         