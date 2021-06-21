<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #ff3000;
  color: white;
  cursor: pointer;
  padding: 10px;
  height: 45px;
  width: 30px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>


<a onclick="topFunction()" id="myBtn" title="Go to top">
	<i class="fas fa-angle-up"></i>
</a>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>