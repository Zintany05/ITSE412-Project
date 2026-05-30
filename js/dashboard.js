// we will be initializing the calendar

document.addEventListener("DOMContentLoaded", function () {
  //this will make sure our website loads first

  let calendarEl = document.querySelector("#calendar"); //we are getting our div so calendarEl is our div now

  // we are creating an object (new instance of the calendar)
  let calendar = new FullCalendar.Calendar(calendarEl, {
    // all the instructions
    initialView: "dayGridMonth",
    dateClick: function (info) {
      console.log("Clicked on: " + info.dateStr);
    },
  });

  calendar.render();
});
