function addnewfoodtype()
{
	//alert("ok");
	$("#newcaketypediv").show();
}

function insertfoodtype()
{
	var category_name=$("#category_name").val();
	if(category_name=="")
	{
		alert("cannot keep empty");
		return false;
	}
	else
	{
		$.post('ajax/insertfoodtype.php',{category_name:category_name},
		function(markup){
		alert("New Type Added");
		$("#category_name").val("");
		$("#newcaketypediv").hide();
		$("#allcaketypediv").html("");
		$("#allcaketypediv").html(markup);
		//alert(markup);
	    });
	}
}

function updateqty(item_code,item_qty,x)
{
var item_qty=parseInt($("#item_qty"+x).val());
var total_amt=parseFloat($("#total_amt"+x).val());
var product_cost=parseFloat($("#product_cost"+x).val());
$("#total_amt"+x).val(item_qty*product_cost);
var total_amt=parseFloat($("#total_amt"+x).val());
var payable_amt=parseFloat($("#payable_amt").val());
//alert(payable_amt-total_amt);
//alert(item_qty*product_cost);
$("#payable_amt").val((payable_amt-total_amt)+(item_qty*product_cost));
$.post('ajax/updateqty.php',{item_code:item_code,item_qty:item_qty,item_cost:total_amt},
		function(markup){
		//alert(markup);
	});

}