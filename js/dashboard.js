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

//heare we will make the logic for moving from different links we will use same logic as the login
//lol doctor if u think why i use we instead of i, even in arabic i use نحنا insteaeed of انا

function showContent(event, linkId) {
  event.preventDefault();

  document
    .querySelectorAll(".content-box")
    .forEach((div) => div.classList.remove("active")); //we chose all the divs that have active and removed it from them
  document.getElementById(linkId).classList.add("active"); //heew when we click on link it takes that id and shows us that div
}

const dashboardLink = document.querySelector("#home-a");
dashboardLink.addEventListener("click", (event) => {
  showContent(event, "dashboard");
});

const contactLink = document.querySelector("#contact-a");
contactLink.addEventListener("click", (event) => {
  showContent(event, "contact");
});

const aboutLink = document.querySelector("#about-a");
aboutLink.addEventListener("click", (event) => {
  showContent(event, "about");
});

const reportLink = document.querySelector("#report-a");
reportLink.addEventListener("click", (event) => {
  showContent(event, "report");
});

const referenceLink = document.querySelector("#reference-a");
referenceLink.addEventListener("click", (event) => {
  showContent(event, "reference");
});
