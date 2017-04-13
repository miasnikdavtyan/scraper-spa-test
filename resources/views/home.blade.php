@extends('layouts.master')
@section('content')

<div class="flex-center position-ref full-height">
    <div class="content" id="app">
        <h1>Loan Alert</h1>
        <p>Get loan alerts in your inbox!</p>
        <div class="row">
            <div class="col-md-8">
                <vue-form :state="formstate" v-model="formstate" @submit.prevent="onSubmit">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div class="input-icon right">
                                <validate auto-label class="form-group required-field" :class="fieldClassName(formstate.email)">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required  v-model.lazy="model.email">

                                    <field-messages auto-label name="email" show="$touched || $submitted" class="">
                                        <div>Success!</div>
                                        <div slot="required" class="text-danger">Email is a required field</div>
                                        <div slot="email" class="text-danger">Email is invalid</div>
                                    </field-messages>

                                </validate>

                                {{--<input type="email" name="email" required class="form-control">--}}
                            </div>
                        </div>
                        <div class="col-md-4 "><button v-on:click="firstOrNewEmail" class="btn  btn-default"> Alert Me</button></div>

                    </div>
                </vue-form>
             </div>
         </div>

    </div>
</div>

@endsection
