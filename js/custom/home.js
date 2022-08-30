async function fetchHomeDetails() {
    try {
      let response = await fetch("./admin/api/home.php", {
        method: "POST",
        //request body stracture => "tables":{"tableName":[(no of item),(condition)]}
        body: JSON.stringify({"table":{"slider":[3],"clients":[],"gallary_image":[9,"cond"]}
      }),
      });
      let responsedata = await response.json();
      console.log(responsedata);
  
  //     let galleryBodyGallery = document.querySelector(
  //       "#homeGallery #galleryBodyGallery"
  //     );
  
  //     let childGallery = ``;
  
  //     responsedata.forEach((element) => {
  //       if (element.state == "Resturant") {
  //         childGallery += `
  //                 <div class="col-sm-6 col-md-4">
  //                     <a
  //                         href="./admin/content/public/gallery/${element.image}"
  //                         class="html5lightbox"
  //                         data-group="mygroup"
  //                         data-thumbnail="./admin/content/public/gallery/${element.image}"
  //                     >
  //                         <img class="homegallery-img" src="./admin/content/public/gallery/${element.image}" />
  //                     </a>
  //                 </div> 
  //                 `;
  //       }
  //     });
  
  //     galleryBodyGallery.innerHTML = childGallery;


//setting happy customers

let clientCounter = document.querySelector("#clients_counter");
console.log(clientCounter);
clientCounter.innerHTML = "50";




    } catch (error) {
      console.log(error);
    }
  }







  fetchHomeDetails();
  