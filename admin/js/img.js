// <!-- CONTROLL OF IMAGE UPLOADER -->

document.getElementById('avatarInput').addEventListener('change', handleFileSelect);

function handleFileSelect(event) {
  const fileInput = event.target;
  const file = fileInput.files[0];

  // Check if a file is selected
  if (file) {
    // Check if the file type is jpg or jpeg
    if (file.type === 'image/jpeg' || file.type === 'image/jpg') {
      // Check image dimensions
      const img = new Image();
      img.src = URL.createObjectURL(file);

      img.onload = function () {
        if (img.width < 2040 || img.height < 1350) {
          // Show error SweetAlert for small image dimensions
          Swal.fire({
            icon: 'error',
            title: 'Invalid Image Dimensions',
            text: 'Please select an image with dimensions greater than or equal to 2040px width and 1350px height.',
          });
        } else {
          // Display the custom text as the preview
          document.getElementById('fileUploadText').textContent = "File Selected: " + file.name;

          // Show success SweetAlert for successful upload
          // Swal.fire({
          //   position: "top-end",
          //   icon: "success",
          //   title: "Uploaded",
          //   showConfirmButton: false,
          //   timer: 1500
          // });
        }
      };
    } else {
      // Show error SweetAlert for unsupported file type
      Swal.fire({
        icon: 'error',
        title: 'Unsupported File Type',
        text: 'Please select a JPG or JPEG file.',
      });
    }
  } else {
    // Reset the text when no file is selected
    document.getElementById('fileUploadText').textContent = "Click Here Or Drag and drop an Image to upload";
  }
}



// <!-- delate record js code -->

      $(document).ready(function(){
          $(".delete-btn").click(function(){
              var id = $(this).data("id");
              
              // Trigger SweetAlert confirmation
              Swal.fire({
                  title: 'Are you sure?',
                  text: 'You won\'t be able to revert this!',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      $.ajax({
                          type: "POST",
                          url: "image_delete.php",
                          data: { id: id },
                          success: function(data){
                              Swal.fire(
                                  'Deleted!',
                                  'Your record has been deleted.',
                                  'success'
                              ).then(() => {
                                  location.href = "image.php"; // Reload the page after successful deletion
                              });
                          }
                      });
                  }
              });
          });
      });
