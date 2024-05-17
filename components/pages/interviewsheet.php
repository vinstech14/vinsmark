<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>InterviewSheet</title>
  <link rel="stylesheet" href="/custom.css" />
  <script src="/customjs/functions.js"></script>
  <?php readfile('../../global/header.html'); ?>
</head>

<body class="generalbg">
 <!-- <div class="scroll-down-btn text-end">
    <div class="col">
      <div class="row up" id="scrollup" style="display:none;">
        <a href="#bottom" onclick=" toggleScroll('up')">
          <i class="fas fa-chevron-up scrollIcon" style="color:#013220;"></i>
        </a>
      </div>
      <div class="row down" id="scrolldown">
        <a href="#bottom" onclick="toggleScroll('down')">
          <i class="fas fa-chevron-down scrollIcon side" style="color:#013220;"></i>
        </a>
      </div>
    </div>
  </div>-->
  <div class="container p-2">
    <form method="post" action="../../functions/save.php">
      <div class="card p-5 shadowbottom" id="section1">
        <h3 class="text-center">
          INTERVIEW SHEET (Para sa Serbisyong-Legal at/o Representasyon)
        </h3>
        <div class="row justify-content-center mt-5">
          <div class="col-md-6">
            <label for="region" class="form-label">Rehiyon:</label>
            <input type="text" class="form-control" id="region" name="region" />

            <label for="do" class="form-label">District Office:</label>
            <input type="text" class="form-control" id="do" name="do" />

            <label for="date" class="form-label">Petsa:</label>
            <input type="date" class="form-control" id="date" name="date" />

            <label for="controlNo" class="form-label">Control No.:</label>
            <input type="text" class="form-control" id="controlNo" name="controlNo" />

            <label for="signature" class="form-label">Mananayam:</label>
            <input type="file" class="form-control" id="signature" name="signature" placeholder="Lagda" />
          </div>
          <div class="col-md-6">
            <label for="referredBy" class="form-label">Ini-refer ni/Inindorso ng:</label>
            <input type="text" class="form-control" id="referredBy" name="referredBy" />

            <label class="form-label" for="merit">Ginawang Aksyon:</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="merit" name="merit" value="1" />
              <label class="form-check-label" for="merit">
                Higit pang pag-aaralan (merit at indency test)
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rep" name="rep" value="1" />
              <label class="form-check-label" for="rep">
                Para sa representasyon at iba pang tulong-legal
              </label>
            </div>
            <label for="assignTo" class="form-label">Ini-atas kay:</label>
            <input type="text" class="form-control" id="assignTo" name="assignTo" />
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="service" onchange="toggleInputState(id,'iservice')" />
              <label class="form-check-label" for="service">
                Ibinigay na serbisyong-legal:
              </label>
              <input type="text" class="form-control" id="iservice" name="iservice" disabled />
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="others"
                onchange="toggleInputState(id,'iothers')" />
              <label class="form-check-label" for="others"> Iba pa: </label>
              <input type="text" class="form-control" id="iothers" name="iothers" disabled />
            </div>
          </div>
          <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section1', 'section2')">Next</button>
        </div>
      </div>
      <div class="card p-5 section shadowbottom" id="section2">
        <h3 class="text-center">
          I. URI NG HINIHINGI NG TULONG (Para sa kawani ng PAO)
        </h3>
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
              <input type="text" class="form-control" id="iothers2" name="iothers2" disabled />
            </div>
          </div>
          <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section2', 'section1')">Previous</button>
          <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section2', 'section3')">Next</button>
        </div>
      </div>
      <div class="card p-5 section shadowbottom" id="section3">
        <h3 class="text-center">
          II. IMPORMASYON UKOL SA APLIKANTE (Para sa aplikante/representative. Gumamit ng panibago kung higit sa isa ang
          aplikante /kliyente)
        </h3>
        <div class="row justify-content-center mt-5">
          <div class="col-md-6 mt-3">
            <label for="name2" class="form-label">Pangalan:</label>
            <input type="text" class="form-control" id="name2" name="name2" />

            <label for="religion" class="form-label">Relihiyon:</label>
            <input type="text" class="form-control" id="religion" name="religion" />

            <label for="citizenship" class="form-label">Pagkamamamayan:</label>
            <input type="text" class="form-control" id="citizenship" name="citizenship" />

            <label for="address" class="form-label">Tirahan:</label>
            <input type="text" class="form-control" id="address" name="address" />

            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" />

            <label for="income" class="form-label">Individual Monthly Income:</label>
            <input type="text" class="form-control" id="income" name="income" />
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
                <input type="text" class="form-control" id="age" name="age" />
              </div>
              <div class="col-md-4">
                <label for="sex" class="form-label">Sex:</label>
                <input type="text" class="form-control" id="sex" name="sex" />
              </div>
              <div class="col-md-4">
                <label for="civilStatus" class="form-label">Civil Status:</label>
                <input type="text" class="form-control" id="civilStatus" name="civilStatus" />
              </div>
            </div>
            <label for="degree" class="form-label">Naabot na ag-aaral:</label>
            <input type="text" class="form-control" id="degree" name="degree" />
            <label for="language" class="form-label">Salita/Dialekto:</label>
            <input type="text" class="form-control" id="language" name="language" />
            <label for="contactNo" class="form-label">Contact No.:</label>
            <input type="text" class="form-control" id="contactNo" name="contactNo" />
            <label for="married" class="form-label">Asawa:</label>
            <input type="text" class="form-control" id="married" name="married" />
            <label for="mAddress" class="form-label">Tirahan ng asawa:</label>
            <input type="text" class="form-control" id="mAddress" name="mAddress" />
            <label for="mContact" class="form-label">Contact no. ng asawa:</label>
            <input type="text" class="form-control" id="mContact" name="mContact" />
            <label for="dPlace" class="form-label">Lugar ng Detention:</label>
            <input type="text" class="form-control" id="dPlace" name="dPlace" />
          </div>
          <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section3','section2')">Previous</button>
          <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section3','section4')">Next</button>
        </div>
      </div>
      <div class="card p-5 section shadowbottom" id="section4">
        <h3 class="text-center">
          II-A. IMPORMASYON UKOL SA REPRESENTATIVE (Pupunan kung wala ang aplikante)
        </h3>
        <div class="row justify-content-center mt-5">
          <div class="col-md-6 mt-3">
            <label for="name3" class="form-label">Pangalan:</label>
            <input type="text" class="form-control" id="name3" name="name3" />

            <label for="address2" class="form-label">Tirahan:</label>
            <input type="text" class="form-control" id="address2" name="address2" />

            <label for="relationship" class="form-label">Relasyon sa aplikante:</label>
            <input type="text" class="form-control" id="relationship" name="relationship" />
          </div>
          <div class="col-md-6 mt-3">
            <div class="row">
              <div class="col-md-4">
                <label for="age2" class="form-label">Edad:</label>
                <input type="text" class="form-control" id="age2" name="age2" />
              </div>
              <div class="col-md-4">
                <label for="sex2" class="form-label">Sex:</label>
                <input type="text" class="form-control" id="sex2" name="sex2" />
              </div>
              <div class="col-md-4">
                <label for="civilStat2" class="form-label">Civil Status:</label>
                <input type="text" class="form-control" id="civilStat2" name="civilStat2" />
              </div>
            </div>
            <label for="contactNo2" class="form-label">Contact No.:</label>
            <input type="text" class="form-control" id="contactNo2" name="contactNo2" />

            <label for="email2" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email2" name="email2" />
          </div>
          <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section4', 'section3')">Previous</button>
          <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section4', 'section5')">Next</button>
        </div>
      </div>
      <div class="card p-5 section shadowbottom" id="section5">
        <h3 class="text-center">
          III. URI NG KASO
        </h3>
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
          <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section5', 'section4')">Previous</button>
          <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section5', 'section6')">Next</button>
        </div>
      </div>
      <div class="card p-5 section shadowbottom" id="section6">
        <h3 class="text-center">
          IV. SEKTOR NA KABILANG ANG APLIKANTE
        </h3>
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
          <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section6', 'section5')">Previous</button>
          <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section6', 'section7')">Next</button>
        </div>
      </div>
      <div class="card p-5 section shadowbottom" id="section7">
        <h3 class="text-center">Purpose</h3>
        <div class="row justify-content-center mt-3">
          <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section7', 'section6')">Previous</button>
          <button type="submit" class="btn btn-success sideback w-25 m-3 shadowbottom" name="submitnotarize" value="notarize">Notarize</button>
          <button type="submit" class="btn btn-success sideback w-25 m-3 shadowbottom" name="submitadmission" value="advice">Advice</button>
        </div>
      </div>
    </form>
  </div>
</body>

</html>