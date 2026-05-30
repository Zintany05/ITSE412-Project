// we will be initializing the calendar
//we are using an open source calendar cuz its too complicated to make a full working one in the short period of time
// and also it would be kinda dumb to not use something that is already made

document.addEventListener("DOMContentLoaded", function () {
  //this will make sure our website loads first

  const calendarEl = document.querySelector("#calendar"); //we are getting our div so calendarEl is our div now

  // we are creating an object (new instance of the calendar)
  const calendar = new FullCalendar.Calendar(calendarEl, {
    // all the instructions
    initialView: "dayGridMonth",
    dateClick: function (info) {
      console.log("Clicked on: " + info.dateStr);
    },
  });

  calendar.render();
});
