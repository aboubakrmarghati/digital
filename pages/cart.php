<h2 class="card-title mb-3">Cart</h2>
<div class="row">
    <div class="col">
        <div class="card shadow mt-3 py-2 mb-2 bg-light-grey">
            <div class="container mt-4 mb-4">
                <div class="h1">Your cart is empty</div>
                <p>Explore our shop and find items</p>
                <a href="shop" class="btn btn-lg btn-dark">Explore</a>
            </div>
        </div>

        <div class="col">
            <h1 class="mt-4">If Card Plein</h1>
            <div class="card mt-3">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="border-top-0 pl-2" width="1%">#</th>
                            <th class="border-top-0" width="30%">Subscription</th>
                            <th class="border-top-0" width="10%">Amount</th>
                            <th class="border-top-0" width="10%">Price</th>
                            <th class="border-top-0" width="10%">Total</th>
                            <th class="border-top-0 text-right" width="8%"><a href="#" class="text-primary mr-1 me-2"><i class="fa-solid fa-rotate"></i></a>
                            <a href="#" class="text-danger mr-1"><i class="fa-solid fa-trash"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-primary">Netflix UHD - 1 MONTH</td>
                            <td>1</td>
                            <td class="text-success">$6.99</td>
                            <td class="text-success">$6.99</td>
                            <td class="text-right"><a href="#" class="text-danger mr-1"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <tr class="cart-total">
						<td class="pb-1 pl-2 text-primary"><b>1</b></td>
						<td class="pb-1"></td>
						<td class="pb-1"><b>1</b></td>
						<td class="pb-1 text-right">Subtotal:</td>
						<td class="pb-1 text-success"><b>$2.99</b></td>
						<td class="pb-1"></td>
					</tr>
					
					
					<tr>
						<td class="border-0 pt-1 pb-2"></td>
						<td class="border-0 pt-1 pb-2"></td>
						<td class="border-0 pt-1 pb-2"></td>
						<td class="border-0 pt-1 pb-2 text-right">Total:</td>
						<td class="border-0 pt-1 pb-2 text-success"><b>$2.99</b></td>
						<td class="border-0 pt-1 pb-2"></td>
					</tr>
                    </tfoot>
                </table>
            </div>
            <form action="">
            <div class="d-flex flex-row-reverse">
				<input type="hidden" name="Checkout" value="Checkout">
				<button type="submit" class="btn btn-primary btn-lg mt-2 p-2 shadow"><span class="fa fa-shopping-cart"></span> Checkout</button>
			</div>
            </form>
        </div>
    </div>
</div>