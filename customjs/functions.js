function toggleScroll(direction) {
  var up = document.getElementById('scrollup');
  var down = document.getElementById('scrolldown');
  
  if (direction === 'down') {
    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: 'smooth'
    });
    up.style.display = "block";
    down.style.display = "none";
  } else if (direction === 'up') {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
    up.style.display = "none";
    down.style.display = "block";
  }
}
function toggleInputState(checkbox, inputbox){
    var inputbox = document.getElementById(inputbox);
    var checkbox = document.getElementById(checkbox);

    inputbox.disabled = !checkbox.checked;
}

function toggleState(checkbox) {
    var celldate = document.getElementById("cellDate");
    var yes = document.getElementById("yes");
    var no = document.getElementById("no");
    var otherCheckbox = checkbox.id === "yes" ? no : yes;
    otherCheckbox.checked = !checkbox.checked;

    celldate.disbled = !yes.checked;
    celldate.disabled = no.checked;
    
}

function clientInitial(){
    var panel = document.getElementById("panel");
    panel.innerHTML = '<object id="dashid" type="text/html" data="./pages/interviewsheet.php" style="width: 100%; height: 92vh"></object>';
}

function logout() {
    localStorage.removeItem('selectedPage');
    localStorage.removeItem('userType');
    window.location.href = "../../index.php";
}

let originalSpanContents = {};
let originalSpanTexts = {};

function toggleSidebar() {

  const sidebar = document.getElementById("sidebar");
  const spans = sidebar.querySelectorAll("span");
  const icon = document.getElementById("iconToggle");
  // Check if the screen size is small
  const isSmallScreen = window.innerWidth < 768;
 
  if (!isSmallScreen) {
    // Default behavior for larger screens 
    sidebar.classList.toggle("collapsed-sidebar");
  
    if (sidebar.classList.contains("collapsed-sidebar")) {
      // Collapse: Store original content and remove it
      spans.forEach((span, index) => {
        const spanId = index.toString(); // Using index as the span ID
        originalSpanContents[spanId] = span.innerHTML;
        originalSpanTexts[spanId] = span.innerText;
        span.innerHTML = '';
      });
      icon.classList.remove("fa-angle-double-left");
      icon.classList.add("fa-angle-double-right");
    } else {
      // Expand: Restore original content
      spans.forEach((span, index) => {
        const spanId = index.toString(); // Using index as the span ID
        span.innerHTML = originalSpanContents[spanId] || '';
        span.innerText = originalSpanTexts[spanId] || '';
      });
      //pageName.innerText = localStorage.getItem('selectedPage');
      icon.classList.remove("fa-angle-double-right");
      icon.classList.add("fa-angle-double-left");
    }
  }
}

function storeUserType(){
  var userType = document.getElementById("userType").value;
  // Store userType in localStorage
  localStorage.setItem('userType', userType);
}

function changeloginfield(usertype){
  var body = document.getElementById("initialbody");
  body.innerHTML = '<object type="text/html" data="./components/loginstart.php" style="width:100%; height:100vh;"></object>';
  showLoginField(usertype);
}

function showLoginField(userType){
  var usernamediv = document.getElementById("un");
  var passworddiv = document.getElementById("pw");
  var loginButton = document.getElementById("lb");
  var signuplink = document.getElementById("sul");
  var card = document.getElementById("cardl");
  usernamediv.style.display = 'block';
  passworddiv.style.display = 'block';
  loginButton.style.display = 'block';
  card.style.marginTop = '10px';
  signuplink.style.display = (userType.value === 'Client') ? 'block' : 'none';
  card.style.marginTop = (userType.value === 'Client') ? '3px' : '10px';
}

function toggleP(id, idp){
document.getElementById(id).addEventListener('click', function() {
    const passwordField = document.getElementById(idp);
    const currentType = passwordField.getAttribute('type');
    const newType = currentType === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', newType);
    if (newType === "password") {
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
    } else {
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
    }
});
}

function showlabeltop() {
  var email = document.getElementById("email");
  var name = document.getElementById("usname");
  var pass = document.getElementById("password");
  var cpass = document.getElementById("confirm_password");
  var namel = document.getElementById("namel");
  var emaill = document.getElementById("emaill");
  var passl = document.getElementById("passl");
  var cpassl = document.getElementById("cpassl");
  passl.style.display = pass.value.trim() !== '' ? "block" : "none";
  emaill.style.display = email.value.trim() !== '' ? "block" : "none";
  cpassl.style.display = cpass.value.trim() !== '' ? "block" : "none";
  namel.style.display = name.value.trim() !== '' ? "block" : "none";

}
