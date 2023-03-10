<!-- <div class="col-md-2"></div> -->
<div class="content-fluid" style="background-color:white;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px">
<div class="col-md-12">
<table style="width: 100%;" class="text-left">
            <tr>
              <td style="width: 10%"><span><label>Username</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;padding-left: 30px">
                <select id="choose_usr" name="slc_usr" onchange="getUsername(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Choose Username -- </option>
                    <?php foreach ($username as $k) { ?>
                    <option value ="<?= $k['seq']?>"><?= $k['username']?></option>
                    <?php } ?>
                  </select></td>
              <td style="width: 20%;padding-left:20px;"><span><label>Last Priviledges</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <select disabled id="last_prev" name="slc_prev" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Automatically Selected -- </option>
                    
                  </select>
              </td>
            </tr>

            <tr>
              <td><span><label>Enter Code</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;padding-left: 30px">
                  <input onchange="checkCode(this)" type="text" id="codePermisson" placeholder="Insert Permission Code" class="form-control" style="width:300px;"/>
              </td>

              <td style="width: 20%;padding-left:20px;"><span><label>New Priviledges</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <select disabled id="id_prev" name="prev_name" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Choose Priviledge -- </option>
                    <option value="1000"> Superuser </option>
                    <option value="100"> Admin </option>
                    <option value="10"> User </option>
                  </select>
              </td>
            </tr>
          </table>
          <div class="col-md-12 col-xs-12" style="margin-top:10px;">
            <button id="btnSavePrev" onclick="saveSetupPrev(this)" type="button" disabled class="btn btn-success btn-m" style="width:100px;margin-left: 900px;"><i class="fa fa-check"></i> Save</button>
          </div>
        </div>
      </div>
          <br/>
       <br/>   
       <br/>