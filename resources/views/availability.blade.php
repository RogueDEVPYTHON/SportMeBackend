@extends('layouts.master')
@section('content')
<div class="content col-md-9 offset-md-3 order-1 order-md-2">
    <div class="row">
        <div class="col-12">
            <div class="block">
                <a href="#" class="add-location">Add location</a>
                <h3 class="text-center">Availibility</h3>
                
                <div class="calendar-month">
                    <div class="item">January 2019</div>
                    <div class="item">February 2019</div>
                </div>
                <div class="calendars">
                    <div class="calendar">
                        <div class="inner">
                            <div class="calendar__header">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                            </div>
                            <div class="calendar__week">
                                <div class="calendar__day day"></div>
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                            </div>
                            <div class="calendar__week">
                               
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                            </div>
                            <div class="calendar__week">
                                <div class="calendar__day day"></div>
                            
                            
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                            </div>  
                            <div class="calendar__week">
                            
                            <div class="calendar__day day"></div>	
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                
                                <div class="calendar__day day"></div>
                                <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                title="Hours of January 24, 2019"
                                data-content='<input type="text" placeholder="9:00am-11:00am">
                                <span>Tuesday</span>
                                <div class="buttons">
                                    <a href="#" class="set">Set hours</a>
                                    <a href="#" class="cancel">Cancel</a>
                                </div>'>
                                    <span class="date">24</span>
                                    <span class="time">9:00am-11:00pm,</span>
                                </div>
                                <div class="calendar__day day"></div>
                                <div class="calendar__day day"></div>
                            </div>
                            <div class="calendar__week">
                            
                            
                            <div class="calendar__day day"></div>
                            
                            <div class="calendar__day day"></div>
                            
                            <div class="calendar__day day"></div>
                            
                            <div class="calendar__day day"></div>
                            <div class="calendar__day day">
                                <span class="date"></span>
                            </div>
                            <div class="calendar__day day">
                                <span class="date"></span>
                            </div>
                            <div class="calendar__day day"></div>
                            </div>
                        </div>
                    </div>
                                <div class="calendar">
                                    <div class="inner">
                                        <div class="calendar__header">
                                        <div>Sun</div>
                                        <div>Mon</div>
                                        <div>Tue</div>
                                        <div>Wed</div>
                                        <div>Thu</div>
                                        <div>Fri</div>
                                        <div>Sat</div>
                                        </div>
                                        <div class="calendar__week">
                                        <div class="calendar__day day"></div>
                                        <div class="calendar__day day"></div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 1, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">1</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 2, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">2</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 3, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">3</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 4, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">4</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day">
                                            <span class="date">5</span>
                                        </div>
                                        </div>
                                        <div class="calendar__week">
                                            <div class="calendar__day day">
                                                <span class="date">6</span>
                                            </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 7, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">7</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 8, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">8</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 9, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">9</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 10, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">10</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 11, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">11</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day">
                                            <span class="date">12</span>
                                        </div>
                                        </div>
                                        <div class="calendar__week">
                                        <div class="calendar__day day">
                                            <span class="date">13</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 14, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">14</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 15, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">15</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 16, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">16</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 17, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">17</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 18, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">18</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day">
                                            <span class="date">19</span>
                                        </div>
                                        </div>
                                        <div class="calendar__week">
                                        <div class="calendar__day day">
                                            <span class="date">20</span>
                                        </div>	
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 21, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">21</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 22, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">22</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 9, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">23</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 24, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">24</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 25, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">25</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day">
                                            <span class="date">26</span>
                                        </div>
                                        </div>
                                        <div class="calendar__week">
                                        <div class="calendar__day day">
                                            <span class="date">27</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 28, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">28</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 29, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>

                                            <span class="date">29</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 30, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">30</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day" data-container="body" data-toggle="popover" data-placement="top" 
                                        title="Hours of January 31, 2019"
                                        data-content='<input type="text" placeholder="11:00am-7:00am">
                                        <span>Tuesday</span>
                                        <div class="buttons">
                                            <a href="#" class="set">Set hours</a>
                                            <a href="#" class="cancel">Cancel</a>
                                        </div>'>
                                            <span class="date">31</span>
                                            <span class="time">9:00am-12:00pm,</span>
                                            <span class="time">1:00pm-4:30pm</span>
                                        </div>
                                        <div class="calendar__day day">
                                            <span class="date"></span>
                                        </div>
                                        <div class="calendar__day day">
                                            <span class="date"></span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('after_script')
    <script>var scr = {"scripts":[
		{"src" : "js/jquery-ui.min.js", "async" : false},
		]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
	</script>
@endsection