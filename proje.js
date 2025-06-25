const navbar = document.querySelector("#bas");

function animation() {
  var controller = new ScrollMagic.Controller();

  const t1 = gsap.timeline({ defaults: { ease: Expo.InOut } });

  t1.fromTo(navbar, 1, { y: "-10rem" }, { y: 0 });

  

  
  /*
  t1.fromTo(
    ".banner-img",
    0.5,
    { x: "5rem", opacity: 0 },
    { x: 0, opacity: 1 }
  );
  t1.fromTo(".banner-img img", 0.5, { scale: 1.5 }, { scale: 1 });

  // about animations
*/
  const t2 = gsap.timeline({ defaults: { ease: Expo.InOut } });

  t2.fromTo(
    "#sand",
    0.5,
    { x: "-5rem", opacity: 0 },
    { x: 0, opacity: 1 }
  );
  t2.fromTo("#sanddd", 0.5, { x: "-5rem", opacity: 0 }, { x: 0, opacity: 1 });


  //falan1
  const t3 = gsap.timeline({ defaults: { ease: Expo.InOut } });

  t2.fromTo(
    "#mass",
    0.5,
    { x: "-5rem", opacity: 0 },
    { x: 0, opacity: 1 }
  );
  t3.fromTo("#masss", 0.5, { x: "-5rem", opacity: 0 }, { x: 0, opacity: 1 });
//falan2
const t4 = gsap.timeline({ defaults: { ease: Expo.InOut } });

  t4.fromTo(
    "#koltt",
    0.5,
    { x: "-5rem", opacity: 0 },
    { x: 0, opacity: 1 }
  );
  t4.fromTo("#kolttt", 0.5, { x: "-5rem", opacity: 0 }, { x: 0, opacity: 1 });
//falan3
const t5 = gsap.timeline({ defaults: { ease: Expo.InOut } });

  t5.fromTo(
    "#raff",
    0.5,
    { x: "-5rem", opacity: 0 },
    { x: 0, opacity: 1 }
  );
  t5.fromTo("#rafff", 0.5, { x: "-5rem", opacity: 0 }, { x: 0, opacity: 1 });




  new ScrollMagic.Scene({
    triggerElement: "#sand",
    triggerHook: 0.8,
    reverse: true,
  })
    .setTween(t2)
    .addTo(controller);


    new ScrollMagic.Scene({
        triggerElement: "#mass",
        triggerHook: 0.8,
        reverse: true,
      })
        .setTween(t3)
        .addTo(controller);


        new ScrollMagic.Scene({
            triggerElement: "#koltt",
            triggerHook: 0.8,
            reverse: true,
          })
            .setTween(t4)
            .addTo(controller);


            new ScrollMagic.Scene({
                triggerElement: "#raff",
                triggerHook: 0.8,
                reverse: true,
              })
                .setTween(t5)
                .addTo(controller);

  // card animations
/*
  const t3 = gsap.timeline({ defaults: { ease: Expo.InOut } });
  t3.fromTo(
    ".card",
    1,
    { y: "-3rem", opacity: 0 },
    { y: 0, opacity: 1, stagger: 0.3 }
  );
  t3.set(".card", { clearProps: "all" });

  new ScrollMagic.Scene({
    triggerElement: "#vid",
    triggerHook: 0.5,
    reverse: false,
  })
    .setTween(t3)
    .addTo(controller); */

  }

animation();

/*yeni EKLİYOM*/


const signUpButton=document.getElementById("changeUp");
const signInButton=document.getElementById("changeIn")

const signInForm=document.getElementById("signIn");
const signUpForm=document.getElementById("signUp");

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})

signInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})





/*yeni EKLEDİM*/