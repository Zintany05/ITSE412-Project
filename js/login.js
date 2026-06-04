//i will be making a function that removes the active class and adds it to to other class that does not have the class

function showForm(event, formId) {
  event.preventDefault(); //prevents page reload

  document
    .querySelectorAll(".form-box") // we chose selector all to choose all classes not just the first
    .forEach((form) => form.classList.remove("active")); //loops through all classes  that have form-box and removes active
  document.getElementById(formId).classList.add("active"); //only form with matching id will get active added
}

const registerLink = document.querySelector("#a-register");
registerLink.addEventListener("click", (event) => {
  showForm(event, "register");
});

const loginLink = document.querySelector("#a-login");
loginLink.addEventListener("click", (event) => {
  showForm(event, "login");
});

//i will be adding this logic to my dashboard to make it faster and better instead of going to multiple links
