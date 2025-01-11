$(document).ready(function () {
    //insert start here
    $(document).on("submit", "#insertForm", function(e){
        e.preventDefault();
       // console.log("clicked");

        let formdata=new FormData(this);
        formdata.append("action", "insertF");
        formdata.append("insertF", "nuurdiin");
        //console.log(formdata);

        $.ajax({
            type: "POST",
            url: "student_api.php",
            data: formdata,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {
                //console.log(response.message);
                if(response.status=="success"){
                    Swal.fire({
                        title: "Good job!",
                        text: response.message,
                        icon: "success"
                      });
                      readrequest();
                      $("#insertForm")[0].reset();
                   
                }else if(response.status=="error"){
                    Swal.fire({
                        title: "Good job!",
                        text: response.message,
                        icon: "error"
                      });
                }
                
            }
        });

    })
    //insert end here

    readrequest();
    // read jq start here
    function readrequest(){
        $.ajax({
            type: "POST",
            url: "student_api.php",
            data: {"action" : "read", "read":"nuurdiin"},
            dataType: "html",
            success: function (response) {
                //console.log(response);
                $("#readBody").html(response);
                
            }
        });
    }
      // read jq end here


       // Delete Function Start Here
    $(document).on("click", "#btnDelete", function(e){
        e.preventDefault()
        //console.log("clicked");
        let StudentId=$(this).attr("student_id");
        //console.log(StudentId);
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
          $.ajax({
            type: "POST",
            url: "student_api.php",
            data: {"action" : "delete", "student_id": StudentId},
            dataType: "json",
            success: function (response) {
                //console.log(response.message);
                if(response.status=="success"){
                    Swal.fire({
                        title: "Good job!",
                        text: response.message,
                        icon: "success"
                      });
                      readrequest();
                }else if(response.status=="error"){
                    Swal.fire({
                        title: "Good job!",
                        text: response.message,
                        icon: "error"
                      });
            }
        }
            });
        
            }
        });
    })
    // Delete Function End Here

      //read update start here
      $(document).on("click", "#updateBtn", function(e){
        e.preventDefault();
       //console.log("clicked");
       let StudentId = $(this).attr("student_id");
      // console.log(StudentId);
      $.ajax({
        type: "POST",
        url: "student_api.php",
        data: {"action":"readupdate", "student_id":StudentId},
        dataType: "html",
        success: function (response) {
           // console.log(response);
           $("#updateModalBody").html(response);
            
        }
      });
 })
  //read update end here


    // update start here
    $(document).on("submit", "#updateForm", function(e){
        e.preventDefault();
        //console.log("cikied");
        let formdata = new FormData(this);
        formdata.append("action", "update");
        //console.log(formdata);
        $.ajax({
            type: "POST",
            url: "student_api.php",
            data: formdata,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function (response) {
                if(response.status="success"){
                    Swal.fire({
                        title: "Good job!",
                        text: response.message,
                        icon: "success"
                      });  
                      readrequest();
                      $("#updateForm")[0].reset();
                }else if(response.status="error"){
                    Swal.fire({
                        title: "I'm Sorry!",
                        text: response.message,
                        icon: "error"
                      });
                }
                
            }
        });
      })
      // update end here
});