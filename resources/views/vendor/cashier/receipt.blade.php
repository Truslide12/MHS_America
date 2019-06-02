<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Invoice</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

    <style>
        body {
            background: #fff;
            background-image: none;
            font-size: 12px;
        }
        address{
            margin-top:15px;
        }
        h2 {
            font-size:28px;
            color:#cccccc;
        }
        .container {
            padding-top:30px;
        }
        .invoice-head td {
            padding: 0 8px;
        }
        .invoice-body{
            background-color:transparent;
        }
        .logo {
            padding-bottom: 10px;
        }
        .table th {
            vertical-align: bottom;
            font-weight: bold;
            padding: 8px;
            line-height: 20px;
            text-align: left;
        }
        .table td {
            padding: 8px;
            line-height: 20px;
            text-align: left;
            vertical-align: top;
            border-top: 1px solid #dddddd;
        }
        .well {
            margin-top: 15px;
        }
    </style>
</head>

<body height="100%">
<div class="container" height="100%">
    <table height="100%" style="margin-left: auto; margin-right: auto" width="550">
    	<tr>
    		<td height="10%" colspan="2" style="padding-left: 48px;background: #007bdf;""><img src="img/logo-2014-mini.png"></td>
    	</tr>
        <tr valign="top">
            <!-- Organization Details -->
            <td height="60%" style="font-size:16px;background: #007bdf;color: snow;width: 30%;">
            	<br><br>
            	<div style="width: 80%;padding: 4px 24px;">
                 <strong style="font-weight: bold;">Customer:</strong><br>
                 <span style="padding-left:12px;">{{ $company->title }}</span><br><br>
                 <strong>Email:</strong><br>
                 <span style="padding-left:12px;font-size: 12px;">{{ $company->stripe_customer_email }}</span>
            	</div>

                <hr style="margin: 40px 12px;">
                <center>
                <strong>MHS America</strong><br><br>
                34428 Yucaipa Blvd<br>
                Ste E-102<br>
				Yucaipa, CA 92399<br>
				---<br>
				1 (805) 419-5998
				</center>

            </td>
            <td>

                <!-- Invoice Table -->
                <div style="padding: 25px;">
                <!-- Invoice Info -->
                <p style="padding: 18px 24px;border:1px solid black;">
                	<strong>Date:</strong> {{ $invoice->date()->toFormattedDateString() }}<br>
                    <strong>Invoice Number:</strong> {{ $id or $invoice->id }}<br>
                    <strong>Product:</strong> {{ $product }}<br>
                </p>
                <table width="100%" class="table" border="0">
                    <tr>
                        <th align="left">Description</th>
                        <th align="right">Date</th>
                        <th align="right">Amount</th>
                    </tr>

                    <!-- Display The Invoice Items -->
                    @foreach ($invoice->invoiceItems() as $item)
                        <tr>
                            <td colspan="2">{{ $item->description }}</td>
                            <td>{{ $item->total() }}</td>
                        </tr>
                    @endforeach

                    <!-- Display The Subscriptions -->
                    @foreach ($invoice->subscriptions() as $subscription)
                        <tr>
                            <td>Subscription ({{ $subscription->quantity }})</td>
                            <td>
                                {{ $subscription->startDateAsCarbon()->formatLocalized('%B %e, %Y') }} -
                                {{ $subscription->endDateAsCarbon()->formatLocalized('%B %e, %Y') }}
                            </td>
                            <td>{{ $subscription->total() }}</td>
                        </tr>
                    @endforeach

                    <!-- Display The Discount -->
                    @if ($invoice->hasDiscount())
                        <tr>
                            @if ($invoice->discountIsPercentage())
                                <td>{{ $invoice->coupon() }} ({{ $invoice->percentOff() }}% Off)</td>
                            @else
                                <td>{{ $invoice->coupon() }} ({{ $invoice->amountOff() }} Off)</td>
                            @endif
                            <td>&nbsp;</td>
                            <td>-{{ $invoice->discount() }}</td>
                        </tr>
                    @endif

                    <!-- Display The Tax Amount -->
                    @if ($invoice->tax_percent)
                        <tr>
                            <td>Tax ({{ $invoice->tax_percent }}%)</td>
                            <td>&nbsp;</td>
                            <td>{{ Laravel\Cashier\Cashier::formatAmount($invoice->tax) }}</td>
                        </tr>
                    @endif

                    <!-- Display The Final Total -->
                    <tr style="border-top:2px solid #000;">
                        <td>&nbsp;</td>
                        <td style="text-align: right;"><strong>Total</strong></td>
                        <td><strong>{{ $invoice->total() }}</strong></td>
                    </tr>
                </table>
            	</div>
            </td>
        </tr>
        <tr>
			<td height="8%" style="background: #007bdf;"></td>
			<td height="8%"></td>
		</tr>
		<tr>
			<td height="4%" style="background: #007bdf;"></td>
			<td height="4%"></td>
		</tr>
		<tr>
			<td height="2%" style="background: #007bdf;"></td>
			<td height="2%"></td>
		</tr>
    </table>
</div>
</body>
</html>
