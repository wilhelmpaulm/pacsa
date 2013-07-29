@extends('layouts.base')
@section('main')

<div class="">
    <div class="pad40" id="about" >
        <div class="text-center" style="color: white">
<!--                <p style="font-size: 30px"> Welcome to my site! I'll be your guide </p>
            <hr>-->
            <div><img src='{{URL::asset("pacsa/logo.png")}}' alt="Wilhelm in a party!"  title="I have a nightlife too" style="height: 200px" class="img-circle" ></div>
            <h1>Philippine Association of Campus Student Advisers</h1>
            <br>
            <p>" Integral/holistic formation of Campus Advisers and Student Leaders through an enlightened intellectual, moral, social and spiritual citizenry "</p>
        </div>
    </div>
    <div class="bg-p8">
        <div class="container" id="event">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p class="fs20">34th Annual National convention & Seminar Workshop For Campus Advisers</p>
                <!--<hr>-->
                <p class="fs20">18th Annual National convention & Seminar Workshop For Student Leaders</p>
                <hr>
                <i class="icon-ticket icon-5x"></i>
                <h2 class="fs60 c-white" >Theme</h2>
                <hr >
                <p class="fs30"><strong class="fs40">P</strong>ursuing <strong class="fs40">A</strong>cademic and <strong class="fs40">C</strong>o-Cultural <strong class="fs40">S</strong>trategies & <strong>A</strong>dvancing</p>
                <p class="fs30"><strong class="fs40">P</strong>artnerships among <strong class="fs40">A</strong>dvisers, <strong class="fs40">C</strong>ommunities & <strong class="fs40">S</strong>tudents</p>
            </div>
            <!--<div class="well"></div>-->

        </div>
    </div>
    <div class="">
        <div class="container" id="program">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-calendar icon-5x c-white"></i>
                <h2 class="fs60 c-white" >Program</h2>
                <hr>
                <div class="row-fluid ">
                    <div class="span10 offset1" id="day1">
                        <h2 class="">Day 1</h2>
                        <table  class="table  table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Activities</th>
                                    <th>Person Responsible</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>06:00 AM</td>
                                    <td>Start of Registration & Billeting</td>
                                    <td>Registration & Accommodation Committee</td>
                                </tr>
                                <tr>
                                    <td>02:00 PM</td>
                                    <td>Assembly of Delegates</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>02:30 PM</td>
                                    <td>Processional</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Entrance of Colors</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Opening Ceremonies</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Ecumenical Prayer</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Philippine National Anthem</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Welcome Address</td>
                                    <td>Prof. Renato Jose Ma. V. Molano</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Presentation of Regional Core Group Officers and Regional Delegates</td>
                                    <td>Dr. Boyet L Batang</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Dr. Rolando V. Musica</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Prof. Reynaldo D. Postrado</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Prof. Leah P. Pandico</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Introduction of PACSA National Officers and Boards Members</td>
                                    <td>Atty. julius Babista</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Introduction of Keynote Speaker</td>
                                    <td>Prof. Renato Jose Ma. V. Molano</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Keynote Address</td>
                                    <td>Br. Armin Luistro, FSC</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Presentation of Certificate of Recognition to the Keynote Speaker</td>
                                    <td>Prof. Renato Jose Ma. V. Molano/ Atty. julius Babista</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Convention of House Rules</td>
                                    <td>Dr. Jose Ariel Ibarrientos</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Official Declaration of the 34th PACSA and 18th PACS National Convention</td>
                                    <td>Prof. Renato Jose Ma. V. Molano</td>
                                </tr>
                                <tr>
                                    <td>05:00 PM</td>
                                    <td>Eucharistic Celebration</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>06:00 PM</td>
                                    <td>Dinner</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>08:00 PM</td>
                                    <td>PACSA Regional Meetings</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>10:00 PM</td>
                                    <td>Talent Night by Region</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>


                    </div>
                </div>
                <div class="row-fluid ">
                    <div class="span10 offset1" id="day2">
                        <h2>Day 2</h2>
                        <table  class="table  table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Activities</th>
                                    <th>Person Responsible</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>06:00 AM</td>
                                    <td>Breakfast</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>08:00 AM</td>
                                    <td>Plenary Session 1: "The Holistic Framework for Balanced Education"</td>
                                    <td>Ms. Gina Lopez</td>
                                </tr>
                                <tr>
                                    <td>10:00 AM</td>
                                    <td>Break-out Session 1</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>12:00 PM</td>
                                    <td>Lunch</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>01:30 PM</td>
                                    <td>Plenary Session 1: "Identifying Social needs School Organizations Can Address"</td>
                                    <td>Prof. Ma. Lourdes Melegrito</td>
                                </tr>
                                <tr>
                                    <td>03:30 PM</td>
                                    <td>Breask-out Session 2</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>06:00 PM</td>
                                    <td>Dinner</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>08:00 PM</td>
                                    <td>Free Time/ Talents</td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row-fluid ">
                    <div class="span10 offset1" id="day3">
                        <h2>Day 3</h2>
                        <table  class="table  table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Activities</th>
                                    <th>Person Responsible</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>06:00 AM</td>
                                    <td>Breakfast</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>08:00 AM</td>
                                    <td>Plenary Session 3: "Bench Marking on Best Practices From Universities"</td>
                                    <td>Mr. Gio Tingzon</td>
                                </tr>
                                <tr>
                                    <td>10:00 AM</td>
                                    <td>Break-out Session 3</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>12:00 PM</td>
                                    <td>Lunch</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>01:30 PM</td>
                                    <td>Parallel Sessions and Simultaneous Activities</td>
                                    <td>Prof. Ma. Lourdes Melegrito</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Competitions/ Exhibits</td>
                                    <td>Students</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Proposed Constitutional Amendment/ Ratification</td>
                                    <td>Advisers</td>
                                </tr>
                                <tr>
                                    <td>05:30 PM</td>
                                    <td>Board Meeting</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>06:00 PM</td>
                                    <td>Dinner</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>08:00 PM</td>
                                    <td>Cultural Night and Competitions</td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="row-fluid ">    
                    <div class="span10 offset1" id="day4">
                        <h2>Day 4</h2>
                        <table  class="table  table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Activities</th>
                                    <th>Person Responsible</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>06:00 AM</td>
                                    <td>Breakfast</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>08:00 AM</td>
                                    <td>Closing Program</td>
                                    <td>Board Meeting</td>
                                </tr>
                                <tr>
                                    <td>10:00 AM</td>
                                    <td>Board Meeting</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>12:00 PM</td>
                                    <td>Lunch</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>01:30 PM</td>
                                    <td>Environmental Surfing</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="bg-p7">
        <div class="container" id="speakers">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0)">
                <i class="icon-bullhorn icon-5x c-white"></i>
                <h2 class="fs60 c-white" >Speakers</h2>
                <hr >
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px"  class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px"  class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-circle" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Thumbnail label
                                    </h3>
                                    <p>
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                    </p>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container" id="register">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <!--<hr>-->
                <i class="icon-tag icon-5x"></i>
                <h2 class="fs60">Registration</h2>
                <hr>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span4">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-polaroid" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Early Bird Rate
                                    </h3>
                                    <p>
                                        PHP 200 Discount 
                                    </p>
                                    <p>
                                        Before Oct 31, 2013 
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px" class="img-polaroid" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                   <h3>
                                        Adviser Registration
                                    </h3>
                                    <p>
                                        PHP 5000 
                                    </p>
                                    <p>
                                        Inclusive of membership fee
                                    </p>

                                </div>
                            </div>
                        </li>
                        <li class="span4">
                            <div class="thumbnail well">
                                <img alt="300x300" width="200px"  class="img-polaroid" src="{{URL::asset('pacsa/speakers/download.jpg')}}" />
                                <div class="caption">
                                    <h3>
                                        Student Registration
                                    </h3>
                                    <p>
                                        PHP 4900 
                                    </p>
                                    <p>
                                        Inclusive of membership fee
                                    </p>

                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-lime">
        <div class="container" id="contact">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p class="fs30"> Send me an email </p>
                <hr>
                <p style="font-size: xx-large"> <i class="icon-envelope"></i>  renato.molano@delasalle.edu.ph</p>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container" id="faqs">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-question icon-5x"></i>
                <h2 class="fs60">FAQs</h2>
                <hr>
            </div>
            <div class="row-fluid">
                <div class="span6 offset3">
                    <h3 class="text-center">
                        Are you accepting walk-ins?
                    </h3>
                    <p>
                        Yes we are accepting walk-in registration but the price may vary depending on the availability of the venue to accommodate more people
                    </p>
                    <hr>
                    <h3 class="text-center">
                        Do you have separate meals for people with allergies?
                    </h3>
                    <p>
                        If you have allergies and other food concerns you may call the venue or the organizers
                    </p>
                    <hr>
                    <h3 class="text-center">
                        Can I go to the venue at an earlier date?
                    </h3>
                    <p>
                        You may go to the venue at an earlier date although accommodations for said date will not be covered by the fee paid.
                    </p>
                    <hr>
                    <h3 class="text-center">
                        Can I stay longer in the venue?
                    </h3>
                    <p>
                        You may also do so but extended stay will not be covered by the fee as well. 
                    </p>
                    <hr>

                </div>

            </div>
        </div>
    </div>
</div>

@stop