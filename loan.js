function getValues()
{
	var balance = parseFloat(document.getElementById("principal").value);
	var interestRate =parseFloat(document.getElementById("interest").value/100.0);
	var terms = parseInt(document.getElementById("terms").value);
	var div = document.getElementById("Result");
	div.innerHTML = "";
	var amortis=amort(balance, interestRate, terms);
	console.log(amortis);
 	div.innerHTML += amortis;
}

/**
 * Amort function:
 * Calculates the necessary elements of the loan using the supplied user input
 * and then displays each months updated amortization schedule on the page
*/
function amort(balance, interestRate, terms)
{
    //Calculate the per month interest rate
	var monthlyRate = interestRate/12;
	
	//Calculate the payment
    var payment = balance * (monthlyRate/(1-Math.pow(
        1+monthlyRate, -terms)));
	    
	//begin building the return string for the display of the amort table
    var result = "Loan amount: N" + balance.toFixed(2) +  "<br />" + 
        "Number of months: " + terms + "<br />" +
        "Monthly payment: N" + payment.toFixed(2) + "<br />" +
		"<input hidden type='number' name='swiftbank_monthlyPay' value='" + payment.toFixed(2) + "'>" +
        "Total payment: N" + (payment * terms).toFixed(2) + "<br /><br />" +
		"<input hidden type='number' name='swiftbank_totalPay' value='" + (payment * terms).toFixed(2) + "'>";
        
    //add header row for table to return string
	result += "<table class='table table-bordered'><tr><th>Month</th><th>Balance</th>" + 
        "<th>Interest</th><th>Principal</th><th>Payment</th>";
    /**
     * Loop that calculates the monthly Loan amortization amounts then adds 
     * them to the return string 
     */
	for (var count = 0; count < terms; ++count)
	{ 
		//in-loop interest amount holder
		var interest = 0;
		
		//in-loop monthly principal amount holder
		var monthlyPrincipal = 0;
		
		//start a new table row on each loop iteration
		result += "<tr>";
		
		//display the month number in col 1 using the loop count variable
		result += "<td>" + (count + 1) + "</td>";
		
		
		//code for displaying in loop balance
		result += "<td> N" + balance.toFixed(2) + "</td>";
		
		//calc the in-loop interest amount and display
		interest = balance * monthlyRate;
		result += "<td> N" + interest.toFixed(2) + "</td>";
		
		//calc the in-loop monthly principal and display
		monthlyPrincipal = payment - interest;
		result += "<td> N" + monthlyPrincipal.toFixed(2) + "</td>";
		
		//calc the in-loop monthly principal and display
		totalPayment = payment + interest;
		result += "<td> N" + payment.toFixed(2) + "</td>";
		
		//end the table row on each iteration of the loop	
		result += "</tr>";
		
		//update the balance for each loop iteration
		balance = balance - monthlyPrincipal;		
	}
	
	//Final piece added to return string before returning it - closes the table
    result += "</table>";
		
	//returns the concatenated string to the page
    return result;
	 
	 
}
// function validateInputs(value)
// {
// 	//some code here to validate inputs
// 	if ((value == null) || (value == ""))
// 	{
// 		return false;
// 	}
// 	else
// 	{
// 		return true;
// 	}
// }