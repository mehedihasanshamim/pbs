<html>
	<head>
		<title>pbs-Application</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style_apply.css">
		<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
	</head>
	<body>

<!-- application section -->

		<div id="application">
			<!-- top section of application -->
			<fieldset>
				<table id="top">
					<tr>
						<td style="width:15%;">আবেদন নং</td>
						<td><input type="text" name="app_no" size="5" /></td>
						<td>সংযোগের ধরন</td>
						<td>
							<select name="connection_type">
								<option value="">যে কোন একটি চিহ্নিত করেন</option>
								<option value="">বাণিজ্যিক (সার্ভিস ড্রপ)</option>
								<option value="">সেচ</option>
								<option value="">আবাসিক  (সার্ভিস ড্রপ)</option>
								<option value="">বাণিজ্যিক</option>
								<option value="">শিল্প প্রতিষ্ঠান</option>
								<option value="">দাতব্য প্রতিষ্ঠান</option>
								<option value="">আবাসিক ( ডিপোজিট কাজ )</option>
								<option value="">বাণিজ্যিক ( ডিপোজিট কাজ )</option>
							</select>
						</td>
					</tr>
				</table>
			</fieldset>
			<!-- end top section -->
<!-- basic information -->
			<fieldset>
				<table id="basic_info">
					<tr>
						<td>আবেদনকৃত প্রতিষ্ঠানের নাম</td>
						<td colspan="3"><input type="text" name="app_org_name" /></td>
					</tr>
					<tr>
						<td>আবেদনকারীর নাম</td>
						<td colspan="3"><input type="text" name="applicant_name" /></td>
					</tr>
					<tr>
						<td>পিতার নাম</td>
						<td colspan="3"><input type="text" name="fname" /></td>
					</tr>
					<tr>
						<td>মাতার নাম</td>
						<td colspan="3"><input type="text" name="mname" /></td>
					</tr>
					<tr>
						<td>স্বামীর নাম</td>
						<td colspan="3"><input type="text" name="husband_name" /></td>
					</tr>
					<tr>
						<td>জাতীয় পরিচয় পত্র নং</td>
						<td><input type="text" name="nid" /></td>
						<td style="width:70px;">লিঙ্গ</td>
						<td>
							<select name="gender" style="width:80px;">
								
								<option value="">পুরুষ</option>
								<option value="">মহিলা</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>জন্ম তারিখ</td>
						<td colspan="3">
							<select name="day" style="width:50px;">
								<?php
									for($i=1;$i<=30;$i++){
										echo "<option value='$i'>$i</option>";
									}
								?>
							</select>
							
							<select name="day">
								<option value='jan'>Jan</option>
								<option value='feb'>Feb</option>
								<option value='mar'>Mar</option>
								<option value='apr'>Apr</option>
								<option value='May'>May</option>
								<option value='jun'>Jun</option>
								<option value='jul'>Jul</option>
								<option value='aug'>Aug</option>
								<option value='sep'>Sep</option>
								<option value='oct'>Oct</option>
								<option value='nov'>Nov</option>
								<option value='dec'>Dec</option>	
							</select>
							<select name="day">
								<?php
									for($i=date('Y');$i>=1960;$i--){
										echo "<option value='$i'>$i</option>";
									}	
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>ছবি</td>
						<td><input type="file" name="pic" style="width:80px;"/><span style="color:red;">&nbsp;&nbsp;ছবির সর্বোচ্চ সাইজ ১৫০ কিলোবাইট</span></td>
					</tr>
				</table>
			</fieldset>
<!-- end of basic information section -->

<!-- sms info section -->
			<fieldset id="sms">
				<legend>SMS এর ঠিকানা</legend>
				<table>
					<tr>
						<td>মোবাইল</td>
						<td><input type="number" name="mobile_no" /></td>
						<td>ইমেইল</td>
						<td><input type="email" name="email" /></td>
					</tr>
				</table>
			</fieldset>
<!-- end of sms info section -->

<!-- present address section -->
	<fieldset id="present_address">
		<legend>বর্তমান / যোগাযোগের ঠিকানা</legend>
		<table>
			<tr>
				<td colspan="2">বাড়ির নাম / হোল্ডিং নং</td>
				<td colspan="4"><input type="text" name="house_holding_no" style="width:350px;" /></td>
			</tr>
			<tr>
				<td>জেলা</td>
				<td><input type="text" name="district" /></td>
				<td>উপজেলা</td>
				<td><input type="text" name="sub_district" /></td>
				<td>ইউনিয়ন</td>
				<td><input type="text" name="union" /></td>
			</tr>
			<tr>
				<td>গ্রাম / পাড়া / মহল্লা</td>
				<td><input type="text" name="vill_pada_moholla" /></td>
				<td>ডাকঘর</td>
				<td><input type="text" name="post_office" /></td>
				<td>পোস্ট কোড</td>
				<td><input type="number" name="post_code" /></td>
			</tr>
			<tr>
				<td colspan="6">
					<input type="checkbox" name="option_1"/>স্থায়ী ঠিকানা হিসেবে ব্যবহার করুন
					<input type="checkbox" name="option_2"/>প্রস্তাবিত সংযোগস্থলের বিবরন  হিসেবে ব্যবহার করুন
				</td>
			</tr>
		</table>
	</fieldset>
<!-- end of present address section -->

<!-- permanent address section -->
	<fieldset id="present_address">
		<legend>স্থায়ী ঠিকানা</legend>
		<table>
			<tr>
				<td colspan="2">বাড়ির নাম / হোল্ডিং নং</td>
				<td colspan="4"><input type="text" name="house_holding_no" style="width:350px;" /></td>
			</tr>
			<tr>
				<td>জেলা</td>
				<td><input type="text" name="district" /></td>
				<td>উপজেলা</td>
				<td><input type="text" name="sub_district" /></td>
				<td>ইউনিয়ন</td>
				<td><input type="text" name="union" /></td>
			</tr>
			<tr>
				<td>গ্রাম / পাড়া / মহল্লা</td>
				<td><input type="text" name="vill_pada_moholla" /></td>
				<td>ডাকঘর</td>
				<td><input type="text" name="post_office" /></td>
				<td>পোস্ট কোড</td>
				<td><input type="number" name="post_code" /></td>
			</tr>
			<tr>
				<td colspan="6">
					<input type="checkbox" name="option_2"/>প্রস্তাবিত সংযোগস্থলের বিবরন  হিসেবে ব্যবহার করুন
				</td>
			</tr>
		</table>
	</fieldset>
<!-- end of permanent address section -->

<!-- proposed area details -->
		<fieldset id="present_address">
		<legend>প্রস্তাবিত বিদ্যুৎ সংযোগ স্থলের বিবরন</legend>
		<table>
			<tr>
				<td colspan="2">সম্পত্তির আইনগত মালিকের নাম :</td>
				<td colspan="4"><input type="text" name="house_holding_no" style="width:350px;" /></td>
			</tr>
			<tr>
				<td>জেলা</td>
				<td>
					<select name="proposed_district">
						<option value="">নারায়ণগঞ্জ </option>
						<option value="">গাজীপুর</option>
						<option value="">ঢাকা</option>
					</select>
				</td>
				<td>উপজেলা</td>
				<td><input type="text" name="sub_district" /></td>
				<td>ইউনিয়ন</td>
				<td>
					<select name="union">
						<option value="">দাউদপুর</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>গ্রাম / পাড়া / মহল্লা</td>
				<td>
					<select name="vill_pada_moholla">
						<option value="">কলিংগা</option>
						<option value="">আগলা</option>
						<option value="">চইরপাড়া</option>
					</select>
				</td>
				<td>ডাকঘর</td>
				<td><input type="text" name="post_office" /></td>
				<td>পোস্ট কোড</td>
				<td><input type="number" name="post_code" /></td>
			</tr>
			<tr>
				<td>মৌজা</td>
				<td><input type="text" name="vill_pada_moholla" /></td>
				<td>দাগ নং</td>
				<td><input type="text" name="post_office" /></td>
				<td>খতিয়ান নং</td>
				<td><input type="number" name="post_code" /></td>
			</tr>
			<tr>
				<td colspan="3">বিদ্যুৎ লাইনের নিকটবতী খুঁটি হইতে দূরত্ব</td>
				<td colpan="3"><input type="number" name="distance" /></td>
			</tr>
		</table>
	</fieldset>
<!-- end of proposed area details -->

<!-- connection details -->
	<fieldset>
		<legend>কানেকশনের বিবরন</legend>
		<table>
			<tr>
				<td>আবেদন প্রকৃতি</td>
				<td>
					<select name="application_type">
						<option value="">স্থায়ী সংযোগের ক্ষেত্রে</option>
						<option value="">সাময়িক সংযোগের ক্ষেত্রে</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>মিটার সংখ্যা</td>
				<td><input type="number" name="meter_no" style="width:100px;" /></td>
			</tr>
		</table>
	</fieldset>
<!-- end of connection details -->

<!-- load section -->
<fieldset id="load">
	<legend>লোড</legend>
	<table>
		<tr>
			<th>আইটেম নাম</th>
			<th>আইটেম সংখ্যা</th>
			<th>লোড/আইটেম(ওয়াট)</th>
			<th>মোট লোড</th>
			<th>Action</th>
		</tr>
		<tr class="item_part">
			<td>
				<select name="item" style="width:170px;">
					<option value="">যে কোন একটি চিহ্ণিত করেন</option>
					<option value="">রেফ্রিজারেটর</option>
					<option value="">টেলিভিশন</option>
					<option value="">লাইট</option>
					<option value="">ফ্যান</option>
					<option value="">অন্যান্য</option>
				</select>
			</td>
			<td><input type="text" name="item_amount" id="item_amount" /></td>
			<td><input type="text" name="item_load" id="item_load" onchange="item_total_load()" /></td>
			<td><input type="text" name="total" id="in_total" /></td>
			<td><a href="" onclick="confirm('Are you sure?')"><img src="image/delete.png" height="25px" width="35px" /></a></td>
		</tr>

		<script type="text/javascript">
			function item_total_load(){
				var amount=document.getElementById("item_amount").value;
				var item_load=document.getElementById("item_load").value;
				var total=parseInt(amount)*parseInt(item_load);
				document.getElementById("in_total").value=total;
			}
		</script>


		<tr>
			<td colspan="2">
				<button id="load_btn" onclick="adding()">সংযোগ করুন</button>
				<button id="load_btn" class="load_btn_dis">খালি করুন</button>
			</td>
			<td colspan="2" style="padding-left:160px;">মোট: <input type="text" name="in_total" /></td>
			<td></td>
		</tr>

		<script type="text/javascript">
			$("#load_btn").click(function(){
				$("#item_part").clone().appendTo("body");
			});
		</script>

	</table>
</fieldset>
<!-- end of load section -->

<!-- demand load -->
	<fieldset id="demand_load">
		<legend>চাহিদাকৃত লোড</legend>
		<table>
			<tr>
				<td>স্থায়ী সংযোগ লোড চাহিদা</td>
				<td><input type="text" name="demand_load" style="width:100px;" />কিঃওয়াট/কেভিএ  </td>
				<td>
					<select name="pashe">
						<option value="">এক ফেইজ</option>
						<option value="">তিন ফেইজ</option>
					</select>
					<select name="volt" style="margin-left:10px;" >
						<option value="">২৩০</option>
						<option value="">৪৪০</option>
					</select>
					ভোল্ট
				</td>
			</tr>
			<tr>
				<td colspan="3" style="text-align:left;">
					প্রতিষ্ঠানের আইনগত প্রকৃতি
					<select name="legal_owner" style="float:none;">
						<option value="">ব্যাক্তি মালিকানা</option>
					</select>
				</td>
			</tr>
		</table>
	</fieldset>
<!-- end of demand load -->

<!-- location and others -->
	<fieldset id="location_others">
		<legend>লোকেশন এবং/অথবা</legend>
		<table>
			<tr>
				<td>
					<textarea name="location_others"></textarea>
				</td>
			</tr>
		</table>
	</fieldset>
<!-- end of location and others -->

<!-- agreement -->
	<input type="checkbox" name="agreement" value="1" />আমি গাজীপুর PBS <a href="">পরিষেবা শর্তাবলী</a> এবং <a href="">গোপনীয় নীতিতে </a>একমত হচ্ছি ।<br/><br/>
<!-- end of agreement -->
<span style="text-align:center;margin:0px auto;">
 <u>বিঃদ্রঃ </u> আবেদনকারী জমির আইনগত মালিক না হলে , জমির প্রকৃত মালিকের সাথে ভাডা চুক্তি , লীজ চুক্তি এবং জমির মালিকের পক্ষ থেকে বিদ্যুৎ বিল পরিশোধের অঙ্গিকারনামা আবেদনপত্রের সাথে জমা দিতে হবে ।
</span>

<!-- final  button -->
<fieldset id="final_btn">
	<table>
		<tr>
			<td>
				
				<input type="submit" name="submit_btn" id="load_btn" value="সম্পূর্ণ করুন">
				<input type="reset" name="reset_btn" id="load_btn" value="বাতিল করুন">
			</td>
		</tr>
	</table>
</fieldset>
	
<!-- end of final button -->
		</div>
	</body>
</html>