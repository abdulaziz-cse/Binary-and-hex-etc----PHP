<script>
	function DecimalToBinary(DecimalValue){
		var BinaryValue = '';
		for (var i=64; i>=1; i--){
			if(DecimalValue >= Math.pow(2,i)/2){
				BinaryValue = BinaryValue+'1';
				DecimalValue = DecimalValue - (Math.pow(2,i)/2);
			}
			else if(BinaryValue.indexOf("1") != -1){
				BinaryValue = BinaryValue+'0';
			}
		}
		return BinaryValue;
	}
	function BinaryToDecimal(BinaryValue){
		var DecimalValue = 0;
		BinaryValue = BinaryValue.split("").reverse().join("");
		for (var i=BinaryValue.length-1;i>=0;i--){
			if(BinaryValue[i] == '1'){
				DecimalValue = DecimalValue + (Math.pow(2,i+1)/2);
			}
		}
		return DecimalValue;
	}
</script>
