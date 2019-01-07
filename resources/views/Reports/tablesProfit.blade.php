<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/style.css">
<div class="wrapper">

<div class="table" style="height:50%">

	<div class="row header">
		<div class="cell">
			Asset
		</div>
		<div class="cell">
			Quantity
		</div>
		<div class="cell">
			Investment
		</div>

	</div>

	<div class="row">
		<div class="cell">
			Vehicles
		</div>
		<div class="cell">
			25
		</div>
		<div class="cell">
			Rs.200,000,000.00
		</div>

	</div>


</div>

<div class="table">

	<div class="row header blue">
		<div class="cell">
			Sales
		</div>
		<div class="cell">
			Quatity
		</div>
		<div class="cell">
			Cost
		</div>
		<div class="cell">
			Return
		</div>

	</div>

	<div class="row">
		<div class="cell">
			Vehicles
		</div>
		<div class="cell">
			20
		</div>
		<div class="cell">
			Rs.1,000,000.00
		</div>
		<div class="cell">
			Rs.2,000,000.00
		</div>
	</div>



</div>

<div class="table">

	<div class="row header blue">
		<div class="cell">
			Expenses
		</div>
		<div class="cell">
			Amount
		</div>
	</div>

	<div class="row">
		<div class="cell">
			Employee
		</div>
		<div class="cell">
			<form name="tablesProfit3"><input type="text" id="employeeid" Placeholder="Employee Salaries... etc" name="employee"></form>
		</div>
	</div>

	<div class="row">
		<div class="cell">
			Rent		</div>
		<div class="cell">
			<form name="tablesProfit2"><input type="text" id="rentid" Placeholder="Shop Rent... etc" name="rent"></form>
		</div>
	</div>

	<div class="row">
		<div class="cell">
			Bill Payments
		</div>
		<div class="cell">
			<form name="tablesProfit"><input type="text" id="billid" Placeholder="Bill payments" name="bill"></form>
		</div>
	</div>
	</div>

<script type="text/javascript">
		function add(){
			var regex = /^[0-9]*$/;
			var x = parseInt(document.tablesProfit3.employee.value);
			var y = parseInt(document.tablesProfit2.rent.value);
			var z = parseInt(document.tablesProfit.bill.value);
			var xyz = x+y+z;
			var n = parseInt(document.Result1.gross.value);
			document.Result2.expense.value=xyz;
			document.Result3.profit.value=xyz-n;


		if(!(document.getElementById("billid").value.match(regex))||document.getElementById("billid").value==""){
				document.Result2.expense.value = "ERROR";
			document.Result3.profit.value = "ERROR";
				alert('please enter a valid value!')
		}

		if(!(document.getElementById("rentid").value.match(regex))||document.getElementById("rentid").value==""){
			document.Result2.expense.value = "ERROR";
		document.Result3.profit.value = "ERROR";
				alert('please enter your Valuation value')

		}
		if(!(document.getElementById("employeeid").value.match(regex))||document.getElementById("employeeid").value==""){
			document.Result2.expense.value = "ERROR";
		document.Result3.profit.value = "ERROR";
				alert('please enter your Valuation value')

		}
	}
</script>
	<div class="table">

		<div class="row header green">
			<div class="cell">
				Gross Profit
			</div>
			<div class="cell">
				Expenses
			</div>
			<div class="cell">
				Net profit
			</div>

		</div>

		<div class="row">
			<div class="cell">
				<form name="Result1"><input type="text" id="grossid" name="gross" disabled value ="777" ></form>
			</div>
			<div class="cell">
				<form name="Result2"><input type="text" id="expenseid" name="expense" disabled></form>
			</div>
			<div class="cell">
				<form name="Result3"><input type="text" id="profitid" name="profit" disabled></form>
			</div>

		</div>
<input type="button" name="submit" value="Calculate" onclick="add()">

</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
