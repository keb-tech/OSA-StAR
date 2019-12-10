@extends('layouts.dashboard-master')
@section('title')
<title>Dashboard | Admin</title>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style>


.select1-container, .select2-container, #select-student, #select-speaker {
  width: 100%!important;
}

.select1-container .select1-selection--single, .select2-container .select2-selection--single{
    height:34px !important;

}
.select1-container--default .select1-selection--single, .select2-container--default .select2-selection--single{
     border: 1px solid #ccc !important; 
     border-radius: 0px !important; 
}

</style>


@endsection
@section('content')
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Account Management</li>
          </ol> -->

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Accounts Management</div>
            <div class="card-body">

              <button type="button" id="btn-add-account" class="btn btn-primary">Add Account</button>
              <div class="table-responsive mt-3">
                <table class="table table-bordered dt-responsive" id="table-accounts" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="hidden">ID</th>
                      <th style="width: 12.5%">Organization</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Student No.</th>
                      <th>Role</th>
                      <th>Date Created</th>
                      <th style="width: 15.5%">Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th class="hidden">ID</th>
                      <th style="width: 12.5%">Organization</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Student No.</th>
                      <th>Role</th>
                      <th>Date Created</th>
                      <th style="width: 15.5%">Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>

      <!-- Add Account Modal -->
      <div class="modal fade" id="add-account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Account</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-add" role="tabpanel" aria-labelledby="nav-home-tab">

                <form id="form-add-account">
                  <div class="container my-2">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Role</label>
                            <select type="select" id="select-role" class="form-control" name="role_id" required>
                            </select>
                        </div>

                        <div class="organization-container hidden">
                        
                        </div>

                        <div class="form-group student-number-container hidden">
                            <input type="hidden" class="form-control" id="student_number" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="student_number" maxlength="10" required>
                        </div>

                        <div class="form-row">
                          <div class="col-md-6">
                            <input type="hidden" class="form-control" name="first_name" required>
                          </div>

                          <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">

                          <div class="col-md-6">            
                            <input type="hidden" class="form-control" name="last_name" required>
                          </div>
                        </div>

                        <div class="form-group">
                            <label>Account User</label>
                            <select type="select" id="select-student" class="form-control select2 select-student" name="student" required>
                              <option value="" selected disabled>Select Student</option>
                            </select>
                        </div>

                        <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                              <label>Password</label>
                              <input type="text" class="form-control" id="password" name="password" readonly>
                        </div>
                        <div class="form-group text-right mt-4">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success btn-confirm-add-account">Add</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Account -->
    <div class="modal fade" id="edit-account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Edit Account Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-add" role="tabpanel" aria-labelledby="nav-home-tab">

                <form id="form-edit-account">
                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                 <input type="hidden" id="hidden-role-id" name="role_id">
                  <div class="container my-2">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Role</label>
                            <select type="select" id="update-role" class="form-control edit_role update-role" name="role_id" disabled required>
                            </select>
                        </div>

                        <div class="organization-container hidden">
                        <label>Organization Name</label>
                            <input type="text" class="form-control" id="edit_organization_name" name="organization_name" required>
                        </div>
                        
                        <div class="form-group student-number-container hidden">
                          <label>Student Number</label>
                            <input type="text" class="form-control" id="edit_student_number" onkeypress="return event.charCode >= 48 && event.charCode <= 57" name="student_number" maxlength="10" required>
                        </div>
                        

                        <div class="form-row">
                          <div class="col-md-6">
                            <label>First name</label>
                            <input type="text" class="form-control" id="edit_first_name" name="first_name" required>
                          </div>

                          <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">

                          <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="edit_last_name" name="last_name" required>
                          </div>

                        </div>

                        <!-- <div class="form-group">
                            <label>Account User</label>
                            <select type="select" id="update-student" class="form-control select2 update-student" name="student">
                              <option value="" selected disabled>Select Student</option>
                            </select>
                        </div> -->

                        <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" id="edit_email" name="email">
                        </div>

                        <div class="form-group text-right mt-4">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success btn-confirmedit">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>


                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     <!-- Reset Password -->
     <div class="modal fade" id="reset-password-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Reset Account's Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-add" role="tabpanel" aria-labelledby="nav-home-tab">

                <form id="form-reset-password">
                  <div class="container my-2">
                    <div class="row">
                      <div class="col-md-12">

                        <div class="form-row">
                          
                          <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
                          <input type="hidden" id="id" name="id" value="">
                          
                        </div>
                        
                        <div class="form-group">
                              <label>New Password</label>
                              <input type="text" class="form-control" id="reset-password" name="password" readonly>
                        </div>
                        <div class="form-group text-right mt-4">
                          <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success btn-confirmreset">Reset</button>
                        </div>
                      </div>
                    </div>
                  </div>


                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection
@section('scripts')
<script>  

  function getRoles() {
    $.ajax({
      url: "/users/get-all-roles",
      type: "GET",
      success: function(data) {
        var html = "<option value='' selected disabled>Select Role</option>";
        $.each(data, function(x,y) {
          html += '<option value="'+y.id+'">'+y.name+'</option>';
        });
        $('#select-role').html(html);
        $('#update-role').html(html);
      }
    });
  }

  function getNewPassword() {
    $.ajax({
        type: 'GET',
        url: '/user/get-new-password',
        processData: false,
        success: function(data) {
        $('#password').val(data.password);
        }
      });
  }

  function resetPassword() {
    $.ajax({
        type: 'GET',
        url: '/user/get-new-password',
        processData: false,
        success: function(data) {
        $('#reset-password').val(data.password);
        }
      });
  }

  function splitName(str) {
    var r = str.split("  ");
    return {
      "first_name": r[0],
      "last_name": r[2],
      "student_number": r[4]
    };
  }

  //Students list dropdown list
  function getAllStudents() {
    $.ajax({
      url: "students",
      type: "GET",
      success: function(data) {
        $('#select-student').html("");
        $("<option>").val("").prop({
          selected: true,
          disabled: true
        }).appendTo($('#select-student'));
        $.each(data, function(x, y) {
          $("<option>").val(y.id).html(y.first_name + "  " + y.middle_initial + "  " + y.last_name + "  " + "(" + "  " + y.student_number + "  " + ")").appendTo($('#select-student'));
        });
      }
    });
  }

  $('#select-student').change(function() {
    var y = splitName($("option:selected", this).text().trim());
    $("input[type='hidden'][name='first_name']").val(y.first_name);
    $("input[type='hidden'][name='last_name']").val(y.last_name);
    $("input[type='hidden'][name='student_number']").val(y.student_number);
  });

  //Update Students list dropdown list
  function getUpdateAllStudents() {
    $.ajax({
      url: "students",
      type: "GET",
      success: function(data) {
        $('#update-student').html("");
        $("<option>").val("").prop({
          selected: true,
          disabled: true
        }).appendTo($('#update-student'));
        $.each(data, function(x, y) {
          $("<option>").val(y.id).html(y.first_name + "  " + y.middle_initial + "  " + y.last_name + "  " + "(" + "  " + y.student_number + "  " + ")").appendTo($('#update-student'));
        });
      }
    });
  }

  $('#update-student').change(function() {
    var y = splitName($("option:selected", this).text().trim());
    $("input[type='hidden'][name='first_name']").val(y.first_name);
    $("input[type='hidden'][name='last_name']").val(y.last_name);
    $("input[type='hidden'][name='student_number']").val(y.student_number);
  });
  

  function appendOrganization() {
    var html = "";

    html += '<div class="form-group"> <label>Organization Name</label> <input type="text" class="form-control" name="organization_name" required> </div>';
    // html += '<div class="form-group"> <label>Organization Type</label> <select type="select" id="select-org-type" class="form-control" name="organization_type" required>'+
    // '<option value="" selected disabled>Select Organization Type</option>'+
    // '<option value="TYPE A">TYPE A</option>'+
    // '<option value="TYPE B">TYPE B</option>'+
    // '</select></div>';
    // html += '<div class="form-group"> <label>College</label> <select type="select" id="select-org-type" class="form-control" name="organization_college" required> <option value="" selected disabled>Select Organization Type</option> <option value="COLLEGE ONE">COLLEGE ONE</option> <option value="COLLEGE TWO">COLLEGE TWO</option> </select> </div>';
    $('.organization-container').html(html);              
  }

  $(document).ready(function() {
    getRoles();
    var accounts;
     $('#account-management').addClass('active');

    accounts = $("#table-accounts").DataTable({
        ajax: {
          url: "/users/get-all-users",
          dataSrc: ''
        },
        responsive:true,
        "order": [[ 7, "desc" ]],
        columns: [
        { data: 'id'},
        { data: 'organization_name', defaultContent: 'n/a' },
        { data: 'first_name' },
        { data: 'last_name' },
        { data: 'email'},
        { data: 'student_number', defaultContent: 'n/a' },
        { data: 'role.name'},
        { data: 'created_at'},
        { data: null,
          render: function ( data, type, row ) {
            var html = "";
            if (data.status == 1) {
              html += '<span class="switch switch-sm"> <input type="checkbox" class="switch btn-change-status" id="'+data.id+'" data-id="'+data.id+'" data-status="'+data.status+'" checked> <label for="'+data.id+'"></label></span>';
            } else {
              html += '<span class="switch switch-sm"> <input type="checkbox" class="switch btn-change-status" id="'+data.id+'" data-id="'+data.id+'" data-status="'+data.status+'"> <label for="'+data.id+'"></label></span>';
            }
              html += "<button type='button' class='btn btn-primary btn-sm btn-edit-account mr-2' data-id='"+data.id+"' data-account='"+data.id+"'>Edit</button>";
              html += "<button type='button' class='btn btn-secondary btn-sm btn-reset-password' data-id='"+data.id+"' data-account='"+data.id+"'><i class='fas fa-key'></i></button>";
            
            // <button type='button' class='btn btn-primary btn-sm btn-edit' data-id='"+data.id+"' data-account='"+data.id+"'>Edit</button> 
            // html += "<button class='btn btn-danger btn-sm btn-delete' data-id='"+data.id+"' data-account='"+data.id+"'>Remove</button>";

            return html;
          } 
        },
        ],
        columnDefs: [
        { className: "hidden", "targets": [0]},
         { "orderable": false, "targets": 7 }
        ]
    });

    //For select2 (Dropdown with search)
    $('.select2').each(function () {
          $(this).select2({
            dropdownParent: $(this).parent()
        });
    });

    $(document).on('click', '#btn-add-account', function() {
      $('#add-account-modal').modal('show');
      getAllStudents();
      getNewPassword();
    });

    $(document).on('change', '#select-role', function() {
      var val = $(this).val();

      if(val != 3){
        $('.student-number-container').show();
      }
      else {
        $('.student-number-container').hide();
      }

      if(val != 1){
        $('.organization-container').html("");
      }
      else {
        appendOrganization();
        $('.organization-container').show();
      }

    });

    $(document).on('change', '#update-role', function() {
      var val = $(this).val();

      if(val != 3){
        $('.student-number-container').show();
      }
      else {
        $('.student-number-container').hide();
      }

      if(val != 1){
        $('.organization-container').hide();
      }
      else {
        // appendOrganization();
        $('.organization-container').show();
      }

    });


    $(document).on('submit', '#form-add-account', function() {
       $.ajax({
            url: "register",
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
              if (data.success === true) {
                alert("Account Successfully Added!");
                location.reload();
              }
              else {
                alert("Something went wrong");
              }
            }
          });
            return false;
    });

    $(document).on('submit', '#form-edit-account', function() {
      var id  = $('.btn-confirmedit').attr('data-id'); 

      $.ajax({
            url: "user/updateUserOrganization",
            type: "POST",
            data: $(this).serialize()+"&id="+id,
            success: function(data) {
              if (data.success === true) {
                console.log("User Organization Successfully Updated");
              }
              else {
                console.log("Organization field is not required for this update.");
              }
            }
          });

      $.ajax({
            url: "user/update",
            type: "POST",
            data: $(this).serialize()+"&id="+id,
            success: function(data) {
              if (data.success === true) {
                alert("Account Successfully Updated!");
                location.reload();
              }
              else {
                alert(data.error);
              }
            }
          });
      
          return false;
    });

    $(document).on('change', '.btn-change-status', function(e) {
      e.preventDefault(); 
      var chk = $(this);
      var switch_status = $(this).attr('data-status');
      var account_status = (switch_status == 1) ? 0 : 1;
      var id  = $(this).attr('data-id');
      var confirm_alert = (switch_status == 1) ? confirm("Are you sure you want to deactivate this account?") : confirm("Are you sure you want to activate this account?");
        if (confirm_alert == true) {
        

         $.ajax({
              url: "/user/update-status",
              type: "POST",
              data: {
                _token: "{{csrf_token()}}",
                id: id,
                status: account_status
              },
              success: function(data) {
                if (data.success === true) {
                  alert("Account Successfully Updated!");
                  location.reload();
                }
              }

            });
        }
        else {
          if(chk.checked) {
            chk.prop("checked", false);
          }
          else {
            chk.prop("checked", true);
          }
        }
    });
    
    
    $(document).on('click', '.btn-edit-account', function() {
      $('#edit-account-modal').modal('show');
      getUpdateAllStudents();

      var id  = $(this).attr('data-id');
      $('.btn-confirmedit').attr('data-id', id);
      $.ajax({
            url: "users/get-specific-user-info",
            type: "POST",
            data: {
              id: id,
              _token: "{{csrf_token()}}"
            },
            success: function(data) {
              $('#update-role').val(data.role_id).change();
              $('#hidden-role-id').val(data.role_id);
              $('#edit_first_name').val(data.first_name);
              $('#edit_last_name').val(data.last_name);
              $('#edit_email').val(data.email);
              $('#edit_organization_name').val(data.organization_name);
              $('#edit_student_number').val(data.student_number);
              // $('#update-student').val(data.first_name);
            }
        });
      });
      
    
    $(document).on('click', '.btn-reset-password', function() {
      var id = $(this).attr('data-id');
      $('#id').val(id);

      $('#reset-password-modal').modal('show');
      resetPassword();
    });

    $(document).on('submit', '#form-reset-password', function() {
      // e.preventDefault();
      var confirm_alert = confirm("Are you sure you want to reset this account's password?");
      if (confirm_alert == true) {
      // var id  = $(this).val('data-id');
      var id = $('.btn-confirmreset').attr('data-id');
      // var id = $('#id').val(id_value);
       $.ajax({
            url: "/auth/reset-password",
            type: "POST",
            data: $(this).serialize(),
            
            success: function(data) {
              if (data.success === true) {
                alert("Password successfully reset!");
                location.reload();
              }
              else {
                alert("Something went wrong");
              }
            }
            
          });
            return false;
      }
      else {
        return false;
      }

    });


  });

  
    
</script>
@endsection