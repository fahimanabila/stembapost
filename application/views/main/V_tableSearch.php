<div style="overflow: auto">
                    <table class="table table-address table-bordered table-hover table_contact" style="min-width: 100%">
                      <thead class="toscahead">
                        <tr class="bg-primary">
                            <th class="text-center" style="width: 5%">No</th>
                            <th class="text-center" style="width: 25%;">Name</th>
                            <th class="text-center" style="width: 10%;">No Induk</th>
                            <th class="text-center" style="width: 10%;">Class/Group Name</th>
                            <th class="text-center" style="width: 20%;">Department</th>
                            <th class="text-center" style="width: 15%;">Phone Number</th>
                            <th class="text-center" style="width: 5%;">Status</th>
                            <th class="text-center" style="width: 10%;">Action</th>
                          </tr>
                      </thead>
                        <tbody id="tbody_contact">
                          <?php $a=1; foreach ($param as $b) {?>
                            <tr>
                                <td><?= $a;?></td>
                                <td><?= $b['full_name']?>
                                </td>
                                <td><?= $b['no_ind']?></td>
                                <td><?= $b['class_name']?></td>
                                <td><?= $b['department_name']?></td>
                                <td class="text-center">
                                    <input disabled value="<?= $b['phone_num']?>" type="text" class="form-control phone<?= $b['contact_id']?>" id="inputNum" style="width: 100%">
                                </td>
                                <td><?php if ($b['active_flag'] == 'Y') { ?> 
                                    <span>
                                        <label class="label label-success"><i class="fa fa-check"></i> Active</label>
                                    </span>
                                    <?php }else if ($b['active_flag'] == 'N') { ?>
                                    <span>
                                        <label class="label label-danger"><i class="fa fa-times"></i> Inactive</label>
                                    </span>
                                    <?php } ?></td>
                                <td>
                                    <div class="change" id="div<?= $b['contact_id']?>">
                                        <?php if ($b['phone_num'] == '' OR $b['phone_num'] == null) {?>
                                        <a target="_blank" href="<?php echo base_url('Personal/'.$b['contact_id'])?>">
                                        <button disabled title="There is no phone number" disabled id="btnAddNum" class="btn btn-warning btn-sm"><i class="fa fa-external-link"></i> Send</button>
                                        </a>
                                        <?php }else{?>
                                        <a target="_blank" href="<?php echo base_url('Personal/'.$b['contact_id'])?>">
                                        <button type="button" id="btnAddNum" title="Contact is available" class="btn btn-warning btn-sm"><i class="fa fa-external-link"></i> Send</button>
                                        </a>
                                        <?php }?>
                                    </div>
                                </td>
                            </tr>
                          <?php $a++;}?>
                        </tbody>
                    </table>
                </div>
<script type="text/javascript">
  $(document).ready(function(){
  $('.table_contact').DataTable({
    "paging": true,
    "info":     true,
    "language" : {
    "zeroRecords": "Sorry, data not found :("             
    }
  })

  })
</script>