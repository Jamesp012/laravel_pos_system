import './bootstrap';


$(document).on('click', '.delete-btn', function (e) {
    e.preventDefault(); // Prevent form submission
    var userId = $(this).data('id');
    var deleteUrl = $(this).data('url');

    if (confirm('Are you sure you want to delete this user?')) {
      $.ajax({
        url: deleteUrl,
        type: 'DELETE',
        data: {
          _token: '{{ csrf_token() }}'  // Pass the CSRF token
        },
        success: function (response) {
          if (response.success) {
            alert(response.message);  // Show success message
            $('#users-table').DataTable().ajax.reload(); // Reload DataTables 
          } else {
            alert('There was an error deleting the user.');
          }
        },
        error: function (xhr, status, error) {
          alert('There was an error deleting the user.');
          console.log(xhr.responseText);  // Log the error for debugging
        }
      });
    }
  });


// Dashboard Function

  $(document).ready(function() {
    $('#users-table').DataTable({
      processing: true,
      serverSide: true,
      
      ajax: {
        url: '/users/data', // Make sure this route returns JSON in the correct format
        type: 'GET',
        dataSrc: function(json) {
          console.log(json); // Log the response for debugging
          return json.data;  // DataTables expects the `data` property to be an array of rows
        }
      },
      columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'password', name: 'password', className: "password-column" },
        { data: 'email_verified_at', name: 'email_verified_at' },
        { data: 'created_at', name: 'created_at' },
        { data: 'updated_at', name: 'updated_at' },
        { data: 'action', 
          orderable: false, 
          searchable: false ,
          render: function (data, type, row) {
            var editUrl = '/users/' + row.id + '/edit'; // Generate edit URL dynamically

            // Return the edit button
            return '<a href="' + editUrl + '" class="btn btn-sm btn-primary underline font-bold">Edit</a>';
          } 
        },
        { 
          data: null,
          orderable: false, 
          searchable: false,
          render: function (data, type, row){
            // Dynamically generate the URL for the delete action
            var deleteUrl = '/users/' + row.id; // The URL for deleting the user
            
            // Create the delete button with a data-id attribute and a form inside it
            return '<button class="delete-btn btn font-bold underline btn-sm btn-primary" data-id="' + row.id + '" data-url="' + deleteUrl + '">Delete</button>';
          }

        }
      ]
    });
  });
