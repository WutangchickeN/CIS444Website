function popUp()
{
	alert("Placeholder for Submit Ticket: Once the user has entered a ticket the Database automatiacally be updated.");

return false;
}

function populate(s1, s2)
{
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";

	if(s1.value == "Damage")
	{
		var optionArray = ["|","walls|Walls","ceiling|Ceiling","floor|Floor","door|Door","board|Board","projector|Projector","other|Other"];
	} else if(s1.value == "Cleanliness")
	{
		var optionArray = ["|","spill|Spill","stains|Stains","smell|Smell","organization|Organization","trash can|Trash Can","recycling bin|Recycling Bin","other|Other"];
	} else if(s1.value == "Cosmetic")
	{
		var optionArray = ["|","graffiti|Graffiti","nonstandard markings|Nonstandard Markings","other|Other"];
	} else if(s1.value == "Technical")
	{
		var optionArray = ["|","faculty computer issue|Faculty Computer Issue","student computer issue|Student Computer Issue","internet connection issue|Internet Connection Issue","room electronics issue|Room Electronics Issue","other|Other"];
	} else if(s1.value == "Electrical")
	{
		var optionArray = ["|","burnt out bulb|Burnt Out Bulb","faulty lightning|Faulty Lighting","exposed wires|Exposed Wires","visible arcing|Visible Arcing","faulty outlets|Faulty Outlets","loud humming|Loud Humming","other|Other"];
	} else if(s1.value == "Plumbing")
	{
		var optionArray = ["|","leaking or inoperable faucets|Leaking or Inoperable Faucets","leaking or inoberable toilets|Leaking or Inoperable Toilets","water station filter change|Water Station Filter change","water stationed damaged|Water Station Damaged","exposed sprinkler system|Exposed Sprinkler System","clogged drains|Clogged Drains","other|Other"];
	} else if(s1.value == "Equipment")
	{
		var optionArray = ["|","projector misalignment|Projector Misalignment","damaged audio equipment|Damaged Audio Equipment","non-operational audio equipment|Non-operational audio equipment","non-technical audio/video issue|Non-technical audio/video issue","damaged lab equipment|Damaged Lab Equipment","missing lab equipment|Missing Lab Equipment","other computer hardware issues|Other Computer Hardware Issues","other|Other"];
	} else if(s1.value == "Other")
	{
		var optionArray = ["|","other|Other"];
	} 

	for(var option in optionArray)
	{
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
