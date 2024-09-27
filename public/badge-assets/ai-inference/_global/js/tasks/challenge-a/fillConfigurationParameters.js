/**
 * Evaluates if the user has correctly entered the required parameters
 * @param  {Event} e blank space where text needs to be entered
 * @param  {string} text required text to match against
 * @param  {HTMLElement} hintElement containing what user is supposed to write
 * @param  {number} numberOfBlankSpaces required blank spaces to be filled
 * @param  {HTMLElement} parentElement  in which hint elements are nested
 * @param  {Funcction} successResponse to be executed when user fills all the blanks correctly
 * @param  {Function} failResponse to be executed when user enter any or all of the blanks wrong
 */
const filledCorrectly = (e, text, hintElement, numberOfBlankSpaces, parentElement, successResponse, failResponse) => {
  if (e.currentTarget.innerText == text) {
    $(hintElement).removeClass("code-sample--yellow");
    $(hintElement).removeClass("code-sample--red");
    $(hintElement).addClass("code-sample--green");
  } else {
    $(hintElement).removeClass("code-sample--green");
    $(hintElement).removeClass("code-sample--yellow");
    $(hintElement).addClass("code-sample--red");
  }

  if ($(`.${parentElement} .code-sample--green`).length == numberOfBlankSpaces) {
    failResponse(true);
    successResponse();
  } else if ($(`.${parentElement} .code-sample--red`).length > 0) {
    failResponse(false);
  } else if ($(`.${parentElement} .code-sample--red`).length == 0) {
    failResponse(true);
  }
};
