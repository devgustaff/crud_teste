window.onload = function() {
  	document.querySelector(".icon").addEventListener("click", () => {
    	var navm = document.getElementById("nav-menu");

  		if (navm.style.display === "block") {
    		navm.style.display = "none";
  		} else {
   			navm.style.display = "block";
  		}
  	});
};