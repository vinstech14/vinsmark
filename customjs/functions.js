/*function toggleScroll(direction) {
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
}*/
 function toggleInterviewSheet() {
  var children = document.getElementById("interviewSheetChildren");
  var arrowIcon = document.getElementById("arrowIcon");

  if (children.style.display === "none") {
    children.style.display = "block";
    arrowIcon.classList.add("open");
  } else {
    children.style.display = "none";
    arrowIcon.classList.remove("open");
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
  // Store name
  localStorage.setItem('nameTag', 'To be develop')
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
  var usertype = document.getElementById("usertypediv");
  var card = document.getElementById("cardl");
  usernamediv.classList.add('popin');
  passworddiv.classList.add('popin');
  loginButton.classList.add('popin');
  usertype.classList.add('popin');
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
  const fields = [
    { input: 'email', label: 'emaill' },
    { input: 'fname', label: 'fnamel' },
    { input: 'mname', label: 'mnamel' },
    { input: 'lname', label: 'lnamel' },
    { input: 'password', label: 'passl' },
    { input: 'vcode', label: 'vcodel' }
  ];

  fields.forEach(field => {
    const input = document.getElementById(field.input);
    const label = document.getElementById(field.label);
    label.style.display = input.value.trim() !== '' ? 'block' : 'none';
  });
}

function passfieldcombo(){
  var pass = document.getElementById("password");
  var cpass = document.getElementById("confirm_password");
  var cpassl = document.getElementById("cpassl");
  var gcode = document.getElementById("gcodebtn");
  cpassl.style.display = cpass.value.trim() !== '' ? "block" : "none";

  if(pass.value === cpass.value){
    gcode.disabled = false;
  }
  else{
    gcode.disabled = true;
  }
}

function sectionSelector(sectionstate, page, targetpage) {
  var pageCard = document.getElementById(page);
  var targetPageCard = document.getElementById(targetpage);
  
  if(sectionstate === 'next'){
    targetPageCard.classList.remove('showprev');
    targetPageCard.classList.add('shownext');
    pageCard.style.display = 'none';
    targetPageCard.style.display='block';
  }
  else if(sectionstate === 'prev'){
    targetPageCard.classList.remove('shownext');
    targetPageCard.classList.add('showprev');
    pageCard.style.display = 'none';
    targetPageCard.style.display='block';
  }
}

/*
function nextSection(current, nextpage) {
  var currentElement = document.getElementById(current);
  var nextElement = document.getElementById(nextpage);

  nextElement.classList.add('show-next');
  currentElement.classList.add('hide-next');

  setTimeout(function() {
    currentElement.style.display = 'none';
    currentElement.classList.remove('hide-next');
  }, 500); // Match the duration of the CSS transition
}

function prevSection(current, prevpage) {
  var currentElement = document.getElementById(current);
  var prevElement = document.getElementById(prevpage);

  prevElement.classList.add('show-prev');
  currentElement.classList.add('hide-prev');

  setTimeout(function() {
    currentElement.style.display = 'none';
    currentElement.classList.remove('hide-prev');
  }, 500); // Match the duration of the CSS transition
}*/