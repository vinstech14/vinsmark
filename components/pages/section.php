<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-section Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
      .section { display: none; }
      .section.active { display: block; }
    </style>
  </head>
  <body>
    
      <div class="container">
        <form id="multiSectionForm" onsubmit="return false;">
        <div id="section1" class="section active">
          <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center">
              <button type="button" class="btn btn-primary" onclick="showSection('section2')">Advice</button>
              <button type="button" class="btn btn-primary" onclick="showSection('section2')">Notarize</button>
            </div>
          </div>
        </div>
        <div id="section2" class="section">
          <div class="row justify-content-center mt-5">
            <div class="col-md-6">
              <label for="region" class="form-label">Rehiyon:</label>
              <select id="region" name="region" required class="form-control">
                <option selected disabled value="">Rehiyon</option>
                <option value="Region I">Region I</option>
                <!-- Other options -->
              </select>
              <!-- Other input fields -->
              <label for="do" class="form-label">District Office:</label>
              <input type="text" class="form-control" id="do" name="do" required />
              <label for="date" class="form-label">Petsa:</label>
              <input type="date" class="form-control" id="date" name="date" required />
              <label for="controlNo" class="form-label">Control No.:</label>
              <input type="text" class="form-control" id="controlNo" name="controlNo" required/>
              <label for="mananayam" class="form-label">Mananayam:</label>
              <input type="text" class="form-control" id="mananayam" name="mananayam" required  />
            </div>
            <div class="col-md-6">
              <!-- Other input fields -->
              <label for="referredBy" class="form-label">Ini-refer ni/Inindorso ng:</label>
              <input type="text" class="form-control" id="referredBy" name="referredBy" required />
              <label class="form-label">Ginawang Aksyon:</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="merit" name="actions" value="merit" />
                <label class="form-check-label" for="merit">Higit pang pag-aaralan (merit at indency test)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rep" name="actions" value="rep" />
                <label class="form-check-label" for="rep">Para sa representasyon at iba pang tulong-legal</label>
              </div>
              <label for="assignTo" class="form-label">Ini-atas kay:</label>
              <input type="text" class="form-control" id="assignTo" name="assignTo" required />
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="service" onchange="toggleInputState('service', 'iservice')" />
                <label class="form-check-label" for="service">Ibinigay na serbisyong-legal:</label>
                <input type="text" class="form-control" id="iservice" name="iservice" disabled />
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="others" onchange="toggleInputState('others', 'iothers')" />
                <label class="form-check-label" for="others"> Iba pa: </label>
                <input type="text" class="form-control" id="iothers" name="iothers" disabled />
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section1')">Previous</button>
            <button type="button" class="btn btn-success w-25 m-3" onclick="validateSection('section2', 'section3')">Next</button>
          </div>
        </div>
        <!-- Additional sections go here with similar structure -->
        <div id="section3" class="section">
          <div class="row justify-content-center mt-5">
            <div class="row justify-content-center mt-5">
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="legalDoc" name="legalDoc" />
                  <label class="form-check-label" for="legalDoc">Legal Documentation</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="ila" name="legalDoc" />
                  <label class="form-check-label" for="ila">Inquest Legal Assistance</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="ao" name="ao" />
                  <label class="form-check-label" for="ao">Administration of Oath</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="medcon" name="medcon" />
                  <label class="form-check-label" for="medcon">Mediation/Concilliation</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="courtRep" name="courtRep" />
                  <label class="form-check-label" for="courtRep">Representasyon sa Korte o ibang Tanggapin</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="others2" onchange="toggleInputState(id,'iothers2')" />
                  <label class="form-check-label" for="others2">Iba pa:</label>
                  <input type="text" class="form-control" id="iothers2" name="iothers2" disabled  />
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section2')">Previous</button>
            <button type="button" class="btn btn-success w-25 m-3" onclick="validateSection('section3', 'section4')">Next</button>
          </div>
        </div>
        <!-- Repeat for sections 4 to 7 -->
        <div id="section4" class="section">
          <div class="row justify-content-center mt-5">
            <!-- Section 3 content here -->
            <div class="row justify-content-center mt-5">
              <div class="col-md-6 mt-3">
                <label for="name2" class="form-label">Pangalan:</label>
                <input type="text" class="form-control bg-transparent" id="name2" 
                  name="name2" oninput='showlabeltop(id, "name")' required>
                <label for="religion" class="form-label">Relihiyon:</label>
                <select id="religion" name="religion" class="form-control">
                  <option selected disabled value="">Religion</option>
                  <option value="rc" >Roman Catholic</option>
                  <option value="islam" >Islam</option>
                  <option value="iglesia" >Iglesia ni Cristo</option>
                  <option value="sda" >Seventh Day Adventist</option>
                  <option value="bible_bap" >Bible Baptist Chruch</option>
                  <option value="jehovah" >Jehovah's Witness</option>
                  <option value="others" >Others</option>
                </select>
                <input type="text" id="other-religion" name="other-religion" class="form-control hidden" placeholder="Please specify">
                <label for="citizenship" class="form-label">Pagkamamamayan:</label>
                <select id="citizenship" name="citizenship" class="form-control">
                  <option value="" selected disabled>Citizenship</option>
                  <option>Zimbabwean</option>
                </select>
                <div class="row">
                  <div class="col-md-3">
                    <label for="regions" class="form-label">Region:</label>
                    <select id="regions" name="regions" class="form-control">
                      <option value="" selected disabled>Region</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="provinces" class="form-label" >Province:</label>
                    <select id="provinces" name="provinces" class="form-control">
                      <option value="" selected disabled>Province</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="cities" class="form-label" >City:</label>
                    <select id="cities" name="cities" class="form-control">
                      <option value="" selected disabled>City</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="barangays" class="form-label" >Barangay:</label>
                    <select id="barangays" name="barangays" class="form-control">
                      <option value="" selected disabled>Barangay</option>
                    </select>
                  </div>
                </div>
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control bg-transparent" id="email" 
                  name="email" oninput='showlabeltop(id, "mail")' required>
                <label for="income" class="form-label">Individual Monthly Income:</label>
                <input type="text" class="form-control bg-transparent" id="income" 
                  name="income" oninput='showlabeltop(id, "mincome")' required>
                <div class="row">
                  <label class="form-label" for="yes">Nakakulong:</label>
                  <div class="col" id="choice">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="yes" id="yes" name="yes"
                        onchange="toggleState(this)" />
                      <label class="form-check-label" for="yes">Oo</label>
                    </div>
                  </div>
                  <div class="col" style="margin-bottom:13px;">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="no" id="no" name="no"
                        onchange="toggleState(this)" />
                      <label class="form-check-label" for="no">Hindi</label>
                    </div>
                  </div>
                  <label for="cellDate" class="form-label">Petsa ng pagkakakulong:</label>
                  <input type="date" class="form-control" id="cellDate" name="cellDate" disabled />
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <div class="row">
                  <div class="col-md-4">
                    <label for="age" class="form-label">Edad:</label>
                    <input type="text" class="form-control bg-transparent" id="age" 
                      name="age" oninput='showlabeltop(id, "edad")' required>
                  </div>
                  <div class="col-md-4">
                    <label for="sex" class="form-label">Sex:</label>
                    <select id="sex" name="sex" class="form-control">
                      <option selected disabled value="">Sex</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="civilStatus" class="form-label">Civil Status:</label>
                    <select id="civilStatus" name="civilStatus" class="form-control">
                      <option selected disabled value="">Civil Status</option>
                      <option value="Single">Single</option>
                      <option value="Married">Married</option>
                      <option value="Divorced">Divorced</option>
                      <option value="Widowed">Widowed</option>
                    </select>
                  </div>
                </div>
                <label for="degree" class="form-label">Naabot na ag-aaral:</label>
                <select id="degree" name="degree" class="form-control">
                  <option selected disabled value="">Naabot na ag-aaral</option>
                  <option value="elementary" >Elementary</option>
                  <option value="high_school" >High School</option>
                  <option value="senior_high_school" >Senior High School</option>
                  <option value="collage_level" >Collage Level</option>
                  <option value="collage" >Collage Graduate</option>
                </select>
                <label for="language" class="form-label">Salita/Dialekto:</label>
                <select id="language" name="language" class="form-control">
                  <option selected disabled value="">Dialekto</option>
                  <option value="">Bisaya</option>
                  <option value="">Tagalog</option>
                  <option value="">English</option>
                </select>
                <label for="contactNo" class="form-label">Contact No.:</label>
                <input type="text" class="form-control bg-transparent" id="contact number" 
                  name="contact number" oninput='showlabeltop(id, "number")' required>
                <label for="married" class="form-label">Asawa:</label>
                <input type="text" class="form-control bg-transparent" id="married" 
                  name="married" oninput='showlabeltop(id, "asawa")' required>
                <label for="mAddress" class="form-label">Tirahan ng asawa:</label>
                <input type="text" class="form-control bg-transparent" id="maddress" 
                  name="maddress" oninput='showlabeltop(id, "address")' required>
                <label for="mContact" class="form-label">Contact no. ng asawa:</label>
                <input type="text" class="form-control bg-transparent" id="mcontact" 
                  name="mcontact" oninput='showlabeltop(id, "contact")' required>
                <label for="dPlace" class="form-label">Lugar ng Detention:</label>
                <select id="dPlace" name="dPlace"required class="form-control">
                  <option selected disabled value="">Detention</option>
                  <option value="Dujali Police Station">Dujali Police Station</option>
                  <option value="BJMP Panabo">BJMP Panabo</option>
                  <option value="PNP, Sto. Tomas">PNP, Sto. Tomas</option>
                  <option value="PNP, Carmen">PNP, Carmen</option>
                  <option value="BJMP Peñaplata">BJMP Peñaplata</option>
                  <option value="Igacos">Igacos</option>
                </select>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section3')">Previous</button>
            <button type="button" class="btn btn-success w-25 m-3" onclick="validateSection('section4', 'section5')">Next</button>
          </div>
        </div>
        <div id="section5" class="section">
          <div class="row justify-content-center mt-5">
            <div class="col-md-6 mt-3">
              <label for="name3" class="form-label">Pangalan:</label>
              <input type="text" class="form-control" id="name3" name="name3" required />
              <label for="address2" class="form-label">Tirahan:</label>
              <input type="text" class="form-control" id="address2" name="address2" required />
              <label for="relationship" class="form-label">Relasyon sa aplikante:</label>
              <input type="text" class="form-control" id="relationship" name="relationship" required />
            </div>
            <div class="col-md-6 mt-3">
              <div class="row">
                <div class="col-md-4">
                  <label for="age2" class="form-label">Edad:</label>
                  <input type="text" class="form-control" id="age2" name="age2" required />
                </div>
                <div class="col-md-4">
                  <label for="sex2" class="form-label">Sex:</label>
                  <select id="sex2" name="sex2" class="form-control" required>
                    <option selected disabled value="">Sex</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="civilStat2" class="form-label">Civil Status:</label>
                  <select id="civilStat2" name="civilStat2" class="form-control" required>
                    <option selected disabled value="">Civil Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Widowed">Widowed</option>
                  </select>
                </div>
              </div>
              <label for="contactNo2" class="form-label">Contact No.:</label>
              <input type="text" class="form-control" id="contactNo2" name="contactNo2" required />
              <label for="email2" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email2" name="email2" required />
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section4')">Previous</button>
            <button type="button" class="btn btn-success w-25 m-3" onclick="validateSection('section5', 'section6')">Next</button>
          </div>
        </div>
        <div id="section6" class="section">
          <div class="row justify-content-center mt-5">
            <!-- Section 3 content here -->
            <div class="row justify-content-center mt-5">
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="criminal" name="criminal" />
                  <label class="form-check-label" for="criminal">Criminal</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="administrative" name="administrative" />
                  <label class="form-check-label" for="administrative">Administrative</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="civil" name="civil" />
                  <label class="form-check-label" for="civil">Civil</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="appealed" name="appealed" />
                  <label class="form-check-label" for="appealed">Appealed</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="labor" name="labor" />
                  <label class="form-check-label" for="labor">Labor</label>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section5')">Previous</button>
            <button type="button" class="btn btn-success w-25 m-3" onclick="validateSection('section6', 'section7')">Next</button>
          </div>
        </div>
        <div id="section7" class="section">
          <div class="row justify-content-center mt-5">
            <!-- Section 3 content here -->
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="child" name="child" />
                  <label class="form-check-label" for="child">Child in Conflict with the Law</label>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="woman" name="woman" />
                      <label class="form-check-label" for="woman">Woman</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="lawEn" name="lawEn" />
                      <label class="form-check-label" for="lawEn">Law Enforcer</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="vawc" name="vawc" />
                      <label class="form-check-label" for="vawc">Biktima ng VAWC</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="1" id="drugDuty" name="drugDuty" />
                      <label class="form-check-label" for="drugDuty">Drug-related Duty</label>
                    </div>
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="ofwLb" name="ofwLb" />
                  <label class="form-check-label" for="ofwLb">OFW - Land-based</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="ofwSb" name="ofwSb" />
                  <label class="form-check-label" for="ofwSb">OFW - Sea-based</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="fRFVE" name="fRFVE" />
                  <label class="form-check-label" for="fRFVE">Former Rebel (FR) and Former Violent Extremist (FVE)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="seniorC" name="seniorC" />
                  <label class="form-check-label" for="seniorC">Senior Citizen</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="refugee" name="refugee" />
                  <label class="form-check-label" for="refugee">Refugee/Evacuee</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="tenantAC" name="tenantAC" />
                  <label class="form-check-label" for="tenantAC">Tenant ng Agrarian Case</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="11479" name="11479" />
                  <label class="form-check-label" for="11479">Arrested for Terrorism (R.A. No. 11479)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="9745" name="9745" />
                  <label class="form-check-label" for="9745">Victim of Torture (R.A. No. 9745)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="9208" name="9208" />
                  <label class="form-check-label" for="9208">Victim of Trafficking (R.A. No. 9208)</label>
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="fn" onchange="toggleInputState(id,'ifn')" />
                  <label class="form-check-label" for="fn">Foreign National:</label>
                  <input type="text" class="form-control" id="ifn" name="ifn" disabled />
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="up" onchange="toggleInputState(id,'iup')" />
                  <label class="form-check-label" for="up">Urban Poor:</label>
                  <input type="text" class="form-control" id="iup" name="iup" disabled />
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="rp" onchange="toggleInputState(id,'irp')" />
                  <label class="form-check-label" for="rp">Rural Poor:</label>
                  <input type="text" class="form-control" id="irp" name="irp" disabled />
                </div>
              </div>
              <div class="col-md-6 mt-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="ip" onchange="toggleInputState(id,'iip')" />
                  <label class="form-check-label" for="ip">Indigenous People:</label>
                  <input type="text" class="form-control" id="iip" name="iip" disabled />
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="pwd" onchange="toggleInputState(id,'ipwd')" />
                  <label class="form-check-label" for="pwd">PWD; Type of Disability:</label>
                  <input type="text" class="form-control" id="ipwd" name="ipwd" disabled />
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="pvr" onchange="toggleInputState(id,'ipvr')" />
                  <label class="form-check-label" for="pvr">Petitioner for Voluntary Rehabilitation (Drugs)</label>
                  <input type="text" class="form-control" id="ipvr" name="ipvr" disabled />
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section6')">Previous</button>
            <button type="button" class="btn btn-success w-25 m-3" onclick="validateSection('section7', 'section8')">Next</button>
        </div>
        </div>
    </form>
    <form action="../pagespart/aol.php" method="post" id="generate-aol-form">
    <div class="card p-5 shadowbottom section" id="section8">
        <h3 class="text-center">Affidavit of Loss</h3>
        <div class="row justify-content-center mt-3">
             <button type="button" class="btn btn-secondary w-25 m-3" onclick="showSection('section7')">Previous</button>
            <button type="submit" class="btn btn-success sideback w-25 m-3 shadowbottom">
                <i class="fas fa-door-open text-white m-2"></i>No
            </button>
            <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" id="applybtn">
                <i class="fas fa-paperclip text-white m-2"></i>Apply
            </button>
        </div>
    </div>
</form>
    </div>
   <script>
    function showSection(sectionId) {
        document.querySelectorAll('.section').forEach(section => {
            section.classList.remove('active');
        });
        document.getElementById(sectionId).classList.add('active');
    }

    function toggleInputState(checkboxId, inputId) {
        document.getElementById(inputId).disabled = !document.getElementById(checkboxId).checked;
    }

    function validateSection(currentSectionId, nextSectionId) {
        const currentSection = document.getElementById(currentSectionId);
        const inputs = currentSection.querySelectorAll('input[required], select[required]');
        const checkboxes = currentSection.querySelectorAll('input[type="checkbox"]');

        let allInputsValid = true;
        inputs.forEach(input => {
            if (!input.value) {
                allInputsValid = false;
            }
        });

        let isChecked = false;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                isChecked = true;
            }
        });

        const service = document.getElementById('service');
        const iservice = document.getElementById('iservice');
        let othersInputValid = true;
        if (service && service.checked && iservice && !iservice.disabled && !iservice.value) {
            othersInputValid = false;
        }

        const others = document.getElementById('others');
        const iothers = document.getElementById('iothers');
        let othersInputValid2 = true;
        if (others && others.checked && iothers && !iothers.disabled && !iothers.value) {
            othersInputValid2 = false;
        }

        const others2 = document.getElementById('others2');
        const iothers2 = document.getElementById('iothers2');
        let othersInputValid3 = true;
        if (others2 && others2.checked && iothers2 && !iothers2.disabled && !iothers2.value) {
            othersInputValid3 = false;
        }

        const fn = document.getElementById('fn');
        const ifn = document.getElementById('ifn');
        let othersInputValid4 = true;
        if (fn && fn.checked && ifn && !ifn.disabled && !ifn.value) {
            othersInputValid4 = false;
        }

        const up = document.getElementById('up');
        const iup = document.getElementById('iup');
        let othersInputValid5 = true;
        if (up && up.checked && iup && !iup.disabled && !iup.value) {
            othersInputValid5 = false;
        }

        const rp = document.getElementById('rp');
        const irp = document.getElementById('irp');
        let othersInputValid6 = true;
        if (rp && rp.checked && irp && !irp.disabled && !irp.value) {
            othersInputValid6 = false;
        }
        const ip = document.getElementById('ip');
        const iip = document.getElementById('iip');
        let othersInputValid7 = true;
        if (ip && ip.checked && iip && !iip.disabled && !iip.value) {
            othersInputValid7 = false;
        }
        const pwd = document.getElementById('pwd');
        const ipwd = document.getElementById('ipwd');
        let othersInputValid8 = true;
        if (pwd && pwd.checked && ipwd && !ipwd.disabled && !ipwd.value) {
            othersInputValid8 = false;
        }
        const pvr = document.getElementById('pvr');
        const ipvr = document.getElementById('ipvr');
        let othersInputValid9 = true;
        if (pvr && pvr.checked && ipvr && !ipvr.disabled && !ipvr.value) {
            othersInputValid9 = false;
        }

        if (allInputsValid && (checkboxes.length === 0 || isChecked) && othersInputValid && othersInputValid2 && othersInputValid3 && othersInputValid4 && othersInputValid5 && othersInputValid6 && othersInputValid7 
            && othersInputValid8 && othersInputValid9) {
            showSection(nextSectionId);
        } else {
            if (!allInputsValid) {
                alert('Please fill out all required fields.');
            }
            if (checkboxes.length > 0 && !isChecked) {
                alert('Please check at least one checkbox.');
            }
            if (!othersInputValid || !othersInputValid2 || !othersInputValid3 || !othersInputValid4
                || !othersInputValid5 || !othersInputValid6 || !othersInputValid7 || !othersInputValid8
                || !othersInputValid9


                ) {
                alert('Please fill out the "Iba pa" input field if the corresponding checkbox is checked.');
            }
        }
    }
</script>

  </body>
</html>
