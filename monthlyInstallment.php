<div class="">

    <div class="w3-row " >
        <div class="w3-col s6" style="margin-left:180px">

            <div class="w3-light-gray" >
                <div class="w3-panel w3-container w3-padding  w3-light-gray w3-text-dark-gray w3-center">
                    <h2 class="w3-center">Monthly Installement Calculator</h2>
                    <div class="w3-row w3-margin">
                        <input class="w3-input w3-border" id="principal" type="text" placeholder="Principal:">
                    </div>

                    <div class="w3-row w3-margin">
                        <input class="w3-input w3-border" id="interest" type="text" placeholder="Intrest">
                    </div>

                    <div class="w3-row w3-margin">
                        <input class="w3-input w3-border" id="terms" type="text" placeholder="terms">
                    </div>

                    <button class="w3-button w3-dark-gray" onclick="getValues()">Calculate</button>
                </div>
            </div>

        </div>
        <div class="w3-col s6">
        </div>
    </div>

            	<div class="w3-row" id="Result"></div>
                <script language="javascript">
var wwOpenInstalled;
if (wwOpenInstalled || parent.wwOpenInstalled) {
	if (window.Event) {
		document.captureEvents (Event.MOUSEUP);
	}
	document.onmouseup = (parent.wwOpenInstalled) ? parent.wwOnMouseUp : wwOnMouseUp;
}
//--></script>

    <script>
    
    /**
 * @author Joel Nutt
 * ITEC136-V1WW(FA11) - Franklin U.
 * David Crossmier - Instructor
 * Assigment 8-3 (HW07)
 * 11/06/2011
 * 
*/

function getValues()
{
	//button click gets values from inputs
	var balance = parseFloat(document.getElementById("principal").value);
	var interestRate = 
		parseFloat(document.getElementById("interest").value/100.0);
	var terms = parseInt(document.getElementById("terms").value);
	
	//set the div string
	var div = document.getElementById("Result");
	
	//in case of a re-calc, clear out the div!
	div.innerHTML = "";
	
	//validate inputs - display error if invalid, otherwise, display table
	var balVal = validateInputs(balance);
	var intrVal = validateInputs(interestRate);

	if (balVal && intrVal)
	{
		//Returns div string if inputs are valid
		div.innerHTML += amort(balance, interestRate, terms);
	}
	else
	{
		//returns error if inputs are invalid
		div.innerHTML += "Please Check your inputs and retry - invalid values.";
	}
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
    var result = "Loan amount: " + balance.toFixed(2) +  "<br />" + 
        "Interest rate: " + (interestRate*100).toFixed(2) +  "%<br />" +
        "Number of months: " + terms + "<br />" ;
       // "Monthly payment: " + payment.toFixed(2) + "<br />" +
        
    //add header row for table to return string
	result += "<table border='2'><tr><th>Month #</th><th>Balance</th>" + 
        "<th>Interest</th><th>Principal</th><th>Total</th>"+"<th>ending balance</th>";
    
    /**
     * Loop that calculates the monthly Loan amortization amounts then adds 
     * them to the return string 
     */
    	balance1=balance;
        p3=0;
	for (var count = 0; count < terms; ++count)
	{ 
		//in-loop interest amount holder
		var interest = 0;
		
		//in-loop monthly principal amount holder
		var monthlyPrincipal = 0;
		
		//start a new table row on each loop iteration
		result += "<tr align=center>";
		
		//display the month number in col 1 using the loop count variable
		result += "<td>" + (count + 1) + "</td>";
		
	
		//code for displaying in loop balance
		result += "<td> " + balance.toFixed(2) + "</td>";
		
		//calc the in-loop interest amount and display
		interest = (balance * interestRate)/terms ;
		result += "<td> " + interest.toFixed(2) + "</td>";
		
		//calc the in-loop monthly principal and display
		monthlyPrincipal = payment - interest;
        p1=balance1/terms;
		result += "<td> " + p1.toFixed(2) + "</td>";
        p2=interest+p1;
        result += "<td> " + p2.toFixed(2) + "</td>"; 
        if( count+1 == terms){
            j=0;
             result += "<td> " + j.toFixed(2) + "</td>";
        }
        else{
            
             endingbalce=balance-p1;
        result += "<td> " + endingbalce.toFixed(2) + "</td>";
        }
    
   
        if(count==0)  {
              p3=p2;
        }
      
       else{
           p3=p3+p2;
       }
		
		//end the table row on each iteration of the loop	
		result += "</tr>";
		
		//update the balance for each loop iteration
		balance = endingbalce;		
	}
	
   result += "Total paid: " + p3.toFixed(2) ; "<br /><br />";
        
	//Final piece added to return string before returning it - closes the table
    result += "</table>";
	
	//returns the concatenated string to the page
    return result;
}

function validateInputs(value)
{
	//some code here to validate inputs
	if ((value == null) || (value == ""))
	{
		return false;
	}
	else
	{
		return true;
	}
}
    
    </script>

</div>
