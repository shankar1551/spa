// console.log("hello from the contact js ");


function saveMessaeg()
{
    let username = document.querySelector("#contact_username");
    let email = document.querySelector("#contact_email");
    let phone = document.querySelector("#contact_phone");
    let message = document.querySelector("#contact_message");
    console.log("inside function");

    // send message in api sand reset the mesage
    alert("message hahs been sent");


}


document.querySelector("#contact_form_contact").addEventListener("submit", (e) => {
    e.preventDefault();
    saveMessaeg();
  });


