<style>
.dropdown-menu{
	/*transform: translate3d(5px, 35px, 0px)!important;
	width:100%;*/
	z-index:1;
}

</style>
<div class="row">
	<div class="col-xl-12">
		<!--Begin::Main Portlet-->
		<div class="m-portlet">
			<!--begin: Portlet Head-->
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
						Order Form
						</h3>
					</div>
				</div>
				<div class="m-portlet__head-tools">
					<ul class="m-portlet__nav">
						<li class="m-portlet__nav-item">
							<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
								<i class="flaticon-info m--icon-font-size-lg3"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!--end: Portlet Head-->
			<!--begin: Form Wizard-->
			<div class="m-wizard m-wizard--1 m-wizard--success" id="m_wizard">
				<!--begin: Message container -->
				<div class="m-portlet__padding-x">
					<!-- Here you can put a message or alert -->
				</div>
				<!--end: Message container -->
				<!--begin: Form Wizard Head -->
				<div class="m-wizard__head m-portlet__padding-x">
					<!--begin: Form Wizard Progress -->
					<div class="m-wizard__progress">
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<!--end: Form Wizard Progress -->
					<!--begin: Form Wizard Nav -->
					<div class="m-wizard__nav">
						<div class="m-wizard__steps">
							<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
								<div class="m-wizard__step-info">
									<a href="#" class="m-wizard__step-number">
										<span><span>1</span></span>
									</a>
									<div class="m-wizard__step-line">
										<span></span>
									</div>
									<div class="m-wizard__step-label">
										Address Information
									</div>
								</div>
							</div>
							<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_2">
								<div class="m-wizard__step-info">
									<a href="#" class="m-wizard__step-number">
										<span><span>2</span></span>
									</a>
									<div class="m-wizard__step-line">
										<span></span>
									</div>
									<div class="m-wizard__step-label">
										Package Description
									</div>
								</div>
							</div>
							<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_3">
								<div class="m-wizard__step-info">
									<a href="#" class="m-wizard__step-number">
										<span><span>3</span></span>
									</a>
									<div class="m-wizard__step-line">
										<span></span>
									</div>
									<div class="m-wizard__step-label">
										Shipment Detail
									</div>
								</div>
							</div>
							<div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
								<div class="m-wizard__step-info">
									<a href="#" class="m-wizard__step-number">
										<span><span>4</span></span>
									</a>
									<div class="m-wizard__step-line">
										<span></span>
									</div>
									<div class="m-wizard__step-label">
										Dynamics
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end: Form Wizard Nav -->
				</div>
				<!--end: Form Wizard Head -->
				<!--begin: Form Wizard Form-->
				<div class="m-wizard__form">
					<!--
					1) Use m-form--label-align-left class to alight the form input lables to the right
					2) Use m-form--state class to highlight input control borders on form validation
					-->
					<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
						<!--begin: Form Body -->
						<div class="m-portlet__body">
							<!--begin: Form Wizard Step 1-->
							<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
								<div class="row">
									<div class="col-xl-6">
										<div class="m-form__section m-form__section--first">
											<div class="m-form__heading">
													<h3 class="m-form__heading-title">Shipper's Address<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i><button style="margin-left: 40%" class="btn btn-primary address_book" data-toggle="modal" data-target="#m_modal_4">Address List</button></h3>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Company Name <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i> :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" id="shipper_company_name" value="">
													<span class="m-form__help">ex: sf</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Shipper's Name* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder=""  id="shipper_name" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Country/Region* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder=""  value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Province/State* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">City* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Area :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Shipper's Address* :</label>
												<div class="col-xl-8 col-lg-8">
													<textarea class="form-control m-input"></textarea>
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Postal Code* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Telephone No.* :</label>
												<div class="col-xl-8 col-lg-8">
													<div class="input-group">
														<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
														<input type="text" name="phone" class="form-control m-input" placeholder="" value="1-541-754-3010">
													</div>
													<span class="m-form__help">Enter your valid phone in US phone format. E.g: 1-541-754-3010</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Email :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6">
										<div class="m-form__section m-form__section--first">
											<div class="m-form__heading">
													<h3 class="m-form__heading-title">Receiver's Address<i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i><button style="margin-left: 39%" class="btn btn-primary address_book" data-toggle="modal" data-target="#m_modal_4">Address List</button></h3>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Company Name <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info" title="Some help text goes here"></i> :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: sf</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Receiver's Name* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Country/Region* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Province/State* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">City* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Area :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Receiver's Address* :</label>
												<div class="col-xl-8 col-lg-8">
													<textarea class="form-control m-input"></textarea>
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Postal Code* :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Telephone No.* :</label>
												<div class="col-xl-8 col-lg-8">
													<div class="input-group">
														<div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
														<input type="text" name="phone" class="form-control m-input" placeholder="" value="1-541-754-3010">
													</div>
													<span class="m-form__help">Enter your valid phone in US phone format. E.g: 1-541-754-3010</span>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<label class="col-xl-4 col-lg-4 col-form-label">Email :</label>
												<div class="col-xl-8 col-lg-8">
													<input type="text" name="name" class="form-control m-input" placeholder="" value="">
													<span class="m-form__help">ex: bla</span>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="m-separator m-separator--dashed m-separator--lg"></div>
							</div>
							<!--end: Form Wizard Step 1-->
							<!--begin: Form Wizard Step 2-->
							<div class="m-wizard__form-step" id="m_wizard_form_step_2">
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">reference No.1:</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">reference No.2:</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-6">
										<div class="row">
											<div class="col-xl-3">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">Dimension</label>
													<!-- <input type="text" class="form-control m-input" placeholder=""> -->
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">Length</label>
													<input type="text" class="form-control m-input" >
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">Width</label>
													<input type="text" class="form-control m-input" >
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group m-form__group">
													<label for="example_input_full_name">Height</label>
													<input type="text" class="form-control m-input" >
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group m-form__group">
													<label for="example_input_full_name" style="visibility: hidden"> s</label>
													<input type="text" style="border:none;" class="form-control m-input" value="CM" readonly >
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Parcel Quantity* :</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Currency* :</label>
											<select class="form-control m-input selectpickers" name="billing_card_exp_month" id="currency_page2"  data-live-search="true">
												<option value="">Select</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Waybill# :</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Agent Waybill :</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>

								<div class="m-separator m-separator--dashed m-separator--lg"></div>

								<div class="row">
									<div class="col-xl-2">
										<button class="btn btn-primary" id="more_product"><i class="flaticon-plus"></i> Add</button>
									</div>
									<div class="col-xl-4 offset-xl-6">
										<div class="form-group m-form__group row">
											<label class="col-xl-6 col-lg-6 col-form-label">Declared Value :</label>
											<div class="col-xl-6 col-lg-6">
												<input class="form-control m-input"/>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div id="product_data">
									<div class="row prod_row_0">
										<div class="col-xl-3">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Product Record No :</label>
												<div class="row">
													<div class="col-xl-3">
														<button class="btn btn-secondary">select</button>
													</div>
													<div class="col-xl-9">
														<input type="text" id="prod_rec_0" class="form-control m-input" placeholder="">
													</div>
												</div>
												
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Description*</label>
												<input type="text" id="prod_desc_0" class="form-control m-input" placeholder="">
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Quantity*</label>
												<input type="text" id="prod_qty_0" class="form-control m-input" placeholder="">
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Unit*</label>
												<select class="form-control m-input selectpickers" name="billing_card_exp_month" id="prod_unit_0">
													<option value="">Select</option>
													<option value="01">Piece</option>
													<option value="02">Strip</option>
													<option value="03">Set</option>
													<option value="05">Box</option>
												</select>
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Unit Value*</label>
												<input type="text" id="prod_value_0" class="form-control m-input" placeholder="">
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Unit Weight</label>
												<input type="text" id="prod_unweight_0" class="form-control m-input" placeholder="">
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Total Value*</label>
												<input type="text" id="prod_totval_0" class="form-control m-input" placeholder="">
											</div>
										</div>
										<div class="col-xl-2" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">Country/Region Of Origin*</label>
												<input type="text" id="prod_country_0" class="form-control m-input" placeholder="">
											</div>
										</div>
										<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">HS CODE</label>
												<input type="text" id="prod_hscode_0" class="form-control m-input" placeholder="">
											</div>
										</div>	
										<div class="col-xl-2">
											<div class="form-group m-form__group">
												<label for="example_input_full_name">State bar code</label>
												<input type="text" id="prod_state_0" class="form-control m-input" placeholder="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end: Form Wizard Step 2-->
							<!--begin: Form Wizard Step 3-->
							<div class="m-wizard__form-step" id="m_wizard_form_step_3">
								<div class="row">
									<div class="col-xl-12">
										<table class="table table-bordered">
											<thead>
												<th>Express Type*</th>
												<th>Estimated Weight</th>
												<th>Estimated transit time(Work days)</th>
												<th>Estimated Rate</th>
											</thead>
											<tbody>
												<td><input type="checkbox" value="a"/>EXPRESS</td>
												<td>1000KG</td>
												<td>NOT AVAILABLE</td>
												<td>70USD</td>
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Payment*</label>
											<input type="hidden" id="prod_payment" class="form-control m-input" placeholder="">
											<!-- bagian ini dibuat 3rd party -->
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Customer A/C No.</label>
											<input type="hidden" id="prod_cust_account" class="form-control m-input" placeholder="">
											<!-- bagian ini dibuat fixed -->
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Tax Payment Type*</label>
											<input type="text" id="prod_tax" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Tax Account</label>
											<input type="text" id="prod_tax_account" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">AWB REMARK</label>
											<input type="text" id="prod_awb_remark" class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<table class="table table-bordered">
										<thead>
											<th>Choose</th>
											<th>Added Value Service</th>
											<th>Charges</th>
											<th>COD Account</th>
											<th>Remark</th>
										</thead>
										<tbody>
											<td style="text-align: center"><input type="checkbox" value="a"/></td>
											<td>COD</td>
											<td><input type="text"/></td>
											<td><input type="text"/></td>
											<td>COD- Only available when sign the COD agreement with SF express</td>
										</tbody>
									</table>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<span style="color:red">The residential surcharge will be charged according to delivery area.</span>
									</div>
								</div>
								<div class="m-separator m-separator--dashed m-separator--lg"></div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Reason for Sending</label>
											<select class="form-control m-input selectpickers" name="billing_card_exp_month" id="prod_reason">
												<option value="">Select</option>
												<option value="01">Business</option>
												<option value="02">Non-Business</option>
											</select>
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Terms of Trade</label>
											<select class="form-control m-input selectpickers" name="billing_card_exp_month" id="prod_terms">
												<option value="">Select</option>
												<option value="01">C&F</option>
												<option value="02">C.F.R</option>
											</select>
										</div>
									</div>
									<div class="col-xl-3" style="padding-top:35px">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Self Pickup</label>
											<input type="checkbox" id="prod_self_pickup" value="1"/>
										</div>
									</div>
									<div class="col-xl-3" style="padding-top:35px">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Personal baggage</label>
											<input type="checkbox" id="prod_personal_baggage" value="1"/>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Reason For Sending Content</label>
											<input type="text" id="prod_reason_sending" class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Invoice Remark</label>
											<input type="text" id="prod_invoice_remark" class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
							</div>
							<!--end: Form Wizard Step 3-->
							<!--begin: Form Wizard Step 4-->
							<div class="m-wizard__form-step" id="m_wizard_form_step_4">
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Discount Price</label>
											<input type="text" id="custom_1" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Time of appointment</label>
											<input type="text" id="custom_2" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Wechat Remark</label>
											<input type="text" id="custom_3" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Buyer insurance fee</label>
											<input type="text" id="custom_4" class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Traceability label</label>
											<input type="text" id="custom_5" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">isBBD</label>
											<input type="text" id="custom_6" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">BBD Single Number</label>
											<input type="text" id="custom_7" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name" style="visibility: hidden;">Invoice Remark</label>
											<input type="text" id="custom_8" disabled class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Custom customization</label>
											<input type="text" id="custom_9" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">System Special</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Custom customization</label>
											<input type="text" id="custom_10" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name" style="visibility: hidden;">Invoice Remark</label>
											<input type="text" id="custom_11" disabled class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Custom customization</label>
											<input type="text" id="custom_12" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Custom customization</label>
											<input type="text" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">Custom customization</label>
											<input type="text" id="custom_13" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name" style="visibility: hidden;">Invoice Remark</label>
											<input type="text" id="custom_14" disabled class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">System Special</label>
											<input type="text" id="custom_15" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">System Special</label>
											<input type="text" id="custom_16" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">System Special</label>
											<input type="text" id="custom_17" class="form-control m-input" placeholder="">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="form-group m-form__group">
											<label for="example_input_full_name">System Special</label>
											<input type="text" id="custom_18" class="form-control m-input" placeholder="">
										</div>
									</div>
								</div>
								
							</div>
							<!--end: Form Wizard Step 4-->
						</div>
						<!--end: Form Body -->
						<!--begin: Form Actions -->
						<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
							<div class="m-form__actions m-form__actions">
								<div class="row" data-wizard-action="submit">
									<div class="col-lg-12">
										<input type="checkbox" value="data"/>
										<span style="color:red">I have confirmed that I have read and agree to the "Express Carrier Contract Terms"</span>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-lg-2"></div>
									<div class="col-lg-4 m--align-left">
										<button class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
										<span>
											<i class="la la-arrow-left"></i>&nbsp;&nbsp;
											<span>Back</span>
										</span>
										</button>
									</div>
									<div class="col-lg-4 m--align-right">
										<button class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
										<span>
											<i class="la la-check"></i>&nbsp;&nbsp;
											<span>Submit</span>
										</span>
										</button>
										<button class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
										<span>
											<span>Save & Continue</span>&nbsp;&nbsp;
											<i class="la la-arrow-right"></i>
										</span>
										</button>
									</div>
									<div class="col-lg-2"></div>
								</div>
							</div>
						</div>
						<!--end: Form Actions -->
					</form>
				</div>
				<!--end: Form Wizard Form-->
			</div>
			<!--end: Form Wizard-->
		</div>
		<!--End::Main Portlet-->
	</div>
</div>
<div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Address Book</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!--begin: Search Form -->
				<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
					<div class="row align-items-center">
						<div class="col-xl-8 order-2 order-xl-1">
							<div class="form-group m-form__group row align-items-center">
								<!-- <div class="col-md-4">
									<div class="m-form__group m-form__group--inline">
										<div class="m-form__label">
											<label>Status:</label>
										</div>
										<div class="m-form__control">
											<select class="form-control m-bootstrap-select" id="m_form_status">
												<option value="">All</option>
												<option value="1">Pending</option>
												<option value="2">Delivered</option>
												<option value="3">Canceled</option>
											</select>
										</div>
									</div>
									<div class="d-md-none m--margin-bottom-10"></div>
								</div>
								<div class="col-md-4">
									<div class="m-form__group m-form__group--inline">
										<div class="m-form__label">
											<label class="m-label m-label--single">Type:</label>
										</div>
										<div class="m-form__control">
											<select class="form-control m-bootstrap-select" id="m_form_type">
												<option value="">All</option>
												<option value="1">Online</option>
												<option value="2">Retail</option>
												<option value="3">Direct</option>
											</select>
										</div>
									</div>
									<div class="d-md-none m--margin-bottom-10"></div>
								</div> -->
								<div class="col-md-8">
									<div class="m-input-icon m-input-icon--left">
										<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
										<span class="m-input-icon__icon m-input-icon__icon--left">
											<span><i class="la la-search"></i></span>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--end: Search Form -->

				<!--begin: Datatable -->
				<div class="m_datatable" id="local_data"></div>

				<!--end: Datatable -->
			</div>
			
		</div>
	</div>
</div>
<script>
var DatatableDataLocalDemo= {
    init:function() {
        var e,
        a;
        e=JSON.parse('[{"RecordID":1,"OrderID":"54473-251","ShipCountry":"GT","ShipCity":"San Pedro Ayampuc","ShipName":"Sanford-Halvorson","ShipAddress":"897 Magdeline Park","CompanyEmail":"sgormally0@dot.gov","CompanyAgent":"Shandra Gormally","CompanyName":"Eichmann, Upton and Homenick","Currency":"GTQ","Notes":"sit amet cursus id turpis integer aliquet massa id lobortis convallis","Department":"Computers","Website":"house.gov","Latitude":"14.78667","Longitude":"-90.45111","ShipDate":"5/21/2016","TimeZone":"America/Guatemala","Status":1,"Type":2},{"RecordID":2,"OrderID":"41250-308","ShipCountry":"ID","ShipCity":"Langensari","ShipName":"Denesik-Langosh","ShipAddress":"9 Brickson Park Junction","CompanyEmail":"eivanonko1@over-blog.com","CompanyAgent":"Estele Ivanonko","CompanyName":"Lowe, Batz and Purdy","Currency":"IDR","Notes":"lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet","Department":"Baby","Website":"arizona.edu","Latitude":"-6.4222","Longitude":"105.9425","ShipDate":"4/19/2016","TimeZone":"Asia/Jakarta","Status":1,"Type":3},{"RecordID":3,"OrderID":"0615-7571","ShipCountry":"HR","ShipCity":"Slatina","ShipName":"Kunze, Schneider and Cronin","ShipAddress":"35712 Sundown Parkway","CompanyEmail":"sbettley2@gmpg.org","CompanyAgent":"Stephine Bettley","CompanyName":"Bernier, Weimann and Wuckert","Currency":"HRK","Notes":"cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus","Department":"Toys","Website":"rakuten.co.jp","Latitude":"45.70333","Longitude":"17.70278","ShipDate":"4/7/2016","TimeZone":"Europe/Zagreb","Status":6,"Type":3},{"RecordID":4,"OrderID":"49349-551","ShipCountry":"RU","ShipCity":"Novo-Peredelkino","ShipName":"Jacobi-Ankunding","ShipAddress":"481 Sage Park","CompanyEmail":"dmartijn3@printfriendly.com","CompanyAgent":"Damara Martijn","CompanyName":"Tromp-Hegmann","Currency":"RUB","Notes":"cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus etiam","Department":"Baby","Website":"t-online.de","Latitude":"55.64528","Longitude":"37.33583","ShipDate":"2/15/2016","TimeZone":"Europe/Moscow","Status":4,"Type":2},{"RecordID":5,"OrderID":"59779-750","ShipCountry":"ID","ShipCity":"Bombu","ShipName":"Johns-Kunze","ShipAddress":"59 Marcy Hill","CompanyEmail":"hpelzer4@friendfeed.com","CompanyAgent":"Helsa Pelzer","CompanyName":"Walker LLC","Currency":"IDR","Notes":"non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu adipiscing molestie hendrerit","Department":"Toys","Website":"xrea.com","Latitude":"-8.6909","Longitude":"120.5162","ShipDate":"1/30/2017","TimeZone":"Asia/Makassar","Status":4,"Type":3},{"RecordID":6,"OrderID":"63777-145","ShipCountry":"CN","ShipCity":"Kaiyuan","ShipName":"Kris, Keeling and Weimann","ShipAddress":"122 Evergreen Street","CompanyEmail":"sheugel5@mysql.com","CompanyAgent":"Sigismundo Heugel","CompanyName":"D\'Amore-Johnston","Currency":"CNY","Notes":"tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus in","Department":"Tools","Website":"gravatar.com","Latitude":"42.53306","Longitude":"124.04028","ShipDate":"10/22/2016","TimeZone":"Asia/Harbin","Status":3,"Type":3},{"RecordID":7,"OrderID":"57520-0136","ShipCountry":"GR","ShipCity":"Tríkala","ShipName":"Effertz Inc","ShipAddress":"328 8th Avenue","CompanyEmail":"cewell6@reverbnation.com","CompanyAgent":"Clarinda Ewell","CompanyName":"Jakubowski and Sons","Currency":"EUR","Notes":"magnis dis parturient montes nascetur ridiculus mus vivamus vestibulum sagittis sapien","Department":"Music","Website":"msu.edu","Latitude":"40.59814","Longitude":"22.55733","ShipDate":"9/3/2016","TimeZone":"Europe/Athens","Status":4,"Type":1},{"RecordID":8,"OrderID":"0093-5200","ShipCountry":"SE","ShipCity":"Köping","ShipName":"West-Ullrich","ShipAddress":"48 Sommers Junction","CompanyEmail":"adevenny7@webnode.com","CompanyAgent":"Ariel Devenny","CompanyName":"Goldner, Bartoletti and Towne","Currency":"SEK","Notes":"mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus","Department":"Jewelery","Website":"flavors.me","Latitude":"59.514","Longitude":"15.9926","ShipDate":"2/10/2016","TimeZone":"Europe/Stockholm","Status":2,"Type":3},{"RecordID":9,"OrderID":"14783-319","ShipCountry":"ID","ShipCity":"Ujung","ShipName":"Stiedemann-Kemmer","ShipAddress":"10625 Dixon Road","CompanyEmail":"bplewright8@mashable.com","CompanyAgent":"Buck Plewright","CompanyName":"Boyer and Sons","Currency":"IDR","Notes":"habitasse platea dictumst etiam faucibus cursus urna ut tellus nulla ut erat id mauris vulputate elementum","Department":"Music","Website":"odnoklassniki.ru","Latitude":"-8.2137","Longitude":"114.3818","ShipDate":"11/11/2016","TimeZone":"Asia/Makassar","Status":2,"Type":3},{"RecordID":10,"OrderID":"59011-454","ShipCountry":"CO","ShipCity":"Salento","ShipName":"Daniel-Feest","ShipAddress":"48004 Mariners Cove Circle","CompanyEmail":"gliddon9@wordpress.org","CompanyAgent":"Gilberta Liddon","CompanyName":"Nienow-Dickens","Currency":"COP","Notes":"dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit","Department":"Electronics","Website":"deliciousdays.com","Latitude":"4.6375","Longitude":"-75.57028","ShipDate":"12/15/2016","TimeZone":"America/Bogota","Status":6,"Type":2},{"RecordID":11,"OrderID":"0268-1530","ShipCountry":"ID","ShipCity":"Sarkanjut","ShipName":"Mraz-Parisian","ShipAddress":"9630 Scoville Road","CompanyEmail":"oheusticea@buzzfeed.com","CompanyAgent":"Odetta Heustice","CompanyName":"Gorczany-Mohr","Currency":"IDR","Notes":"interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus","Department":"Electronics","Website":"pagesperso-orange.fr","Latitude":"-7.10896","Longitude":"107.94173","ShipDate":"7/28/2016","TimeZone":"Asia/Jakarta","Status":5,"Type":3},{"RecordID":12,"OrderID":"53057-012","ShipCountry":"CN","ShipCity":"Baiguo","ShipName":"Reinger, Roberts and Medhurst","ShipAddress":"29238 Waywood Road","CompanyEmail":"blillistoneb@ftc.gov","CompanyAgent":"Brittne Lillistone","CompanyName":"Schimmel, Bauch and Ortiz","Currency":"CNY","Notes":"ultrices posuere cubilia curae nulla dapibus dolor vel est donec odio justo sollicitudin ut suscipit a feugiat","Department":"Toys","Website":"typepad.com","Latitude":"29.8841","Longitude":"110.45615","ShipDate":"9/23/2016","TimeZone":"Asia/Chongqing","Status":5,"Type":3},{"RecordID":13,"OrderID":"58232-9814","ShipCountry":"PL","ShipCity":"Wołczyn","ShipName":"Stanton-Davis","ShipAddress":"63 Dwight Junction","CompanyEmail":"oharlinc@whitehouse.gov","CompanyAgent":"Oralia Harlin","CompanyName":"Hagenes, Dicki and Rowe","Currency":"PLN","Notes":"felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed","Department":"Jewelery","Website":"usnews.com","Latitude":"51.01845","Longitude":"18.04994","ShipDate":"1/15/2017","TimeZone":"Europe/Warsaw","Status":2,"Type":2},{"RecordID":14,"OrderID":"41163-369","ShipCountry":"CA","ShipCity":"Lanigan","ShipName":"Abbott, Lockman and Roberts","ShipAddress":"02 Florence Trail","CompanyEmail":"ffultond@omniture.com","CompanyAgent":"Flinn Fulton","CompanyName":"Jaskolski, O\'Kon and Crona","Currency":"CAD","Notes":"congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed","Department":"Clothing","Website":"biblegateway.com","Latitude":"51.85006","Longitude":"-105.03443","ShipDate":"9/17/2016","TimeZone":"America/Regina","Status":2,"Type":3},{"RecordID":15,"OrderID":"63824-302","ShipCountry":"GR","ShipCity":"Patitírion","ShipName":"Klein-Tillman","ShipAddress":"0 Londonderry Crossing","CompanyEmail":"jitzkovskye@un.org","CompanyAgent":"Jessey Itzkovsky","CompanyName":"Blanda Inc","Currency":"EUR","Notes":"eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium","Department":"Grocery","Website":"opensource.org","Latitude":"39.14657","Longitude":"23.86494","ShipDate":"2/13/2016","TimeZone":"Europe/Athens","Status":5,"Type":2},{"RecordID":16,"OrderID":"55670-109","ShipCountry":"RU","ShipCity":"Ozëry","ShipName":"Buckridge, Klein and Williamson","ShipAddress":"00 Fremont Point","CompanyEmail":"ddiggf@epa.gov","CompanyAgent":"Deidre Digg","CompanyName":"Miller, Morissette and Klocko","Currency":"RUB","Notes":"montes nascetur ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque","Department":"Grocery","Website":"google.ca","Latitude":"54.85998","Longitude":"38.55062","ShipDate":"5/23/2016","TimeZone":"Europe/Moscow","Status":6,"Type":1},{"RecordID":17,"OrderID":"29500-9090","ShipCountry":"CN","ShipCity":"Dingshu","ShipName":"Yundt Inc","ShipAddress":"538 Saint Paul Plaza","CompanyEmail":"haldcorneg@salon.com","CompanyAgent":"Hilliary Aldcorne","CompanyName":"MacGyver-Goyette","Currency":"CNY","Notes":"vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus dolor vel est donec","Department":"Games","Website":"spotify.com","Latitude":"31.2573","Longitude":"119.84881","ShipDate":"11/25/2016","TimeZone":"Asia/Shanghai","Status":1,"Type":2},{"RecordID":18,"OrderID":"49349-872","ShipCountry":"UA","ShipCity":"Manevychi","ShipName":"Kris, Bahringer and Kerluke","ShipAddress":"2873 Pearson Trail","CompanyEmail":"kramalheteh@163.com","CompanyAgent":"Kare Ramalhete","CompanyName":"Doyle, Lowe and Greenholt","Currency":"UAH","Notes":"magnis dis parturient montes nascetur ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida","Department":"Games","Website":"utexas.edu","Latitude":"51.29405","Longitude":"25.53436","ShipDate":"9/19/2016","TimeZone":"Europe/Uzhgorod","Status":6,"Type":3},{"RecordID":19,"OrderID":"41163-368","ShipCountry":"JP","ShipCity":"Fukushima-shi","ShipName":"Kemmer-Padberg","ShipAddress":"9748 Graedel Point","CompanyEmail":"dcadigani@pagesperso-orange.fr","CompanyAgent":"Devan Cadigan","CompanyName":"Botsford, Larkin and Brekke","Currency":"JPY","Notes":"at dolor quis odio consequat varius integer ac leo pellentesque ultrices mattis odio donec vitae nisi nam","Department":"Beauty","Website":"feedburner.com","Latitude":"37.75","Longitude":"140.46778","ShipDate":"12/6/2016","TimeZone":"Asia/Tokyo","Status":2,"Type":1},{"RecordID":20,"OrderID":"49999-844","ShipCountry":"AM","ShipCity":"Malishka","ShipName":"Aufderhar Group","ShipAddress":"25198 Lotheville Alley","CompanyEmail":"opettusj@ehow.com","CompanyAgent":"Ole Pettus","CompanyName":"Schultz and Sons","Currency":"AMD","Notes":"phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id","Department":"Games","Website":"usda.gov","Latitude":"39.73758","Longitude":"45.39004","ShipDate":"6/24/2016","TimeZone":"Asia/Baku","Status":2,"Type":3},{"RecordID":21,"OrderID":"37000-106","ShipCountry":"CN","ShipCity":"Jincheng","ShipName":"Paucek, Towne and Lind","ShipAddress":"573 Hovde Way","CompanyEmail":"hhickeringillk@discuz.net","CompanyAgent":"Harwell Hickeringill","CompanyName":"Kreiger Inc","Currency":"CNY","Notes":"elementum nullam varius nulla facilisi cras non velit nec nisi","Department":"Garden","Website":"google.it","Latitude":"25.50147","Longitude":"102.40058","ShipDate":"1/5/2017","TimeZone":"Asia/Chongqing","Status":6,"Type":3},{"RecordID":22,"OrderID":"42023-169","ShipCountry":"JM","ShipCity":"New Kingston","ShipName":"Halvorson-Greenfelder","ShipAddress":"055 Maryland Point","CompanyEmail":"cwaszczykl@stumbleupon.com","CompanyAgent":"Claire Waszczyk","CompanyName":"Halvorson and Sons","Currency":"JMD","Notes":"duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac nibh","Department":"Music","Website":"ustream.tv","Latitude":"18.00747","Longitude":"-76.78319","ShipDate":"9/14/2016","TimeZone":"America/Jamaica","Status":5,"Type":3},{"RecordID":23,"OrderID":"57520-0581","ShipCountry":"BR","ShipCity":"Formosa do Rio Preto","ShipName":"Heaney LLC","ShipAddress":"1 Fordem Junction","CompanyEmail":"hcominettim@phoca.cz","CompanyAgent":"Hettie Cominetti","CompanyName":"Nikolaus LLC","Currency":"BRL","Notes":"integer ac neque duis bibendum morbi non quam nec dui luctus rutrum nulla tellus in","Department":"Home","Website":"irs.gov","Latitude":"-11.04833","Longitude":"-45.19306","ShipDate":"6/4/2016","TimeZone":"America/Bahia","Status":1,"Type":1},{"RecordID":24,"OrderID":"57520-0625","ShipCountry":"CN","ShipCity":"Tushi","ShipName":"Hayes, Considine and Kohler","ShipAddress":"502 Kennedy Junction","CompanyEmail":"despinon@msn.com","CompanyAgent":"Doroteya Espino","CompanyName":"Macejkovic, Schaden and Terry","Currency":"CNY","Notes":"posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor","Department":"Health","Website":"live.com","Latitude":"28.91746","Longitude":"108.86704","ShipDate":"2/12/2016","TimeZone":"Asia/Chongqing","Status":2,"Type":1},{"RecordID":25,"OrderID":"37000-616","ShipCountry":"SE","ShipCity":"Hallstahammar","ShipName":"Bartoletti and Sons","ShipAddress":"4756 Tony Terrace","CompanyEmail":"kgeorgesono@ucsd.edu","CompanyAgent":"Klement Georgeson","CompanyName":"Ernser Group","Currency":"SEK","Notes":"rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut","Department":"Automotive","Website":"ezinearticles.com","Latitude":"59.6139","Longitude":"16.2285","ShipDate":"12/28/2016","TimeZone":"Europe/Stockholm","Status":5,"Type":2},{"RecordID":26,"OrderID":"35356-933","ShipCountry":"RU","ShipCity":"Koshki","ShipName":"Adams-Kohler","ShipAddress":"16912 Forest Run Circle","CompanyEmail":"rbengerp@comsenz.com","CompanyAgent":"Ricoriki Benger","CompanyName":"Dickinson, Adams and Thiel","Currency":"RUB","Notes":"nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin","Department":"Garden","Website":"chicagotribune.com","Latitude":"54.20914","Longitude":"50.46767","ShipDate":"11/27/2016","TimeZone":"Europe/Moscow","Status":1,"Type":3},{"RecordID":27,"OrderID":"36987-2295","ShipCountry":"FI","ShipCity":"Piippola","ShipName":"Bayer Inc","ShipAddress":"5479 Oakridge Parkway","CompanyEmail":"rgawthropeq@imdb.com","CompanyAgent":"Raeann Gawthrope","CompanyName":"Greenholt-Rosenbaum","Currency":"EUR","Notes":"justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas","Department":"Computers","Website":"google.com.hk","Latitude":"64.16667","Longitude":"25.96667","ShipDate":"4/1/2016","TimeZone":"Europe/Helsinki","Status":4,"Type":3},{"RecordID":28,"OrderID":"36987-1170","ShipCountry":"VN","ShipCity":"Thanh Chương","ShipName":"Murray-Wiegand","ShipAddress":"5604 Harper Lane","CompanyEmail":"eweekleyr@narod.ru","CompanyAgent":"Enrichetta Weekley","CompanyName":"Stark, Weimann and Hickle","Currency":"VND","Notes":"elementum pellentesque quisque porta volutpat erat quisque erat eros viverra eget congue eget semper","Department":"Outdoors","Website":"yahoo.co.jp","Latitude":"18.77877","Longitude":"105.33356","ShipDate":"6/1/2016","TimeZone":"Asia/Ho_Chi_Minh","Status":5,"Type":2},{"RecordID":29,"OrderID":"65597-101","ShipCountry":"JP","ShipCity":"Takasaki","ShipName":"Doyle-McDermott","ShipAddress":"71 Victoria Alley","CompanyEmail":"predfernes@ox.ac.uk","CompanyAgent":"Phoebe Redferne","CompanyName":"Paucek, Kutch and Pfannerstill","Currency":"JPY","Notes":"nibh in lectus pellentesque at nulla suspendisse potenti cras in purus eu magna vulputate luctus","Department":"Clothing","Website":"newyorker.com","Latitude":"36.33333","Longitude":"139.01667","ShipDate":"8/23/2016","TimeZone":"Asia/Tokyo","Status":4,"Type":1},{"RecordID":30,"OrderID":"49035-350","ShipCountry":"PE","ShipCity":"Charat","ShipName":"Gislason Inc","ShipAddress":"67308 Dixon Street","CompanyEmail":"mdabernottt@buzzfeed.com","CompanyAgent":"Milka Dabernott","CompanyName":"Weimann-Schoen","Currency":"PEN","Notes":"nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat","Department":"Games","Website":"list-manage.com","Latitude":"-7.83333","Longitude":"-78.45","ShipDate":"7/11/2016","TimeZone":"America/Lima","Status":6,"Type":3},{"RecordID":31,"OrderID":"49839-200","ShipCountry":"CN","ShipCity":"Haoxue","ShipName":"Thompson Group","ShipAddress":"78 Pond Circle","CompanyEmail":"gcolatonu@freewebs.com","CompanyAgent":"Gale Colaton","CompanyName":"Krajcik, Koch and Bayer","Currency":"CNY","Notes":"porttitor id consequat in consequat ut nulla sed accumsan felis ut","Department":"Home","Website":"devhub.com","Latitude":"30.04761","Longitude":"112.46759","ShipDate":"1/13/2017","TimeZone":"Asia/Chongqing","Status":3,"Type":3},{"RecordID":32,"OrderID":"62699-1114","ShipCountry":"UY","ShipCity":"Santa Catalina","ShipName":"Koch Inc","ShipAddress":"43 Hintze Street","CompanyEmail":"sstronachv@npr.org","CompanyAgent":"Sula Stronach","CompanyName":"Boyle and Sons","Currency":"UYU","Notes":"dolor vel est donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum","Department":"Clothing","Website":"homestead.com","Latitude":"-33.75","Longitude":"-57.48333","ShipDate":"7/22/2016","TimeZone":"America/Montevideo","Status":4,"Type":1},{"RecordID":33,"OrderID":"45802-257","ShipCountry":"FR","ShipCity":"Toulouse","ShipName":"McLaughlin LLC","ShipAddress":"997 Redwing Place","CompanyEmail":"jmcilennaw@accuweather.com","CompanyAgent":"Jena McIlenna","CompanyName":"Blanda Group","Currency":"EUR","Notes":"morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit","Department":"Baby","Website":"msu.edu","Latitude":"43.6043","Longitude":"1.4437","ShipDate":"12/4/2016","TimeZone":"Europe/Paris","Status":6,"Type":2},{"RecordID":34,"OrderID":"52125-212","ShipCountry":"CU","ShipCity":"Niquero","ShipName":"Cole Group","ShipAddress":"2 Sugar Hill","CompanyEmail":"mosannex@sakura.ne.jp","CompanyAgent":"Myrtia Osanne","CompanyName":"Price-Goyette","Currency":"CUP","Notes":"tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus","Department":"Clothing","Website":"netlog.com","Latitude":"20.04478","Longitude":"-77.5851","ShipDate":"8/8/2016","TimeZone":"America/Havana","Status":3,"Type":1},{"RecordID":35,"OrderID":"16590-745","ShipCountry":"PE","ShipCity":"Tacna","ShipName":"Bernier Inc","ShipAddress":"9883 Nancy Alley","CompanyEmail":"sjobey@phoca.cz","CompanyAgent":"Sammie Jobe","CompanyName":"Tromp LLC","Currency":"PEN","Notes":"non sodales sed tincidunt eu felis fusce posuere felis sed lacus","Department":"Shoes","Website":"arstechnica.com","Latitude":"-18.01465","Longitude":"-70.25362","ShipDate":"11/21/2016","TimeZone":"America/Lima","Status":2,"Type":2},{"RecordID":36,"OrderID":"60505-0132","ShipCountry":"PH","ShipCity":"Capissayan Sur","ShipName":"Volkman-Hickle","ShipAddress":"76 Linden Terrace","CompanyEmail":"gpoliz@weibo.com","CompanyAgent":"Gaby Poli","CompanyName":"Metz, Herman and Leannon","Currency":"PHP","Notes":"nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti in eleifend quam a","Department":"Music","Website":"squarespace.com","Latitude":"18.0509","Longitude":"121.8177","ShipDate":"8/8/2016","TimeZone":"Asia/Manila","Status":1,"Type":3},{"RecordID":37,"OrderID":"68428-071","ShipCountry":"KW","ShipCity":"Janūb as Surrah","ShipName":"Kuhlman, Berge and Jacobi","ShipAddress":"68942 Crowley Lane","CompanyEmail":"gmoir10@va.gov","CompanyAgent":"Garrard Moir","CompanyName":"Bosco and Sons","Currency":"KWD","Notes":"lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus","Department":"Grocery","Website":"aol.com","Latitude":"29.26917","Longitude":"47.97806","ShipDate":"3/27/2016","TimeZone":"Asia/Kuwait","Status":6,"Type":2},{"RecordID":38,"OrderID":"61543-7772","ShipCountry":"CN","ShipCity":"Quanling","ShipName":"Considine-Russel","ShipAddress":"0 Duke Court","CompanyEmail":"upoag11@livejournal.com","CompanyAgent":"Ulrick Poag","CompanyName":"Murazik and Sons","Currency":"CNY","Notes":"erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec semper","Department":"Home","Website":"netscape.com","Latitude":"28.37799","Longitude":"116.07202","ShipDate":"11/23/2016","TimeZone":"Asia/Shanghai","Status":2,"Type":2},{"RecordID":39,"OrderID":"63941-449","ShipCountry":"RS","ShipCity":"Doroslovo","ShipName":"Langworth Inc","ShipAddress":"0 Bashford Point","CompanyEmail":"odanskine12@whitehouse.gov","CompanyAgent":"Osgood Danskine","CompanyName":"Rau, Abshire and Waelchi","Currency":"RSD","Notes":"orci pede venenatis non sodales sed tincidunt eu felis fusce posuere","Department":"Tools","Website":"cornell.edu","Latitude":"45.60699","Longitude":"19.18868","ShipDate":"8/13/2016","TimeZone":"Europe/Belgrade","Status":4,"Type":3},{"RecordID":40,"OrderID":"34954-014","ShipCountry":"BR","ShipCity":"São José","ShipName":"Zieme, Witting and Haley","ShipAddress":"763 Dunning Road","CompanyEmail":"cianson13@google.com.hk","CompanyAgent":"Chloris Ianson","CompanyName":"Krajcik, Balistreri and Hammes","Currency":"BRL","Notes":"sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in","Department":"Music","Website":"ucsd.edu","Latitude":"-28.21171","Longitude":"-49.1632","ShipDate":"6/11/2016","TimeZone":"America/Sao_Paulo","Status":2,"Type":1},{"RecordID":41,"OrderID":"21695-709","ShipCountry":"RU","ShipCity":"Spirovo","ShipName":"Bode and Sons","ShipAddress":"126 Meadow Vale Terrace","CompanyEmail":"ctomasik14@nps.gov","CompanyAgent":"Claire Tomasik","CompanyName":"Orn Group","Currency":"RUB","Notes":"eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante","Department":"Baby","Website":"over-blog.com","Latitude":"57.41905","Longitude":"34.97658","ShipDate":"4/18/2016","TimeZone":"Europe/Moscow","Status":1,"Type":2},{"RecordID":42,"OrderID":"0054-3566","ShipCountry":"CZ","ShipCity":"Hostouň","ShipName":"Pfeffer Inc","ShipAddress":"08 Crowley Center","CompanyEmail":"pknewstubb15@jugem.jp","CompanyAgent":"Paton Knewstubb","CompanyName":"Kiehn, Goyette and Oberbrunner","Currency":"CZK","Notes":"condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas","Department":"Home","Website":"bloglines.com","Latitude":"49.55971","Longitude":"12.77147","ShipDate":"1/14/2017","TimeZone":"Europe/Berlin","Status":3,"Type":2},{"RecordID":43,"OrderID":"61787-499","ShipCountry":"PL","ShipCity":"Siewierz","ShipName":"Anderson, Gottlieb and Grimes","ShipAddress":"743 Clove Circle","CompanyEmail":"hhartshorne16@angelfire.com","CompanyAgent":"Hedvig Hartshorne","CompanyName":"Kihn-Nitzsche","Currency":"PLN","Notes":"nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed","Department":"Beauty","Website":"blogspot.com","Latitude":"50.46657","Longitude":"19.23028","ShipDate":"7/3/2016","TimeZone":"Europe/Warsaw","Status":6,"Type":3},{"RecordID":44,"OrderID":"0944-2963","ShipCountry":"PL","ShipCity":"Kaniów","ShipName":"Herman, Tromp and Hansen","ShipAddress":"1403 Hansons Terrace","CompanyEmail":"dsisland17@census.gov","CompanyAgent":"Deva Sisland","CompanyName":"Bogan Inc","Currency":"PLN","Notes":"nulla suspendisse potenti cras in purus eu magna vulputate luctus cum","Department":"Shoes","Website":"ocn.ne.jp","Latitude":"50.98577","Longitude":"20.66391","ShipDate":"1/2/2017","TimeZone":"Europe/Warsaw","Status":4,"Type":1},{"RecordID":45,"OrderID":"10356-831","ShipCountry":"MN","ShipCity":"Erdenet","ShipName":"Heidenreich-Simonis","ShipAddress":"85 Columbus Trail","CompanyEmail":"cboneham18@barnesandnoble.com","CompanyAgent":"Christophorus Boneham","CompanyName":"Wuckert Inc","Currency":"MNT","Notes":"pharetra magna ac consequat metus sapien ut nunc vestibulum ante","Department":"Automotive","Website":"cafepress.com","Latitude":"48.94877","Longitude":"99.53665","ShipDate":"11/5/2016","TimeZone":"Asia/Ulaanbaatar","Status":4,"Type":2},{"RecordID":46,"OrderID":"51630-003","ShipCountry":"CN","ShipCity":"Zhongshi","ShipName":"Harvey, Halvorson and Howe","ShipAddress":"0 Pine View Avenue","CompanyEmail":"tbone19@yahoo.co.jp","CompanyAgent":"Teresa Bone","CompanyName":"Macejkovic-Ryan","Currency":"CNY","Notes":"vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra","Department":"Books","Website":"hubpages.com","Latitude":"25.38746","Longitude":"115.41678","ShipDate":"5/23/2016","TimeZone":"Asia/Chongqing","Status":2,"Type":2},{"RecordID":47,"OrderID":"53942-243","ShipCountry":"AR","ShipCity":"Anguil","ShipName":"Mante, Huels and Considine","ShipAddress":"87 Corscot Street","CompanyEmail":"hcoupe1a@dagondesign.com","CompanyAgent":"Harmon Coupe","CompanyName":"Hand, Hoppe and Eichmann","Currency":"ARS","Notes":"sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam","Department":"Electronics","Website":"posterous.com","Latitude":"-36.52567","Longitude":"-64.01025","ShipDate":"3/14/2016","TimeZone":"America/Argentina/Salta","Status":1,"Type":3},{"RecordID":48,"OrderID":"67544-889","ShipCountry":"RU","ShipCity":"Losevo","ShipName":"Cruickshank, Botsford and Johns","ShipAddress":"94653 Granby Court","CompanyEmail":"bvalentino1b@fda.gov","CompanyAgent":"Bobbe Valentino","CompanyName":"Weimann-Beier","Currency":"RUB","Notes":"non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam","Department":"Sports","Website":"aboutads.info","Latitude":"50.67667","Longitude":"40.045","ShipDate":"1/1/2017","TimeZone":"Europe/Moscow","Status":3,"Type":2},{"RecordID":49,"OrderID":"21130-352","ShipCountry":"ID","ShipCity":"Dinjo","ShipName":"Trantow, Halvorson and Jacobs","ShipAddress":"076 Johnson Park","CompanyEmail":"rtissington1c@desdev.cn","CompanyAgent":"Rollins Tissington","CompanyName":"West-Douglas","Currency":"IDR","Notes":"nisl nunc nisl duis bibendum felis sed interdum venenatis turpis","Department":"Music","Website":"blogger.com","Latitude":"-9.5942","Longitude":"119.0138","ShipDate":"7/13/2016","TimeZone":"Asia/Makassar","Status":4,"Type":3},{"RecordID":50,"OrderID":"42291-625","ShipCountry":"GR","ShipCity":"Agía Triáda","ShipName":"Collins, Hamill and Schneider","ShipAddress":"74661 Myrtle Junction","CompanyEmail":"vwoolford1d@cmu.edu","CompanyAgent":"Vasilis Woolford","CompanyName":"Koelpin, Dietrich and Wilkinson","Currency":"EUR","Notes":"sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus","Department":"Books","Website":"netscape.com","Latitude":"40.50003","Longitude":"22.87351","ShipDate":"11/5/2016","TimeZone":"Europe/Athens","Status":1,"Type":2},{"RecordID":51,"OrderID":"68327-006","ShipCountry":"GE","ShipCity":"Bolnisi","ShipName":"Farrell and Sons","ShipAddress":"38 Melrose Way","CompanyEmail":"gmcrorie1e@techcrunch.com","CompanyAgent":"Galina McRorie","CompanyName":"Yundt, Johns and Kuphal","Currency":"GEL","Notes":"nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in","Department":"Jewelery","Website":"samsung.com","Latitude":"41.44794","Longitude":"44.53838","ShipDate":"6/24/2016","TimeZone":"Asia/Tbilisi","Status":1,"Type":3},{"RecordID":52,"OrderID":"55154-6125","ShipCountry":"ID","ShipCity":"Menanga","ShipName":"Jerde-Carroll","ShipAddress":"3 Forster Lane","CompanyEmail":"fharpin1f@merriam-webster.com","CompanyAgent":"Fran Harpin","CompanyName":"Gleason Inc","Currency":"IDR","Notes":"aliquam non mauris morbi non lectus aliquam sit amet diam","Department":"Books","Website":"desdev.cn","Latitude":"-8.436","Longitude":"123.0868","ShipDate":"2/22/2016","TimeZone":"Asia/Makassar","Status":2,"Type":1},{"RecordID":53,"OrderID":"52125-217","ShipCountry":"PT","ShipCity":"Monte Novo","ShipName":"Cremin Group","ShipAddress":"46 Homewood Junction","CompanyEmail":"lrose1g@google.com.hk","CompanyAgent":"Lorelle Rose","CompanyName":"Franecki-Littel","Currency":"EUR","Notes":"odio condimentum id luctus nec molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est","Department":"Computers","Website":"e-recht24.de","Latitude":"38.15","Longitude":"-8.8167","ShipDate":"5/25/2016","TimeZone":"Europe/Lisbon","Status":1,"Type":2},{"RecordID":54,"OrderID":"50346-003","ShipCountry":"CN","ShipCity":"Lincuo","ShipName":"Gerhold and Sons","ShipAddress":"450 Mallard Court","CompanyEmail":"dshugg1h@japanpost.jp","CompanyAgent":"Dori Shugg","CompanyName":"Weimann, Kohler and Rosenbaum","Currency":"CNY","Notes":"velit donec diam neque vestibulum eget vulputate ut ultrices vel","Department":"Electronics","Website":"mtv.com","Latitude":"23.66062","Longitude":"117.25946","ShipDate":"11/28/2016","TimeZone":"Asia/Shanghai","Status":4,"Type":2},{"RecordID":55,"OrderID":"65954-014","ShipCountry":"ID","ShipCity":"Nusajaya","ShipName":"Kutch Group","ShipAddress":"66 Hagan Alley","CompanyEmail":"llaughnan1i@wsj.com","CompanyAgent":"Laird Laughnan","CompanyName":"Botsford Inc","Currency":"IDR","Notes":"rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut","Department":"Baby","Website":"npr.org","Latitude":"-8.4817","Longitude":"118.3064","ShipDate":"3/12/2016","TimeZone":"Asia/Makassar","Status":4,"Type":3},{"RecordID":56,"OrderID":"49738-116","ShipCountry":"HR","ShipCity":"Bistrinci","ShipName":"Marks-Treutel","ShipAddress":"37 Randy Park","CompanyEmail":"sslidders1j@lycos.com","CompanyAgent":"Suzanna Slidders","CompanyName":"Macejkovic, Miller and Cartwright","Currency":"HRK","Notes":"quam nec dui luctus rutrum nulla tellus in sagittis dui vel","Department":"Garden","Website":"tripod.com","Latitude":"45.69167","Longitude":"18.39861","ShipDate":"12/29/2016","TimeZone":"Europe/Zagreb","Status":2,"Type":3},{"RecordID":57,"OrderID":"59667-0069","ShipCountry":"FR","ShipCity":"Paris 12","ShipName":"Mayer-Ernser","ShipAddress":"81 Killdeer Road","CompanyEmail":"lgravatt1k@nps.gov","CompanyAgent":"Lewes Gravatt","CompanyName":"Brown, Ryan and Quitzon","Currency":"EUR","Notes":"arcu sed augue aliquam erat volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea","Department":"Beauty","Website":"redcross.org","Latitude":"48.8412","Longitude":"2.3876","ShipDate":"7/12/2016","TimeZone":"Europe/Paris","Status":5,"Type":1},{"RecordID":58,"OrderID":"63739-547","ShipCountry":"VN","ShipCity":"Trảng Bom","ShipName":"McLaughlin LLC","ShipAddress":"00 Barnett Place","CompanyEmail":"mkroin1l@webeden.co.uk","CompanyAgent":"Marina Kroin","CompanyName":"Robel and Sons","Currency":"VND","Notes":"luctus rutrum nulla tellus in sagittis dui vel nisl duis","Department":"Automotive","Website":"ustream.tv","Latitude":"10.95358","Longitude":"107.00589","ShipDate":"4/3/2016","TimeZone":"Asia/Ho_Chi_Minh","Status":3,"Type":2},{"RecordID":59,"OrderID":"54569-0909","ShipCountry":"CN","ShipCity":"Lizi","ShipName":"Lowe-Sauer","ShipAddress":"4 Park Meadow Trail","CompanyEmail":"bcannam1m@scientificamerican.com","CompanyAgent":"Bobby Cannam","CompanyName":"Sipes-Stiedemann","Currency":"CNY","Notes":"lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas","Department":"Toys","Website":"technorati.com","Latitude":"29.81127","Longitude":"107.92447","ShipDate":"8/5/2016","TimeZone":"Asia/Chongqing","Status":5,"Type":1},{"RecordID":60,"OrderID":"54868-5657","ShipCountry":"AL","ShipCity":"Patos Fshat","ShipName":"Kris and Sons","ShipAddress":"51 Talisman Alley","CompanyEmail":"bheymann1n@ihg.com","CompanyAgent":"Bunny Heymann","CompanyName":"Abernathy, Luettgen and Becker","Currency":"ALL","Notes":"vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus semper","Department":"Grocery","Website":"guardian.co.uk","Latitude":"40.64278","Longitude":"19.65083","ShipDate":"3/25/2016","TimeZone":"Europe/Tirane","Status":3,"Type":3},{"RecordID":61,"OrderID":"49288-0467","ShipCountry":"CN","ShipCity":"Kouqian","ShipName":"Morar-Lynch","ShipAddress":"77 Tomscot Alley","CompanyEmail":"bbriance1o@furl.net","CompanyAgent":"Barbara Briance","CompanyName":"Zulauf-Kihn","Currency":"CNY","Notes":"odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede","Department":"Books","Website":"icio.us","Latitude":"43.63914","Longitude":"126.45784","ShipDate":"6/11/2016","TimeZone":"Asia/Harbin","Status":2,"Type":1},{"RecordID":62,"OrderID":"14783-455","ShipCountry":"PL","ShipCity":"Niemodlin","ShipName":"Spinka, Hackett and Leannon","ShipAddress":"45 Orin Plaza","CompanyEmail":"vgapp1p@pinterest.com","CompanyAgent":"Vikky Gapp","CompanyName":"Williamson, Champlin and Zieme","Currency":"PLN","Notes":"cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes","Department":"Games","Website":"wisc.edu","Latitude":"50.642","Longitude":"17.61932","ShipDate":"9/30/2016","TimeZone":"Europe/Warsaw","Status":2,"Type":3},{"RecordID":63,"OrderID":"58232-0029","ShipCountry":"CN","ShipCity":"Zhoukou","ShipName":"Wyman, Swift and Homenick","ShipAddress":"111 Banding Street","CompanyEmail":"jann1q@drupal.org","CompanyAgent":"Jo ann Henzer","CompanyName":"Wolff, Halvorson and Ebert","Currency":"CNY","Notes":"metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci","Department":"Health","Website":"mozilla.com","Latitude":"27.69684","Longitude":"118.91938","ShipDate":"7/23/2016","TimeZone":"Asia/Shanghai","Status":5,"Type":1},{"RecordID":64,"OrderID":"54868-5397","ShipCountry":"CN","ShipCity":"Baima","ShipName":"Schaefer Group","ShipAddress":"26078 Goodland Circle","CompanyEmail":"eironmonger1r@weather.com","CompanyAgent":"Ernest Ironmonger","CompanyName":"Boyle, Schowalter and Jast","Currency":"CNY","Notes":"nisl aenean lectus pellentesque eget nunc donec quis orci eget orci vehicula condimentum","Department":"Baby","Website":"google.de","Latitude":"31.58261","Longitude":"119.17219","ShipDate":"3/6/2016","TimeZone":"Asia/Shanghai","Status":3,"Type":2},{"RecordID":65,"OrderID":"69069-101","ShipCountry":"US","ShipCity":"Stamford","ShipName":"Runte-Champlin","ShipAddress":"7 Portage Court","CompanyEmail":"kjacop1s@prlog.org","CompanyAgent":"Karylin Jacop","CompanyName":"Kuphal Group","Currency":"USD","Notes":"at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis","Department":"Industrial","Website":"upenn.edu","Latitude":"41.0888","Longitude":"-73.5435","ShipDate":"5/1/2016","TimeZone":"America/New_York","Status":5,"Type":3},{"RecordID":66,"OrderID":"30142-022","ShipCountry":"ID","ShipCity":"Tebanah","ShipName":"Hudson-Fay","ShipAddress":"75 Mendota Parkway","CompanyEmail":"cmoncrefe1t@craigslist.org","CompanyAgent":"Cherise Moncrefe","CompanyName":"Block Group","Currency":"IDR","Notes":"orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor","Department":"Outdoors","Website":"is.gd","Latitude":"-6.9213","Longitude":"113.2043","ShipDate":"7/8/2016","TimeZone":"Asia/Jakarta","Status":5,"Type":2},{"RecordID":67,"OrderID":"16729-115","ShipCountry":"ID","ShipCity":"Tracal","ShipName":"Beier and Sons","ShipAddress":"93758 Gale Street","CompanyEmail":"celfes1u@usa.gov","CompanyAgent":"Clarie Elfes","CompanyName":"Heidenreich Group","Currency":"IDR","Notes":"tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet","Department":"Grocery","Website":"usatoday.com","Latitude":"-6.9824","Longitude":"112.3381","ShipDate":"6/27/2016","TimeZone":"Asia/Jakarta","Status":3,"Type":2},{"RecordID":68,"OrderID":"51147-5010","ShipCountry":"RU","ShipCity":"Volzhsk","ShipName":"Beatty Group","ShipAddress":"11023 Barnett Park","CompanyEmail":"ibehnecken1v@linkedin.com","CompanyAgent":"Isadore Behnecken","CompanyName":"Gottlieb-Douglas","Currency":"RUB","Notes":"lobortis ligula sit amet eleifend pede libero quis orci nullam","Department":"Shoes","Website":"weather.com","Latitude":"55.86638","Longitude":"48.3594","ShipDate":"7/8/2016","TimeZone":"Europe/Moscow","Status":2,"Type":2},{"RecordID":69,"OrderID":"57520-0435","ShipCountry":"CU","ShipCity":"Venezuela","ShipName":"Mante-Kunze","ShipAddress":"7137 Sutteridge Place","CompanyEmail":"gclemmey1w@hud.gov","CompanyAgent":"Gerty Clemmey","CompanyName":"Schulist, Blanda and Donnelly","Currency":"CUP","Notes":"donec odio justo sollicitudin ut suscipit a feugiat et eros vestibulum ac","Department":"Automotive","Website":"ocn.ne.jp","Latitude":"21.73528","Longitude":"-78.79639","ShipDate":"4/24/2016","TimeZone":"America/Havana","Status":1,"Type":2},{"RecordID":70,"OrderID":"41250-990","ShipCountry":"ID","ShipCity":"Kepel","ShipName":"Rogahn and Sons","ShipAddress":"350 Continental Alley","CompanyEmail":"jogle1x@dot.gov","CompanyAgent":"Jay Ogle","CompanyName":"Botsford LLC","Currency":"IDR","Notes":"nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient","Department":"Music","Website":"angelfire.com","Latitude":"-8.1157","Longitude":"112.4289","ShipDate":"4/28/2016","TimeZone":"Asia/Jakarta","Status":3,"Type":3},{"RecordID":71,"OrderID":"52125-726","ShipCountry":"MA","ShipCity":"Riah","ShipName":"Friesen, O\'Connell and Volkman","ShipAddress":"72001 3rd Point","CompanyEmail":"bdutnell1y@stumbleupon.com","CompanyAgent":"Beverie Dutnell","CompanyName":"Lowe, Pacocha and Grimes","Currency":"MAD","Notes":"ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec","Department":"Kids","Website":"chronoengine.com","Latitude":"33.15122","Longitude":"-7.37504","ShipDate":"6/9/2016","TimeZone":"Africa/Casablanca","Status":3,"Type":2},{"RecordID":72,"OrderID":"68645-478","ShipCountry":"GB","ShipCity":"Milton","ShipName":"Kohler-Wolff","ShipAddress":"674 Texas Plaza","CompanyEmail":"cduddin1z@blogtalkradio.com","CompanyAgent":"Carin Duddin","CompanyName":"Feil, Wolf and Nicolas","Currency":"GBP","Notes":"sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis","Department":"Beauty","Website":"storify.com","Latitude":"53.1805","Longitude":"-0.9766","ShipDate":"2/19/2016","TimeZone":"Europe/London","Status":4,"Type":2},{"RecordID":73,"OrderID":"53942-503","ShipCountry":"TH","ShipCity":"Khok Sung","ShipName":"Denesik-Dach","ShipAddress":"3 Eastwood Hill","CompanyEmail":"uluety20@parallels.com","CompanyAgent":"Ulrika Luety","CompanyName":"Halvorson-Koch","Currency":"THB","Notes":"dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum","Department":"Kids","Website":"virginia.edu","Latitude":"13.83824","Longitude":"102.62254","ShipDate":"8/29/2016","TimeZone":"Asia/Bangkok","Status":4,"Type":2},{"RecordID":74,"OrderID":"10742-8123","ShipCountry":"CN","ShipCity":"Yilkiqi","ShipName":"Little Group","ShipAddress":"2039 Katie Circle","CompanyEmail":"hblazic21@tripod.com","CompanyAgent":"Hugh Blazic","CompanyName":"Kunze Inc","Currency":"CNY","Notes":"tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat","Department":"Jewelery","Website":"biglobe.ne.jp","Latitude":"37.96111","Longitude":"77.24917","ShipDate":"11/12/2016","TimeZone":"Asia/Kashgar","Status":4,"Type":2},{"RecordID":75,"OrderID":"11523-7313","ShipCountry":"MX","ShipCity":"Vicente Guerrero","ShipName":"Larson Inc","ShipAddress":"14 Fieldstone Alley","CompanyEmail":"apinke22@apple.com","CompanyAgent":"Antonie Pinke","CompanyName":"Gislason, Hessel and Heaney","Currency":"MXN","Notes":"lorem id ligula suspendisse ornare consequat lectus in est risus auctor sed tristique in tempus sit amet sem","Department":"Tools","Website":"slideshare.net","Latitude":"19.058","Longitude":"-97.818","ShipDate":"7/4/2016","TimeZone":"America/Mexico_City","Status":3,"Type":3},{"RecordID":76,"OrderID":"0406-9959","ShipCountry":"YE","ShipCity":"Ash Sharyah","ShipName":"Huel-Bednar","ShipAddress":"880 Florence Hill","CompanyEmail":"cdust23@is.gd","CompanyAgent":"Corbie Dust","CompanyName":"Cummerata LLC","Currency":"YER","Notes":"purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur","Department":"Electronics","Website":"booking.com","Latitude":"14.35659","Longitude":"45.02244","ShipDate":"8/15/2016","TimeZone":"Asia/Aden","Status":4,"Type":1},{"RecordID":77,"OrderID":"63824-479","ShipCountry":"CO","ShipCity":"La Argentina","ShipName":"Okuneva Inc","ShipAddress":"9346 Jana Alley","CompanyEmail":"sde24@bigcartel.com","CompanyAgent":"Sidonnie De Avenell","CompanyName":"Raynor-Feil","Currency":"COP","Notes":"quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere","Department":"Tools","Website":"goo.ne.jp","Latitude":"2.19611","Longitude":"-75.98","ShipDate":"2/13/2016","TimeZone":"America/Bogota","Status":6,"Type":1},{"RecordID":78,"OrderID":"53329-410","ShipCountry":"CN","ShipCity":"Jieshipu","ShipName":"Cummings Inc","ShipAddress":"276 Continental Drive","CompanyEmail":"ykneaphsey25@csmonitor.com","CompanyAgent":"Yorker Kneaphsey","CompanyName":"Bergstrom, Oberbrunner and Jenkins","Currency":"CNY","Notes":"nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend","Department":"Automotive","Website":"utexas.edu","Latitude":"35.61073","Longitude":"105.53784","ShipDate":"8/5/2016","TimeZone":"Asia/Chongqing","Status":6,"Type":2},{"RecordID":79,"OrderID":"0498-2420","ShipCountry":"JP","ShipCity":"Watari","ShipName":"Murazik, Herman and Klein","ShipAddress":"5 Harbort Place","CompanyEmail":"blockier26@bigcartel.com","CompanyAgent":"Brenn Lockier","CompanyName":"Fahey-Schiller","Currency":"JPY","Notes":"neque libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum","Department":"Kids","Website":"narod.ru","Latitude":"38.035","Longitude":"140.85111","ShipDate":"5/31/2016","TimeZone":"Asia/Tokyo","Status":5,"Type":1},{"RecordID":80,"OrderID":"69106-070","ShipCountry":"UZ","ShipCity":"Navoiy","ShipName":"Torphy-Kunde","ShipAddress":"80628 Mcguire Hill","CompanyEmail":"wjery27@dot.gov","CompanyAgent":"Walliw Jery","CompanyName":"Will, Fahey and Bernier","Currency":"UZS","Notes":"cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus vivamus","Department":"Sports","Website":"facebook.com","Latitude":"40.08444","Longitude":"65.37917","ShipDate":"10/15/2016","TimeZone":"Asia/Samarkand","Status":2,"Type":2},{"RecordID":81,"OrderID":"49852-006","ShipCountry":"SI","ShipCity":"Ravne","ShipName":"Hettinger-Klocko","ShipAddress":"636 Village Green Circle","CompanyEmail":"qderell28@cnn.com","CompanyAgent":"Quintus Derell","CompanyName":"Moen-Greenfelder","Currency":"EUR","Notes":"sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar","Department":"Tools","Website":"typepad.com","Latitude":"46.41413","Longitude":"15.06087","ShipDate":"5/28/2016","TimeZone":"Europe/Ljubljana","Status":1,"Type":1},{"RecordID":82,"OrderID":"67253-232","ShipCountry":"PH","ShipCity":"Cabadiangan","ShipName":"Beier LLC","ShipAddress":"01753 Wayridge Point","CompanyEmail":"alyburn29@latimes.com","CompanyAgent":"Annamaria Lyburn","CompanyName":"Terry-Weber","Currency":"PHP","Notes":"ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices","Department":"Electronics","Website":"scientificamerican.com","Latitude":"9.7534","Longitude":"122.4739","ShipDate":"11/11/2016","TimeZone":"Asia/Manila","Status":6,"Type":3},{"RecordID":83,"OrderID":"54868-6333","ShipCountry":"RU","ShipCity":"Nakhabino","ShipName":"Krajcik Inc","ShipAddress":"77 Atwood Place","CompanyEmail":"dvarnam2a@ft.com","CompanyAgent":"Dall Varnam","CompanyName":"Metz-Hoeger","Currency":"RUB","Notes":"varius ut blandit non interdum in ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices","Department":"Music","Website":"marriott.com","Latitude":"55.84854","Longitude":"37.17788","ShipDate":"6/9/2016","TimeZone":"Europe/Moscow","Status":3,"Type":2},{"RecordID":84,"OrderID":"0496-0883","ShipCountry":"VE","ShipCity":"El Cafetal","ShipName":"Durgan LLC","ShipAddress":"722 Orin Trail","CompanyEmail":"kbirkby2b@sciencedaily.com","CompanyAgent":"Kort Birkby","CompanyName":"Brekke-Crooks","Currency":"VEF","Notes":"massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet","Department":"Grocery","Website":"github.io","Latitude":"10.46941","Longitude":"-66.83063","ShipDate":"5/4/2016","TimeZone":"America/Caracas","Status":1,"Type":1},{"RecordID":85,"OrderID":"59011-410","ShipCountry":"CN","ShipCity":"Shaxi","ShipName":"Leuschke Inc","ShipAddress":"0 Scott Parkway","CompanyEmail":"bbaildon2c@apache.org","CompanyAgent":"Booth Baildon","CompanyName":"Schumm-Turner","Currency":"CNY","Notes":"euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis","Department":"Garden","Website":"squidoo.com","Latitude":"24.61694","Longitude":"113.67068","ShipDate":"2/27/2016","TimeZone":"Asia/Chongqing","Status":5,"Type":1},{"RecordID":86,"OrderID":"10578-002","ShipCountry":"CN","ShipCity":"Xinpu","ShipName":"Crist-Mayert","ShipAddress":"6 Lakewood Gardens Plaza","CompanyEmail":"ahaslewood2d@simplemachines.org","CompanyAgent":"Amber Haslewood","CompanyName":"Hammes Group","Currency":"CNY","Notes":"nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus","Department":"Sports","Website":"google.ca","Latitude":"30.98227","Longitude":"113.98035","ShipDate":"11/12/2016","TimeZone":"Asia/Chongqing","Status":2,"Type":3},{"RecordID":87,"OrderID":"0591-5454","ShipCountry":"PH","ShipCity":"Busay","ShipName":"Cummerata Inc","ShipAddress":"52409 Bultman Point","CompanyEmail":"dkorejs2e@census.gov","CompanyAgent":"Domeniga Korejs","CompanyName":"Green-Bashirian","Currency":"PHP","Notes":"nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo","Department":"Automotive","Website":"amazon.com","Latitude":"10.5378","Longitude":"122.886","ShipDate":"4/2/2016","TimeZone":"Asia/Manila","Status":2,"Type":1},{"RecordID":88,"OrderID":"24385-998","ShipCountry":"FI","ShipCity":"Juupajoki","ShipName":"Aufderhar, Borer and Berge","ShipAddress":"06 Everett Hill","CompanyEmail":"bvitall2f@qq.com","CompanyAgent":"Belva Vitall","CompanyName":"Kassulke, Kub and Parker","Currency":"EUR","Notes":"vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus","Department":"Movies","Website":"yahoo.com","Latitude":"61.79901","Longitude":"24.36939","ShipDate":"7/28/2016","TimeZone":"Europe/Helsinki","Status":6,"Type":3},{"RecordID":89,"OrderID":"42507-484","ShipCountry":"IR","ShipCity":"Kīsh","ShipName":"Purdy, Prosacco and Stamm","ShipAddress":"07 Morningstar Drive","CompanyEmail":"nbreede2g@delicious.com","CompanyAgent":"Netti Breede","CompanyName":"Conroy-Schmitt","Currency":"IRR","Notes":"morbi quis tortor id nulla ultrices aliquet maecenas leo odio condimentum id","Department":"Music","Website":"networkadvertising.org","Latitude":"26.55778","Longitude":"54.01944","ShipDate":"3/21/2016","TimeZone":"Asia/Tehran","Status":1,"Type":1},{"RecordID":90,"OrderID":"0904-6010","ShipCountry":"BA","ShipCity":"Bužim","ShipName":"Howell Inc","ShipAddress":"57 Anhalt Center","CompanyEmail":"rezzy2h@senate.gov","CompanyAgent":"Rosella Ezzy","CompanyName":"Heller-Turcotte","Currency":"BAM","Notes":"vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet","Department":"Tools","Website":"dyndns.org","Latitude":"45.05361","Longitude":"16.03254","ShipDate":"6/11/2016","TimeZone":"Europe/Sarajevo","Status":3,"Type":3},{"RecordID":91,"OrderID":"65044-5285","ShipCountry":"CR","ShipCity":"San Francisco","ShipName":"Orn LLC","ShipAddress":"979 Quincy Place","CompanyEmail":"lnairy2i@wikia.com","CompanyAgent":"Lyn Nairy","CompanyName":"Hermann, Heathcote and Blick","Currency":"CRC","Notes":"phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut nulla","Department":"Industrial","Website":"goo.ne.jp","Latitude":"9.99299","Longitude":"-84.12934","ShipDate":"10/23/2016","TimeZone":"America/Costa_Rica","Status":3,"Type":3},{"RecordID":92,"OrderID":"33261-045","ShipCountry":"TZ","ShipCity":"Dongobesh","ShipName":"Haag Inc","ShipAddress":"5 Rigney Center","CompanyEmail":"avanyakin2j@edublogs.org","CompanyAgent":"Abba Vanyakin","CompanyName":"Buckridge, O\'Kon and Cassin","Currency":"TZS","Notes":"ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at nulla suspendisse","Department":"Automotive","Website":"weather.com","Latitude":"-4.06667","Longitude":"35.38333","ShipDate":"3/8/2016","TimeZone":"Africa/Dar_es_Salaam","Status":6,"Type":3},{"RecordID":93,"OrderID":"42507-300","ShipCountry":"CL","ShipCity":"Puerto Montt","ShipName":"Rogahn-McClure","ShipAddress":"9 Scoville Place","CompanyEmail":"edobrovolny2k@ycombinator.com","CompanyAgent":"Estella Dobrovolny","CompanyName":"Labadie, Hilll and Ryan","Currency":"CLP","Notes":"fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet","Department":"Jewelery","Website":"vk.com","Latitude":"-41.46574","Longitude":"-72.94289","ShipDate":"4/15/2016","TimeZone":"America/Santiago","Status":1,"Type":2},{"RecordID":94,"OrderID":"58118-2013","ShipCountry":"PL","ShipCity":"Gąsocin","ShipName":"Kris LLC","ShipAddress":"0 Park Meadow Hill","CompanyEmail":"mhryniewicz2l@dot.gov","CompanyAgent":"Maurizia Hryniewicz","CompanyName":"Koss LLC","Currency":"PLN","Notes":"vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam","Department":"Movies","Website":"edublogs.org","Latitude":"52.73754","Longitude":"20.7118","ShipDate":"11/16/2016","TimeZone":"Europe/Warsaw","Status":4,"Type":1},{"RecordID":95,"OrderID":"55504-0500","ShipCountry":"ID","ShipCity":"Besah","ShipName":"Dibbert-Batz","ShipAddress":"53 Jackson Pass","CompanyEmail":"rdowrey2m@foxnews.com","CompanyAgent":"Robena Dowrey","CompanyName":"Stehr, Effertz and Goldner","Currency":"IDR","Notes":"diam erat fermentum justo nec condimentum neque sapien placerat ante nulla justo aliquam quis turpis","Department":"Jewelery","Website":"e-recht24.de","Latitude":"-7.1358","Longitude":"111.6394","ShipDate":"6/29/2016","TimeZone":"Asia/Jakarta","Status":1,"Type":1},{"RecordID":96,"OrderID":"52316-190","ShipCountry":"TH","ShipCity":"Yala","ShipName":"McCullough Group","ShipAddress":"35 Cordelia Alley","CompanyEmail":"aovett2n@java.com","CompanyAgent":"Agatha Ovett","CompanyName":"Schultz, Dooley and Metz","Currency":"THB","Notes":"congue eget semper rutrum nulla nunc purus phasellus in felis donec semper sapien a libero nam dui","Department":"Books","Website":"mashable.com","Latitude":"6.53995","Longitude":"101.28128","ShipDate":"10/4/2016","TimeZone":"Asia/Bangkok","Status":4,"Type":3},{"RecordID":97,"OrderID":"49288-0451","ShipCountry":"ID","ShipCity":"Karangduren Dua","ShipName":"Heller Group","ShipAddress":"2169 Dixon Center","CompanyEmail":"pkillner2o@fastcompany.com","CompanyAgent":"Padraic Killner","CompanyName":"Cruickshank and Sons","Currency":"IDR","Notes":"semper porta volutpat quam pede lobortis ligula sit amet eleifend pede libero quis orci nullam molestie nibh in lectus","Department":"Jewelery","Website":"cisco.com","Latitude":"-8.2717","Longitude":"113.4939","ShipDate":"8/22/2016","TimeZone":"Asia/Jakarta","Status":6,"Type":1},{"RecordID":98,"OrderID":"63824-478","ShipCountry":"KI","ShipCity":"Tabwakea Village","ShipName":"Crona LLC","ShipAddress":"109 Bobwhite Park","CompanyEmail":"jgonsalvo2p@bizjournals.com","CompanyAgent":"Jacquelyn Gonsalvo","CompanyName":"Ondricka, Bergnaum and Pfannerstill","Currency":"AUD","Notes":"tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc","Department":"Toys","Website":"networkadvertising.org","Latitude":"2.01643","Longitude":"-157.48773","ShipDate":"6/11/2016","TimeZone":"Pacific/Honolulu","Status":2,"Type":2},{"RecordID":99,"OrderID":"0641-6045","ShipCountry":"FR","ShipCity":"Étampes","ShipName":"Roberts-Wilderman","ShipAddress":"2950 North Circle","CompanyEmail":"mfeld2q@mayoclinic.com","CompanyAgent":"Mathilda Feld","CompanyName":"Satterfield-Keebler","Currency":"EUR","Notes":"porta volutpat erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in felis donec","Department":"Grocery","Website":"printfriendly.com","Latitude":"48.4333","Longitude":"2.15","ShipDate":"7/12/2016","TimeZone":"Europe/Paris","Status":2,"Type":2},{"RecordID":100,"OrderID":"50436-0124","ShipCountry":"PL","ShipCity":"Drobin","ShipName":"Batz-McLaughlin","ShipAddress":"66031 Comanche Center","CompanyEmail":"bheaseman2r@theglobeandmail.com","CompanyAgent":"Brita Heaseman","CompanyName":"Feeney-Kutch","Currency":"PLN","Notes":"id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien quis libero","Department":"Beauty","Website":"netlog.com","Latitude":"52.73775","Longitude":"19.98928","ShipDate":"11/22/2016","TimeZone":"Europe/Warsaw","Status":2,"Type":1}]'),
        a=$(".m_datatable").mDatatable( {
            data: {
                type: "local", source: e, pageSize: 10
            }
            , layout: {
                theme: "default", class: "", scroll: !1, footer: !1
            }
            , sortable:!0, pagination:!0, search: {
                input: $("#generalSearch")
            }
            , columns:[ {
                field:"RecordID", title:"#", width:50, sortable:!1, textAlign:"center", selector: {
                    class: "m-checkbox--solid m-checkbox--brand"
                }
            }
            , {
                field: "OrderID", title: "Order ID"
            }
            , {
                field:"ShipName", title:"Ship Name", responsive: {
                    visible: "lg"
                }
            }
            , {
                field: "Currency", title: "Currency", width: 100
            }
            , {
                field:"ShipAddress", title:"Ship Address", responsive: {
                    visible: "lg"
                }
            }
            , {
                field: "ShipDate", title: "Ship Date", type: "date", format: "MM/DD/YYYY"
            }
            , {
                field: "Latitude", title: "Latitude", type: "number"
            }
            , {
                field:"Status", title:"Status", template:function(e) {
                    var a= {
                        1: {
                            title: "Pending", class: "m-badge--brand"
                        }
                        , 2: {
                            title: "Delivered", class: " m-badge--metal"
                        }
                        , 3: {
                            title: "Canceled", class: " m-badge--primary"
                        }
                        , 4: {
                            title: "Success", class: " m-badge--success"
                        }
                        , 5: {
                            title: "Info", class: " m-badge--info"
                        }
                        , 6: {
                            title: "Danger", class: " m-badge--danger"
                        }
                        , 7: {
                            title: "Warning", class: " m-badge--warning"
                        }
                    }
                    ;
                    return'<span class="m-badge '+a[e.Status].class+' m-badge--wide">'+a[e.Status].title+"</span>"
                }
            }
            , {
                field:"Type", title:"Type", template:function(e) {
                    var a= {
                        1: {
                            title: "Online", state: "danger"
                        }
                        , 2: {
                            title: "Retail", state: "primary"
                        }
                        , 3: {
                            title: "Direct", state: "accent"
                        }
                    }
                    ;
                    return'<span class="m-badge m-badge--'+a[e.Type].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+a[e.Type].state+'">'+a[e.Type].title+"</span>"
                }
            }
            , {
                field:"Actions", width:110, title:"Actions", sortable:!1, overflow:"visible", template:function(e, a, i) {
                    return'\t\t\t\t\t\t<div class="dropdown '+(i.getPageSize()-a<=4?"dropup": "")+'">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View ">                            <i class="la la-edit"></i>                        </a>\t\t\t\t\t'
                }
            }
            ]
        }
        ),
        $("#m_form_status").on("change", function() {
            a.search($(this).val(), "Status")
        }
        ),
        $("#m_form_type").on("change", function() {
            a.search($(this).val(), "Type")
        }
        ),
        $("#m_form_status, #m_form_type").selectpicker()
    }
}

;
var WizardDemo=function() {
    $("#m_wizard");
    var e,
    r,
    i=$("#m_form");
    return {
        init:function() {
            var n;
            $("#m_wizard"),
            i=$("#m_form"),
            (r=new mWizard("m_wizard", {
                startStep: 1
            }
            )).on("beforeNext", function(r) {
                !0!==e.form()&&r.stop()
            }
            ),
            r.on("change", function(e) {
                mUtil.scrollTop()
            }
            ),
            r.on("change", function(e) {
                1===e.getStep()
            }
            ),
            e=i.validate( {
                ignore:":hidden", rules: {
                }
                , messages: {
                    "account_communication[]": {
                        required: "You must select at least one communication option"
                    }
                    , accept: {
                        required: "You must accept the Terms and Conditions agreement!"
                    }
                }
                , invalidHandler:function(e, r) {
                    mUtil.scrollTop(), swal( {
                        title: "", text: "There are some errors in your submission. Please correct them.", type: "error", confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                    }
                    )
                }
                , submitHandler:function(e) {}
            }
            )
            
        }
    }
}();

$(document).ready(function() {
	var prod_number=0;
    WizardDemo.init();
    DatatableDataLocalDemo.init();
    $(".selectpickers").selectpicker();
 //    $('#currency_page2').on('click', function (e) {
	//     e.stopPropagation();
	//     $(this).next('.dropdown').find('[data-toggle=dropdown]').dropdown('toggle');
	// });
    $.ajax({
    	url: '<?php echo base_url() ?>Home/get_currency',
    	type: 'POST',
    	dataType: 'json',
    })
    .done(function(res) {
    	console.log("success");
    	
    	$.each(res, function (i, item) {
    		console.log(item.currency);
		    // $('#currency_page2').append($('<option>', { 
		    //     value: item.currency,
		    //     text : item.currency 
		    // }));
		    $("#currency_page2").selectpicker();
		    $('#currency_page2').append('<option value="'+item.currency+'">'+item.currency+'</option>');
		    
		});
    	// for (var i = 0; i < res.length; i++) {
    	// 	console.log(res[i].currency);
    	// 	var o = new Option(res[i].currency, res[i].currency);
    	// 	$("#currency_page2").append(o);
    	// }
    	$("#currency_page2").selectpicker("refresh");
    })
    .fail(function(res) {
    	console.log("error");
    })
    .always(function(res) {
    	console.log("complete");
    	// $(".selectpickers").selectpicker();
    	$("#currency_page2").selectpicker("refresh");
    });
    
    $("#more_product").click(function(){
    	prod_number+=1;
    	var str="";
    	str+='<div class="row" id="prod_row_'+prod_number+'">';
		str+='<div class="col-xl-3">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Product Record No :</label>';
		str+='<div class="row">';
		str+='<div class="col-xl-3">';
		str+='<button class="btn btn-secondary">select</button>';
		str+='</div>';
		str+='<div class="col-xl-9">';
		str+='<input type="text" id="prod_rec_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Description*</label>';
		str+='<input type="text" id="prod_desc_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Quantity*</label>';
		str+='<input type="text" id="prod_qty_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Unit*</label>';
		str+='<select class="form-control m-input selectpickers" name="billing_card_exp_month" id="prod_unit_'+prod_number+'"><option value="">Select</option><option value="01">Piece</option>option value="02">Strip</option>option value="03">Set</option><option value="05">Box</option></select>';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Unit Value*</label>';
		str+='<input type="text" id="prod_value_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Unit Weight</label>';
		str+='<input type="text" id="prod_unweight_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Total Value*</label>';
		str+='<input type="text" id="prod_totval_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-2" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">Country/Region Of Origin*</label>';
		str+='<input type="text" id="prod_country_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-1" style="padding-left: 0px;padding-right: 0px;">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">HS CODE</label>';
		str+='<input type="text" id="prod_hscode_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';	
		str+='<div class="col-xl-2">';
		str+='<div class="form-group m-form__group">';
		str+='<label for="example_input_full_name">State bar code</label>';
		str+='<input type="text" id="prod_state_'+prod_number+'" class="form-control m-input" placeholder="">';
		str+='</div>';
		str+='</div>';
		str+='<div class="col-xl-2">';
		str+='<div class="form-group m-form__group" style="margin-top:17%">';
		str+='<button class="btn btn-danger"code="'+prod_number+'" id="prod_delete_'+prod_number+'" onClick="prod_delete(this)"><i class="flaticon-delete prod_delete" ></i> Delete</button>';
		str+='</div>';
		str+='</div>';
		str+='</div>';
    	$("#product_data").append(str);
    	$(".selectpickers").selectpicker();

    });
});
function prod_delete(x){
	var nomor=$(x).attr("code");
	console.log(nomor);
	$("#prod_row_"+nomor).remove();
}
</script>
<!-- rules : 
                    name: {
                        required: !0
                    }
                    , email: {
                        required: !0, email: !0
                    }
                    , phone: {
                        required: !0, phoneUS: !0
                    }
                    , address1: {
                        required: !0
                    }
                    , city: {
                        required: !0
                    }
                    , state: {
                        required: !0
                    }
                    , city: {
                        required: !0
                    }
                    , country: {
                        required: !0
                    }
                    , account_url: {
                        required: !0, url: !0
                    }
                    , account_username: {
                        required: !0, minlength: 4
                    }
                    , account_password: {
                        required: !0, minlength: 6
                    }
                    , account_group: {
                        required: !0
                    }
                    , "account_communication[]": {
                        required: !0
                    }
                    , billing_card_name: {
                        required: !0
                    }
                    , billing_card_number: {
                        required: !0, creditcard: !0
                    }
                    , billing_card_exp_month: {
                        required: !0
                    }
                    , billing_card_exp_year: {
                        required: !0
                    }
                    , billing_card_cvv: {
                        required: !0, minlength: 2, maxlength: 3
                    }
                    , billing_address_1: {
                        required: !0
                    }
                    , billing_address_2: {}
                    , billing_city: {
                        required: !0
                    }
                    , billing_state: {
                        required: !0
                    }
                    , billing_zip: {
                        required: !0, number: !0
                    }
                    , billing_delivery: {
                        required: !0
                    }
                    , accept: {
                        required: !0
                    } -->