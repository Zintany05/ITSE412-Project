//i will be making a function that removes the active class and adds it to to other class that does not have the class

function showForm(formId) {
  document
    .querySelectorAll(".form-box") // we chose selector all to choose all classes not just the first
    .forEach((form) => form.classList.remove("active"));
  document.getElementById(formId).classList.add("active");
}
