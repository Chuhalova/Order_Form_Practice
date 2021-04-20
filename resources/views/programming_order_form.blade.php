<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('custom.css') }}" rel="stylesheet">
    <link href="{{ asset('custom2.css') }}" rel="stylesheet">
    <link href="{{ asset('custom3.css') }}" rel="stylesheet">
</head>

<body onload="ajaxPrice()">
    <div class="Page__body Page__width">
        <div class="rc-ui-blocker rc-ui-blocker--size-m rc-ui-blocker--transparency-hard">
            <div class="NewOrder">
                <div class="NewOrder__main">
                    <div class="rc-ui-blocker rc-ui-blocker--size-m rc-ui-blocker--transparency-soft">
                        <div class="rc-orderform">
                            <div class="rc-orderform-header">
                                <div class="rc-orderform-header__left">
                                    <div class="rc-orderform-header__heading">Place an order</div>
                                    <div class="rc-orderform-header__subheading">It’s fast, secure, and confidential<div class="rc-orderform-header__i"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="rc-orderform__step">
                                <div class="rc-orderform__step-flag"><span class="rc-orderform__step-flag__count">1.</span>Paper details</div>
                                <form action="{{url('/add-order/') }}" method='POST' class="rc-orderform__step__body" _lpchecked="1">
                                    @csrf
                                    {{method_field('POST')}}
                                    <div class="rc-orderform__row rc-orderform__row--service-type">
                                        <div class="rc-orderform__feature-heading"> </div>
                                        <div class="rc-orderform__feature-body">
                                            <div class="rc-radios rc-radios--theme-default vertical-on-small ServiceTypeControl">
                                                <div class="radio-button-wrapper radio-button-wrapper--flexbuttons radio-button-wrapper--same-width"><button type="button" class="radio-button radio-button--n-46 active" tabindex="-1">
                                                        <div class="button-checkbox"></div>
                                                        <div class="ServiceTypeControl-button ServiceTypeControl-button--programming">
                                                            <div class="ServiceTypeControl-button__title">Programming</div>
                                                            <div class="ServiceTypeControl-button__subTitle">Tech assignments</div>
                                                        </div>
                                                    </button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-orderform__row rc-orderform__row--discipline">
                                        <div class="rc-orderform__feature-heading">Discipline</div>
                                        <div class="rc-orderform__feature-body">
                                            <div>
                                                <div class="rc-validation-representer valid" data-invalid="false">
                                                    <div class="Select DisciplineControl__select Select--single is-searchable has-value">
                                                        <div class="Select-control">
                                                            <select style="width:100%; outline:none!important;border:none!important;" name="disciplines" id="disciplines" class="disciplines">
                                                                <option value="web_programming">Web programming</option>
                                                                <option value="desktop_applications_development">Desktop applications development</option>
                                                                <option value="mobile_applications_development">Mobile applications development</option>
                                                                <option value="database_design_and_optimization">Database design and optimization</option>
                                                                <option value="database_analysis_and_reports">Database analysis and reports</option>
                                                                <option value="computer_networking_and_cybersecurity">Computer networking and cybersecurity</option>
                                                                <option value="3D_CAD_modeling">3D CAD modeling</option>
                                                                <option value="algorithms">Algorithms</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-orderform__row rc-orderform__row--paper-instructions">
                                        <div class="rc-orderform__feature-heading">Instructions</div>
                                        <div class="rc-orderform__feature-body">
                                            <div class="rc-validation-representer valid" data-invalid="false"><textarea id="instructions" data-hj-whitelist="true" class="PaperInstructionsControl_textarea UIInput UIInput-default UIInput-default--type-textarea UIInput-default--size-m UIInput-default--color-default UIInput-default--autosize UIInput-default--not-resizable" placeholder="Write anything you feel is important for the writer to consider. An outline, a grading scale, and other documents may be uploaded as additional materials." tabindex="0" style="overflow: hidden; overflow-wrap: break-word; height: 76px;"></textarea></div>
                                        </div>
                                    </div>
                                    <div class="rc-orderform__row rc-orderform__row--software">
                                        <div class="rc-orderform__feature-heading">Software</div>
                                        <div class="rc-orderform__feature-body">
                                            <div class="rc-validation-representer valid" data-invalid="false"><input type="text" class=" softwareinput UIInput UIInput-default UIInput-default--type-text UIInput-default--size-m UIInput-default--color-default UIInput-default--oneline" placeholder="Software to be used, if there is any" tabindex="0" value=""></div>
                                        </div>
                                    </div>
                                    <div class="rc-orderform__row rc-orderform__row--deadline">
                                        <div class="rc-orderform__feature-heading">Deadline</div>
                                        <div class="rc-orderform__feature-body">
                                            <div class="rc-validation-representer valid" data-invalid="false">
                                                <div class="rc-radios rc-radios--theme-default vertical-on-small">
                                                    <input type="text" id='deadline_input' name="deadline_input" style="display:none" class="deadline_input">
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_1" type="button" class="radio-button radio-button--n-1 active" onclick="clickOndesdline_1_4h()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">4h</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_3" type="button" class="radio-button radio-button--n-3" onclick="clickOndesdline_3_8h()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">8h</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_5" type="button" class="radio-button radio-button--n-5" onclick="clickOndesdline_5_24h()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">24h</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_7" type="button" class="radio-button radio-button--n-7" onclick="clickOndesdline_7_2d()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">2d</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_9" type="button" class="radio-button radio-button--n-9" onclick="clickOndesdline_9_3d()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">3d</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_11" type="button" class="radio-button radio-button--n-11" onclick="clickOndesdline_11_5d()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">5d</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_13" type="button" class="radio-button radio-button--n-13" onclick="clickOndesdline_13_7d()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">7d</div>
                                                            </div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_15" type="button" class="radio-button radio-button--n-15" onclick="clickOndesdline_15_14d()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="DeadlineControl__radiobutton-content">
                                                                <div class="DeadlineControl__radiobutton-content__hours">14d</div>
                                                            </div>
                                                        </button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-orderform__row rc-orderform__row--task-size">
                                        <div class="rc-orderform__feature-heading">Task size</div>
                                        <div class="rc-orderform__feature-body">
                                            <div class="rc-validation-representer TaskSizeControl valid" data-invalid="false">
                                                <div class="rc-radios rc-radios--theme-default vertical-on-small">
                                                    <input type="text" name="tasksize_input" id="tasksize_input" style="display:none" class="tasksize_input">
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="SmallTaskSize" type="button" class="radio-button radio-button--n-1 active" onclick="clickOnSmallTaskSize()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="radio-button__content">Small</div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="MediumTaskSize" type="button" class="radio-button radio-button--n-2" onclick="clickOnMediumTaskSize()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="radio-button__content">Medium</div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="LargeTaskSize" type="button" class="radio-button radio-button--n-3" onclick="clickOnLargeTaskSize()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="radio-button__content">Large</div>
                                                        </button></div>
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="ExtraLargeTaskSize" type="button" class="radio-button radio-button--n-4" onclick="clickOnExtraLargeTaskSize()">
                                                            <div class="button-checkbox"></div>
                                                            <div class="radio-button__content">Extra large</div>
                                                        </button></div>
                                                </div>
                                                <div class="TaskSizeControl__descriptors">
                                                    <div class="TaskSizeControl__descriptors__example">
                                                        <div class="TaskSizeControl__descriptors__title">Example:</div>
                                                        <div id="TaskSizeControl__descriptors__body" class="TaskSizeControl__descriptors__body">short practice problems or theoretical questions</div>
                                                    </div>
                                                    <div class="TaskSizeControl__descriptors__deliverables">
                                                        <div class="TaskSizeControl__descriptors__title">Possible deliverables:</div>
                                                        <ul id="TaskSizeControl__deliverables" style="display:block;" class="TaskSizeControl__deliverables">
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--source-code">Source code</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--screenshots-of-outputs">Screenshots of outputs</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--short-answers-to-questions">Short answers to questions</li>
                                                        </ul>
                                                        <ul id="TaskSizeControl__deliverables2" style="display:none;" class="TaskSizeControl__deliverables">
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--operations-and-computations">Simple operations and computations</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--screenshots-of-outputs">Screenshots of outputs</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--simple-3d-cad-model">Simple 3D CAD model</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--brief-report">Brief report</li>
                                                        </ul>
                                                        <ul id="TaskSizeControl__deliverables3" style="display:none;" class="TaskSizeControl__deliverables">
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--screenshots-of-outputs">Screenshots of outputs</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--computations">Computations</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--3d-cad-model">3D CAD model</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--problem-analysis">Problem analysis</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--documentation">Documentation</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--detailed-report">Detailed report</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--presentation">Presentation</li>
                                                        </ul>
                                                        <ul id="TaskSizeControl__deliverables4" style="display:none;" class="TaskSizeControl__deliverables">
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--screenshots-of-outputs">Screenshots of outputs</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--computations">Computations</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--3d-cad-model">3D CAD model</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--problem-analysis">Problem analysis</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--documentation">Documentation</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--advanced-report">Advanced report (research proposal, dissertation/thesis chapter, etc.)</li>
                                                            <li class="TaskSizeControl__deliverables__item TaskSizeControl__deliverables__item--presentation">Presentation</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                        <div style="width:50%; margin:100px auto 0 auto;" class="OrderformCheckoutInfo__order-short-info">
                                                            <div class="OrderformCheckoutInfo__order-short-info__item">Programming</div>
                                                        </div>
                                                        <div style="width:50%;  margin:auto" class="InvoiceServices">
                                                            <div class="InvoiceServices__item">
                                                                <div class="OrderDetails__info-row__label">Total price</div>
                                                                <div class="InvoiceServices__item__value">
                                                                    <p id="total_price_info">0$</p>
                                                                </div>
                                                            </div>
                                                            <div class="InvoiceServices">
                                                                <div class="InvoiceServices__item InvoiceServices__item--total-price">
                                                                    <div class="InvoiceServices__item__heading"></div>
                                                                    <div class="InvoiceServices__item__value"></div>
                                                                </div>
                                                            </div>

                                                            <button type="submit" class="safecheckoutbutton UIButton-default-filled UIButton-default-filled--size-m UIButton-default-filled--color-primary" type="button" id="checkout">Create order</button>

</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rc-ui-blocker CheckoutInfoStickyControl CheckoutInfoStickyControl_hidden rc-ui-blocker--size-xs rc-ui-blocker--transparency-soft"><span class="CheckoutInfoStickyControl__total">$55.00</span><button class="CheckoutInfoStickyControl__button UIButton UIButton-default-filled UIButton-default-filled--size-m UIButton-default-filled--color-primary" type="button">Safe checkout </button></div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{asset('jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap.min.js')}}"></script>

<script>
    function clickOndesdline_1_4h() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.add("active");
        elem3.classList.remove("active");
        elem5.classList.remove("active");
        elem7.classList.remove("active");
        elem9.classList.remove("active");
        elem11.classList.remove("active");
        elem13.classList.remove("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "4h";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_3_8h() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.add("active");
        elem5.classList.remove("active");
        elem7.classList.remove("active");
        elem9.classList.remove("active");
        elem11.classList.remove("active");
        elem13.classList.remove("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "8h";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_5_24h() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.remove("active");
        elem5.classList.add("active");
        elem7.classList.remove("active");
        elem9.classList.remove("active");
        elem11.classList.remove("active");
        elem13.classList.remove("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "24h";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_7_2d() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.remove("active");
        elem5.classList.remove("active");
        elem7.classList.add("active");
        elem9.classList.remove("active");
        elem11.classList.remove("active");
        elem13.classList.remove("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "2d";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_9_3d() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.remove("active");
        elem5.classList.remove("active");
        elem7.classList.remove("active");
        elem9.classList.add("active");
        elem11.classList.remove("active");
        elem13.classList.remove("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "3d";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_11_5d() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.remove("active");
        elem5.classList.remove("active");
        elem7.classList.remove("active");
        elem9.classList.remove("active");
        elem11.classList.add("active");
        elem13.classList.remove("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "5d";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_13_7d() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.remove("active");
        elem5.classList.remove("active");
        elem7.classList.remove("active");
        elem9.classList.remove("active");
        elem11.classList.remove("active");
        elem13.classList.add("active");
        elem15.classList.remove("active");
        document.getElementById("deadline_input").value = "7d";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOndesdline_15_14d() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("deadline_1");
        var elem3 = document.getElementById("deadline_3");
        var elem5 = document.getElementById("deadline_5");
        var elem7 = document.getElementById("deadline_7");
        var elem9 = document.getElementById("deadline_9");
        var elem11 = document.getElementById("deadline_11");
        var elem13 = document.getElementById("deadline_13");
        var elem15 = document.getElementById("deadline_15");
        elem1.classList.remove("active");
        elem3.classList.remove("active");
        elem5.classList.remove("active");
        elem7.classList.remove("active");
        elem9.classList.remove("active");
        elem11.classList.remove("active");
        elem13.classList.remove("active");
        elem15.classList.add("active");
        document.getElementById("deadline_input").value = "14d";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOnSmallTaskSize() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.add("active");
        elem2.classList.remove("active");
        elem3.classList.remove("active");
        elem4.classList.remove("active");
        document.getElementById("tasksize_input").value = "small";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "short practice problems or theoretical questions";
        document.getElementById("TaskSizeControl__deliverables").style.display = "block";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "none";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOnMediumTaskSize() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.remove("active");
        elem2.classList.add("active");
        elem3.classList.remove("active");
        elem4.classList.remove("active");
        document.getElementById("tasksize_input").value = "medium";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "lab report, simple model converted from a drawing";
        document.getElementById("TaskSizeControl__deliverables").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "block";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "none";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOnLargeTaskSize() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.remove("active");
        elem2.classList.remove("active");
        elem3.classList.add("active");
        elem4.classList.remove("active");
        document.getElementById("tasksize_input").value = "large";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "moderately complex model created from scratch";
        document.getElementById("TaskSizeControl__deliverables").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "block";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "none";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }

    function clickOnExtraLargeTaskSize() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.remove("active");
        elem2.classList.remove("active");
        elem3.classList.remove("active");
        elem4.classList.add("active");
        document.getElementById("tasksize_input").value = "extralarge";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "complex project created from scratch";
        document.getElementById("TaskSizeControl__deliverables").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "block";
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }
    $('#disciplines').change(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    });

    function ajaxPrice() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            /* the route pointing to the post function */
            url: '/ajax-request',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {
                _token: CSRF_TOKEN,
                disciplines: $(".disciplines").val(),
                instructions: $(".PaperInstructionsControl_textarea").val(),
                software: $(".softwareinput").val(),
                deadline: $(".deadline_input").val(),
                tasksize: $(".tasksize_input").val()
            },
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {
                var paragraph = document.getElementById("total_price_info");
                paragraph.textContent = data.price + " $";
            }
        });
    }
</script>

</html>