@extends('layouts.app')
@section('content')
@section('title',__('messages.totes.totes_add'))

<div class="content-card custom-scroll">
   <div class="content-card-header">
        <h3 class="page-title">@lang('messages.totes.totes_add')</h3>		
        <div class="right-items">
            <a href="{{route('totes.index')}}" class="btn btn-gray btn-header px-4" title="@lang('messages.modules.button_cancel')">@lang('messages.modules.button_cancel')</a>
            <button class="btn btn-blue btn-header px-4"  title="@lang('messages.modules.button_save')" form="create-totes-form">@lang('messages.modules.button_save')</button>
           
        </div>					
    </div>	
    <div class="card-flex-container">
        <form class="form-horizontal form-flex" method="post" id="create-totes-form" action="{{route('api-totes.store')}}">         
            <div class="form-fields">
                <div class="container-fluid">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.totes.totes_name')<span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="" placeholder="" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.table_label.length')<small> (@lang('messages.totes.cm'))</small><span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control" id="length" placeholder="" name="length" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.table_label.width')<small> (@lang('messages.totes.cm'))</small><span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control" id="width" placeholder="" name="width" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.table_label.stck_height')<small> (@lang('messages.totes.cm'))</small><span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control" id="height" placeholder="" name="height" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.table_label.max_vol')<small> (@lang('messages.totes.meter3'))</small><span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                            <input  type="text" class="form-control" id="max_volume" placeholder="" name="max_volume" disabled="" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label text-nowrap">@lang('messages.table_label.max_weight')<small> (@lang('messages.totes.kg'))</small><span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control" id="max_weight" placeholder="" name="max_weight" onkeypress="return fun_AllowOnlyAmountAndDot(this.id);">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.table_label.qty')<span class="asterisk">*</span></label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control" id="qty" placeholder="" name="quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.table_label.category')</label>
                                        <div class="col-lg-6">
                                            <select name="category" class="form-control">
                                                <option value="" >--- @lang('messages.table_label.select_category') ---</option>
                                                <option value="1" selected="" >@lang('messages.table_label.cat_next_day')</option>
                                                <option value="2">@lang('messages.table_label.cat_standard')</option>
                                                <option value="3">@lang('messages.table_label.cat_europ')</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                               <!--  <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="inputPassword" class="col-lg-6 col-form-label">@lang('messages.common.barcode')</label>
                                        <div class="col-lg-6">
                                          <input type="text" class="form-control" id="barcode" placeholder="" name="barcode">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>						
                </div>                  
            </div>
        </form>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('js/totes/create.js?v='.CSS_JS_VERSION)}}"></script>
@endsection