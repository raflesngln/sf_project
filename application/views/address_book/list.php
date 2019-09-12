
<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
					Address Book List
				</h3>
			</div>
		</div>
		<div class="m-portlet__head-tools">
			<ul class="m-portlet__nav">
				<li class="m-portlet__nav-item">
					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
						<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
							<i class="la la-ellipsis-h m--font-brand"></i>
						</a>
						<div class="m-dropdown__wrapper">
							<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__body">
									<div class="m-dropdown__content">
										<ul class="m-nav">
											<li class="m-nav__section m-nav__section--first">
												<span class="m-nav__section-text">Actions</span>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-share"></i>
													<span class="m-nav__link-text">Export</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-share"></i>
													<span class="m-nav__link-text">APS Export</span>
												</a>
											</li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="m-portlet__body">

		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<label>Status:</label>
								</div>
								<div class="m-form__control">
									<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_status">
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
									<select class="form-control m-bootstrap-select m-bootstrap-select--solid" id="m_form_type">
										<option value="">All</option>
										<option value="1">Online</option>
										<option value="2">Retail</option>
										<option value="3">Direct</option>
									</select>
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								<input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
								<span class="m-input-icon__icon m-input-icon__icon--left">
									<span><i class="la la-search"></i></span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 order-1 order-xl-2 m--align-right">
					<a href="#" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
						<span>
							<i class="flaticon-user"></i>
							<span>New Address</span>
						</span>
					</a>
					<div class="m-separator m-separator--dashed d-xl-none"></div>
				</div>
			</div>
		</div>

		<!--end: Search Form -->

		<!--begin: Datatable -->
		<div class="m_datatable" id="json_data"></div>

		<!--end: Datatable -->
	</div>
</div>
<script>
	var DatatableJsonRemoteDemo= {
    init:function() {
        var t,
        e;
        t=$(".m_datatable").mDatatable( {
            data: {
                type: "remote", source: "json_data", pageSize: 10
            }
            , layout: {
                theme: "default", class: "", scroll: !1, footer: !1
            }
            , sortable:!0, pagination:!0, search: {
                input: $("#generalSearch")
            }
            , columns:[ {
                field: "RecordID", title: "#", width: 50, sortable: !1, selector: !1, textAlign: "center"
            }
            , {
                field: "OrderID", title: "Order ID"
            }
            , {
                field:"ShipCountry", title:"Ship Country", template:function(t) {
                    return t.ShipCountry+" - "+t.ShipCity
                }
            }
            , {
                field: "ShipCity", title: "Ship City", width: 110
            }
            , {
                field:"ShipName", title:"Ship Name", responsive: {
                    visible: "lg"
                }
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
                field:"Status", title:"Status", template:function(t) {
                    var e= {
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
                    return'<span class="m-badge '+e[t.Status].class+' m-badge--wide">'+e[t.Status].title+"</span>"
                }
            }
            , {
                field:"Type", title:"Type", template:function(t) {
                    var e= {
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
                    return'<span class="m-badge m-badge--'+e[t.Type].state+' m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-'+e[t.Type].state+'">'+e[t.Type].title+"</span>"
                }
            }
            , {
                field:"Actions", width:110, title:"Actions", sortable:!1, overflow:"visible", template:function(t, e, a) {
                    return'\t\t\t\t\t\t<div class="dropdown '+(a.getPageSize()-e<=4?"dropup": "")+'">\t\t\t\t\t\t\t<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>\t\t\t\t\t\t  \t<div class="dropdown-menu dropdown-menu-right">\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\t\t\t\t\t\t    \t<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\t\t\t\t\t\t  \t</div>\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Download">\t\t\t\t\t\t\t<i class="la la-download"></i>\t\t\t\t\t\t</a>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit settings">\t\t\t\t\t\t\t<i class="la la-cog"></i>\t\t\t\t\t\t</a>\t\t\t\t\t'
                }
            }
            ]
        }
        ),
        e=t.getDataSourceQuery(),
        $("#m_form_status").on("change", function() {
            t.search($(this).val(), "Status")
        }
        ).val(void 0!==e.Status?e.Status:""),
        $("#m_form_type").on("change", function() {
            t.search($(this).val(), "Type")
        }
        ).val(void 0!==e.Type?e.Type:""),
        $("#m_form_status, #m_form_type").selectpicker()
    }
}

;
$(document).ready(function() {
    DatatableJsonRemoteDemo.init()
}

);
</script>
