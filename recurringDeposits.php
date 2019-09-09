
                    <!--Include Content  -->
               <div class="">

    <div class="w3-row " >
        <div class="w3-col s6" style="margin-left:180px">

            <div class="w3-light-gray" >
                <div id='installmentCalculator' class="w3-panel w3-container w3-padding  w3-light-gray w3-text-dark-gray w3-center">
                    <h4 class="w3-center">Recurring Deposits Calculator</h4>
                    <div class="w3-row w3-margin">
                        <input class="w3-input w3-border" id="principal" type="text" placeholder="Investment">
                    </div>

                    <div class="w3-row w3-margin">
                        <input class="w3-input w3-border" id="interest" type="text" placeholder="No.of Months">
                    </div>

                    <div class="w3-row w3-margin">
                        <input class="w3-input w3-border" id="terms" type="text" placeholder="Rate of Interest">
                    </div>

                    <button class="w3-button w3-dark-gray" onclick="recurringDepositsgetValues()">Calculate</button>
                </div>
            </div>

        </div>
        <div class="w3-col s6">
        </div>
    </div>

            	<div class="w3-row w3-panel w3-light-gray w3-text-dark-gray w3-center" id="recurringDepositsgetResult"></div>
     
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

function recurringDepositsgetValues()
{
	//button click gets values from inputs
	var balance = parseFloat(document.getElementById("principal").value);
	var interestRate = parseFloat(document.getElementById("interest").value);
	var terms = parseFloat(document.getElementById("terms").value);
	
	//set the div string
	var div = document.getElementById("recurringDepositsgetResult");
	
	//in case of a re-calc, clear out the div!
	div.innerHTML = "";
	
	//validate inputs - display error if invalid, otherwise, display table
	var balVal = validateInputs(balance);
	var intrVal = validateInputs(interestRate);

	if (balVal && intrVal)
	{
		//Returns div string if inputs are valid
		div.innerHTML += recurringDepositsamort(balance, interestRate, terms);
	}
	else
	{
		//returns error if inputs are invalid
		div.innerHTML += "Please Check your inputs and retry - invalid values.";
	}
}

/**
 * recurringDepositsamort function:
 * Calculates the necessary elements of the loan using the supplied user input
 * and then displays each months updated recurringDepositsamortization schedule on the page
*/
function recurringDepositsamort(balance, interestRate, terms)
{
    //Calculate the per month interest rate
	var monthlyRate = interestRate/12;
	
	//Calculate the payment
   
	    
	//begin building the return string for the display of the recurringDepositsamort table
       var recurringDepositsgetResult = "<span class= w3-justify w3-margin'>Investment amount: " + balance.toFixed(2) +  "</span>" + 
     "<span class=' w3-justify w3-margin'>Interest rate: " + (interestRate).toFixed(2) +  "%</span>"+
   "<span class=' w3-justify w3-margin'>Number of months: " + terms +"</span>";
       // "Monthly payment: " + payment.toFixed(2) + "<br />" +
  
    var p1=interestRate/4;
    var p2=terms/12;
    var p3=(balance*(Math.pow((1+p1/100),(p2)*4)-1)/(1-Math.pow((1+p1/100),-4/12)));
   
    //add header row for table to return string
	recurringDepositsgetResult +="<table id='tableStart' class='w3-table-all w3-centered w3-hoverable'><tr><th>Maturity Amount:</th>"; 
    recurringDepositsgetResult += "<td> " + p3.toFixed(2) + "</td>";
    
    /**	recurringDepositsgetResult += "<table border='2'><tr><th>Maturity Amount:</th>";
    recurringDepositsgetResult += "<td> " + p3.toFixed(2) + "</td>";
    
     * Loop that calculates the monthly Loan recurringDepositsamortization amounts then adds 
     * them to the return string 
     */

	//Final piece added to return string before returning it - closes the table
    recurringDepositsgetResult += "</table>";
	
	//returns the concatenated string to the page
    return recurringDepositsgetResult;
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