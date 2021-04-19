<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('custom.css') }}" rel="stylesheet">
    <link href="{{ asset('custom2.css') }}" rel="stylesheet">
    <link href="{{ asset('custom3.css') }}" rel="stylesheet">
</head>

<body>
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
                                <form class="rc-orderform__step__body" _lpchecked="1">
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
                                                                <option value="webprogramming">Web programming</option>
                                                                <option value="desktopapplicationsdevelopment">Desktop applications development</option>
                                                                <option value="mobileapplicationsdevelopment">Mobile applications development</option>
                                                                <option value="databasedesignandoptimization">Database design and optimization</option>
                                                                <option value="databasedesignandoptimization">Database design and optimization</option>
                                                                <option value="computernetworkingandcybersecurity">Computer networking and cybersecurity</option>
                                                                <option value="3DCADmodeling">3D CAD modeling</option>
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
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_1" type="button" class="radio-button radio-button--n-1" onclick="clickOndesdline_1_4h()">
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
                                                    <div class="radio-button-wrapper radio-button-wrapper--flexbuttons"><button id="deadline_9" type="button" class="radio-button radio-button--n-9 active" onclick="clickOndesdline_9_3d()">
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
                                                <div class="DeadlineDate"><span>We'll send you the order for review by <span class="DeadlineDate__date">Apr 22, 2021 at 9:23 PM</span></span>.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rc-orderform__row rc-orderform__row--task-size">
                                        <div class="rc-orderform__feature-heading">Task size</div>
                                        <div class="rc-orderform__feature-body">
                                            <div class="rc-validation-representer TaskSizeControl valid" data-invalid="false">
                                                <div class="rc-radios rc-radios--theme-default vertical-on-small">
                                                    <input type="text" name="task_size_input" id="task_size_input" style="display:none" class="tasksize_input">
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
                                </form>
                            </div>
                            <div class="rc-orderform__step">
                                <div class="rc-orderform__step-flag"><span class="rc-orderform__step-flag__count">2.</span>Account</div>
                                <div class="rc-orderform__step__body">
                                    <div class="Auth">
                                        <div class="Auth__tabs"><button id="nc" type="button" class="Auth__tabs__item Auth__tabs__item--active">New customer</button><button id="rc" type="button" class="Auth__tabs__item">Returning customer</button></div>
                                        <div class="Auth__body">
                                            <form class="rc-auth-form">
                                                <div class="rc-ui-blocker rc-ui-blocker--size-m rc-ui-blocker--transparency-soft">
                                                    <div class="rc-orderform__row">
                                                        <div class="rc-orderform__feature-heading">Email</div>
                                                        <div class="rc-orderform__feature-body">
                                                            <div class="rc-validation-representer" data-invalid="false"><input id="nc_mail" name="email" autocomplete="email" type="email" class="UIInput UIInput-default UIInput-default--type-email UIInput-default--size-m UIInput-default--color-default UIInput-default--oneline" tabindex="0" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAAfBJREFUWAntVk1OwkAUZkoDKza4Utm61iP0AqyIDXahN2BjwiHYGU+gizap4QDuegWN7lyCbMSlCQjU7yO0TOlAi6GwgJc0fT/fzPfmzet0crmD7HsFBAvQbrcrw+Gw5fu+AfOYvgylJ4TwCoVCs1ardYTruqfj8fgV5OUMSVVT93VdP9dAzpVvm5wJHZFbg2LQ2pEYOlZ/oiDvwNcsFoseY4PBwMCrhaeCJyKWZU37KOJcYdi27QdhcuuBIb073BvTNL8ln4NeeR6NRi/wxZKQcGurQs5oNhqLshzVTMBewW/LMU3TTNlO0ieTiStjYhUIyi6DAp0xbEdgTt+LE0aCKQw24U4llsCs4ZRJrYopB6RwqnpA1YQ5NGFZ1YQ41Z5S8IQQdP5laEBRJcD4Vj5DEsW2gE6s6g3d/YP/g+BDnT7GNi2qCjTwGd6riBzHaaCEd3Js01vwCPIbmWBRx1nwAN/1ov+/drgFWIlfKpVukyYihtgkXNp4mABK+1GtVr+SBhJDbBIubVw+Cd/TDgKO2DPiN3YUo6y/nDCNEIsqTKH1en2tcwA9FKEItyDi3aIh8Gl1sRrVnSDzNFDJT1bAy5xpOYGn5fP5JuL95ZjMIn1ya7j5dPGfv0A5eAnpZUY3n5jXcoec5J67D9q+VuAPM47D3XaSeL4AAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="rc-orderform__row">
                                                        <div class="rc-orderform__feature-heading">Password</div>
                                                        <div class="rc-orderform__feature-body">
                                                            <div class="rc-validation-representer" data-invalid="false">
                                                                <div class="UIPasswordInput"><input id="nc_pass" name="password" autocomplete="new-password" type="password" class="UIInput UIInput-default UIInput-default--type-password UIInput-default--size-m UIInput-default--color-default UIInput-default--oneline" tabindex="0" value="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABKRJREFUWAnNl0tsVGUUxzvTTlslZUaCloZHY6BRFkp9sDBuqgINpaBp02dIDImwKDG6ICQ8jBYlhg0rxUBYEALTpulMgBlqOqHRDSikJkZdGG0CRqAGUuwDovQ1/s7NPTffnTu3zMxGvuT2vP7n8Z3vu+dOi4r+5xUoJH8sFquamZmpTqfTVeIfCARGQ6HQH83NzaP5xsu5gL6+vuVzc3NdJN1Kkhd8Ev1MMYni4uJjra2tt3wwLvUjCxgYGFg8Pj7+MV5dPOUub3/hX0zHIpFId0NDw6Q/jO4tZOzv76+Znp6+AOb5TBw7/YduWC2Hr4J/IhOD/GswGHy7vb39tyw2S+VbAC1/ZXZ29hKoiOE8RrIvaPE5WvyjoS8CX8sRvYPufYpZYtjGS0pKNoD/wdA5bNYCCLaMYMMEWq5IEn8ZDof3P6ql9pF9jp8cma6bFLGeIv5ShdISZUzKzqPIVnISp3l20caTJsaPtwvc3dPTIx06ziZkkyvY0FnoW5l+ng7guAWnpAI5w4MkP6yy0GQy+dTU1JToGm19sqKi4kBjY+PftmwRYn1ErEOq4+i2tLW1DagsNGgKNv+p6tj595nJxUbyOIF38AwipoSfnJyMqZ9SfD8jxlWV5+fnu5VX6iqgt7d3NcFeUiN0n8FbLEOoGkwdgY90dnbu7OjoeE94jG9wd1aZePRp5AOqw+9VMM+qLNRVABXKkLEWzn8S/FtbdAhnuVQE7LdVafBPq04pMYawO0OJ+6XHZkFcBQA0J1xKgyhlB0EChEWGX8RulsgjvOjEBu+5V+icWOSoFawuVwEordluG28oSCmXSs55SGSCHiXhmDzC25ghMHGbdwhJr6sAdpnyQl0FYIyoEX5CeYOuNHg/NhvGiUUxVgfV2VUAxjtqgPecp9oKoE4sNnbX9HcVgMH8nD5nAoWnKM/5ZmKyySRdq3pCmDncR4DxOwVC64eHh0OGLOcur1Vey46xUZ3IcVl5oa4OlJaWXgQwJwZyhUdGRjqE14VtSnk/mokhxnawiwUvsZmsX5u+rgKamprGMDoA5sKhRCLxpDowSpsJ8vpCj2AUPzg4uIiNfKIyNMkH6Z4hF3k+RgTYz6vVAEiKq2bsniZIC0nTtvMVMwBzoBT9tKkTHp8Ak1V8dTrOE+NgJs7VATESTH5WnVAgfHUqlXK6oHpJEI1G9zEZH/Du16leqHyS0UXBNKmeOMf5NvyislJPB8RAFz4g8IuwofLy8k319fUP1EEouw7L7mC3kUTO1nn3sb02MTFxFpsz87FfJuaH4pu5fF+reDz+DEfxkI44Q0ScSbyOpDGe1RqMBN08o+ha0L0JdeKi/6msrGwj98uZMeon1AGaSj+elr9LwK9IkO33n8cN7Hl2vp1N3PcYbUXOBbDz9bwV1/wCmXoS3+B128OPD/l2LLg8l9APXVlZKZfzfDY7ehlQv0PPQDez6zW5JJdYOXdAwHK2dGIv7GH4YtHJIvEOvvunLCHPPzl3QOLKTkl0hPbKaDUvlTU988xtwfMqQBPQ3m/4mf0yBVlDCSr/CRW0CipAMnGzb9XU1NSRvIX7kSgo++Pg9B8wltxxbHKPZgAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;"><button type="button" class="UIPasswordInput__button" title="Show password"></button></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rc-orderform__row">
                                                        <div class="rc-orderform__feature-heading">Name<span class="Auth__auth-row__label__optional">(optional)</span></div>
                                                        <div class="rc-orderform__feature-body">
                                                            <div class="rc-validation-representer valid" data-invalid="false"><input id="nc_name" name="fullname" autocomplete="name" type="text" class="UIInput UIInput-default UIInput-default--type-text UIInput-default--size-m UIInput-default--color-default UIInput-default--oneline" tabindex="0" value=""></div>
                                                        </div>
                                                    </div>
                                                    <div class="rc-orderform__row">
                                                        <div class="rc-orderform__feature-heading">Phone<span class="Auth__auth-row__label__optional">(optional)</span></div>
                                                        <div class="rc-orderform__feature-body">
                                                            <div class="rc-validation-representer valid" data-invalid="false">
                                                                <div class="rc-tel-input">
                                                                    <div class="Select rc-tel-input__select Select--single has-value">
                                                                        <div class="Select-control"><span class="Select-multi-value-wrapper" id="react-select-4--value">
                                                                                <div class="Select-value" title="Ukraine"><span class="Select-value-label" role="option" aria-selected="true" id="react-select-4--value-item">
                                                                                        <div class="rc-tel-input__flag rc-tel-input__flag--ua"></div>
                                                                                    </span></div>
                                                                                <div role="combobox" aria-expanded="false" aria-owns="" aria-activedescendant="react-select-4--value" class="Select-input" tabindex="0" aria-readonly="false" style="border: 0px; width: 1px; display: inline-block;"></div>
                                                                            </span><span class="Select-arrow-zone"><span class="Select-arrow"></span></span></div>
                                                                    </div><input id="nc_phone" name="tel" maxlength="16" autocomplete="tel" type="tel" class="rc-tel-input__phone-input UIInput UIInput-default UIInput-default--type-tel UIInput-default--size-m UIInput-default--color-default UIInput-default--oneline" placeholder="" tabindex="0" value="+380">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="padding-top: 10px;">
                                                        <div class="rc-orderform__row">
                                                            <div class="rc-orderform__feature-heading"></div>
                                                            <div class="rc-orderform__feature-body"><label class="UICheckbox UICheckbox--theme-default AuthSignUp__checkbox"><input id="nc_agree_marketing" type="checkbox" class="UICheckbox__checkbox UICheckbox__checkbox--theme-default UICheckbox__checkbox--native" name="nc_agree_marketing">
                                                                    <div class="UICheckbox__checkbox UICheckbox__checkbox--theme-default UICheckbox__checkbox--faux" tabindex="0"></div>
                                                                    <div class="UICheckbox__label UICheckbox__label--theme--default" for="nc_agree_marketing">I agree to receive discount coupons, exclusive offers, and the latest news by email, SMS, phone, and other electronic means</div>
                                                                </label></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="rc-orderform__row">
                                                            <div class="rc-orderform__feature-heading"></div>
                                                            <div class="rc-orderform__feature-body">
                                                                <div class="rc-validation-representer" data-invalid="false"><label class="UICheckbox UICheckbox--theme-default AuthSignUp__checkbox"><input id="nc_agree_terms" type="checkbox" class="UICheckbox__checkbox UICheckbox__checkbox--theme-default UICheckbox__checkbox--native" name="nc_agree_terms">
                                                                        <div class="UICheckbox__checkbox UICheckbox__checkbox--theme-default UICheckbox__checkbox--faux" tabindex="0"></div>
                                                                        <div class="UICheckbox__label UICheckbox__label--theme--default" for="nc_agree_terms"><span>I agree to <span style="display: inline-block;">the <a target="_blank" href="/terms-conditions.html">Terms&nbsp;&amp;&nbsp;Conditions</a></span> <span style="display: inline-block;">and <a target="_blank" href="/privacy-policy.html">Privacy&nbsp;Policy</a></span></span></div>
                                                                    </label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="Auth__bottom-buttons Auth__bottom-buttons--sign-up"><button class="UIButton UIButton-default-ghost UIButton-default-ghost--size-m UIButton-default-ghost--color-primary UIButton-default-ghost--accent" type="submit" id="nc_signup">Create account &amp; Sign in </button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="NewOrder__sidebar">
                    <div class="rc-sticky-sidebar" style="opacity: 1;">
                        <div class="rc-ui-blocker rc-ui-blocker--size-m rc-ui-blocker--transparency-soft">
                            <div class="OrderformCheckoutInfo" role="presentation">
                                <div class="OrderformCheckoutInfo__container">
                                    <div class="OrderformCheckoutInfo__order-short-info">
                                        <div class="OrderformCheckoutInfo__order-short-info__item">Programming</div>
                                    </div>
                                    <div class="InvoiceServices">
                                        <div class="InvoiceServices__item">
                                            <div class="OrderDetails__info-row__label">Data analysis and reports</div>
                                            <div class="InvoiceServices__item__value"><span>$55.00</span></div>
                                        </div>
                                        <div class="InvoiceServices__item InvoiceServices__item--total-price">
                                            <div class="InvoiceServices__item__heading">Total price</div>
                                            <div class="InvoiceServices__item__value"><span>$55.00</span></div>
                                        </div>
                                    </div><button class="safecheckoutbutton OrderformCheckoutInfo__checkout-button UIButton UIButton-default-filled UIButton-default-filled--size-m UIButton-default-filled--color-primary" type="button" id="checkout">Safe checkout </button>
                                </div>
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
    }

    function clickOndesdline_3_8h() {
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
    }

    function clickOndesdline_5_24h() {
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
    }

    function clickOndesdline_7_2d() {
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
    }

    function clickOndesdline_9_3d() {
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
    }

    function clickOndesdline_11_5d() {
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
    }

    function clickOndesdline_13_7d() {
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
    }

    function clickOndesdline_15_14d() {
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
    }

    function clickOnSmallTaskSize() {
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.add("active");
        elem2.classList.remove("active");
        elem3.classList.remove("active");
        elem4.classList.remove("active");
        document.getElementById("task_size_input").value = "small";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "short practice problems or theoretical questions";
        document.getElementById("TaskSizeControl__deliverables").style.display = "block";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "none";
    }

    function clickOnMediumTaskSize() {
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.remove("active");
        elem2.classList.add("active");
        elem3.classList.remove("active");
        elem4.classList.remove("active");
        document.getElementById("task_size_input").value = "medium";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "lab report, simple model converted from a drawing";
        document.getElementById("TaskSizeControl__deliverables").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "block";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "none";
    }

    function clickOnLargeTaskSize() {
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.remove("active");
        elem2.classList.remove("active");
        elem3.classList.add("active");
        elem4.classList.remove("active");
        document.getElementById("task_size_input").value = "large";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "moderately complex model created from scratch";
        document.getElementById("TaskSizeControl__deliverables").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "block";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "none";
    }

    function clickOnExtraLargeTaskSize() {
        var elem1 = document.getElementById("SmallTaskSize");
        var elem2 = document.getElementById("MediumTaskSize");
        var elem3 = document.getElementById("LargeTaskSize");
        var elem4 = document.getElementById("ExtraLargeTaskSize");
        elem1.classList.remove("active");
        elem2.classList.remove("active");
        elem3.classList.remove("active");
        elem4.classList.add("active");
        document.getElementById("task_size_input").value = "extralarge";
        document.getElementById("TaskSizeControl__descriptors__body").innerHTML = "complex project created from scratch";
        document.getElementById("TaskSizeControl__deliverables").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables2").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables3").style.display = "none";
        document.getElementById("TaskSizeControl__deliverables4").style.display = "block";
    }
</script>
<script>
    $(document).ready(function() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(".safecheckoutbutton").click(function() {
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
                    alert(data.disciplines +" "+ data.instructions +" "+ data.software +" "+ data.deadline +" "+ data.tasksize);
                }
            });
        });
    });
</script>

</html>