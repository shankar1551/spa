
async function addMessage() {
          
          let body = document.querySelector("#contact_form_contact");
  
    const name = body.querySelector("#name");
    const phone = body.querySelector("#phone");
    const email = body.querySelector("#email");
    const message = body.querySelector("#message");
    
    if (
      !name.value ||
      !phone.value ||
      !message.value
    )
      return alert("Please fill in all the fields");
  
      console.log(name.value+phone.value+email.value+message.value);
    try {
        let response = await fetch("./admin/api/message.php", {
          method: "POST",
          body: JSON.stringify({
              name:name.value,
              phone:phone.value,
              email:email.value,
              message:message.value,
        }),
        });
        let responsedata = await response.json();
        if(response)
        {
          let model = document.getElementById("model_btn");
          var reset_btn = document.getElementById("reset_btn");
          reset_btn.click();
          model.click();
        }
  
  
      } catch (error) {
        console.log(error);
      }
    }
  
    
  document.querySelector("#contact_form_contact").addEventListener("submit", (e) => {
    e.preventDefault();
    addMessage();
   
  });