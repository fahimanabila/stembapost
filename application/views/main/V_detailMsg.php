<div class="col-md-12" style="margin-bottom: 30px;">
	<h3 style="font-family: Spartan;">Detail Message ID <b><?php echo $detail[0]['message_id'] ?></b></h3>
<table style="margin-top: 20px;" style="width: 100%">
	<tr>
		<td style="padding-bottom: 10px;width: 10%;"><span>Sender Number</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><input type="text" class="form-control" name="txtSender" style="width: 300px;margin-left:30px;"" value="<?php echo $detail[0]['sender_number'] ?>"></td>

		<td style="padding-bottom: 10px;width: 10%;"><span>From</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><input type="text" class="form-control" name="txtSender" style="width: 300px;" value="<?php echo $detail[0]['from_sender'] ?>"></td>
	</tr>
		
	<tr>
		<td style="padding-bottom: 10px;width: 10%;"><span>Administrator</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><input type="text" class="form-control" name="txtSender" style="width: 300px;margin-left:30px;"" value="<?php echo $detail[0]['username'] ?>"></td>

		<td style="padding-bottom: 10px;width: 10%;"><span>Subject</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><input type="text" class="form-control" name="txtSender" style="width: 300px;" value="<?php echo $detail[0]['subject'] ?>"></td>
	</tr>

	<tr>
		<td style="padding-bottom: 10px;width: 10%;"><span>Creation Date</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><input type="text" class="form-control" name="txtSender" style="width: 300px;margin-left:30px;"" value="<?php echo $detail[0]['creation_date'] ?>"></td>

		<td style="padding-bottom: 10px;width: 10%;"><span>Status</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><input type="text" class="form-control" name="txtSender" style="width: 300px;" value="<?php echo $detail[0]['active_flag'] ?>"></td>
		
	</tr>

	<tr>
		<td style="padding-bottom: 10px;width: 10%;"><span>Receiver Number</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><textarea type="text" class="form-control" name="txtSender" style="width: 300px;margin-left:30px;min-height: 200px;"><?php $con = str_replace(',', ' - ', $detail[0]['receiver_number']); echo $con; ?></textarea></td>
		
		<td style="padding-bottom: 10px;width: 10%;"><span>Messages</span></td>
		<td style="padding-bottom: 10px;width: 40%;"><textarea type="text" class="form-control" name="txtSender" style="width: 300px;min-height: 200px;"><?php echo $detail[0]['messages'] ?></textarea></td>
	</tr>
</table>
</div>