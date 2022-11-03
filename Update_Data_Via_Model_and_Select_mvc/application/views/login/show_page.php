<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Task-2 Update Data Via Model and Select</title>
</head>

<body>
    <div class="container mt-5">
        <center>
            <h1 class="mb-5 shadow-lg p-3 mb-5 bg-white rounded text-warning">Task-2 Update Data Via Model and Select</h1>
        </center>
        <div class="row shadow-lg p-3 mb-5 bg-white rounded">
            <div class="col-sm-10">
     
      
          <table class="table table-striped shadow-lg p-3 mb-5 bg-white rounded table-hover mx-auto w-auto  text-center " style="margin-top:20px;">
               <tbody id="tbody">
             
               </tbody>
           </table>
        
     
            </div>
        </div>
    </div>

    <div class="modal fade " id="updatemodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog shadow-lg p-3  rounded">
            <div class="modal-content rounded">
                <div class="shadow-lg p-1 mb-2 text-success bg-white rounded">
                <center><h2>UPDATE FORM</h2></center><br>
                </div>
                <div class="modal-header">
                    <div class="container">
<form  id="updateForm" >
                <div class="row">
                <input type="text" id="inp" name="id" hidden class="form-control">
                <select name="table1" id="table1" class="form-control">
                    <option value="">Select</option>
                    <option value="Division">Division</option>
                    <option value="Designation">Designation</option>
                    <option value="Location">Location</option>
                </select>
                </div>
                <div class="row mt-5">
                <select name="table2" id ="table2" hidden class="form-control">
                </select>
                </div>
                <div class="row mt-5">
                    <span id="updatebtn" hidden>
                        <button type="submit" class="btn btn-success">Update</button>
                    </span>
                </div>
 </form>
              </div>
            </div> 
        </div>
    </div>
</div>

<!-- JavaScript -->

    <script>
        showTable();
	$(document).ready(function() {
        $(document).on('click', '.update', function(){
            var id = $(this).data('id');
            $("#inp").val(id);
            $('#updatemodel').modal('show');
	});
    });

	$('#updateForm').submit(function(a){
        a.preventDefault();
		var user = $('#updateForm').serialize();   
			$.ajax({
				type: 'POST',
				url: 'http://localhost/Update_Data_Via_Model_and_Select_mvc/welcome/updateFn',
				data: user,
				success:function(t){
					$('#updateForm')[0].reset();
                    $('#table2').find('option').remove();
                    $('#table2').attr('hidden',true);
                    $('#updatebtn').attr('hidden',true);
					$('#updatemodel').modal('hide');
                    showTable();
				}
			});
	});


    $( "select[name='table1']" ).change(function () {
    var tableName = $(this).val();
    $('#table2').find('option').remove();
        $ .ajax({
            type:'POST',
            url: "http://localhost/Update_Data_Via_Model_and_Select_mvc/welcome/table2",
            dataType: 'Json',
            data: {'tableName':tableName},
            async:false,
            success: function(data) {
                $('#table2').removeAttr('hidden');
                $('select[name="table2"]').append('<option value="'+ tableName +'">'+ tableName+'</option>');
               for(var i=0; i<data.length; i++) {
                $('select[name="table2"]').append('<option value="'+ data[i].Id +'">'+ data[i].Name +'</option>');
               }
               $('#updatebtn').removeAttr('hidden');
            }
        });
    });

function showTable(){
	          var url = 'http://localhost/Update_Data_Via_Model_and_Select_mvc/';
                $.ajax({
                    type: 'POST',
                    url: url + 'welcome/read',
                    success:function(r){
                        $('#tbody').html(r);
                    }
                });
            }
    </script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>