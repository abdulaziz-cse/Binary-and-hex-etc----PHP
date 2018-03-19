
<html>
<head>
</head>
<body>

<form action="testing.php" method="POST">
	<p>
	<label for="numDecimal">Decimal</label>
	<input name="numDecimal" type="text" size="25">
	</p>
	<p>
	<label for="numBinary">Binary</label>
	<input name="numBinary" type="text" size="25">
	</p>
	<p>
	<button name="buttDecimalToBinary" type="button" onclick="this.form.numBinary.value = DecimalToBinary(this.form.numDecimal.value);">
		Decimal To Binary
	</button>
	<button name="buttBinaryToDecimal" type="button" onclick="this.form.numDecimal.value = BinaryToDecimal(this.form.numBinary.value);">
		Binary To Decimal
	</button>


	</p>
	<<?php include'dds.php'; ?>

  <button>Try it</button>
	<table class="table">
			<thead>

				<tr>


				<th>Division by 2 </th>
				<th> Quotient</th>
				<th> Remainder</th>

				</tr>
			</thead>
			<tbody>
				<tr>


				<td><?php echo $bin_nr = $_POST['buttDecimalToBinary']; ?>/2</td>
			 <td><?php echo (int)$quotient ?></td>
			 <td><?php echo $remainder ?></td>
				</tr>
				<tr class="active">
				<td><?php echo $quotient ?>/2</td>
				<td><?php echo (int)$quotient1 = $quotient/2 ?></td>
				<td><?php echo $remainder1 = (int)$quotient %2; ?></td>

				</tr>
				<tr class="active">
				<td><?php echo $quotient1 ?>/2</td>
				<td><?php echo (int)$quotient2 = (int)$quotient1/2 ?></td>
				<td><?php echo $remainder2 = (int)$quotient1 %2; ?></td>
				</tr>

				<tr class="active">
				<td><?php echo (int)$quotient2 ?>/2</td>
				<td><?php echo (int)$quotient3 = (int)$quotient2/2 ?></td>
				<td><?php echo $remainder3 = (int)$quotient2 %2; ?></td>
				</tr>
				<tr class="active">
				<td><?php echo (int)$quotient3 ?>/2</td>
				<td><?php echo (int)$quotient4 = (int)$quotient3/2 ?></td>
				<td><?php echo $remainder4 = (int)$quotient3 %2; ?></td>
				</tr>
				<tr class="active">
				<td><?php echo (int)$quotient4 ?>/2</td>
				<td><?php echo (int)$quotient5 = (int)$quotient4/2 ?></td>
				<td><?php echo $remainder5 = (int)$quotient4 %2; ?></td>

				</tr>
				<tr class="active">
				<td><?php echo (int)$quotient5 ?>/2</td>
				<td><?php echo (int)$quotient6 = (int)$quotient5/2 ?></td>
				<td><?php echo $remainder6 = (int)$quotient5 %2; ?></td>

				</tr>
				<tr class="active">
				<td><?php echo (int)$quotient6 ?>/2</td>
				<td><?php echo (int)$quotient7 = (int)$quotient6/2 ?></td>
				<td><?php echo $remainder7 = (int)$quotient7 %2; ?></td>

				</tr>


			</tbody>
		</table>

</form>



<script>
	function DecimalToBinary(DecimalValue){
		var BinaryValue = '';
		// Loop from 2^64/2 to 1
		for (var i=64; i>=1; i--){
			// Is 2^i/2 within DecimalValue?
			if(DecimalValue >= Math.pow(2,i)/2){
				// If so, add a 1 to BinaryValue and subtract 2^i/2 from DecimalValue
				BinaryValue = BinaryValue+'1';
				DecimalValue = DecimalValue - (Math.pow(2,i)/2);
			}
			else if(BinaryValue.indexOf("1") != -1){
				// If not, add a 0, but only if there is already a 1 in the value
				BinaryValue = BinaryValue+'0';
			}
		}
		return BinaryValue;
	}
	function BinaryToDecimal(BinaryValue){
		var DecimalValue = 0;
		// Flip the character array (aka string) in order to make itterating over it easier
		BinaryValue = BinaryValue.split("").reverse().join("");
		// Loop over BinaryValue (from left to right)
		for (var i=BinaryValue.length-1;i>=0;i--){
			// Is there a 1 in the place?
			if(BinaryValue[i] == '1'){
				// If so, add 2^i/2 to DecimalValue
				DecimalValue = DecimalValue + (Math.pow(2,i+1)/2);
			}
		}
		return DecimalValue;
	}


</script>
</body>
</html>
