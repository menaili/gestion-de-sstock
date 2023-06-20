var navbtn = document.getElementById('navbtn')
var navigation = document.getElementById('navigation')
var cancel = document.getElementById('cancel')
var presentation = document.getElementById('workpresentation')
var project = document.getElementById('project')
var title = document.getElementById("title")
var desc = document.getElementById("description")
var pic = document.getElementById("project_service")
var link = document.getElementById("link")

navbtn.addEventListener('click', function(){
    navbtn.classList.toggle('active')
    navigation.classList.toggle('active')
})

navigation.addEventListener('click',function(){
  navigation.classList.remove('active')
  navbtn.classList.remove('active')
}

)


window.addEventListener("load", function () {
    const loader = document.getElementById("loading-container");
    const content = document.getElementById("content-container");
    setTimeout(function () {
      loader.style.display = "none";
      content.style.display = "block";
    }, 3000); // Change 3000 to the duration of your loading animation in milliseconds
  });

  cancel.addEventListener('click',function(){
    presentation.classList.remove('active')
  })
show =  function(e){
    presentation.classList.add("active");
    title.innerHTML = e.getAttribute("title");
    pic.src= e.getAttribute("picture")
    desc.innerHTML = e.getAttribute("desc")
    link.href=e.getAttribute("link")
}
