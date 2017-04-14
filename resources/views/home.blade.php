@extends('layouts.master')
@section('content')

<div class="flex-center  position-ref full-height">
    <div class="content" id="app">
        <div v-if="!email_added" class="margin-top-100">
            <h1>Loan Alert</h1>

                <div class="col-md-8  col-md-offset-2 margin-top-50">
                    <div class="col-md-8 col-md-offset-1">
                    <p class="text-left">Get loan alerts in your inbox!</p>
                    </div>
                    <vue-form :state="formstate" v-model="formstate" @submit.prevent="onSubmit">
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-1">
                                <div class="input-icon right">
                                    <validate auto-label class="form-group required-field" :class="fieldClassName(formstate.email)">
                                        <input type="email" name="email" class="form-control" required  v-model.lazy="model.email">

                                        <field-messages auto-label name="email" show="$touched || $submitted" class="">
                                            <div class="text-left">Success!</div>
                                            <div slot="required" class="text-danger">Email is a required field</div>
                                            <div slot="email" class="text-danger">Email is invalid</div>
                                        </field-messages>

                                    </validate>

                                    {{--<input type="email" name="email" required class="form-control">--}}
                                </div>
                            </div>
                            <div class="col-md-3 text-left"><button type="submit" :disabled="formstate.$invalid" class="btn  btn-default"> Alert Me</button></div>

                        </div>
                    </vue-form>
                 </div>
        </div>
        <div v-if="email_added" class="margin-top-50 text-left zmm-lrf zmm-lrf_advanced zmm-lrf_upsell"><!-- react-empty: 1266 -->
            <div class="zmm-lrf-desktop"><p class="zmm-media-mobile">Fill in your loan details to get personalized rates from multiple lenders.</p>
                <form><div class="zsg-g"><div class="zsg-lg-1-3 zsg-md-1-1">
                            <div>
                                <div class="zmm-input-zipCode zsg-form-field">
                                    <label for="loanRequestInputs:zipCode">ZIP code</label>
                                    <div class="zmm-lrf-input-iconwrap">
                                        <input type="text" id="loanRequestInputs:zipCode" value="" autocomplete="off">
                                        <a class="zmm-lrf-input-icon"><span class="zsg-icon-location"></span></a>
                                    </div><p class="zsg-form-error-text">Invalid ZIP code</p></div>
                                <div class="zsg-form-field"><label for="loanRequestInputs:purchasePrice">Purchase price</label>
                                    <div class="zsg-input-overlay_left loanRequestInputs:purchasePrice">
                                        <div class="zsg-input-overlay-text_left">$</div>
                                        <input type="text" id="loanRequestInputs:purchasePrice" value="300,000" autocomplete="off"></div>
                                    <p class="zsg-form-error-text">Purchase price must be between $5,000 and $200,000,000</p>
                                </div>
                                <div class="zsg-form-field"><label for="loanRequestInputs:downPayment">Down payment</label>
                                    <div class="down-payment-container"><div class="zsg-input-overlay_left downPayment">
                                            <div class="zsg-input-overlay-text_left">$</div><input type="text" value="60,000" id="downPayment" autocomplete="off"></div>
                                        <div class="zsg-input-overlay_right downPercent"><input type="text" value="20" id="downPercent" autocomplete="off">
                                            <div class="zsg-input-overlay-text_right">%</div></div></div>
                                    <p class="zsg-form-error-text">Down payment must be between $0 and $200,000,000</p></div><div class="zsg-form-field">
                                    <div class="zsg-form-label"><label for="loanRequestInputs:creditScoreRange">Credit score</label>
                                        <a class="zsg-icon-circle-question zsg-icon_clickable"></a></div>
                                    <select id="loanRequestInputs:creditScoreRange">
                                        <option value="760 and above">760 and above</option>
                                        <option value="740-759">740-759</option>
                                        <option value="720-739">720-739</option>
                                        <option value="700-719">700-719</option>
                                        <option value="680-699">680-699</option>
                                        <option value="660-679">660-679</option>
                                        <option value="640-659">640-659</option>
                                        <option value="620-639">620-639</option>
                                        <option value="600-619">600-619</option>
                                        <option value="560-599">560-599</option>
                                        <option value="300-559">300-559</option>
                                    </select></div>
                                <div class="zsg-form-field zsg-form-field_checkbox">
                                    <input type="checkbox" id="loanRequestInputs:vaEligible" value="false">
                                    <label for="loanRequestInputs:vaEligible">Military/Veteran?</label>
                                </div></div>
                            <div><div class="zsg-form-actions">
                                    <div class="zmm-lrf-advanced-wrap">

                                    </div>
                                    <div class="zmm-mobile-actionbar">
                                    </div></div>
                                <div class="zmm-media-desktop zmm-media-tablet">
                                    <div class="zmm-lrf-upsell zsg-notification-bar_confirmation">
                                        <button class="btn btn-default pull-right">Alert Me</button>
                                    </div></div></div></div>
                        <div class="zsg-lg-1-3 zsg-md-1-1">
                            <div>
                                <div class="zsg-form-field"><label for="loanRequestInputs:annualIncome">Annual income</label><div class="zsg-input-overlay_left loanRequestInputs:annualIncome"><div class="zsg-input-overlay-text_left">$</div><input type="text" id="loanRequestInputs:annualIncome" value="70,000" autocomplete="off"></div>
                                    <p class="zsg-form-error-text">Annual income must be between $0 and $10,000,000</p></div><div class="zsg-form-field">
                                    <div class="zsg-form-label"><label for="loanRequestInputs:monthlyDebts">Monthly debts</label>
                                        <a class="zsg-icon-circle-question zsg-icon_clickable"></a>
                                    </div>
                                    <div class="zsg-input-overlay_left loanRequestInputs:monthlyDebts">
                                        <div class="zsg-input-overlay-text_left">$</div>
                                        <input type="text" id="loanRequestInputs:monthlyDebts" value="0" autocomplete="off"></div>
                                    <p class="zsg-form-error-text">Monthly debts must be between $0 and $200,000,000</p>
                                </div>
                                <div class="zsg-form-field"><label for="loanRequestInputs:propertyType">Property type</label>
                                    <select id="loanRequestInputs:propertyType">
                                        <option value="Single family home">Single family home</option>
                                        <option value="Townhouse">Townhouse</option>
                                        <option value="Condo - 4 or fewer stories">Condo - 4 or fewer stories</option>
                                        <option value="Condo - 5+ stories">Condo - 5+ stories</option>
                                        <option value="Cooperative">Cooperative</option>
                                        <option value="Mobile or manufactured">Mobile or manufactured</option>
                                        <option value="Modular">Modular</option>
                                        <option value="Leasehold">Leasehold</option>
                                    </select></div><div class="zsg-form-field">
                                    <label for="loanRequestInputs:propertyUse">How is home used?</label>
                                    <select id="loanRequestInputs:propertyUse">
                                        <option value="Primary residence">Primary residence</option>
                                        <option value="Secondary / vacation">Secondary / vacation</option>
                                        <option value="Investment / rental">Investment / rental</option>
                                    </select>
                                </div>
                                <div class="zsg-form-field">
                                    <label for="loanRequestInputs:firstTimeBuyer">First-time buyer?</label>
                                    <select id="loanRequestInputs:firstTimeBuyer">
                                        <option value="No">No</option><option value="Yes">Yes</option>
                                    </select>
                                </div>
                                <div class="zsg-form-field">
                                    <label for="loanRequestInputs:newConstruction">New construction?</label>
                                    <select id="loanRequestInputs:newConstruction">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="zsg-lg-1-3 zsg-md-1-1">
                            <div>
                                <div class="zsg-form-field zsg-form-field_checkbox">
                                    <input type="checkbox" id="loanRequestInputs:hasBankruptcy" value="false">
                                    <label for="loanRequestInputs:hasBankruptcy">Filed bankruptcy?</label>
                                </div><div class="zsg-form-field zsg-form-field_checkbox">
                                    <input type="checkbox" id="loanRequestInputs:hasForeclosure" value="false">
                                    <label for="loanRequestInputs:hasForeclosure">Had a foreclosure?</label>
                                </div>
                                <div class="zsg-form-field zsg-form-field_checkbox">
                                    <input type="checkbox" id="loanRequestInputs:selfEmployed" value="false">
                                    <label for="loanRequestInputs:selfEmployed">Self-employed?</label>
                                </div>
                                <fieldset class="zsg-form-fieldset">
                                    <legend class="zsg-form-legend">Desired loan programs?</legend>
                                    <ul class="zsg-form-group">
                                        <li><div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programFixed30Year" value="true">
                                                <label for="loanRequestInputs:programFixed30Year">30 year fixed</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programFixed20Year" value="false">
                                                <label for="loanRequestInputs:programFixed20Year">20 year fixed</label>
                                            </div>
                                        </li>
                                        <li><div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programFixed15Year" value="true">
                                                <label for="loanRequestInputs:programFixed15Year">15 year fixed</label></div>
                                        </li>
                                        <li>
                                            <div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programFixed10Year" value="false">
                                                <label for="loanRequestInputs:programFixed10Year">10 year fixed</label></div>
                                        </li>
                                        <li>
                                            <div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programARM7" value="false">
                                                <label for="loanRequestInputs:programARM7">7/1 ARM</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programARM5" value="true">
                                                <label for="loanRequestInputs:programARM5">5/1 ARM</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="zsg-form-field zsg-form-field_checkbox">
                                                <input type="checkbox" id="loanRequestInputs:programARM3" value="false">
                                                <label for="loanRequestInputs:programARM3">3/1 ARM</label>
                                            </div>
                                        </li>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="zmm-lrf-advanced-links zmm-media-mobile zmm-view-form"><a>Simple</a></div>
            </div><!-- react-empty: 762 -->
        </div>

    </div>


</div>


@endsection
