@extends('layouts.master')

@section('content')

    <!-- Page Container -->
    <div class="page-container ptb-60">
        <div class="container">
            <section class="stores-area stores-area-v2">
                <h3 class="mb-40 t-uppercase">View All Your Saved Links</h3>
                {{--<div class="letters-toolbar p-10 panel mb-40">--}}
                    {{--<span class="all-stores"><a href="stores_02.html#">All stores</a></span>--}}
                    {{--<span><a href="stores_02.html#">A</a></span>--}}
                    {{--<span><a href="stores_02.html#">B</a></span>--}}
                    {{--<span><a href="stores_02.html#">C</a></span>--}}
                    {{--<span><a href="stores_02.html#">D</a></span>--}}
                    {{--<span><a href="stores_02.html#">E</a></span>--}}
                    {{--<span><a href="stores_02.html#">F</a></span>--}}
                    {{--<span><a href="stores_02.html#">G</a></span>--}}
                    {{--<span><a href="stores_02.html#">H</a></span>--}}
                    {{--<span><a href="stores_02.html#">I</a></span>--}}
                    {{--<span><a href="stores_02.html#">J</a></span>--}}
                    {{--<span><a href="stores_02.html#">K</a></span>--}}
                    {{--<span><a href="stores_02.html#">L</a></span>--}}
                    {{--<span><a href="stores_02.html#">M</a></span>--}}
                    {{--<span><a href="stores_02.html#">N</a></span>--}}
                    {{--<span><a href="stores_02.html#">O</a></span>--}}
                    {{--<span><a href="stores_02.html#">P</a></span>--}}
                    {{--<span><a href="stores_02.html#">Q</a></span>--}}
                    {{--<span><a href="stores_02.html#">R</a></span>--}}
                    {{--<span><a href="stores_02.html#">S</a></span>--}}
                    {{--<span><a href="stores_02.html#">T</a></span>--}}
                    {{--<span><a href="stores_02.html#">U</a></span>--}}
                    {{--<span><a href="stores_02.html#">V</a></span>--}}
                    {{--<span><a href="stores_02.html#">W</a></span>--}}
                    {{--<span><a href="stores_02.html#">X</a></span>--}}
                    {{--<span><a href="stores_02.html#">Y</a></span>--}}
                    {{--<span><a href="stores_02.html#">Z</a></span>--}}
                {{--</div>--}}
                {{--<div class="stores-cat panel mb-40">--}}
                    {{--<h3 class="stores-cat-header">A</h3>--}}
                    {{--<ul class="row stores-cat-body">--}}
                        {{--<li class="col-sm-4">--}}
                            {{--<ul>--}}
                                {{--<li><a href="stores_02.html#."> Ababy.com (32)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Abercrombie &amp; Fitch (5)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Accessories4less (26)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> AccessoryGeeks (12)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Adidas (16)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Adobe (52)</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="col-sm-4">--}}
                            {{--<ul>--}}
                                {{--<li><a href="stores_02.html#."> Alpha Industries (22)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Asos (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Amazon (15)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> AOL (16)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Apple (12)</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="col-sm-4">--}}
                            {{--<ul>--}}
                                {{--<li><a href="stores_02.html#."> Advance Auto Parts (52)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Agile Health Insurance (5)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> AJ Madison (46)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Albee Baby (82)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Aldi Food Stores (66)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Alloy Apparel (52)</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="stores-cat panel mb-40">--}}
                    {{--<h3 class="stores-cat-header">B</h3>--}}
                    {{--<ul class="row stores-cat-body">--}}
                        {{--<li class="col-sm-4">--}}
                            {{--<ul>--}}
                                {{--<li><a href="stores_02.html#."> BargainCell (2)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Barnes &amp; Noble (5)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Barneys Warehouse (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Baseball Savings (2)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Baskin-Robbins (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> BaubleBar (2)</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="col-sm-4">--}}
                            {{--<ul>--}}
                                {{--<li><a href="stores_02.html#."> B&amp;H Photo Video (2)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Backcountry (5)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Bag Borrow Or Steal (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Banana Republic Factory (2)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Bank of America® (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Bare Necessities (2)</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="col-sm-4">--}}
                            {{--<ul>--}}
                                {{--<li><a href="stores_02.html#."> BCBGeneration (2)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Beachbody.com (5)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Beauty Bar (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Beauty Encounter (2)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Bed Bath & Beyond (6)</a>--}}
                                {{--</li>--}}
                                {{--<li><a href="stores_02.html#."> Bedhead Pajamas (2)</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                @if(!empty($links))
                    @foreach($links as $link)
                        <div class="stores-cat panel mb-40">
                            <h3 class="stores-cat-header">{{$link->name}}</h3>
                            <ul class="row stores-cat-body">
                                <li class="col-sm-4">
                                    <ul>
                                        <li><a href="{{$link->link}}"> {{$link->name}}</a>
                                            @if(Auth::user()->id == $link->user_id)
                                                <form action="{{url('/link/destroy/' . $link->id)}}" method="POST">
                                                    {{ csrf_field() }}
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <input type="hidden" name="user_id" value="{{$link->user_id}}">
                                                    <input type="hidden" name="link_id" value="{{$link->id}}">
                                                    <input class="btn btn-warning" type="submit" value="Delete">
                                                </form>
                                            @endif
                                        </li>
                                        {{--<li><a href="stores_02.html#."> Calendars.com (5)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Callaway Golf (6)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Calvin Klein (2)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Car Toys (6)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Caribou Coffee (2)</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>
                                <li class="col-sm-4">
                                    <ul>
                                        <li><p>{{$link->link}}</p>
                                        </li>
                                        {{--<li><a href="stores_02.html#."> Carol's Daughter (5)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Cascio Interstate Music (6)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Cat Footwear (2)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> CNDirect (6)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Coastal Contacts (2)</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>
                                <li class="col-sm-4">
                                    <ul>
                                        <li><p>{{$link->description}}</p>
                                        </li>
                                        {{--<li><a href="stores_02.html#."> Compact Appliance (5)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> ConsumerReports.org (6)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Costume SuperCenter (2)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> CoutureCandy.com (6)</a>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="stores_02.html#."> Crazy Shirts (2)</a>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                @endif
            </section>
        </div>
    </div>
    <!-- End Page Container -->

@stop