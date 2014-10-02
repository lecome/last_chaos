function esperar(vari)
{
  document.getElementById(vari).innerHTML="<div class='loading_full'>PLEASE WAIT WHILE THE SYSTEM IS LOADING</div>";
}
function esperar_mini(vari)
{
  document.getElementById(vari).innerHTML="<div class='loading_mini'></div>";
}
function esperar_justimage(vari)
{
  document.getElementById(vari).innerHTML="<div class='loading_justimage'></div>";
}
function limpiar(vari)
{
  document.getElementById(vari).innerHTML="";
}
function restar()
{
	var total = document.getElementById("total").value - document.getElementById("str").value - document.getElementById("dex").value - document.getElementById("int").value;
	document.getElementById('totaltxt').innerHTML=total;
}

/* get time */
function start(myY, myM, myD, myH, myMins, mySecs, myL)
{
  var d=new Date();      //  Returns the Day (number) so we can set it to default
  currentDay = d.getDate();
  var year = myY;                                             //  '*' for next month, '0' for this month or 1 through 12 for the month
  var month = myM;                                             //  '*' for next month, '0' for this month or 1 through 12 for the month
  var day = myD;                                             //  Offset for day of month day or + day
  var hour = myH;                                             //  0 through 23 for the hours of the day
  var minutes = myMins;                     //  Minutes of the hour to End on
  var seconds = mySecs;                     //  Seconds of the minute to End on
  var tz = 2;                            //  Offset for your timezone in hours from UTC
  var lab = myL;                            //  The id of the page entry where the timezone countdown is to show
  displayTZCountDown(setTZCountDown(year,month,day,hour,minutes,seconds,tz),lab);
}
function setTZCountDown(year,month,day,hour,minutes,seconds,tz)
{
  var toDate = new Date();
  toDate.setYear(year);
  if (month == '*') { toDate.setMonth(toDate.getMonth() + 1); }
  else if (month > 0)
  {
    if (month <= toDate.getMonth())toDate.setYear(toDate.getYear() + 1);
    toDate.setMonth(month-1);
  }
  if (day.substr(0,1) == '+')
  {
    var day1 = parseInt(day.substr(1));
    toDate.setDate(toDate.getDate()+day1);
  }
  else
  {
    toDate.setDate(day);
  }
  toDate.setHours(hour);
  toDate.setMinutes(minutes-(tz*60));
  toDate.setSeconds(seconds);
  var fromDate = new Date();
  fromDate.setMinutes(fromDate.getMinutes() + fromDate.getTimezoneOffset());
  var diffDate = new Date(0);
  diffDate.setMilliseconds(toDate - fromDate);
  return Math.floor(diffDate.valueOf()/1000);
}
function displayTZCountDown(countdown,tzcd) {
  if (countdown < 0)
  document.getElementById(tzcd).innerHTML = "<b>NOW</b>";
  else {var secs = countdown % 60;
  if (secs < 10) secs = '0'+secs;
  var countdown1 = (countdown - secs) / 60;
  var mins = countdown1 % 60;
  if (mins < 10) mins = '0'+mins;
  countdown1 = (countdown1 - mins) / 60;
  var hours = countdown1 % 24;
  var days = (countdown1 - hours) / 24;
  if (hours < 10) {
    var hours = "0" + hours;
  }
  if (hours > 1) {
    var desc = " hours";
  }
  if (hours < 1) {
    var desc = " mins";
  }
    document.getElementById(tzcd).innerHTML = hours + ':' + mins + ':' + secs + desc;
    setTimeout('displayTZCountDown('+(countdown-1)+',\''+tzcd+'\');',1000);
  }
}
/* END get time */

/* server time */
function jsClockTimeZone()
{
  var TimezoneOffset = 2
  var currenttime = '<?php print date("H:i:s", time())?>'
  var serverdate=new Date(currenttime)
  var localTime = new Date()
  var ms = localTime.getTime()
             + (localTime.getTimezoneOffset() * 60000)
             + TimezoneOffset * 3600000
  var time =  new Date(ms)
  var hour = time.getHours()
  var minute = time.getMinutes()
  var second = time.getSeconds()
  var temp = "" + ((hour < 10) ? "0" : "") + hour
  temp += ((minute < 10) ? ":0" : ":") + minute
  temp += ((second < 10) ? ":0" : ":") + second
  document.getElementById("timeserver").innerHTML = temp
  setTimeout("jsClockTimeZone()",1000)
}
/* END server time */

/* countdown timer */
function cdtime2(container, stardate, targetdate)
{
  if (!document.getElementById || !document.getElementById(container)) return
  this.container = document.getElementById(container)
  this.currentTime = new Date(stardate)
  this.targetdate = new Date(targetdate)
  this.timesup = false
  this.updateTime()
}
cdtime2.prototype.updateTime = function ()
{
  var thisobj = this
  this.currentTime.setSeconds(this.currentTime.getSeconds() + 1)
  setTimeout(function ()
  {
    thisobj.updateTime()
  }, 1000) //update time every second
}
cdtime2.prototype.displaycountdown = function (baseunit, functionref)
{
  this.baseunit = baseunit
  this.formatresults2 = functionref
  this.showresults()
}
cdtime2.prototype.showresults = function ()
{
  var thisobj = this
  var timediff = (this.targetdate - this.currentTime) / 1000 //difference btw target date and current date, in seconds
  if (timediff < 0)
  { //if time is up
    this.timesup = true
    this.container.innerHTML = this.formatresults2()
    return
  }
  var oneMinute = 60 //minute unit in seconds
  var oneHour = 60 * 60 //hour unit in seconds
  var oneDay = 60 * 60 * 24 //day unit in seconds
  var dayfield = Math.floor(timediff / oneDay)
  var hourfield = Math.floor((timediff - dayfield * oneDay) / oneHour)
  var minutefield = Math.floor((timediff - dayfield * oneDay - hourfield * oneHour) / oneMinute)
  var secondfield = Math.floor((timediff - dayfield * oneDay - hourfield * oneHour - minutefield * oneMinute))
  if (this.baseunit == "hours")
  { //if base unit is hours, set "hourfield" to be topmost level
    hourfield = dayfield * 24 + hourfield
    dayfield = "n/a"
  }
  else if (this.baseunit == "minutes")
  { //if base unit is minutes, set "minutefield" to be topmost level
    minutefield = dayfield * 24 * 60 + hourfield * 60 + minutefield
    dayfield = hourfield = "n/a"
  }
  else if (this.baseunit == "seconds")
  { //if base unit is seconds, set "secondfield" to be topmost level
    var secondfield = timediff
    dayfield = hourfield = minutefield = "n/a"
  }
  this.container.innerHTML = this.formatresults2(dayfield, hourfield, minutefield, secondfield)
  setTimeout(function ()
  {
    thisobj.showresults()
  }, 1000) //update results every second
}
function formatresults2()
{
  if (this.timesup == false)
  {
    //if target date/time not yet met
    if (arguments[1] < 10)
    {
      arguments[1] = "0" + arguments[1];
    }
    if (arguments[1] == 0)
    {
      arguments[1] = "00";
    }
    if (arguments[2] < 10)
    {
      arguments[2] = "0" + arguments[2];
    }
    if (arguments[2] == 0)
    {
      arguments[2] = "00";
    }
    if (arguments[3] < 10)
    {
      arguments[3] = "0" + arguments[3];
    }
    if (arguments[3] == 0)
    {
      arguments[3] = "00";
    }
    var displaystring2 = "<span style='color:#1ab9e7;'>" + arguments[1] + ":" + arguments[2] + ":" + arguments[3] + "</span>"
  }
  else
  {
    //else if target date/time met
    var displaystring2 = "<span style='color:#d6e71a;'>IS NOW!</span>"
  }
  return displaystring2
}
function clickIE()
{
  if (document.all)
  {
    return false;
  }
}
function clickNS(e)
{
  if (document.layers || (document.getElementById && !document.all))
  {
    if (e.which == 2 || e.which == 3)
    {
      return false;
    }
  }
}
if (document.layers)
{
  document.captureEvents(Event.MOUSEDOWN);
  document.onmousedown = clickNS;
}
else
{
  document.onmouseup = clickNS;
  document.oncontextmenu = clickIE;
}
document.oncontextmenu = new Function("return false")

var myshow;
Event.observe(window, "load", function() {
  $('myshow1') && $('myshow1').protoShow({
    interval: 3000,
    transitionType: "fade",
    captions: false
  });
});