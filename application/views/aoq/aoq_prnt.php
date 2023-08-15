   	<?php 
   	$CI =& get_instance();  ?>
   	<style type="text/css">
        html, body{
            background: #2d2c2c!important;
            font-size:12px!important;
        }
        .pad{
        	padding:0px 30px 0px 30px
        }
        @media print{
        	.pad{
        	padding:0px 0px 0px 0px
        	}
        }
        .served{
        	background-image: url('<?php echo base_url(); ?>assets/img/served_aoq.png')!important;
        	background-repeat:no-repeat!important;
        	background-size: contain!important;
        	background-position: center center!important;
        }
        .table-bordered>tbody>tr>td, 
        .table-bordered>tbody>tr>th, 
        .table-bordered>tfoot>tr>td, 
        .table-bordered>tfoot>tr>th, 
        .table-bordered>thead>tr>td, 
        .table-bordered>thead>tr>th
        {
		    border: 1px solid #000!important;
		}
		.table-borbold{
			border: 2px solid #000!important;
		}
		.table-borreg{
			border: 1px solid #000!important;
		}
		.f12{
			font-size:12px!important;
		}
		.f10{
			font-size:12px!important;
		}
		.f9{
			font-size:9px!important;
		}
		.bor-btm{
			border-bottom: 1px solid #000!important;
		}
		.bor-btm-red{
			border-bottom: 2px solid red!important;
		}
		.bor-right{
			border-right: 1px solid #000!important;
		}
		.sel-des{
			border: 0px!important;
		}
		@media print{
			html, body{
	            background: #fff!important;
	            font-size:12px!important;
	        }
			#prnt_btn{
				display: none;
			}
			#add_btn{
				display: none;
			}
			.f12{
				font-size:12px!important;
			}
			.f10{
				font-size:11px!important;
			}
			.text-red{
				color: red!important;
			}
			.bor-right{
				border-right: 1px solid #000!important;
			}
			.yellow-back{
			background-image: url('<?php echo base_url(); ?>assets/img/yellow.png')!important;
			}
			.green-back{
				background-image: url('<?php echo base_url(); ?>assets/img/green.png')!important;
			}
			.served{
	        	background-image: url('<?php echo base_url(); ?>assets/img/served_aoq.png')!important;
	        	background-repeat:no-repeat!important;
	        	background-size: contain!important;
	        	background-position: center center!important;
	        }
		}
		.text-white{
			color: #fff;
		}
		.text-red{
			color: red;
		}
		.yellow-back{
			background-image: url('<?php echo base_url(); ?>assets/img/yellow.png');
		}
		.green-back{
			background-image: url('<?php echo base_url(); ?>assets/img/green.png');
		}
		.emphasis{
			border-bottom: 2px solid red;
		}
		.v-al{
			vertical-align: text-top;
		}
		/* -------------------- Colors: Background */
		.slate   { background-color: #ddd; }
		.green   { background-color: #779126; }
		.blue    { background-color: #3b8ec2; }
		.yellow  { background-color: #eec111; }
		.black   { background-color: #000; }

		/* -------------------- Colors: Text */
		.slate select   { color: #000; }
		.green select   { color: #fff; }
		.blue select    { color: #fff; }
		.yellow select  { color: #000; }
		.black select   { color: #fff; }


		select#soflow, select#soflow-color {
			-webkit-appearance: button;
			-webkit-border-radius: 2px;
			-webkit-padding-end: 20px;
			-webkit-padding-start: 2px;
			-webkit-user-select: none;
			background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
			background-position: 98% center;
			background-repeat: no-repeat;
			border: 1px solid #AAA;
			color: #555;
			font-size: inherit;
			overflow: hidden;			
			padding: 6px 50px 6px 12px;
			text-overflow: ellipsis;
			white-space: pre-wrap;
			width: 100%;			
			font-size: 14px;
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
			-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
			transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		}


		select#soflow-color {
		    color: #fff;
		    background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient( #ff9966 , #ec7955);
		    background-color: #da6946;
		    /*-webkit-border-radius: 20px;
		    -moz-border-radius: 20px;*/
		   /* border-radius: 20px;*/
		    padding-left: 15px;
		}
		select#soflow-color>option:hover{
			color: #000!important;
			background: #fff!important;
		}
		.op:hover{
			color: #000!important;
			background: #fff!important;
		}
    </style>
    <script>
    	function calculateAmount(count, vendor, position){
    
		   var quantity = document.getElementById("quantity_"+count).value;
		   var price = document.getElementById("price_"+count+"_"+vendor+"_"+position).value;
		   var amount = parseFloat(price) * parseFloat(quantity);
		   document.getElementById("amount_"+count+"_"+vendor+"_"+position).value  =amount;
		
		}

		function calculateAmount2(count){
        //alert(count);
		   var quantity = document.getElementById("quantity_"+count).value;
		   var price = document.getElementById("price_"+count).value;
		   //alert(quantity);
		   //alert(price);
		    var p = price.replace(",", "");
		   
		   var amount = parseFloat(p) * parseFloat(quantity);
		   document.getElementById("amount_"+count).value  =amount;
		
		}

		function isNumberKey(txt, evt){
		   var charCode = (evt.which) ? evt.which : evt.keyCode;
		    if (charCode == 46) {
		        //Check if the text already contains the . character
		        if (txt.value.indexOf('.') === -1) {
		            return true;
		        } else {
		            return false;
		        }
		    } else {
		        if (charCode > 31
		             && (charCode < 48 || charCode > 57))
		            return false;
		    }
		    return true;
		}

    </script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mixins.css">
    <script src="<?php echo base_url(); ?>assets/js/all-scripts.js"></script> 
    <?php if($saved==0 && $open==0 && $draft==0){
    	$url = base_url()."aoq/save_aoq";
    } else if($saved==1 && $open==0){ 
    	$url = base_url()."aoq/award_aoq";
     } else if($saved==1 && $open==1){ 
    	$url = base_url()."aoq/update_aoq";
     }else if($saved==0 && $open==0 && $draft==1){ 
    	$url = base_url()."aoq/save_aoq_draft";
     }?>
    <div  class="pad">
    	<form method='POST' action='<?php echo $url ?>' onsubmit="return confirm('Do you really want to submit the form?');">
    		<div id="prnt_btn">
	    		<center>
			    	<div class="btn-group">
						<a onclick="return quitBox('quit');" class="btn btn-success btn-md p-l-100 p-r-100"><span class="fa fa-arrow-left"></span> Back</a>
							<?php if($saved==1 && $open==0){ ?>
						<a href='<?php echo base_url(); ?>aoq/open_aoq_before/<?php echo $aoq_id; ?>' class="btn btn-info btn-md p-l-100 p-r-100">Open AOQ</a>
						<!-- <input type='submit' class="btn btn-info btn-md p-l-100 p-r-100" value='Done'> -->
						<?php } if($saved==1 ){ ?>
						<!-- <a  onclick="printPage()" class="btn btn-warning btn-md p-l-100 p-r-100"><span class="fa fa-print"></span> Print</a> -->
						<a href="<?php echo base_url(); ?>aoq/export_aoq_prnt/<?php echo $aoq_id;?>" class="btn btn-warning btn-md p-l-100 p-r-100"><span class="fa fa-export"></span> Export</a>
						<?php } ?>
						<!-- <a  onclick="printPage()" class="btn btn-info btn-md p-l-100 p-r-100"><span class="fa fa-print"></span> Export</a> -->
						<?php  if($saved==0 && $open==0){ ?>
							<input type='submit' name ="submit" class="btn btn-warning btn-md p-l-100 p-r-100" value="Save AOQ As Draft" >
							<input type='submit' name ="submit" class="btn btn-primary btn-md p-l-100 p-r-100" value="Save AOQ" >
							
						<?php } else if ($saved==1 && $open==0 && $awarded==0){ ?>
							<input type='submit' class="btn btn-primary btn-md p-l-100 p-r-100" value="Award">
						<?php } else if ($saved==1 && $open==1 && $awarded==0){ ?>
							<input type='submit' class="btn btn-primary btn-md p-l-100 p-r-100" value="Save Changes">
						<?php } ?>
					</div>
					<p class="text-white p-l-250 p-r-250">Instructions: When printing ABSTRACT OF QUOTATION make sure the following options are set correctly -- <u>Browser</u>: Chrome, <u>Layout</u>: Landscape, <u>Paper Size</u>: A4 <u>Margin</u> : Custom (top: 0.11" , right:1.25", bottom: 0.11", left: 0.11") <u>Scale</u>: 100 and the option: Background graphics is checked</p>
				</center>
			</div>
	    	<div style="background: #fff;width: 200%!important" class = "<?php if($served==1){ echo 'served';} ?>"> 
		    	<table class="table-boddered" width="100%" style="border:2px solid #000">
		    		<tr><td colspan="21"><h5><b>AOQ - <?php echo $aoq_id; ?></b></h5></td></tr>
		    		<tr>
		    			<td width="2%"><br></td>
		    			<td width="7%"><br></td>
		    			<td width="3%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>

		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    	 		<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    			<td width="5%"><br></td>
		    		</tr>		    		
		    		<tr><td class="f10" colspan="21"  align="center"><h5><b>ABSTRACT OF QUOTATION</b></h5></td></tr>
		    		<?php foreach($head AS $h){ ?>
		    		<tr>
		    			<td class="f10" colspan="2" align="right">Department: &nbsp;</td>
		    			<td class="f10" colspan="9"><?php echo $h['department']; ?></td>		    			
		    			<td class="f10" colspan="2" align="right">Date: &nbsp;</td>
		    			<td class="f10" colspan="8"><?php echo $h['aoq_date']; ?></td>
		    		</tr>	
		    		<tr>
		    			<td class="f10" colspan="2" align="right">Purpose: &nbsp;</td>
		    			<td class="f10" colspan="9"><?php echo $h['purpose']; ?></td>		    			
		    			<td class="f10" colspan="2" align="right">PR #: &nbsp;</td>
		    			<td class="f10" colspan="8"><?php echo $h['pr_no']."-".COMPANY; ?> </td>
		    		</tr>
		    		<tr>
		    			<td class="f10" colspan="2" align="right">Enduse: &nbsp;</td>
		    			<td class="f10" colspan="9"><?php echo $h['enduse']; ?></td>		    			
		    			<td class="f10" colspan="2" align="right">Date Needed: &nbsp;</td>
		    			<td class="f10" colspan="8"></td>
		    		</tr>	
		    		<tr>
		    			<td class="f10" colspan="2" align="right">Requested by: &nbsp;</td>
		    			<td class="f10" colspan="19"><?php echo $h['requestor']; ?></td>
		    		</tr>
		    		<?php } ?>
		    		<tr>
		    			<td class="f10" colspan="5" align="center">
		    				<!-- <button id="add_btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="">
							  <span class="fa fa-plus"></span> Add Item
							</button>	 -->						
		    			</td>
		    			<?php foreach($vendors AS $ven) { ?>
		    			<td colspan="5" class="f10 table-borbold"  align="center">
		    				<b><?php echo $ven['vendor']; ?></b><br>
		    				<?php echo $ven['phone']; ?><br>
		    				<?php echo $ven['contact']; ?>
		    			</td>
		    			<?php } ?>
		    			
		    		</tr>
		    		<tr>
		    			<td class="f9 table-borbold" align="center"><b>#</td>
		    			<td class="f9 table-borbold" align="center" colspan="2"><b>DESCRIPTION</td>
		    			<td class="f9 table-borbold" align="center"><b>QTY</td>
		    			<td class="f9 table-borbold" align="center"><b>UOM</td>


		    			<td class="f9 table-borbold" align="center"><b>OFFER</b></td>
		    			<td class="f9 table-borbold" align="center"><b>CURR</b></td>
		    			<td class="f9 table-borbold" align="center"><b>U/P</b></td>
		    			<td class="f9 table-borbold" align="center"><b>AMOUNT</b></td>
		    			<td class="f9 table-borbold" align="center"><b>COMMENTS</b></td>

		    			<td class="f9 table-borbold" align="center"><b>OFFER</b></td>
		    			<td class="f9 table-borbold" align="center"><b>CURR</b></td>
		    			<td class="f9 table-borbold" align="center"><b>U/P</b></td>
		    			<td class="f9 table-borbold" align="center"><b>AMOUNT</b></td>
		    			<td class="f9 table-borbold" align="center"><b>COMMENTS</b></td>

		    			<td class="f9 table-borbold" align="center"><b>OFFER</b></td>
		    			<td class="f9 table-borbold" align="center"><b>CURR</b></td>
		    			<td class="f9 table-borbold" align="center"><b>U/P</b></td>
		    			<td class="f9 table-borbold" align="center"><b>AMOUNT</b></td>
		    			<td class="f9 table-borbold" align="center"><b>COMMENTS</b></td>
		    		</tr>

		    		<?php
		    		$x=1; 
		    		foreach($items AS $it){ ?>
		    			
		    			<input type='hidden' name='quantity_<?php echo $x; ?>' id="quantity_<?php echo $x; ?>" value='<?php echo $it->quantity; ?>'>
		    		<tr style='border:2px solid #000'>
		    			<td class="f10 table-borreg" align="center"><?php echo $CI->get_item_no($it->pr_details_id); ?></td>
		    			<td class="f10 table-borreg" align="left" colspan="2"><?php echo (!empty($CI->get_pn($it->pr_details_id))) ? $it->item_description.", ".$CI->get_pn($it->pr_details_id) : $it->item_description; ?></td>
		    			<td class="f10 table-borreg" align="center"><?php echo $it->quantity; ?></td>
		    			<td class="f10 table-borreg" align="center"><?php echo $it->uom; ?></td>


		    		<!-------------------------- VENDOR 1 ------------------------>
		    			<?php
		    			if($saved==0 && $open==0 && $draft==0){
			    			$v=1; 
			    			foreach($vendors AS $ven) {
			    				 ?>
			    			<td colspan="5" style='border:1px solid #000;vertical-align: text-top;' >
			    				<table class="" width="100%" style='border:0px solid #000;'>						
			    					<tr>
				    					<td width="20%" class="bor-btm bor-right">
				    						<textarea type="text" class="form-control f10" name="offer_<?php echo $x; ?>_<?php echo $v; ?>_1" rows="1"></textarea>
				    					</td>
				    					<td width="10%" class="bor-btm bor-right f10" align="center">
				    							<select style="width: 100%" name='currency_<?php echo $x; ?>_<?php echo $v; ?>_1'>
						    					<?php foreach($currency AS $curr){ ?>
						    						<option value="<?php echo $curr; ?>" <?php echo (($curr=='PHP') ? ' selected' : ''); ?>><?php echo $curr; ?></option>
						    					<?php } ?>
						    				</select>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10" align="center">
				    						<input type="text" class="form-control f10" id="price_<?php echo $x; ?>_<?php echo $v; ?>_1" name="price_<?php echo $x; ?>_<?php echo $v; ?>_1" 
				    						onblur="calculateAmount(<?php echo $x; ?>, <?php echo $v; ?>,'1')" onkeypress="return isNumberKey(this, event)">
				    					</td>
				    					<td width="20%" class="bor-btm bor-right" align="center">
				    						<input type="text" class="form-control f10" readonly="readonly" id="amount_<?php echo $x; ?>_<?php echo $v; ?>_1" name="amount_<?php echo $x; ?>_<?php echo $v; ?>_1">
				    					</td>
				    					<td width="20%" class="bor-btm bor-right">
				    						<!-- <textarea type="text" class="form-control f10" name="" rows="1"></textarea> -->
				    					</td>
				    				</tr>
				    				<tr>
				    					<td width="20%" class="bor-btm bor-right">
				    						<textarea type="text" class="form-control f10" name="offer_<?php echo $x; ?>_<?php echo $v; ?>_2" rows="1"></textarea>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10" align="center">
				    							<select style="width: 100%" name='currency_<?php echo $x; ?>_<?php echo $v; ?>_2'>
						    					<?php foreach($currency AS $curr){ ?>
						    						<option value="<?php echo $curr; ?>" <?php echo (($curr=='PHP') ? ' selected' : ''); ?>><?php echo $curr; ?></option>
						    					<?php } ?>
						    				</select>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10" align="center">
				    						<input type="text" class="form-control f10" id="price_<?php echo $x; ?>_<?php echo $v; ?>_2" name="price_<?php echo $x; ?>_<?php echo $v; ?>_2"
				    						onblur="calculateAmount(<?php echo $x; ?>, <?php echo $v; ?>,'2')" onkeypress="return isNumberKey(this, event)">
				    					</td>
				    					<td width="20%" class="bor-btm bor-right" align="center">
				    						<input type="text" class="form-control f10" readonly="readonly" id="amount_<?php echo $x; ?>_<?php echo $v; ?>_2" name="amount_<?php echo $x; ?>_<?php echo $v; ?>_2">
				    					</td>
				    					<td width="20%" class="bor-btm bor-right">
				    						<!-- <textarea type="text" class="form-control f10" name="" rows="1"></textarea> -->
				    					</td>
				    				</tr>
				    				<tr>
				    					<td width="20%" class="bor-btm bor-right">
				    						<textarea type="text" class="form-control f10" name="offer_<?php echo $x; ?>_<?php echo $v; ?>_3" rows="1"></textarea>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10" align="center">
				    							<select style="width: 100%" name='currency_<?php echo $x; ?>_<?php echo $v; ?>_3'>
						    					<?php foreach($currency AS $curr){ ?>
						    						<option value="<?php echo $curr; ?>" <?php echo (($curr=='PHP') ? ' selected' : ''); ?>><?php echo $curr; ?></option>
						    					<?php } ?>
						    				</select>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10" align="center">
				    						<input type="text" class="form-control f10" id="price_<?php echo $x; ?>_<?php echo $v; ?>_3" name="price_<?php echo $x; ?>_<?php echo $v; ?>_3" onblur="calculateAmount(<?php echo $x; ?>, <?php echo $v; ?>,'3')" onkeypress="return isNumberKey(this, event)">
				    					</td>
				    					<td width="20%" class="bor-btm bor-right" align="center">
				    						<input type="text" class="form-control f10" readonly="readonly" id="amount_<?php echo $x; ?>_<?php echo $v; ?>_3" name="amount_<?php echo $x; ?>_<?php echo $v; ?>_3">
				    					</td>
				    					<td width="20%" class="bor-btm bor-right">
				    						
				    					</td>
				    				</tr>
			    				</table>		    			
			    			</td>
			    			<input type='hidden' name='uom_<?php echo $x; ?>_<?php echo $v; ?>' value='<?php echo $it->uom; ?>'>
			    			<input type='hidden' name='quantity_<?php echo $x; ?>_<?php echo $v; ?>' value='<?php echo $it->quantity; ?>'>
			    			<input type='hidden' name='item_<?php echo $x; ?>_<?php echo $v; ?>' value='<?php echo $it->aoq_items_id; ?>'>
			    			<input type='hidden' name='pr_details_id_<?php echo $x; ?>_<?php echo $v; ?>' value='<?php echo $it->pr_details_id; ?>'>
			    			<input type='hidden' name='vendor_<?php echo $x; ?>_<?php echo $v; ?>' value='<?php echo $ven['vendor_id']; ?>'>
			    			<?php 
			    			$v++;
			    			} ?>
			    			<input type='hidden' name='vendor_count' value='<?php echo $v; ?>'>

		    		<?php 
		    			} else if($saved==1 && $open==0) { 
		    				
		    				foreach($vendors AS $ven) {
		    				
			    				 ?>
		    					
			    			<td colspan="5" style='border:1px solid #000;vertical-align: text-top;' >
			    				<table class="" width="100%" style='border:0px solid #000;'>		
			    				<?php 	
			    				$a=1;
			    				foreach($offers AS $of){
		    						if($ven['vendor_id'] == $of['vendor_id'] && $it->aoq_items_id == $of['item_id']){ ?>				
			    					<tr>
				    					<td width="20%" class="bor-btm bor-right">
				    						<?php echo nl2br($of['offer']); ?>
				    					</td>
				    						<td width="20%" class="bor-btm bor-right">
				    						<center><?php echo $of['currency']; ?></center>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10 <?php echo (($of['price']==$of['min']) ? 'yellow-back' : ''); ?> " align="center">
				    						<?php echo number_format($of['price'],4); ?>
				    					</td>
				    					<?php if($awarded==0){ ?>
				    					<td width="20%" class="bor-btm-red bor-right" align="center">				    						
				    						<?php echo number_format($of['amount'],2); ?><br>
				    						<input type="checkbox" name="award_<?php echo $a; ?>" value="1" >
				    					</td> 
				    					<?php } else { ?>
				    						<td width="20%" class="bor-btm bor-right <?php echo (($of['recommended'] == 1) ? 'green-back': ''); ?>" align="center">				    						
					    						<?php echo number_format($of['amount'],2); ?><br>
					    					</td> 
					    				<?php } 

					    				if($awarded==0){  ?>
				    					<td width="20%" class="bor-btm-red bor-right">
				    						<textarea type="text" class="form-control f10" name="comments_<?php echo $a; ?>" rows="1"><?php echo $of['comments']; ?></textarea>
				    					</td>
				    					<?php } else { ?>
				    						<td width="20%" class="bor-btm bor-right">
				    							<?php echo $of['comments']; ?>
				    						</td>
				    					<?php } ?>
				    				</tr>
				    				<input type='hidden' name='offerid_<?php echo $a; ?>' value="<?php echo $of['aoq_offer_id']; ?>">
				    				<?php }
				    				$a++;
				    				}
				    				?>
				    			<input type='hidden' name='count_offer' value='<?php echo $a; ?>'>
			    				</table>		    			
			    			</td>
			    		
			    			<?php 
			    			
			    			}

		    			 } else if($saved==1 && $open==1) { 
		    				
		    				foreach($vendors AS $ven) {
		    				
			    				 ?>
		    					
			    			<td colspan="5" style='border:1px solid #000;vertical-align: text-top;' >
			    				<table class="" width="100%" style='border:0px solid #000;'>		
			    				<?php 	
			    					$a=1;
			    					foreach($offers AS $of){
			    				?>
			    				<input type='hidden' name='quantity_<?php echo $a; ?>' id='quantity_<?php echo $a; ?>' value='<?php echo $of['quantity']; ?>'>
		    					<?php if($ven['vendor_id'] == $of['vendor_id'] && $it->aoq_items_id == $of['item_id']){ ?>				
			    					<tr>
				    					<td width="20%" class="bor-btm bor-right">
				    						<textarea  class="form-control f10" name='offer_<?php echo $a; ?>'><?php echo nl2br($of['offer']); ?></textarea>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10 " align="center">
				    						<select name='currency_<?php echo $a; ?>'>
						    					<?php foreach($currency AS $curr){ ?>
						    						<option value="<?php echo $curr; ?>" <?php echo (($curr==$of['currency']) ? ' selected' : ''); ?>><?php echo $curr; ?></option>
						    					<?php } ?>
						    				</select>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10 " align="center">
				    						<input type='text' class="form-control f10" name='price_<?php echo $a; ?>' id='price_<?php echo $a; ?>' value="<?php echo number_format($of['price'],4); ?>" onblur="calculateAmount2(<?php echo $a; ?>)" onkeypress="return isNumberKey(this, event)">
				    					</td>
				    					
				    					<td width="20%" class="bor-btm-red bor-right" align="center">				    						
				    						<input type='text' class="form-control f10" name='amount_<?php echo $a; ?>' id='amount_<?php echo $a; ?>' readonly="readonly" value="<?php echo number_format($of['amount'],2); ?>">
				    						
				    					</td> 
				    					<td width="20%" class="bor-btm-red bor-right">
				    						
				    					</td>
				    					
				    				</tr>
				    				<input type='hidden' name='offerid_<?php echo $a; ?>' value="<?php echo $of['aoq_offer_id']; ?>">
				    				<?php }
				    				$a++;
				    				}
				    				?>

				    			<input type='hidden' name='count_offer' value='<?php echo $a; ?>'>
				    			
			    				</table>		    			
			    			</td>
			    			<?php } }else if($saved==0 && $open==0 && $draft==1){ 
				    			foreach($vendors AS $ven) {
			    			?>
		    					
			    			<td colspan="5" style='border:1px solid #000;vertical-align: text-top;' >
			    				<table class="" width="100%" style='border:0px solid #000;'>		
			    				<?php 	
			    					$a=1;
			    					foreach($offers AS $of){
			    				?>
			    				<input type='hidden' name='quantity_<?php echo $a; ?>' id='quantity_<?php echo $a; ?>' value='<?php echo $of['quantity']; ?>'>
		    					<?php if($ven['vendor_id'] == $of['vendor_id'] && $it->aoq_items_id == $of['item_id']){ ?>				
			    					<tr>
				    					<td width="20%" class="bor-btm bor-right">
				    						<textarea  class="form-control f10" name='offer_<?php echo $a; ?>'><?php echo nl2br($of['offer']); ?></textarea>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10 " align="center">
				    						<select name='currency_<?php echo $a; ?>'>
						    					<?php foreach($currency AS $curr){ ?>
						    						<option value="<?php echo $curr; ?>" <?php echo (($curr==$of['currency']) ? ' selected' : ''); ?>><?php echo $curr; ?></option>
						    					<?php } ?>
						    				</select>
				    					</td>
				    					<td width="20%" class="bor-btm bor-right f10 " align="center">
				    						<input type='text' class="form-control f10" name='price_<?php echo $a; ?>' id='price_<?php echo $a; ?>' value="<?php echo number_format($of['price'],4); ?>" onblur="calculateAmount2(<?php echo $a; ?>)" onkeypress="return isNumberKey(this, event)">
				    					</td>
				    					
				    					<td width="20%" class="bor-btm-red bor-right" align="center">				    						
				    						<input type='text' class="form-control f10" name='amount_<?php echo $a; ?>' id='amount_<?php echo $a; ?>' readonly="readonly" value="<?php echo number_format($of['amount'],2); ?>">
				    						
				    					</td> 
				    					<td width="20%" class="bor-btm-red bor-right">
				    						
				    					</td>
				    					
				    				</tr>
				    				<input type='hidden' name='offerid_<?php echo $a; ?>' value="<?php echo $of['aoq_offer_id']; ?>">
				    				<?php } $a++; } ?>
				    			<input type='hidden' name='count_offer' value='<?php echo $a; ?>'>
			    				</table>		    			
			    			</td>
			    			<?php } } ?>
		    		</tr>	

		    	<?php $x++;
		    	} ?>
		    	<input type='hidden' name='item_count' value='<?php echo $x; ?>'>
		    	
		    	<input type='hidden' name='aoq_id' value='<?php echo $aoq_id; ?>'>

		    			<td class="f10 table-borreg" align="center"><br></td>
		    			<td class="f10 table-borreg" align="left" colspan="4"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg" align="center"></td>

		    			<td class="f10 table-borreg" align="left"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg text-red" align="center"></td>

		    			<td class="f10 table-borreg" align="left"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg text-red" align="center"></td>

		    			<td class="f10 table-borreg" align="left"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg" align="center"></td>
		    			<td class="f10 table-borreg text-red" align="center"></td>
		    		</tr>
		    		<tr>
		    			<td class="f10 table-borreg" align="center"><br></td>
		    			<td colspan="4" class="f10 table-borreg text-red" align="center"><b>REMARKS</b></td>

		    			<td class="f10 table-borreg" align="left" colspan="5"></td>
		    			<td class="f10 table-borreg" align="left" colspan="5"></td>
		    			<td class="f10 table-borreg" align="left" colspan="5"></td>
		    		</tr>
		    		<tr><td class="f10" colspan="20" align="center"><br></td></tr>

		    		<tr>
		    			<td class="" align="center">a.</td>
		    			<td colspan="4" class="f10" align="center">Price Validity</td>
		    			<?php
		    			if($saved==0 && $open==0 && $draft==0){
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    			<td colspan="3" class="f10" align="left"><input type="text" class="btn-block" name="price_validity<?php echo $q; ?>" autocomplete='off'></td>
		    			<td colspan="2" class="f10" align="left"><br><input type='hidden' name='id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } 
		    			} else if($saved==1 && $open==0) {
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><?php echo $ven['validity']; ?></td>
		    				<td colspan="2" class="f10" align="left"></td>
		    			<?php }
		    			}  else if($saved==1 && $open==1){ 
		    				$q=1;
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="price_validity<?php echo $q; ?>" value="<?php echo $ven['validity']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php   $q++; } } 
		    			else if($saved==0 && $open==0 && $draft==1){
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    			<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="price_validity<?php echo $q; ?>" value="<?php echo $ven['validity']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } } ?>  	  
		    			<!-- <td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td>		    			
		    			<td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td> -->
		    		</tr>
		    		<tr>
		    			<td class="" align="center">b.</td>
		    			<td colspan="4" class="f10" align="center">Payment Terms</td>
		    			<?php
		    			if($saved==0 && $open==0 && $draft==0){
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    			<td colspan="3" class="f10" align="left"><input type="text" class="btn-block" name="payment_terms<?php echo $q; ?>" autocomplete='off' ></td>
		    			<td colspan="2" class="f10" align="left"><br><input type='hidden' name='id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>	
		    			<?php  $q++;  }
		    			} else if($saved==1 && $open==0) {
		    			foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><?php echo $ven['terms']; ?></td>
		    				<td colspan="2" class="f10" align="left"></td>
		    			<?php } 
		    			}  else if($saved==1 && $open==1){ 
		    					$q=1; 
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="payment_terms<?php echo $q; ?>" value="<?php echo $ven['terms']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php   $q++; } } 
		    			else if($saved==0 && $open==0 && $draft==1){ 
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="payment_terms<?php echo $q; ?>" value="<?php echo $ven['terms']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php   $q++; } } ?>  	
		    			<!-- <td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td>		    			
		    			<td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td> -->		
		    		</tr>
		    		<tr>
		    			<td class="" align="center">c.</td>
		    			<td colspan="4" class="f10" align="center">Delivery Term</td>
		    			<?php
		    				if($saved==0 && $open==0 && $draft==0){
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    			<td colspan="3" class="f10" align="left"><input type="text" class="btn-block" name="delivery_date<?php echo $q; ?>" autocomplete='off'></td>
		    			<td colspan="2" class="f10" align="left"><br><input type='hidden' name='id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } } 
		    			else if($saved==1 && $open==0) {
		    			foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><?php echo $ven['delivery_date']; ?></td>
		    				<td colspan="2" class="f10" align="left"></td>
		    			<?php }
		    			}  else if($saved==1 && $open==1){ 
		    				$q=1;
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="delivery_date<?php echo $q; ?>" value="<?php echo $ven['delivery_date']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } }  
		    			else if($saved==0 && $open==0 && $draft==1){ 
		    			$q=1;
		    			foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="delivery_date<?php echo $q; ?>" value="<?php echo $ven['delivery_date']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } } ?>  	  
		    		<!-- 	<td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td>

		    			<td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td> -->
		    		</tr>
		    		<tr>
		    			<td class="" align="center">d.</td>
		    			<td colspan="4" class="f10" align="center">Item's Warranty</td>
		    			<?php
		    			if($saved==0 && $open==0  && $draft==0){
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    			<td colspan="3" class="f10" align="left"><input type="text" class="btn-block" name="item_warranty<?php echo $q; ?>" autocomplete='off'></td>
		    			<td colspan="2" class="f10" align="left"><br><input type='hidden' name='id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php  $q++; } 
		    			} else if($saved==1 && $open==0){ 
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><?php echo $ven['warranty']; ?></td>
		    				<td colspan="2" class="f10" align="left"></td>
		    			<?php }
		    			} else if($saved==1 && $open==1){ 
		    				$q=1; 
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="item_warranty<?php echo $q; ?>" value="<?php echo $ven['warranty']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } } 
		    			else if($saved==0 && $open==0 && $draft==1){ 
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="item_warranty<?php echo $q; ?>" value="<?php echo $ven['warranty']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } } ?>
		    			<!-- <td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td>		    			
		    			<td colspan="4" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td> -->
		    		</tr>
		    		<tr>
		    			<td class="" align="center">e.</td>
		    			<td colspan="4" class="f10" align="center">In-land Freight</td>
		    			<?php
		    			if($saved==0 && $open==0 && $draft==0){
		    			$q=1; 
		    			foreach($vendors AS $ven) { ?>
		    			<td colspan="3" class="f10" align="left"><input type="text" class="btn-block" name="freight<?php echo $q; ?>" autocomplete='off'></td>
		    			<td colspan="2" class="f10" align="left"><br><input type='hidden' name='id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php  $q++; } 
		    			} else if($saved==1 && $open==0) {
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><?php echo $ven['freight']; ?></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php }
		    			}  else if($saved==1 && $open==1){ 
		    				$q=1;
		    				foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="freight<?php echo $q; ?>" value="<?php echo $ven['freight']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php   $q++; } } 
		    			else if($saved==0 && $open==0 && $draft==1){ 
		    			$q=1;
		    			foreach($vendors AS $ven) { ?>
		    				<td colspan="3" class="f10 bor-btm" align="left"><input type='text' class="btn-block" autocomplete='off' name="freight<?php echo $q; ?>" value="<?php echo $ven['freight']; ?>"></td>
		    				<td colspan="2" class="f10" align="left"><input type='hidden' name='vendor_id<?php echo $q; ?>' value="<?php echo $ven['id']; ?>"></td>
		    			<?php $q++; } } ?>  	  
		    			<!-- <td colspan="2" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td>		    			
		    			<td colspan="2" class="f10" align="left"><input type="text" class="btn-block" name=""></td>
		    			<td colspan="3" class="f10" align="left"><br></td> -->
		    		</tr>
		    		<tr><td class="f10" colspan="21" align="center"><br></td></tr>
		    		<tr>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="3" class="f10" align="center">Prepared by:</td>
		    			<td colspan="1" class="f10" align="left"><br></td>
		    			<td colspan="2" class="f10" align="center"><br>Reviewed and Checked by</td>
		    			<td colspan="2" class="f10" align="left"><br></td>
		    			<td colspan="2" class="f10" align="center">Award Recommended by:</td>
		    			<td colspan="2" class="f10" align="left"><br></td>
		    			<td colspan="2" class="f10" align="center">Recommending Approval:</td>
		    			<td colspan="2" class="f10" align="left"><br></td>
		    			<td colspan="3" class="f10" align="center">Approved by:</td>
		    			<td colspan="1"  class="" align="center"></td>
		    		</tr>
		    		<tr><td class="f10" colspan="21" align="center"><br></td></tr>
		    		<tr>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="3" class="f10 bor-btm" align="center"><?php echo (empty($prepared)) ? $_SESSION['fullname'] : $prepared; ?></td>
		    			<td colspan="1" class="f10" align="left"><br></td>
		    			<td colspan="2" class="f10  bor-btm" align="left">
		    			<?php if($saved==0 && $draft==0){ ?>
		    				<input type = "text" name='reviewed' class='emphasis btn-block'>
		    			<?php }else if($saved==0 && $draft==1){ ?>
		    				<input type = "text" name='reviewed' class='emphasis btn-block' value="<?php echo $reviewed; ?>">
		    			<?php } else {
		    				echo $reviewed;
		    			} ?></td>
		    			<td colspan="2" class="f10" align="left"><br></td>
		    			<td colspan="2" class="f10 bor-btm" align="center"></td>
		    			<td colspan="2" class="f10" align="left"><br></td>

		    			<td colspan="2" class="f10 bor-btm" align="center">
		    			<?php if($saved==0 && $draft==0){ ?>
		    				<input type = "text" name='approved' class='emphasis btn-block'>
		    			<?php }else if($saved==0 && $draft==1){ ?>
		    				<input type = "text" name='approved' class='emphasis btn-block' value="<?php echo $approved; ?>">
		    			<?php } else {
		    				echo $approved;
		    			} ?>
		    			</td>
		    			<td colspan="2" class="f10" align="left"><br></td>
		    			<td colspan="3" class="f10 bor-btm" align="center">
		    			<?php if($saved==0 && $draft==0){ ?>
		    				<input type = "text" name='noted' class='emphasis btn-block'>
		    			<?php }else if($saved==0 && $draft==1){ ?>
		    				<input type = "text" name='noted' class='emphasis btn-block' value="<?php echo $noted; ?>">
		    			<?php } else {
		    				echo $noted;
		    			} ?>
		    			</td>
		    			<td colspan="1" class="f10" align="left"><br></td>
		    		</tr>
		    		<tr><td class="f10" colspan="21" align="center"><br></td></tr>
		    		<tr>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="3"  class="" align="center">LEGEND:</td>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="1"  class="green-back p-l-5 p-r-5" align="center"></td>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="4"  class="" align="left">Recommended Award</td>
		    			<td colspan="10"  class="" align="center"></td>

		    		</tr>
		    		<tr>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="3"  class="" align="center"></td>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="1"  class="yellow-back p-l-5 p-r-5" align="center"></td>
		    			<td colspan="1"  class="" align="center"></td>
		    			<td colspan="4"  class="" align="left">Lowest Price</td>
		    			<td colspan="10"  class="" align="center"></td>

		    		</tr>
		    		<tr><td class="f10" colspan="21" align="center"><br></td></tr>
		    	</table>		    
	    	</div>
	    	<input type='hidden' name='count' value="3">
	    	</form>
	    	<br>
	    	<br>
    	
    </div>

    <!-- Modal -->
	
    
    <script type="text/javascript">
    	function printPage() {
		  window.print();
		}

    </script>