<style type="text/css">
.dataTables_filter{
  float: right!important;
  margin-right:50px;
  
}

.dataTables_filter .input-sm{
  margin-left: 5px;
}

.paging_simple_numbers{
   float: right!important;
  margin-right:50px

}
.dataTables_info{
  padding-top: 30px;
}

.dataTables_length{
float: left!important;
}

.dataTables_info{
float: left!important;
}
</style>

<div class="content-fluid" style="background-color:white;margin-bottom:100px;padding-top: 10px;padding-bottom: 50px;padding-left:50px;padding-right:50px; margin-left: 50px;">
<!-- <div class="col-md-12"> -->
<table border="0" style="width: 100%;margin-bottom: 5px;margin-left: 5px" class="text-left">
            <tr>
              <td style="width: 10%"><span><label>Group Name</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                <select id="group_name" onclick="identify(this)" name="slcGroupName" onclick="group_name(this)" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Choose Group Name -- </option>
                    <option value="0" ><b>Create New Group </b></option>
                    <?php foreach ($group as $k){ ?>
                    <option value="<?= $k['class_id']?>"><?= $k['class_name']?></option>
                    <?php } ?>
                  </select>
              </td>
              
              <td style="width: 10%"><span><label>Class</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <select onchange="onFilterStudent(this)" id="class_id_add" name="prev_name" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Choose Class -- </option>
                    <option value="0"> -- No Class -- </option>
                    <?php foreach ($class as $k){ ?>
                    <option value="<?= $k['class_id']?>"><?= $k['class_name']?></option>
                    <?php } ?>
                  </select>
            </td>
            </tr>

            <tr>
              <td><span><label>New Group</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <input disabled placeholder="Insert New Group Name" id="new_group" type="text" class="form-control" style="width:300px;"/>
            </td>

              <td><span><label>Students</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <select id="student_id" name="prev_name" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option value=""> -- Choose Students -- </option>
                    <?php foreach ($student as $k){ ?>
                    <option value="<?= $k['contact_id']?>"><?= $k['full_name']?> - <?= $k['phone_num']?></option>
                    <?php } ?>
                  </select>
            </td>
            </tr>

            <tr>
              <td><span><label>Department</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <select onchange="onFilterClass2(this)" id="department_id_add" name="prev_name" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Choose Department -- </option>
                    <?php foreach ($department as $k){ ?>
                    <option value="<?= $k['department_id']?>"><?= $k['department_name']?></option>
                    <?php } ?>
                  </select>
            </td>
              <td><span><label>Teacher</label></span></td>
              <td style="width: 20%;padding-bottom: 5px;">
                  <select id="teacher_id" name="slcTeacher" class="form-control select2 text-center select2-hidden-accessible" style="width:300px;">
                    <option> -- Choose Teacher -- </option>
                    <?php foreach ($teacher as $k){ ?>
                    <option value="<?= $k['contact_id']?>"><?= $k['full_name']?> - <?= $k['phone_num']?></option>
                    <?php } ?>
                  </select>
            </td>

          </tr>
          </table>
          <div class="col-md-12 col-xs-12" style="margin-top:10px;margin-right:8px;">
            <button onclick="saveGroup(this)" type="button" class="btn btn-success btn-m pull-right" style="width:100px;margin-right: 62px;margin-bottom: 30px"><i class="fa fa-check"></i> Save</button>
          </div>
            <table class="table table-address table-bordered table-hover text-center table_group" style="width: 100%;margin-top: 30px;width: 990px">
                <thead class="table-primary">
                  <tr class="bg-primary">
                      <th class="text-center" >No</th>
                      <th class="text-center" >Group Name</th>
                      <th class="text-center" >Group ID</th>
                      <th class="text-center" >Full Name</th>
                      <th class="text-center" >Phone Number</th>
                      <th class="text-center" >Action</th>
                    </tr>
                </thead>
            <tbody>
              <?php $no=1; foreach ($list as $k) { ?>
                <tr>
                  <td><?= $no;?></td>
                  <td><b><?= $k['group_name'];?></b></td>
                  <td><?= $k['class_id'];?></td>
                  <td><?= $k['full_name'];?></td>
                  <td><?= $k['phone_num'];?></td>
                  <td><button onclick="DeleteGroupMem(<?= $k['line_id']?>)" class="btn btn-danger btn-sm" id="btnDeleteGroup"><i class="fa fa-trash"></i> Delete</button></td>
                </tr>
              <?php $no++;} ?>
            </tbody>
</table>
<script type="text/javascript">
   $(document).ready(function(){
  $('.table_group').DataTable({
    "paging": true,
    "info":     true,
    "language" : {
    "zeroRecords": "Sorry, data not found :("             
    }
  })

  })
</script>