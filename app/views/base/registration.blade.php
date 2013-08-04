@extends('layouts.registration')
@section('main')
<div class="well">
    <form class="form-horizontal" action="{{URL::to('submitregistration')}}" method="post">
        <div class="row-fluid ">
            <legend>PACSA 2013 Registration</legend>
            <legend>School Information</legend>
            <div class="span5 ">
                <fieldset>

                    <!-- Form Name -->

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="mobile2">Region</label>
                        <div class="controls">
                            <select class="input-block-level" name="mobile2" required="" >
                                <option>Region 1</option>
                                <option>Region 2</option>
                                <option>Region 3</option>
                                <option>Region 4A</option>
                                <option>Region 4B</option>
                                <option>Region 5</option>
                                <option>CAR</option>
                                <option>Region 6</option>
                                <option>Region 7</option>
                                <option>Region 8</option>
                                <option>Region 9</option>
                                <option>Region 10</option>
                                <option>Region 11</option>
                                <option>Region 12</option>
                                <option>ARMM</option>
                                <option>CARAGA</option>
                                <option>NCR</option>
                            </select>
                            <!--<p class="help-block">(not required)</p>-->
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="school">School</label>
                        <div class="controls">
                            <input id="school" required="" name="school" type="text" placeholder="De La Salle University" class="input-xlarge" required="">
                            <p class="help-block">Enter complete school name (No acronyms allowed)</p>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="address">School Address</label>
                        <div class="controls">
                            <input id="address" required="" name="address" type="text" placeholder="1234 Somewhere St. Faraway Place" class="input-xlarge" required="">
                            <p class="help-block">Enter complete school address</p>
                        </div>
                    </div>

                    <!-- Text input-->

            </div>

            <div class="span6 ">
                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="mobile1">Primary contact number</label>
                    <div class="controls">
                        <input id="mobile1" required="" name="mobile1" type="text" placeholder="+639279655572" class="input-xlarge" required="">
                        <p class="help-block">Enter primary contact number</p>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="head_delegate">Contact Person</label>
                    <div class="controls">
                        <input id="head_deligate" required="" name="head_delegate" type="text" placeholder="Dr. Juan De La Cruz" class="input-xlarge" required="">
                        <p class="help-block">Complete Name of delegate</p>
                        <p class="help-block">If attending please reenter details in the attendees section</p>
                    </div>
                </div>

                <!-- Text input-->


                <!-- Text input-->
                <div class="control-group">
                    <label class="control-label" for="email">E-mail</label>
                    <div class="controls">
                        <input id="email" required="" name="email" type="email" placeholder="juan.delacruz@gmail.com" class="input-xlarge" required="">
                        <p class="help-block">This will be used to send confirmation</p>
                    </div>
                </div>

                <!-- Button -->



                </fieldset>
            </div>





            <div class="row-fluid">
                <legend>Attendees</legend>
                <div class="span8 offset2">

                    <table width="100%" id="registration_form" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Type</th>
                                <th >Contact</th>
                                <th  ><button class="btn btn-success" type="button" id="add_row"><i class="icon-plus-sign-alt"></button></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                    <hr>
                    <!--                    <h4>
                                            Total amount w/o discount: 
                                        </h4>
                                        <h4>
                                            Total amount w discount: 
                                        </h4>
                                        <hr>-->
                    <div class="control-group pull-right">
                        <!--<label class="control-label" for="submit">Submit</label>-->
                        <div class="controls">
                            <button id="submit" name="submit" class="btn btn-success btn-large">Send Registration</button>
                        </div>
                    </div>
                </div>
            </div>


    </form>
</div>

<div class="hidden">
    <div id="registration_detail">
        <table><tbody>
                <tr>

                    <td><input class="input-block-level" required="" type="text" name="name[]" value="" /></td>
                    <td >
                        <select name="gender[]" required="" class="input-block-level">
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </td>
                    <td >
                        <select name="type[]" required="" class="input-block-level">
                            <option value="adviser">Adviser</option>
                            <option value="student">Student</option>
                        </select>
                    </td>
                    <td><input class="input-medium" required="" type="text" name="contact[]" value="" /></td>
                    <th><button class="btn btn-danger" type="button" id="remove_row"><i class="icon-minus-sign-alt"></button></th>

                </tr>
            </tbody>
        </table>
    </div>

</div>

<script>
//    sumjq = function(selector) {
//        var sum = 0;
//
//        $(selector).each(function() {
//            sum += Number($(this).val());
//        });
//        return sum;
//    };

    $("body").on("click", "#add_row", function() {
        var newrow = $("#registration_detail tbody").html();
        $("#registration_form > tbody:last").append(newrow);
    });
    $("body").on("click", "#remove_row", function() {
        $(this).parent().parent().remove();
    });

</script>


@stop