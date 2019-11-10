@extends('layouts.dashboard-master')
@section('title')
<title>Dashboard | Admin</title>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>
@endsection
@section('content')
     <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
          </ol> -->
 <div class="card mb-3">
            <div class="card-header">
              <!-- <i class="fas fa-table"></i> -->
              <i class="fas fa-lock"></i>
              Change Password</div>
            <div class="card-body">

<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card dashboard-card mt-4 mb-4">
              <div class="card-body">
                <form id="form-change-password">
                  @csrf
                  <div class="form-row">
                      <div class="col-md-6 offset-md-3">
                          <label class="control-label">Current Password <span class="required">*</span></label>
                          <input type="password" id="current_password" name="current_password" minlength="6" class="form-control password" required>
                      </div>
                    </div>
                    <div class="form-row">
                       <div class="col-md-6 offset-md-3">
                        <label class="control-label">New Password <span class="required">*</span></label>
                        <input type="password" id="new_password" name="new_password" minlength="6" class="form-control password" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 offset-md-3">
                            <label class="control-label">Confirm New Password <span class="required">*</span></label>
                            <input type="password" id="confirm_password" name="confirm_password" minlength="6" class="form-control password" required>
                      </div>
                    </div>
                    <div class="form-row mt-3">
                      <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-success btn-save-password btn-md">Save Password</button>
                      </div>
                    </div>
              </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
  
  $(document).ready(function() {
            $(document).on('submit', '#form-change-password', function(e) {
                e.preventDefault();
                $('.error-message').remove();
                $('.password').removeClass('input-error');
                $('.btn-save-password').addClass('disabled').html('<i class="fas fa-spinner fa-spin"></i>');
                    var form = $(this);
                    $.ajax({
                       type: "POST",
                       url: "/auth/update-password",
                       data: form.serialize(),
                       success: function(data) {
                            if (data.result == 'error') {
                                if (data.field.length > 0) {
                                    $.each(data.field, function(x,y){
                                        $('#'+y.field).addClass('input-error');
                                        $("<span class='error-message'>"+y.message+"<br></span>").insertAfter('#'+y.field);
                                    });
                                } else {
                                  alert('New password cannot be the same as your current password.');
                                }
                            } else {
                              alert('You have successfully changed your password');
                              location.reload();
                            }

                            $('.btn-save-password').removeClass('disabled').html('Save Password');
                       }
                     });
            });
        });

</script>
@endsection

