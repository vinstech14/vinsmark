<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>InterviewSheet</title>
      <?php readfile('../../global/header.html'); ?>
      <link rel="stylesheet" href="/customcss/custom.css" />
      <script src="/customjs/functions.js"></script>
      <script src="/customjs/phil.js"></script> 
      <script src="/customjs/main.js"></script> 
   </head>
   <style>
        .hidden {
            display: none;
        }
        .visible {
            display: block;
        }
        .input-container {
            position: relative;
        }
    </style>
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
         <form method="post" action="">
         <div class="card p-5 shadowbottom" id="section1">
               <h3 class="text-center">Purpose</h3>
               <div class="row justify-content-center mt-3">
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom"><i class="fas fa-person-booth text-white m-2"></i>Advice</button>
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section1', 'section2')"><i class="fas fa-paper-plane text-white m-2"></i>Notarize</button>
               </div>
            </div>
            <div class="card p-5 section shadowbottom" id="section2">
               <h3 class="text-center">
                  INTERVIEW SHEET (Para sa Serbisyong-Legal at/o Representasyon)
               </h3>
               <div class="row justify-content-center mt-5">
                  <div class="col-md-6">
                     <label for="region" class="form-label">Rehiyon:</label>
                     <select id="region" name="region" class="form-control">
                        <option selected disabled value="">Rehiyon</option>
                        <option selected disabled value="">Rehiyon</option>
                        <option value="Region I">Region I</option>
                        <option value="Region II">Region II</option>
                        <option value="Region III">Region III</option>
                        <option value="Region IV-A">Region IV-A</option>
                        <option value="MIMAROPA">MIMAROPA</option>
                        <option value="Region V">Region V</option>
                        <option value="Region VI">Region VI</option>
                        <option value="Region VII">Region VII</option>
                        <option value="Region VIII">Region VIII</option>
                        <option value="Region IX">Region IX</option>
                        <option value="Region X">Region X</option>
                        <option value="Region XI">Region XI</option>
                        <option value="Region XII">Region XII</option>
                        <option value="Region XIII">Region XIII</option>
                        <option value="NCR">NCR</option>
                        <option value="CAR">CAR</option>
                        <option value="BRMM">BRMM</option>
                     </select>
                     <label for="do" class="form-label">District Office:</label>
                     <input type="text" class="form-control" id="do" name="do" />
                     <label for="date" class="form-label">Petsa:</label>
                     <input type="date" class="form-control" id="date" name="date" />
                     <label for="controlNo" class="form-label">Control No.:</label>
                     <input type="text" class="form-control" id="controlNo" name="controlNo" />
                     <label for="signature" class="form-label">Mananayam:</label>
                     <input type="text" class="form-control" id="mananayam" name="mananayam"  />
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
                  <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section2', 'section1')"><i class="fas fa-arrow-left text-white m-2"></i>Previous</button>
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section2', 'section3')"><i class="fas fa-arrow-right text-white m-2"></i>Next</button>
                  
               </div>
            </div>
            <div class="card p-5 section shadowbottom" id="section3">
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
                  <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section3', 'section2')"><i class="fas fa-arrow-left text-white m-2"></i>Previous</button>
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section3', 'section4')"><i class="fas fa-arrow-right text-white m-2"></i>Next</button>
               </div>
            </div>
            <div class="card p-5 section shadowbottom" id="section4">
               <h3 class="text-center">
                  II. IMPORMASYON UKOL SA APLIKANTE (Para sa aplikante/representative. Gumamit ng panibago kung higit sa isa ang
                  aplikante /kliyente)
               </h3>
               <div class="row justify-content-center mt-5">
                  <div class="col-md-6 mt-3">
                     <label for="name2" class="form-label">Pangalan:</label>
                     <input type="text" class="form-control" id="name2" name="name2" />
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
                        <option>Afghan</option>
                        <option>Albanian</option>
                        <option>Algerian</option>
                        <option>Andorran</option>
                        <option>Angolan</option>
                        <option>Argentinian</option>
                        <option>Armenian</option>
                        <option>Australian</option>
                        <option>Austrian</option>
                        <option>Azerbaijani</option>
                        <option>Bahamian</option>
                        <option>Bahraini</option>
                        <option>Bangladeshi</option>
                        <option>Barbadian</option>
                        <option>Belarusian</option>
                        <option>Belgian</option>
                        <option>Belizean</option>
                        <option>Beninese</option>
                        <option>Bhutanese</option>
                        <option>Bolivian</option>
                        <option>Bosnian</option>
                        <option>Brazilian</option>
                        <option>British</option>
                        <option>Bulgarian</option>
                        <option>Burkinabe</option>
                        <option>Burmese</option>
                        <option>Burundian</option>
                        <option>Cambodian</option>
                        <option>Cameroonian</option>
                        <option>Canadian</option>
                        <option>Cape Verdean</option>
                        <option>Central African</option>
                        <option>Chadian</option>
                        <option>Chilean</option>
                        <option>Chinese</option>
                        <option>Colombian</option>
                        <option>Comorian</option>
                        <option>Congolese</option>
                        <option>Costa Rican</option>
                        <option>Ivorian</option>
                        <option>Croatian</option>
                        <option>Cuban</option>
                        <option>Cypriot</option>
                        <option>Czech</option>
                        <option>Danish</option>
                        <option>Djiboutian</option>
                        <option>Dominican</option>
                        <option>Ecuadorian</option>
                        <option>Egyptian</option>
                        <option>Emirati</option>
                        <option>Equatorial Guinean</option>
                        <option>Eritrean</option>
                        <option>Estonian</option>
                        <option>Ethiopian</option>
                        <option>Fijian</option>
                        <option>Finnish</option>
                        <option>French</option>
                        <option>Gabonese</option>
                        <option>Gambian</option>
                        <option>Georgian</option>
                        <option>German</option>
                        <option>Ghanaian</option>
                        <option>Greek</option>
                        <option>Grenadian</option>
                        <option>Guatemalan</option>
                        <option>Guinean</option>
                        <option>Guinea-Bissauan</option>
                        <option>Guyanese</option>
                        <option>Haitian</option>
                        <option>Honduran</option>
                        <option>Hungarian</option>
                        <option>Icelandic</option>
                        <option>Indian</option>
                        <option>Indonesian</option>
                        <option>Iranian</option>
                        <option>Iraqi</option>
                        <option>Irish</option>
                        <option>Israeli</option>
                        <option>Italian</option>
                        <option>Jamaican</option>
                        <option>Japanese</option>
                        <option>Jordanian</option>
                        <option>Kazakh</option>
                        <option>Kenyan</option>
                        <option>Kuwaiti</option>
                        <option>Kyrgyz</option>
                        <option>Laotian</option>
                        <option>Latvian</option>
                        <option>Lebanese</option>
                        <option>Liberian</option>
                        <option>Libyan</option>
                        <option>Liechtensteiner</option>
                        <option>Lithuanian</option>
                        <option>Luxembourgish</option>
                        <option>Malagasy</option>
                        <option>Malawian</option>
                        <option>Malaysian</option>
                        <option>Maldivian</option>
                        <option>Malian</option>
                        <option>Maltese</option>
                        <option>Marshallese</option>
                        <option>Mauritanian</option>
                        <option>Mauritian</option>
                        <option>Mexican</option>
                        <option>Micronesian</option>
                        <option>Moldovan</option>
                        <option>Monegasque</option>
                        <option>Mongolian</option>
                        <option>Montenegrin</option>
                        <option>Moroccan</option>
                        <option>Mozambican</option>
                        <option>Myanmarese</option>
                        <option>Namibian</option>
                        <option>Nauruan</option>
                        <option>Nepalese</option>
                        <option>Dutch</option>
                        <option>New Zealand</option>
                        <option>Nicaraguan</option>
                        <option>Nigerian</option>
                        <option>Nigerien</option>
                        <option>North Korean</option>
                        <option>Macedonian</option>
                        <option>Norwegian</option>
                        <option>Omani</option>
                        <option>Pakistani</option>
                        <option>Palauan</option>
                        <option>Panamanian</option>
                        <option>Papuan New Guinean</option>
                        <option>Paraguayan</option>
                        <option>Peruvian</option>
                        <option>Philippine</option>
                        <option>Polish</option>
                        <option>Portuguese</option>
                        <option>Qatari</option>
                        <option>Romanian</option>
                        <option>Russian</option>
                        <option>Rwandan</option>
                        <option>Saint Lucian</option>
                        <option>Saint Vincent and the Grenadines citizen</option>
                        <option>Samoan</option>
                        <option>Sanmarinoan</option>
                        <option>São Toméan</option>
                        <option>Senegalese</option>
                        <option>Serbian</option>
                        <option>Seychellois</option>
                        <option>Sierra Leonean</option>
                        <option>Singaporean</option>
                        <option>Slovak</option>
                        <option>Slovenian</option>
                        <option>Solomon Islands</option>
                        <option>Somali</option>
                        <option>South African</option>
                        <option>South Korean</option>
                        <option>South Sudanese</option>
                        <option>Spanish</option>
                        <option>Sri Lankan</option>
                        <option>Sudanese</option>
                        <option>Swazi</option>
                        <option>Swedish</option>
                        <option>Swiss</option>
                        <option>Syrian</option>
                        <option>Tajik</option>
                        <option>Tanzanian</option>
                        <option>Thai</option>
                        <option>Timorese</option>
                        <option>Togolese</option>
                        <option>Tongan</option>
                        <option>Trinidadian and Tobagonian</option>
                        <option>Tunisian</option>
                        <option>Turkish</option>
                        <option>Turkmen</option>
                        <option>Tuvaluan</option>
                        <option>Ugandan</option>
                        <option>Ukrainian</option>
                        <option>Uruguayan</option>
                        <option>Uzbek</option>
                        <option>Venezuelan</option>
                        <option>Vietnamese</option>
                        <option>Yemeni</option>
                        <option>Zambian</option>
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
                     <input type="text" class="form-control" id="contactNo" name="contactNo" />
                     <label for="married" class="form-label">Asawa:</label>
                     <input type="text" class="form-control" id="married" name="married" />
                     <label for="mAddress" class="form-label">Tirahan ng asawa:</label>
                     <input type="text" class="form-control" id="mAddress" name="mAddress" />
                     <label for="mContact" class="form-label">Contact no. ng asawa:</label>
                     <input type="text" class="form-control" id="mContact" name="mContact" />
                     <label for="dPlace" class="form-label">Lugar ng Detention:</label>
                     <select id="dPlace" name="dPlace" class="form-control">
                        <option selected disabled value="">Detention</option>
                        <option value="" >Dujali Police Station</option>
                        <option value="" >BJMP Panabo</option>
                        <option value="" >PNP, Sto. Tomas</option>
                        <option value="" >PNP, Carmen</option>
                        <option value="" >BJMP Peñaplata</option>
                        <option value="" >Igacos</option>
                     </select>
                  </div>
                  <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section4','section3')"><i class="fas fa-arrow-left text-white m-2"></i>Previous</button>
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section4','section5')"><i class="fas fa-arrow-right text-white m-2"></i>Next</button>
               </div>
            </div>
            <div class="card p-5 section shadowbottom" id="section5">
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
                           <select id="sex2" name="sex2" class="form-control">
                              <option selected disabled>Sex</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                           </select>
                        </div>
                        <div class="col-md-4">
                           <label for="civilStat2" class="form-label">Civil Status:</label>
                           <select id="civilStat2" name="civilStat2" class="form-control">
                              <option selected disabled>Civil Status</option>
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
                              <option value="Divorced">Divorced</option>
                              <option value="Widowed">Widowed</option>
                           </select>
                        </div>
                     </div>
                     <label for="contactNo2" class="form-label">Contact No.:</label>
                     <input type="text" class="form-control" id="contactNo2" name="contactNo2" />
                     <label for="email2" class="form-label">Email:</label>
                     <input type="text" class="form-control" id="email2" name="email2" />
                  </div>
                  <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section5', 'section4')"><i class="fas fa-arrow-left text-white m-2"></i>Previous</button>
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section5', 'section6')"><i class="fas fa-arrow-right text-white m-2"></i>Next</button>
               </div>
            </div>
            <div class="card p-5 section shadowbottom" id="section6">
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
                  <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section6', 'section5')"><i class="fas fa-arrow-left text-white m-2"></i>Previous</button>
                  <button type="button" class="btn btn-success sideback w-25 m-3 shadowbottom" onclick="sectionSelector('next', 'section6', 'section7')"><i class="fas fa-arrow-right text-white m-2"></i>Next</button>
               </div>
            </div>
            <div class="card p-5 section shadowbottom" id="section7">
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
                  <button type="button" class="btn btn-secondary w-25 m-3 shadowbottom" onclick="sectionSelector('prev', 'section7', 'section6')"><i class="fas fa-arrow-left text-white m-2"></i>Previous</button>
                  <button type="submit" name="submitbtn" class="btn btn-success sideback w-25 m-3 shadowbottom"><i class="fas fa-paper-plane text-white m-2"></i>Submit</button>
               </div>
            </div>
         </form>
      </div>
      <script>
    document.getElementById('religion').addEventListener('change', function() {
        var otherReligionInput = document.getElementById('other-religion');
        var dropdown = this;

        if (dropdown.value === 'others') {
            dropdown.classList.add('hidden');
            otherReligionInput.classList.remove('hidden');
            otherReligionInput.classList.add('visible');
            otherReligionInput.focus(); 
        } else {
            otherReligionInput.classList.remove('visible');
            otherReligionInput.classList.add('hidden');
        }
    });

    document.getElementById('other-religion').addEventListener('input', function() {
        var dropdown = document.getElementById('religion');
        if (this.value === '') {
            dropdown.classList.remove('hidden');
            this.classList.remove('visible');
            this.classList.add('hidden');
        }
    });
</script>
   </body>
</html>