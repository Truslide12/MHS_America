@extends('admin.content')

@section('content')
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered table-hover table-striped dataTable">
			<thead>
				<tr>
					<th width="52%">Community Input</th>
					<th width="12%" class="centerit unclaimed">Unclaimed</th>
					<th width="12%" class="centerit free">Free</th>
					<th width="12%" class="centerit paid">Paid</th>
					<th width="12%" class="centerit premium">Premium</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Community Type</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_type_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_type_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_type_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_type_premium" value="">
					</td>
				</tr>
				<tr>
					<td>About Community</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_about_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_about_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_about_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_about_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Total Spaces</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_spaces_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_spaces_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_spaces_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_spaces_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Space Rent</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_rent_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_rent_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_rent_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_rent_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Office Manager</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_manager_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_manager_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_manager_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_manager_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Office Email</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_email_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_email_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_email_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_email_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Promote Parent Company</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_promo_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_promo_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_promo_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_promo_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_phone_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_phone_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_phone_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_phone_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Fax Number</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_fax_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_fax_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_fax_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_fax_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Street Address</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_address_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_address_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_address_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_address_premium" value="">
					</td>
				</tr>
				<tr>
					<td>City</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_city_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_city_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_city_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_city_premium" value="">
					</td>
				</tr>
				<tr>
					<td>State</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_state_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_state_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_state_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_state_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Zip</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_zip_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_zip_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_zip_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_zip_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Site Amenities</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_amenities_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_amenities_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_amenities_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_amenities_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Parking</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_parking_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_parking_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_parking_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_parking_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Utilities</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_utilities_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_utilities_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_utilities_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_utilities_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Manage Spaces</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_manspaces_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_manspaces_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_manspaces_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_manspaces_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Manage Homes</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_manhomes_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_manhomes_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_manhomes_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_manhomes_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Manage Business Hours</td>
					<td class="centerit unclaimed">
						<input type="checkbox" name="inp_manhours_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="checkbox" name="inp_manhours_free" value="">
					</td>
					<td class="centerit paid">
						<input type="checkbox" name="inp_manhours_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="checkbox" name="inp_manhours_premium" value="">
					</td>
				</tr>
				<tr>
					<td>Manage Photos</td>
					<td class="centerit unclaimed">
						<input type="number" class="form-control" min="0" max="20" name="inp_manphotos_unclaimed" value="">
					</td>
					<td class="centerit free">
						<input type="number" class="form-control" min="0" max="20" name="inp_manphotos_free" value="">
					</td>
					<td class="centerit paid">
						<input type="number" class="form-control" min="0" max="20" name="inp_manphotos_paid" value="">
					</td>
					<td class="centerit premium">
						<input type="number" class="form-control" min="0" max="20" name="inp_manphotos_premium" value="">
					</td>
				</tr>
			</tbody>
		</table>
		<button class="btn btn-primary pull-right">Save</button>
	</div>
</div>
@stop