//Get all data from the html document
const groceryTable = document.getElementById('grocery-table');
const productPrices = document.getElementsByClassName('product-price');
const productQuantities = document.getElementsByClassName('product-quantity');
const productSubtotals = document.getElementsByClassName('product-totalcost');
const totalCost = document.getElementById('totalcost');


//Call tableChanged() if a change is made to the amount in the table
groceryTable.addEventListener('change', tableChanged);
function tableChanged() {
    console.log('Aantal producten is gewijzigd');
    let totalPrice = 0;

    //Iterate over the products to determine what changed
    for(let i = 0; i < productPrices.length; i++) {

        //Calculate the subtotals by multiplying the prices with the quantities
        productSubtotals[i].innerHTML = (productPrices[i].innerHTML * productQuantities[i].value).toFixed(2);
        
        //Add all subtotals to totalPrice
        totalPrice += Number(productSubtotals[i].innerHTML);
    
    }

    //Change the total in the HTML
    totalCost.innerHTML = totalPrice.toFixed(2);
    
}
