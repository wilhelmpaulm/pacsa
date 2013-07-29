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
                <hr >
                <p class="fs30"><strong class="fs40">P</strong>ursuing <strong class="fs40">A</strong>cademic and <strong class="fs40">C</strong>o-Cultural <strong class="fs40">S</strong>trategies & <strong>A</strong>dvancing</p>
                <p class="fs30"><strong class="fs40">P</strong>artnerships among <strong class="fs40">A</strong>dvisers, <strong class="fs40">C</strong>ommunities & <strong class="fs40">S</strong>tudents</p>
            </div>
            <!--<div class="well"></div>-->

        </div>
    </div>
    <div class="bg-p7">
        <div class="container" id="program">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-calendar icon-5x c-white"></i>
                <h2 class="fs60 c-white" >Program</h2>
                <hr>
                <div class="row-fluid ">
                    <div class="span6">
                        <h2 class="">Day 1</h2>
                        <table  class="table  table-bordered ">
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
                    <div class="span6">
                        <h2>Day 2</h2>
                        <table  class="table  table-bordered  ">
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
                    <div class="span6">
                        <h2>Day 3</h2>

                    </div>
                    <div class="span6">
                        <h2>Day 4</h2>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="bg-p4">
        <div class="container" id="program">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p class="fs20"> Programming languages I love </p>
                <p class="fs40"> Java, PHP, HTML5, JavaScript, Ruby, Python, C/C++ </p>
                <hr>
                <i class="icon-laptop icon-5x"></i>
                <h2 class="fs60"> I LOVE TO CODE </h2>
                <hr>
                <p class="fs20"> Some libraries and frameworks I use </p>
                <p class="fs40"> JQuery, CodeIgniter, Laravel 4, Rails 4 </p>
            </div>
        </div>
    </div>
    <div class="bg-lime ">
        <div class="container" id="awards">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <i class="icon-html5 icon-5x"></i>
                <p class="fs40"> 3rd Startup Weekend Manila First Place</p>
                <p class="fs40"> 3rd Startup Weekend Manila People's Choice</p>
                <hr>
                <h2 class="fs60">Hackathons! Hackathons! Hackathons!</h2>
                <hr>
                <i class="icon-windows icon-5x"></i>
                <p class="fs40"> DLSU Hackercup WP8 First Place</p>
            </div>
        </div>
    </div>

    <div class="bg-p5">
        <div class="container" id="contact">
            <div class="hero-unit text-center" style="background-color: rgba(0,0,0,0);color: white">
                <p class="fs20"> Send me an email </p>
                <p style="font-size: xx-large"> <i class="icon-envelope"></i>  wilhelmpaulm@gmail.com</p>
                <hr>
                <p class="fs20"> Follow me on theses sites </p>
                <p style="font-size: xx-large"> <i class="icon-twitter"></i>  @wilhelmpaulm</p>
                <br>
                <p style="font-size: xx-large"> <i class="icon-facebook"></i>  facebook.com/wilhelmpaulm</p>
                <br>
                <p style="font-size: xx-large"> <i class="icon-instagram"></i>  instagram.com/wilhelmpaulm</p>
                <br>
                <p style="font-size: xx-large"> <i class="icon-linkedin-sign"></i>  linkedin.com/in/wilhelmpaulm</p>
                <hr>
                <p class="fs20"> Look! Free Code! </p>
                <p style="font-size: xx-large"> <i class="icon-github"></i>  github.com/wilhelmpaulm</p>
            </div>
        </div>
    </div>
</div>

@stop