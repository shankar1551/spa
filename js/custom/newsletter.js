
async function addLetter() {
          
let body = document.querySelector("#news_letter");

const phone = body.querySelector("#phone2");
// const phone = body.querySelector("#phone");
// const email = body.querySelector("#email");
// const message = body.querySelector("#message");

if (
!phone.value
)
return alert("Please fill in all the fields");

// console.log(name.value+phone.value+email.value+message.value);
try {
  let response = await fetch("./admin/api/newsletter.php", {
    method: "POST",
    body: JSON.stringify({
        phone:phone.value,
  }),
  });
  let responsedata = await response.json();
  if(response)
  {
    let model = document.getElementById("model_btn");
    var reset = document.getElementById("phone2");
    // reset_btn.click();
    reset.value = '';
    model.click();

  }


} catch (error) {
  console.log(error);
}
}


document.querySelector("#news_letter").addEventListener("submit", (e) => {
e.preventDefault();
addLetter();

});