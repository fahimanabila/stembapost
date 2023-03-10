$(document).ready(function () {
    var url = window.location;
    $('ul.sidebar-menu a[href="'+ url +'"]').parent().addClass('active');
    $('ul.sidebar-menu a').filter(function() {
         return this.href == url;
    }).parent().addClass('active');
});

// $(document).ready(function(){   
    $('#ini_tu_checkbox').click(function(){
      console.log(ambyaar)
      // if($(this).is(':checked')){
      //   $('#password').attr('type','text');
      //   $('#repassword').attr('type','text');
      // }else{
      //   $('#password').attr('type','password');
      //   $('#repassword').attr('type','password');
      // }
    });
  // });

$(function () {
    $('#ini_tu_checkbox').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

function privilegeSelection(th) {
  //parameter
  var term = $('#slcPriv').val();
  //jika parameter nya
  if (term == '1000') {
                $(document).ready(function (){
                    Swal.fire({
                  type: 'success',
                  title: 'Hi! Please insert unique code bellow!',
                  showConfirmButton: false,
                  timer: 1000
                    })
                  });
            //untuk reset form jika term != SU
            $('.full_name_div').html('')
            $('.username_div').html('')
            $('.password_div').html('')
            $('.repassword_div').html('')
            $('.repassword_code').html('')

            //output unique code div dengan mode disabled
            $('.unique_code_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-barcode form-control-feedback"></span><input disabled name="uniqueCode" id="txtuniquecode" type="password" class="form-control unik" style="font-family: sans-serif;border-radius: 50px;" placeholder="Insert Unique Code">');
            //output button
            // $('.signup').html('<button disabled onclick="nextStep(this)" type="button" id="btnSignUp" class="btn btn-default btn-block btn-flat pull-left" style="border-radius: 100px;"><i class="fa fa-sign-in"></i> NEXT</button>');
            $('#txtuniquecode').prop('disabled', false)
            $('#fullname').prop('disabled', true).attr("placeholder", "It's disabled")
            $('#username').prop('disabled', true).attr("placeholder", "It's disabled")
            $('#password').prop('disabled', true).attr("placeholder", "It's disabled")

            $(document).ready(function () {
            $("#txtuniquecode").keyup(checkPasswordMatch);
              })

                    function checkPasswordMatch() {
                      var unique = $("#txtuniquecode").val();
                      var length = $("#txtuniquecode").val().length
                      var div = $('.signup');

                        if (unique != 'stembasiap' && length != 10){

                            $(".rematchCode").html("<b><i>Code is not match!</i></b>");
                            div.html('<button onclick="falseStep(this)" type="button" id="btnSignUp" class="btn btn-default btn-block btn-flat pull-left" style="border-radius: 100px;"><i class="fa fa-sign-in"></i> NEXT</button>')
                            
                            $('.unik').on("keypress",function(e){
                              if (e.keyCode == 13) {
                            
                              Swal.fire({
                                        type: 'error',
                                        title: 'Your code is wrong, make sure the code match!',
                                        showConfirmButton: false,
                                        timer: 1000
                                          })
                                        }
                                      })

                        }else{

                            $(".rematchCode").html("<b><i>Code is match :)</i></b>");
                            div.html('<button onclick="nextStep(this)" type="button" id="btnSignUp" class="btn btn-default btn-block btn-flat pull-left" style="border-radius: 100px;"><i class="fa fa-sign-in"></i> NEXT</button>')
                            
                                $('.unik').on("keypress",function(e){
                                if (e.keyCode == 13) {
                                                    Swal.fire({
                                                    type: 'success',
                                                    title: 'Welcome! You are superuser now',
                                                    showConfirmButton: false,
                                                    timer: 1000
                                                      })
                                                    }
                                    $('.selectPriviledge').prop('disabled', true)
                                    $('.signup').html('<button type="button" disabled onclick="signUp(this)" id="btnSignUp" class="btn btn-success btn-block btn-flat" style="border-radius: 100px;"><i class="fa fa-check"></i> SIGN UP</button>')
                                    $('.full_name_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-info-sign form-control-feedback"></span><input name="fullname" id="fullname" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Insert Full Name">')
                                    $('.username_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-user form-control-feedback"></span><input name="username" id="username" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Username">')
                                    $('.password_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span><input name="password" id="password" type="password" class="form-control"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Password">')
                                    $('.repassword_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span><input name="repassword" id="repassword" type="password" class="form-control repass_check"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Re-Password">')
                                    // $('.checkbox').html('<span><input checked type="checkbox" id="ini_tu_checkbox" class="form-checkbox" style="margin-left:10px"><span style="margin-left:30px">view password</span></span>')
                                     $(document).ready(function () {
                                      $(".repass_check").keyup(checkMatchPassword);
                                    })

                                     function checkMatchPassword() {

                                          var repassword = $('#repassword').val();
                                          var re_length = repassword.length;
                                          var password = $('#password').val();
                                          var length = password.length;

                                          if (repassword == password && re_length == length) {
                                            $('.repassword_code').html('<i>your password is match</i>');
                                            $('#btnSignUp').prop('disabled', false);
                                          }else {
                                            $('.repassword_code').html('<i>your password is not match</i>');
                                            $('#btnSignUp').prop('disabled', true);
                                          }
                                     }
                                    $('.unique_code_div').html('');
                                    $(".rematchCode").html('');
                                    // $('.').html('');

                                                  $('#fullname').prop('disabled', false).attr("placeholder", "Insert Fullname")
                                                  $('#username').prop('disabled', false).attr("placeholder", "Insert Username")
                                                  $('#password').prop('disabled', false).attr("placeholder", "Insert Password")
                                                  $('#txtuniquecode').prop('disabled', true)
                        })
                      }
                    } //end checkmatch

  }else {
                  $('.signup').html('<button disabled type="button" onclick="signUp(this)" id="btnSignUp" class="btn btn-success btn-block btn-flat" style="border-radius: 100px;"><i class="fa fa-check"></i> SIGN UP</button>');
                  $('.unique_code_div').html('');
                  $(".rematchCode").html('');

                  $('#txtuniquecode').val('').trigger('change')
                  $('#txtuniquecode').prop('disabled', true)

                  $('.full_name_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-info-sign form-control-feedback"></span><input name="fullname" id="fullname" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Insert Full Name">')
                  $('.username_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-user form-control-feedback"></span><input name="username" id="username" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Username">')
                  $('.password_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span><input name="password" id="password" type="password" class="form-control"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Password">')
                  $('.repassword_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span><input name="repassword" id="repassword" type="password" class="form-control repass_check"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Re-Password">')
                  $(document).ready(function () {
                  $(".repass_check").keyup(checkMatchPassword);
                  })

                                     function checkMatchPassword() {

                                          var repassword = $('#repassword').val();
                                          var re_length = repassword.length;
                                          var password = $('#password').val();
                                          var length = password.length;

                                          if (repassword == password && re_length == length) {
                                            $('.repassword_code').html('<i>your password is match</i>');
                                            $('#btnSignUp').prop('disabled', false);
                                          }else {
                                            $('.repassword_code').html('<i>your password is not match</i>');
                                            $('#btnSignUp').prop('disabled', true);
                                          }
                                     }

                  $('#fullname').prop('disabled', false).attr("placeholder", "Insert Fullname")
                  $('#username').prop('disabled', false).attr("placeholder", "Insert Username")
                  $('#password').prop('disabled', false).attr("placeholder", "Insert Password")
        }
      }//end of main function


function nextStep(th) {

$('.signup').html('<button type="button" onclick="signUp(this)" id="btnSignUp" class="btn btn-success btn-block btn-flat" style="border-radius: 100px;"><i class="fa fa-check"></i> SIGN UP</button>')
$('.selectPriviledge').prop('disabled', true)
    $('.full_name_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-info-sign form-control-feedback"></span><input name="fullname" id="fullname" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Insert Full Name">')
    $('.username_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-user form-control-feedback"></span><input name="username" id="username" type="text" class="form-control" style="font-family: sans-serif;border-radius: 50px;" placeholder="Username">')
    $('.password_div').html('<span style="color:rgb(32, 58, 67);" class="glyphicon glyphicon-lock form-control-feedback"></span><input name="password" id="password" type="password" class="form-control"  style="font-family: sans-serif;border-radius: 50px;"  placeholder="Password">')

            $('.unique_code_div').html('');
            $(".rematchCode").html('');

                  $('#fullname').prop('disabled', false).attr("placeholder", "Insert Full name")
                  $('#username').prop('disabled', false).attr("placeholder", "Insert Username")
                  $('#password').prop('disabled', false).attr("placeholder", "Insert Password")
                  $('#txtuniquecode').prop('disabled', true)
                    Swal.fire({
                    type: 'success',
                    title: 'Welcome! You are superuser now',
                    showConfirmButton: false,
                    timer: 1000
                      })
}

function falseStep(th) {

    $('#fullname').prop('disabled', true).attr("placeholder", "It's disabled")
    $('#username').prop('disabled', true).attr("placeholder", "It's disabled")
    $('#password').prop('disabled', true).attr("placeholder", "It's disabled")

          Swal.fire({
          type: 'error',
          title: 'Your code is wrong, make sure the code match!',
          showConfirmButton: false,
          timer: 1000
            })
          }

function signUp(th) {

    var parameter = $('#slcPriv').val();
    var unique_code = $('#txtuniquecode').val();
    var full_name = $('#fullname').val();
    var username = $('#username').val();
    var password = $('#password').val();

    if (full_name == '' || username == '' || password == '') {
              Swal.fire({
              type: 'error',
              title: 'Oops! you have missed out the form. Please check again',
              showConfirmButton: false,
              timer: 1000
                })
    }else{
       if (parameter == '1000' && unique_code == 'stembasiap') {

              $.ajax({
                type: "POST",
                url: baseurl+"ajax/signUpPermissonSuperUser",
                data:{
                  full_name:full_name,
                  username:username,
                  password:password
                },
                success: function(response) {
                  Swal.fire({
                    type: 'success',
                    title: 'Congratulations, '+username+' has been registered as Super User!',
                    showConfirmButton: false,
                    timer: 1000
                    })

                  window.location.replace(baseurl+'index')
                  }
                })
              }else{

            var full_name = $('#fullname').val();
            var username = $('#username').val();
            var password = $('#password').val();
            var parameter = $('#slcPriv').val();
            console.log(full_name, username, password)

              $.ajax({
                type: "POST",
                url: baseurl+"ajax/signUpPermissonGeneral",
                data:{
                  full_name:full_name,
                  username:username,
                  password:password,
                  parameter:parameter
                },
                success: function(response) {
                  if (parameter == '1000') {
                  Swal.fire({
                    type: 'success',
                    title: 'Congratulations, '+username+' has been registered as SuperUser!',
                    showConfirmButton: false,
                    timer: 1000
                    })
                }else if (parameter == '100') {
                   Swal.fire({
                    type: 'success',
                    title: 'Congratulations, '+username+' has been registered as User!',
                    showConfirmButton: false,
                    timer: 1000
                    })
                }else if (parameter == '10') {
                   Swal.fire({
                    type: 'success',
                    title: 'Congratulations, '+username+' has been registered as Admin!',
                    showConfirmButton: false,
                    timer: 1000
                    })
                }

                  window.location.replace(baseurl+'index')
                  }
                })

              }
  }
}

function getOptionSetup(th) {
      var setup_id = $('#id_setup').val();
      $('div.setup').html("<center><img id='loading12' style='width:500px ;margin-top: 2%;' src='"+baseurl+"assets/img/gif/loading99.gif'/><br /></center><br />")
      $.ajax({
                type: "POST",
                url: baseurl+"ajax/get_setup_"+setup_id,
                data:{
                  
                },
                success: function(response) {
                  $('div.setup').html(response);
                  }
                })
      
    }




function editNumber(th) {
  var row = $(th).closest('tr');
  var siswa_id = row.find('#input_siswa').val();
  var phone_num = row.find('.phone_num_hidden'+siswa_id).val();
  var disabled = row.find('#inputNum').prop('disabled', false);
  disabled.val(phone_num).trigger('change');
  var change = row.find('#btnAddNum').remove()
  var add = row.find('.change').html('<button id="btnSaveNum'+siswa_id+'" onclick="saveNumber('+siswa_id+')" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>')
}

function saveNumber(th) {
  var siswa_id = th;
  var phone_num = $('.phone'+siswa_id).val();
  var name = $('.name'+siswa_id).val();

  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: true
    })

  swalWithBootstrapButtons.fire({
      title: 'Add/Edit Number',
      text: 'Are you sure want to modify '+name+' phone number?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, modify it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
  if (result.value) {
      $.ajax({
          type: "POST",
          url: baseurl+"ajax/savePhoneNum",
          data:{
            siswa_id:siswa_id,
            phone_num:phone_num
          },
          success: function(response) {
            $('.phone'+siswa_id).val('').trigger('change')
            $('.phone'+siswa_id).prop('placeholder', phone_num);
            $('.phone'+siswa_id).prop('disabled', true);
            $('#btnSaveNum'+siswa_id).hide();
            $('#div'+siswa_id).html('<button id="btnAddNum" onclick="editNumber2('+siswa_id+')" class="btn btn-warning btn-sm addnum'+siswa_id+'"><i class="fa fa-pencil"></i></button>')
            $('.inactive'+siswa_id).html('<label class="label label-success"><i class="fa fa-check"></i> Active</label>');
              swalWithBootstrapButtons.fire(
                'Modified!',
                'Phone number changed succesfully!',
                'success'
                )
          }

        });
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'OK! you can do it later',
      'error'
    )
    $('.phone'+siswa_id).val('').trigger('change');
    $('.phone'+siswa_id).prop('disabled', true);
    $('#btnSaveNum'+siswa_id).hide();
    $('#div'+siswa_id).html('<button id="btnAddNum" onclick="editNumber2('+siswa_id+')" class="btn btn-warning btn-sm addnum'+siswa_id+'"><i class="fa fa-pencil"></i></button>')
  }
})
}

function editNumber2(th) {
  var siswa_id = th;
  var phone_num = $('.phone_num_hidden'+siswa_id).val();
  var disabled = $('.phone'+siswa_id).prop('disabled', false);
  disabled.val(phone_num).trigger('change');
  var change = $('.addnum'+siswa_id).remove()
  var add = $('#div'+siswa_id).html('<button id="btnSaveNum'+siswa_id+'" onclick="saveNumber('+siswa_id+')" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>')
}

function filterData(th) {
  $('div.table-data').html("<center><img id='loading12' style='width:600px ;margin-top: 2%;margin-left:5%' src='"+baseurl+"assets/img/gif/loading99.gif'/><br /></center><br />")
  var nama = $('#name_id').val()
  var departement = $('#department_id_add').val();
  var group = $('#class_id_add').val();
  var status = $('#status_id_add').val();
  var nip = $('#nis_nip').val();
  var phone = $('#phone_num_id').val();

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/getFilter",
          data:{
            nama:nama,
            departement:departement,
            group:group,
            status:status,
            nip:nip,
            phone:phone
          },
          success: function(response) {
          $('div.table-data').html(response);

}
})
}

function exportXls(th) {
  var nama = $('#name_id').val()
  var departement = $('#department_id_add').val();
  var group = $('#class_id_add').val();
  var status = $('#status_id_add').val();
  var nip = $('#nis_nip').val();
  var phone = $('#phone_num_id').val();

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/getExport",
          data:{
            nama:nama,
            departement:departement,
            group:group,
            status:status,
            nip:nip,
            phone:phone
          },
          success: function(response) {

}
})
}

function resetData(th) {

 $('#phone_num_id').val('').trigger('change');
 $('#nis_nip').val('').trigger('change');
 $('.iniStatus').val('').trigger('change');
 $('#name_id').val('').trigger('change');
 $('#department_id_add').val('').trigger('change');
 $('#class_id_add').val(0).trigger('change');

}

function onFilterClass(th) {
  var department = $('#department_id_add').val();
  var select_class = $('#class_id_add');

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/getSelectClass",
          dataType: 'JSON',
          data:{
            department:department
          },
          success: function(response) {
            var dataItem1 = '';
            $.each(response, (i, item) => {
              dataItem1 += '<option value="'+item.class_id+'">'+item.class_name+'</option>'
            })  
            select_class.html(dataItem1);
            select_class.val(response[0].class_id);
            select_class.trigger('change')
          }

      })
}

function onFilterClass2(th) {
  var department = $('#department_id_add').val();
  var teacher = $('#teacher_id');
  var select_class = $('#class_id_add');
  var student = $('#student_id');
  if (department !== '0'){
  teacher.prop('disabled', true)
  teacher.val('').trigger('change')
  }else if (department == '0'){
  $('#student_id').val('').trigger('change')
  $('#student_id').prop('disabled', true)
  teacher.prop('disabled', false)
  }

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/getSelectClass",
          dataType: 'JSON',
          data:{
            department:department
          },
          success: function(response) {
            var dataItem1 = '';
            $.each(response, (i, item) => {
              dataItem1 += '<option value="'+item.class_id+'">'+item.class_name+'</option>'
            })  
            select_class.html(dataItem1);
            select_class.val(response[0].class_id);
            select_class.trigger('change')

          }

      })
}

function onFilterStudent(th) {
  var class_id = $('#class_id_add').val();
  var student = $('#student_id');
  var department = $('#department_id_add').val();
  if (department !== '0'){
  student.val('0')
  }else if (department == '0'){
  $('#student_id').val('').trigger('change')
  $('#student_id').prop('disabled', true)
  }

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/getSelectStudent",
          dataType: 'JSON',
          data:{
            class_id:class_id
          },
          success: function(response) {
            // console.log(response)
            var re_leng = response.length
            if (re_leng === 0){
               Swal.fire({
                  type: 'error',
                  title: 'Sorry, No Data Exists',
                    })
            }else{
            var dataItem1 = '';
            $.each(response, (i, item) => {
              dataItem1 += '<option value="'+item.contact_id+'">'+item.full_name+' - '+item.phone_num+'</option>'
            })  
            student.html(dataItem1);
            student.val(response[0].contact_id);
            student.trigger('change')
          }
          }

      })
}

function identify(th) {
  if ($('#group_name').val() == '0'){
    $('#new_group').prop('disabled', false)
  }else{
    $('#new_group').prop('disabled', true)
  }
}

function saveProfile(th) {

  var username = $('#txtUsernameProfile').val();
  var last_password = $('#last_password').val();
  var typed_last_password = $('#typed_last_password').val();
  var full_name = $('#full_name_profile').val();
  var new_password = $('#new_password_profile').val();
  var seq = $('#btnProfile').val();

  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: true
    })

  swalWithBootstrapButtons.fire({
      title: 'Update Profile',
      text: 'Are you sure want to update your profile?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, update it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
  if (result.value) {
      $.ajax({
          type: "POST",
          url: baseurl+"ajax/updateProfile",
          dataType: 'JSON',
          data:{
            username            :username,
            last_password       :last_password,
            typed_last_password :typed_last_password,
            full_name           :full_name,
            new_password        :new_password,
            seq                 :seq
          },
          success: function(response) {
          if (response == '000'){
             Swal.fire({
                  type: 'info',
                  title: 'Last password did not match, please try again!',
                })
          }else if (response == '111'){
            Swal.fire({
                  type: 'success',
                  title: 'Congratulations, your profile has been updated!',
                })
            window.location.replace(baseurl+"login");
          }
          }

        });
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'OK! you can do it later',
      'error'
    )
  }
})
}

function getUsername(th) {
 var username = $('#choose_usr').val();
 var last_prev = $('#last_prev');

 $.ajax({
          type: "POST",
          url: baseurl+"ajax/getLastPrev",
          dataType: 'JSON',
          data:{
            username:username
          },
          success: function(response) {
            console.log(response)
            var dataItem1 = '';
            $.each(response, (i, item) => {
              dataItem1 += '<option value="'+item.user_details_id+'">'+item.prev_name+'</option>'
            })  
            last_prev.html(dataItem1);
            last_prev.val(response[0].user_details_id);
            last_prev.trigger('change')
          }
      })

}

function checkCode(th) {
  var code_typed = $('#codePermisson').val()
  var length = code_typed.length

  if (code_typed == 'stembasiap' && length == 10) {
    $('#btnSavePrev').prop('disabled', false);
    $('#id_prev').prop('disabled', false);
    $('#codePermisson').val('');
    $('#codePermisson').prop('disabled', true);
    Swal.fire({
                  type: 'success',
                  title: 'Congratulations, you can update any users now!',
                })
  }else{
    $('#btnSavePrev').prop('disabled', true);
    $('#id_prev').prop('disabled', true);

    Swal.fire({
                  type: 'error',
                  title: 'Oops, code is wrong please try once again!',
                })
  }
}

function saveSetupPrev(th) {
  var new_prev = $('#id_prev').val();
  var seq = $('#choose_usr').val();

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/savePrev",
          data:{
            new_prev:new_prev,
            seq:seq
          },
          success: function(response) {
            Swal.fire({
                  type: 'success',
                  title: 'Data has been updated!',
                })
            window.location.reload()
          }
      })
}

function saveGroup(th) {

  var group_name = $('#group_name').val();
  var new_group = $('#new_group').val();
  var student = $('#student_id').val();
  var teacher = $('#teacher_id').val();

  $.ajax({
          type: "POST",
          url: baseurl+"ajax/saveGroup",
          data:{
            group_name:group_name,
            new_group:new_group,
            student:student,
            teacher:teacher
          },
          success: function(response) {
            Swal.fire({
                  type: 'success',
                  title: 'Data has been updated!',
                })
            window.location.reload()
          }
      })
}

function DeleteGroupMem(th) {
  var line_id = th;

   const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: true
    })

  swalWithBootstrapButtons.fire({
      title: 'Remove Member',
      text: 'Are you sure want to remove member from group?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, remove it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
  if (result.value) {
    $.ajax({
          type: "POST",
          url: baseurl+"ajax/deleteMember",
          data:{
            line_id:line_id
          },
          success: function(response) {
            Swal.fire({
                  type: 'success',
                  title: 'Member has been deleted!',
                })
            window.location.reload()
          }
      })
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'OK! you can do it later',
      'error'
    )
  }
})
}

function English(th) {
  var div = $('.mdlcontent');

Swal.fire({
                  type: 'success',
                  title: 'Content has been translated!',
                  showConfirmButton: false,
                  timer: 1000
                })

  div.html(
'<p><center><span style="font-family: Leahlee"><h2><b>STEMBAPOST</b></h2></span></center></p>' +
'<p align="justify"><b>Stembapost</b> is a web-based application developed by StembaCreativeTeam consists of Devina Rosa Damayanti (1614888) as Back-End Developer and Fahima Choirun Nabila (1614892) as Front-End Developer.</p>' +
'<p align="justify">This application is built with CodeIgniter PHP Framework, Bootstrap 3, jQuery, HTML 5, and CSS-Saas. Beside for the backend, we use DBMS MySQL (PhpMyAdmin) and Restful API for API WhatsApp Connector.</p>' +
'<p align="justify">Stembapost is developed in purpose for last examination school projects created by two students from 4th grade of TKJ 1 and the team wishes Stembapost App could accomplish good broadcasting features by Website through WhatsApp API quickly and efficiently </p>'
    )
}

function Indonesia(th) {
  var div = $('.mdlcontent');

Swal.fire({
                  type: 'success',
                  title: 'Konten sudah diterjemahkan!',
                  showConfirmButton: false,
                  timer: 1000
                })

  div.html(
'<p><center><span style="font-family: Leahlee"><h2><b>STEMBAPOST</b></h2></span></center></p>' +
'<p align="justify"><b>Stembapost</b> merupakan sebuah aplikasi berbasis web yang dikembangkan oleh <b>StembaCreativeTeam</b> beranggotakan Devina Rosa Damayanti (1614888) sebagai Back-End Developer dan Fahima Choirun Nabila (1614892) sebagai Front-End Developer.</p>' +
'<p align="justify">Aplikasi ini dibangun dengan interface Framework PHP CodeIgniter, Bootstrap 3, jQuery, HTML 5, dan CSS-Saas. Selain itu, untuk backend nya digunakan DBMS MySQL (PhpMyAdmin), dan Restful API sebagai <i>connector</i> dengan API WhatsApp.</p>' +
'<p align="justify">Aplikasi ini dikembangkan dengan tujuan sebagai produk karya Tugas Akhir dari siswi kelas XIII TKJ 1 yang diharapkan mampu memudahkan sekolah untuk memberikan fitur broadcasting via WhatsApp untuk mengirimkan informasi yang terkini secara cepat dan efisien.</p>'
    )
}

// document.designMode = "on";
// $('#btnBold').click(function(){
// document.execCommand("bold");
// })

function removeSpaces(string) {
 return string.split(' ').join('');
}


function copyFunction() {
  var copyText = document.getElementById("text_pesan");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  // alert("Copied the text: " + copyText.value);
  Swal.fire({
                  type: 'success',
                  title: 'Copied the text : '+copyText.value+'!',
                  showConfirmButton: false,
                  timer: 1500
                })
}

function copyFahima(th) { 
  var copyText = document.getElementById("wa_fahima");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  // alert("Copied the text: " + copyText.value);
  Swal.fire({
                  type: 'success',
                  title: 'Number is copied : '+copyText.value+'!',
                  // showConfirmButton: false,
                  // timer: 1500
                })
}

function copyDevina(th) { 
  var copyText = document.getElementById("wa_devina");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  // alert("Copied the text: " + copyText.value);
  Swal.fire({
                  type: 'success',
                  title: 'Number is copied : '+copyText.value+'!',
                  // showConfirmButton: false,
                  // timer: 1500
                })
}

function resetFunction() {
$('#text_pesan').val('').trigger('change')
Swal.fire({
                  type: 'success',
                  title: 'Entire text has been reset!',
                  showConfirmButton: false,
                  timer: 1500
                })
}

function getNum(th) {
 var class_id = $('#choose_group').val();
 var num_input = $('#txtRecepient');

 $.ajax({
          type: "POST",
          url: baseurl+"ajax/getNum",
          dataType: 'JSON',
          data:{
            class_id:class_id
          },
          success: function(response) {
            // var new_res = response.substring(1);
            num_input.val(response).trigger('change')
            if (response == '') {
              num_input.val('Maaf, member belum tersedia').trigger('change')
            }
          }
        })
}

function moveTrash(th) {
  var msg_id = th;

  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: true
    })

  swalWithBootstrapButtons.fire({
      title: 'Remove Message',
      text: 'Are you sure want to remove message from history?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, remove it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
  if (result.value) {
    $.ajax({
          type: "POST",
          url: baseurl+"ajax/moveTrash",
          data:{
            msg_id:msg_id
          },
          success: function(response) {
            Swal.fire({
                  type: 'success',
                  title: 'Message has been moved to trash!',
                })
            $('#tbodyDash tr.'+msg_id).remove();
          }
      })
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'OK! you can do it later',
      'error'
    )
  }
})

}

function DetailMSg(th) {
 var msg_id = th;

$('#MdlDetail').modal('show');
$('.modal-tabel').html("<center><img id='loading12' style='width:500px ;margin-top: 2%;' src='"+baseurl+"assets/img/gif/loading99.gif'/><br /></center><br />");
 $.ajax({
          type: "POST",
          url: baseurl+"ajax/detailMsg",
          data:{
            msg_id:msg_id
          },
          success: function(response) {
            $('.modal-tabel').html(response);
          }
        })
}

function permanentDelete(th) {
 var msg_id = th;

  const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: true
    })

  swalWithBootstrapButtons.fire({
      title: 'Remove Message',
      text: 'Are you sure want to delete message permanently?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
  if (result.value) {
    $.ajax({
          type: "POST",
          url: baseurl+"permanentDelete",
          data:{
            msg_id:msg_id
          },
          success: function(response) {
            Swal.fire({
                  type: 'success',
                  title: 'Message has been deleted permanently!',
                })
            window.location.reload()
          }
      })
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'OK! you can do it later',
      'error'
    )
  }
})
}