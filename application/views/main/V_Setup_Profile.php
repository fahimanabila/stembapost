<div class="content-fluid" style="background-color:white;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px">
<div class="col-md-12">
<table style="width: 100%;" class="text-left">
            <tr>
              <td style="width: 10%"><span><label>Username</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;padding-left: 30px">
                <input value ="<?php echo $person[0]['username'] ?>" id="txtUsernameProfile" type="text" class="form-control" style="width:300px;"/>
              </td>

              <td style="width: 20%;padding-left:20px;"><span><label>Last Password</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <input type="hidden" id="last_password" value="<?php echo $person[0]['last_password']?>">
                  <input type="password" id="typed_last_password" placeholder="Insert Last Password" class="form-control" style="width:300px;"/>
              </td>
            </tr>

            <tr>
              <td><span><label>Full Name</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;padding-left: 30px">
                  <input id="full_name_profile" value="<?php echo $person[0]['user'] ?>" type="text" class="form-control" style="width:300px;"/>
              </td>

              <td style="width: 20%;padding-left:20px;"><span><label>New Password</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <input id="new_password_profile" type="password" placeholder="Insert New Password" class="form-control" style="width:300px;"/>
              </td>
            </tr>
          </table>
          <div class="col-md-12 col-xs-12" style="margin-top:10px;">
            <button type="button" onclick="saveProfile(this)" class="btn btn-success btn-m" id="btnProfile" value="<?php echo $person[0]['seq']?>" style="width:100px;margin-left: 900px;"><i class="fa fa-check"></i> Save</button>
          </div>
        </div>
      </div>
          <br/>
       <br/>   
       <br/>