<x-layout1>

@slot('body')

    <div id="ctl00_ContentPlaceHolder1_UpdatePanel2">

        <section class="inner-page">
            <div class="inner-hadding">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index.aspx">Home</a> <a href="event-list.aspx?Events=Events">Happenings</a>
                        Events
                    </div>
                    <div class="top-menu-sec">
                        <h4>
                            Happenings</h4>
                        <ul>

                            <ul>
                                <li id="ctl00_ContentPlaceHolder1_eventMenu1_lievent" class="active"><a href="event-list.aspx?Events=Events">Events</a></li>
                                <!--<li id="ctl00_ContentPlaceHolder1_eventMenu1_lipress"><a href="/press-release.aspx?Press=Press">Press Releases</a></li>
<li id="ctl00_ContentPlaceHolder1_eventMenu1_lijour"><a href="/journalists.aspx?Journalists=Journalists">For Journalists</a></li>
-->
                                <li id="ctl00_ContentPlaceHolder1_eventMenu1_limedia"><a href="media-coverage.aspx?Media=Media">Media Coverage</a></li>

                                <!-- <li id="ctl00_ContentPlaceHolder1_eventMenu1_litvc"><a href="tvc.aspx?tid=&Tvc=Tvc">TVCs</a></li>-->

                                <li id="ctl00_ContentPlaceHolder1_eventMenu1_liphoto"><a href="photo-gallery.aspx?Gallery=Gallery">Gallery</a></li>
                                <li id="ctl00_ContentPlaceHolder1_eventMenu1_listudent"><a href="studentwork.aspx?student=student">Student Work</a></li>
                            </ul>


                        </ul>
                    </div>
                    <h1>
                        Events</h1>

                    <div class="faculty-select-main" style="display: block;">
                        <span class="test">
                            <select name="ctl00$ContentPlaceHolder1$ddlCampuse" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlCampuse\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ddlCampuse" class="category nova" sb="17662761" style="display: none;">
                                <option selected="selected" value="0">All Campuses</option>
                                <option value="39">Ranchi</option>
                                <option value="36">Raipur</option>
                                <option value="43">Patna</option>
                                <option value="1">Noida</option>
                                <option value="35">Mumbai</option>
                                <option value="47">Mohali</option>
                                <option value="4">Lucknow</option>
                                <option value="33">London</option>
                                <option value="37">Kolkata</option>
                                <option value="5">Jaipur</option>
                                <option value="24">Gwalior</option>
                                <option value="6">Gurugram (Manesar)</option>
                                <option value="34">Greater Noida</option>
                                <option value="27">Dubai</option>

                            </select>
                            <div id="sbHolder_17662761" class="sbHolder"><a id="sbToggle_17662761" href="#" class="sbToggle"></a><a id="sbSelector_17662761" href="#" class="sbSelector">All Campuses</a>
                                <ul id="sbOptions_17662761" class="sbOptions" style="display: none;">
                                    <li><a href="#0" rel="0">All Campuses</a></li>
                                    <li><a href="#39" rel="39">Ranchi</a></li>
                                    <li><a href="#36" rel="36">Raipur</a></li>
                                    <li><a href="#43" rel="43">Patna</a></li>
                                    <li><a href="#1" rel="1">Noida</a></li>
                                    <li><a href="#35" rel="35">Mumbai</a></li>
                                    <li><a href="#47" rel="47">Mohali</a></li>
                                    <li><a href="#4" rel="4">Lucknow</a></li>
                                    <li><a href="#33" rel="33">London</a></li>
                                    <li><a href="#37" rel="37">Kolkata</a></li>
                                    <li><a href="#5" rel="5">Jaipur</a></li>
                                    <li><a href="#24" rel="24">Gwalior</a></li>
                                    <li><a href="#6" rel="6">Gurugram (Manesar)</a></li>
                                    <li><a href="#34" rel="34">Greater Noida</a></li>
                                    <li><a href="#27" rel="27">Dubai</a></li>
                                </ul>
                            </div>

                        </span>
                        <span class="test boxProducts">
                            <select name="ctl00$ContentPlaceHolder1$ddlInstitute" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlInstitute\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ddlInstitute" class="products nova" sb="27128968" style="display: none;">
                                <option selected="selected" value="0">All Colleges</option>
                                <option value="2">ABS</option>
                                <option value="600">ABSGW</option>
                                <option value="200">ABSJ</option>
                                <option value="918">ABSK</option>
                                <option value="70">ABSL</option>
                                <option value="500">ABSM</option>
                                <option value="931">ABSM</option>
                                <option value="700">ABSMUM</option>
                                <option value="803">ABSRAI</option>
                                <option value="37">ACCF</option>
                                <option value="909">ACCFK</option>
                                <option value="519">ACCM</option>
                                <option value="108">ACEL</option>
                                <option value="123">ACERT</option>
                                <option value="109">ACICA</option>
                                <option value="515">ACNM</option>
                                <option value="526">ACOASTM</option>
                                <option value="110">ACRB</option>
                                <option value="23">ADDOE</option>
                                <option value="141">AFAF</option>
                                <option value="723">AFSMUM</option>
                                <option value="308">AGBSAhmedabad</option>
                                <option value="303">AGBSBangalore</option>
                                <option value="304">AGBSBhubaneswar</option>
                                <option value="307">AGBSChandigarh</option>
                                <option value="310">AGBSChennai</option>
                                <option value="311">AGBSCochin</option>
                                <option value="306">AGBSHyderabad</option>
                                <option value="305">AGBSIndore</option>
                                <option value="309">AGBSKolkata</option>
                                <option value="406">AGBSLondon</option>
                                <option value="302">AGBSMumbai</option>
                                <option value="301">AGBSNoida</option>
                                <option value="315">AGBSPune</option>
                                <option value="402">AGBSSingapore</option>
                                <option value="45">AIA</option>
                                <option value="50">AIAE</option>
                                <option value="53">AIAFSRT</option>
                                <option value="4">AIALS</option>
                                <option value="3">AIARS(M&amp;D)</option>
                                <option value="47">AIAS</option>
                                <option value="905">AIASK</option>
                                <option value="51">AIBAS</option>
                                <option value="606">AIBASGW</option>
                                <option value="210">AIBASJ</option>
                                <option value="74">AIBASL</option>
                                <option value="507">AIBASM</option>
                                <option value="933">AIBASM</option>
                                <option value="702">AIBASMUM</option>
                                <option value="811">AIBASRAI</option>
                                <option value="601">AIBGW</option>
                                <option value="5">AIBHAS</option>
                                <option value="202">AIBJ</option>
                                <option value="71">AIBL</option>
                                <option value="502">AIBM</option>
                                <option value="929">AIBM</option>
                                <option value="701">AIBMUM</option>
                                <option value="6">AIBN</option>
                                <option value="917">AIBNK</option>
                                <option value="101">AIBORS</option>
                                <option value="804">AIBRAI</option>
                                <option value="19">AIBS</option>
                                <option value="105">AICC</option>
                                <option value="55">AICFS</option>
                                <option value="7">AICISM</option>
                                <option value="127">AICPHT&amp;CCM</option>
                                <option value="227">AICPJ</option>
                                <option value="528">AICPM</option>
                                <option value="56">AICSCF</option>
                                <option value="523">AIDM</option>
                                <option value="41">AIE</option>
                                <option value="216">AIEJ</option>
                                <option value="907">AIEK</option>
                                <option value="85">AIEL</option>
                                <option value="112">AIES</option>
                                <option value="951">AIESK</option>
                                <option value="8">aiesr</option>
                                <option value="916">AIESRK</option>
                                <option value="133">AIET</option>
                                <option value="107">AIETSM</option>
                                <option value="49">AIEVTW</option>
                                <option value="72">AIFL</option>
                                <option value="59">AIFS</option>
                                <option value="46">AIFT</option>
                                <option value="104">AIGG</option>
                                <option value="130">AIGRS</option>
                                <option value="125">AIGTRS</option>
                                <option value="103">AIGWES</option>
                                <option value="132">AIHA</option>
                                <option value="102">AIHRS</option>
                                <option value="126">AIHSR</option>
                                <option value="159">AIIS</option>
                                <option value="525">AIISHM</option>
                                <option value="11">AIIT</option>
                                <option value="217">AIITJ</option>
                                <option value="914">AIITK</option>
                                <option value="73">AIITL</option>
                                <option value="505">AIITM</option>
                                <option value="928">AIITM</option>
                                <option value="710">AIITMUM</option>
                                <option value="809">AIITRAI</option>
                                <option value="611">AILAGW</option>
                                <option value="86">AILAL</option>
                                <option value="932">AILAM</option>
                                <option value="713">AILAMUM</option>
                                <option value="521">AILTOM</option>
                                <option value="58">AIMB</option>
                                <option value="122">AIMST</option>
                                <option value="10">AIMT</option>
                                <option value="224">AIMTJ</option>
                                <option value="915">AIMTK</option>
                                <option value="14">AINGOM</option>
                                <option value="517">AINM</option>
                                <option value="136">AINN</option>
                                <option value="48">AINPRS</option>
                                <option value="209">AINPRSJ</option>
                                <option value="111">AINST</option>
                                <option value="13">AINT</option>
                                <option value="208">AINTJ</option>
                                <option value="925">AINTK</option>
                                <option value="15">AIOA</option>
                                <option value="403">AIOHEMauritius</option>
                                <option value="138">AIOT</option>
                                <option value="106">AIP</option>
                                <option value="131">AIPAS</option>
                                <option value="901">AIPASK</option>
                                <option value="925">AIPGW</option>
                                <option value="139">AIPH</option>
                                <option value="902">AIPK</option>
                                <option value="84">AIPL</option>
                                <option value="529">AIPM</option>
                                <option value="128">AIPP</option>
                                <option value="16">AIPS</option>
                                <option value="913">AIPSK</option>
                                <option value="12">AIPT</option>
                                <option value="64">AIRAE</option>
                                <option value="140">AIRS</option>
                                <option value="120">AISaS</option>
                                <option value="32">AISED</option>
                                <option value="28">AISN</option>
                                <option value="62">AISS</option>
                                <option value="903">AISSK</option>
                                <option value="52">AISST</option>
                                <option value="63">AITD</option>
                                <option value="17">AITEM</option>
                                <option value="142">AITL</option>
                                <option value="930">AITM</option>
                                <option value="719">AITMUM</option>
                                <option value="18">AITT</option>
                                <option value="912">AITTK</option>
                                <option value="938">AITTM</option>
                                <option value="214">AITTMJ</option>
                                <option value="718">AITTMUM</option>
                                <option value="121">AIVI</option>
                                <option value="137">AIWS</option>
                                <option value="610">ALSGW</option>
                                <option value="215">ALSJ</option>
                                <option value="908">ALSK</option>
                                <option value="81">ALSL</option>
                                <option value="508">ALSM</option>
                                <option value="940">ALSM</option>
                                <option value="706">ALSMUM</option>
                                <option value="39">ALSN</option>
                                <option value="119">ALSNII</option>
                                <option value="806">ALSRAI</option>
                                <option value="1">amity</option>
                                <option value="61">Amity Institute of Nursing</option>
                                <option value="513">AMSM</option>
                                <option value="54">APC</option>
                                <option value="20">ASAP</option>
                                <option value="609">ASAPGW</option>
                                <option value="201">ASAPJ</option>
                                <option value="922">ASAPK</option>
                                <option value="83">ASAPL</option>
                                <option value="512">ASAPM</option>
                                <option value="939">ASAPM</option>
                                <option value="709">ASAPMUM</option>
                                <option value="808">ASAPRAI</option>
                                <option value="225">ASASJ</option>
                                <option value="89">ASASL</option>
                                <option value="927">ASASM</option>
                                <option value="516">ASASM</option>
                                <option value="708">ASASMUM</option>
                                <option value="807">ASASRAI</option>
                                <option value="42">ASB</option>
                                <option value="906">ASBK</option>
                                <option value="87">ASCENT</option>
                                <option value="608">ASCENTGW</option>
                                <option value="223">ASCENTJ</option>
                                <option value="613">ASCFGW</option>
                                <option value="21">ASCO</option>
                                <option value="603">ASCOGW</option>
                                <option value="203">ASCOJ</option>
                                <option value="911">ASCOK</option>
                                <option value="75">ASCOL</option>
                                <option value="504">ASCOM</option>
                                <option value="935">ASCOM</option>
                                <option value="703">ASCOMUM</option>
                                <option value="805">ASCORAI</option>
                                <option value="98">ASCS</option>
                                <option value="22">ASD</option>
                                <option value="60">ASE</option>
                                <option value="524">ASEESM</option>
                                <option value="904">ASEK</option>
                                <option value="520">ASEM</option>
                                <option value="124">ASEngg</option>
                                <option value="605">ASEnggGW</option>
                                <option value="222">ASEnggJ</option>
                                <option value="923">ASEnggK</option>
                                <option value="88">ASEnggL</option>
                                <option value="514">ASEnggM</option>
                                <option value="24">ASET</option>
                                <option value="96">ASETB</option>
                                <option value="602">ASETGW</option>
                                <option value="204">ASETJ</option>
                                <option value="910">ASETK</option>
                                <option value="76">ASETL</option>
                                <option value="926">ASETM</option>
                                <option value="501">ASETM</option>
                                <option value="704">ASETMUM</option>
                                <option value="801">ASETRAI</option>
                                <option value="26">ASFA</option>
                                <option value="206">ASFAJ</option>
                                <option value="921">ASFAK</option>
                                <option value="79">ASFAL</option>
                                <option value="937">ASFAM</option>
                                <option value="510">ASFAM</option>
                                <option value="712">ASFAMUM</option>
                                <option value="936">ASFDTM</option>
                                <option value="27">ASFL</option>
                                <option value="924">ASFLK</option>
                                <option value="25">ASFT</option>
                                <option value="604">ASFTGW</option>
                                <option value="205">ASFTJ</option>
                                <option value="920">ASFTK</option>
                                <option value="78">ASFTL</option>
                                <option value="509">ASFTM</option>
                                <option value="711">ASFTMUM</option>
                                <option value="802">ASFTRAI</option>
                                <option value="33">ASH</option>
                                <option value="612">ASHGW</option>
                                <option value="207">ASHJ</option>
                                <option value="919">ASHK</option>
                                <option value="80">ASHL</option>
                                <option value="503">ASHM</option>
                                <option value="211">ASIASJ</option>
                                <option value="34">ASIBAS</option>
                                <option value="219">ASLAJ</option>
                                <option value="518">ASLAM</option>
                                <option value="607">ASLGW</option>
                                <option value="218">ASLJ</option>
                                <option value="77">ASLL</option>
                                <option value="506">ASLM</option>
                                <option value="934">ASLM</option>
                                <option value="812">ASLRAI</option>
                                <option value="35">ASNRSD</option>
                                <option value="40">ASPA</option>
                                <option value="221">ASPAJ</option>
                                <option value="614">ASPASGW</option>
                                <option value="36">aspess</option>
                                <option value="220">ASPESSJ</option>
                                <option value="511">ASPESSM</option>
                                <option value="213">ASRAMJ</option>
                                <option value="82">ASRAML</option>
                                <option value="43">ASRM</option>
                                <option value="134">ASTIF</option>
                                <option value="44">ASUM</option>
                                <option value="401">AUDubai</option>
                                <option value="407">AUGNoida</option>
                                <option value="199">AUUPHQL</option>
                                <option value="721">CIISoLMUM</option>
                                <option value="129">DITT</option>
                                <option value="400">Pan African</option>
                                <option value="135">RICSSBE</option>

                            </select>
                            <div id="sbHolder_27128968" class="sbHolder"><a id="sbToggle_27128968" href="#" class="sbToggle"></a><a id="sbSelector_27128968" href="#" class="sbSelector">All Colleges</a>
                                <ul id="sbOptions_27128968" class="sbOptions" style="display: none;">
                                    <li><a href="#0" rel="0">All Colleges</a></li>
                                    <li><a href="#2" rel="2">ABS</a></li>
                                    <li><a href="#600" rel="600">ABSGW</a></li>
                                    <li><a href="#200" rel="200">ABSJ</a></li>
                                    <li><a href="#918" rel="918">ABSK</a></li>
                                    <li><a href="#70" rel="70">ABSL</a></li>
                                    <li><a href="#500" rel="500">ABSM</a></li>
                                    <li><a href="#931" rel="931">ABSM</a></li>
                                    <li><a href="#700" rel="700">ABSMUM</a></li>
                                    <li><a href="#803" rel="803">ABSRAI</a></li>
                                    <li><a href="#37" rel="37">ACCF</a></li>
                                    <li><a href="#909" rel="909">ACCFK</a></li>
                                    <li><a href="#519" rel="519">ACCM</a></li>
                                    <li><a href="#108" rel="108">ACEL</a></li>
                                    <li><a href="#123" rel="123">ACERT</a></li>
                                    <li><a href="#109" rel="109">ACICA</a></li>
                                    <li><a href="#515" rel="515">ACNM</a></li>
                                    <li><a href="#526" rel="526">ACOASTM</a></li>
                                    <li><a href="#110" rel="110">ACRB</a></li>
                                    <li><a href="#23" rel="23">ADDOE</a></li>
                                    <li><a href="#141" rel="141">AFAF</a></li>
                                    <li><a href="#723" rel="723">AFSMUM</a></li>
                                    <li><a href="#308" rel="308">AGBSAhmedabad</a></li>
                                    <li><a href="#303" rel="303">AGBSBangalore</a></li>
                                    <li><a href="#304" rel="304">AGBSBhubaneswar</a></li>
                                    <li><a href="#307" rel="307">AGBSChandigarh</a></li>
                                    <li><a href="#310" rel="310">AGBSChennai</a></li>
                                    <li><a href="#311" rel="311">AGBSCochin</a></li>
                                    <li><a href="#306" rel="306">AGBSHyderabad</a></li>
                                    <li><a href="#305" rel="305">AGBSIndore</a></li>
                                    <li><a href="#309" rel="309">AGBSKolkata</a></li>
                                    <li><a href="#406" rel="406">AGBSLondon</a></li>
                                    <li><a href="#302" rel="302">AGBSMumbai</a></li>
                                    <li><a href="#301" rel="301">AGBSNoida</a></li>
                                    <li><a href="#315" rel="315">AGBSPune</a></li>
                                    <li><a href="#402" rel="402">AGBSSingapore</a></li>
                                    <li><a href="#45" rel="45">AIA</a></li>
                                    <li><a href="#50" rel="50">AIAE</a></li>
                                    <li><a href="#53" rel="53">AIAFSRT</a></li>
                                    <li><a href="#4" rel="4">AIALS</a></li>
                                    <li><a href="#3" rel="3">AIARS(M&amp;D)</a></li>
                                    <li><a href="#47" rel="47">AIAS</a></li>
                                    <li><a href="#905" rel="905">AIASK</a></li>
                                    <li><a href="#51" rel="51">AIBAS</a></li>
                                    <li><a href="#606" rel="606">AIBASGW</a></li>
                                    <li><a href="#210" rel="210">AIBASJ</a></li>
                                    <li><a href="#74" rel="74">AIBASL</a></li>
                                    <li><a href="#507" rel="507">AIBASM</a></li>
                                    <li><a href="#933" rel="933">AIBASM</a></li>
                                    <li><a href="#702" rel="702">AIBASMUM</a></li>
                                    <li><a href="#811" rel="811">AIBASRAI</a></li>
                                    <li><a href="#601" rel="601">AIBGW</a></li>
                                    <li><a href="#5" rel="5">AIBHAS</a></li>
                                    <li><a href="#202" rel="202">AIBJ</a></li>
                                    <li><a href="#71" rel="71">AIBL</a></li>
                                    <li><a href="#502" rel="502">AIBM</a></li>
                                    <li><a href="#929" rel="929">AIBM</a></li>
                                    <li><a href="#701" rel="701">AIBMUM</a></li>
                                    <li><a href="#6" rel="6">AIBN</a></li>
                                    <li><a href="#917" rel="917">AIBNK</a></li>
                                    <li><a href="#101" rel="101">AIBORS</a></li>
                                    <li><a href="#804" rel="804">AIBRAI</a></li>
                                    <li><a href="#19" rel="19">AIBS</a></li>
                                    <li><a href="#105" rel="105">AICC</a></li>
                                    <li><a href="#55" rel="55">AICFS</a></li>
                                    <li><a href="#7" rel="7">AICISM</a></li>
                                    <li><a href="#127" rel="127">AICPHT&amp;CCM</a></li>
                                    <li><a href="#227" rel="227">AICPJ</a></li>
                                    <li><a href="#528" rel="528">AICPM</a></li>
                                    <li><a href="#56" rel="56">AICSCF</a></li>
                                    <li><a href="#523" rel="523">AIDM</a></li>
                                    <li><a href="#41" rel="41">AIE</a></li>
                                    <li><a href="#216" rel="216">AIEJ</a></li>
                                    <li><a href="#907" rel="907">AIEK</a></li>
                                    <li><a href="#85" rel="85">AIEL</a></li>
                                    <li><a href="#112" rel="112">AIES</a></li>
                                    <li><a href="#951" rel="951">AIESK</a></li>
                                    <li><a href="#8" rel="8">aiesr</a></li>
                                    <li><a href="#916" rel="916">AIESRK</a></li>
                                    <li><a href="#133" rel="133">AIET</a></li>
                                    <li><a href="#107" rel="107">AIETSM</a></li>
                                    <li><a href="#49" rel="49">AIEVTW</a></li>
                                    <li><a href="#72" rel="72">AIFL</a></li>
                                    <li><a href="#59" rel="59">AIFS</a></li>
                                    <li><a href="#46" rel="46">AIFT</a></li>
                                    <li><a href="#104" rel="104">AIGG</a></li>
                                    <li><a href="#130" rel="130">AIGRS</a></li>
                                    <li><a href="#125" rel="125">AIGTRS</a></li>
                                    <li><a href="#103" rel="103">AIGWES</a></li>
                                    <li><a href="#132" rel="132">AIHA</a></li>
                                    <li><a href="#102" rel="102">AIHRS</a></li>
                                    <li><a href="#126" rel="126">AIHSR</a></li>
                                    <li><a href="#159" rel="159">AIIS</a></li>
                                    <li><a href="#525" rel="525">AIISHM</a></li>
                                    <li><a href="#11" rel="11">AIIT</a></li>
                                    <li><a href="#217" rel="217">AIITJ</a></li>
                                    <li><a href="#914" rel="914">AIITK</a></li>
                                    <li><a href="#73" rel="73">AIITL</a></li>
                                    <li><a href="#505" rel="505">AIITM</a></li>
                                    <li><a href="#928" rel="928">AIITM</a></li>
                                    <li><a href="#710" rel="710">AIITMUM</a></li>
                                    <li><a href="#809" rel="809">AIITRAI</a></li>
                                    <li><a href="#611" rel="611">AILAGW</a></li>
                                    <li><a href="#86" rel="86">AILAL</a></li>
                                    <li><a href="#932" rel="932">AILAM</a></li>
                                    <li><a href="#713" rel="713">AILAMUM</a></li>
                                    <li><a href="#521" rel="521">AILTOM</a></li>
                                    <li><a href="#58" rel="58">AIMB</a></li>
                                    <li><a href="#122" rel="122">AIMST</a></li>
                                    <li><a href="#10" rel="10">AIMT</a></li>
                                    <li><a href="#224" rel="224">AIMTJ</a></li>
                                    <li><a href="#915" rel="915">AIMTK</a></li>
                                    <li><a href="#14" rel="14">AINGOM</a></li>
                                    <li><a href="#517" rel="517">AINM</a></li>
                                    <li><a href="#136" rel="136">AINN</a></li>
                                    <li><a href="#48" rel="48">AINPRS</a></li>
                                    <li><a href="#209" rel="209">AINPRSJ</a></li>
                                    <li><a href="#111" rel="111">AINST</a></li>
                                    <li><a href="#13" rel="13">AINT</a></li>
                                    <li><a href="#208" rel="208">AINTJ</a></li>
                                    <li><a href="#925" rel="925">AINTK</a></li>
                                    <li><a href="#15" rel="15">AIOA</a></li>
                                    <li><a href="#403" rel="403">AIOHEMauritius</a></li>
                                    <li><a href="#138" rel="138">AIOT</a></li>
                                    <li><a href="#106" rel="106">AIP</a></li>
                                    <li><a href="#131" rel="131">AIPAS</a></li>
                                    <li><a href="#901" rel="901">AIPASK</a></li>
                                    <li><a href="#925" rel="925">AIPGW</a></li>
                                    <li><a href="#139" rel="139">AIPH</a></li>
                                    <li><a href="#902" rel="902">AIPK</a></li>
                                    <li><a href="#84" rel="84">AIPL</a></li>
                                    <li><a href="#529" rel="529">AIPM</a></li>
                                    <li><a href="#128" rel="128">AIPP</a></li>
                                    <li><a href="#16" rel="16">AIPS</a></li>
                                    <li><a href="#913" rel="913">AIPSK</a></li>
                                    <li><a href="#12" rel="12">AIPT</a></li>
                                    <li><a href="#64" rel="64">AIRAE</a></li>
                                    <li><a href="#140" rel="140">AIRS</a></li>
                                    <li><a href="#120" rel="120">AISaS</a></li>
                                    <li><a href="#32" rel="32">AISED</a></li>
                                    <li><a href="#28" rel="28">AISN</a></li>
                                    <li><a href="#62" rel="62">AISS</a></li>
                                    <li><a href="#903" rel="903">AISSK</a></li>
                                    <li><a href="#52" rel="52">AISST</a></li>
                                    <li><a href="#63" rel="63">AITD</a></li>
                                    <li><a href="#17" rel="17">AITEM</a></li>
                                    <li><a href="#142" rel="142">AITL</a></li>
                                    <li><a href="#930" rel="930">AITM</a></li>
                                    <li><a href="#719" rel="719">AITMUM</a></li>
                                    <li><a href="#18" rel="18">AITT</a></li>
                                    <li><a href="#912" rel="912">AITTK</a></li>
                                    <li><a href="#938" rel="938">AITTM</a></li>
                                    <li><a href="#214" rel="214">AITTMJ</a></li>
                                    <li><a href="#718" rel="718">AITTMUM</a></li>
                                    <li><a href="#121" rel="121">AIVI</a></li>
                                    <li><a href="#137" rel="137">AIWS</a></li>
                                    <li><a href="#610" rel="610">ALSGW</a></li>
                                    <li><a href="#215" rel="215">ALSJ</a></li>
                                    <li><a href="#908" rel="908">ALSK</a></li>
                                    <li><a href="#81" rel="81">ALSL</a></li>
                                    <li><a href="#508" rel="508">ALSM</a></li>
                                    <li><a href="#940" rel="940">ALSM</a></li>
                                    <li><a href="#706" rel="706">ALSMUM</a></li>
                                    <li><a href="#39" rel="39">ALSN</a></li>
                                    <li><a href="#119" rel="119">ALSNII</a></li>
                                    <li><a href="#806" rel="806">ALSRAI</a></li>
                                    <li><a href="#1" rel="1">amity</a></li>
                                    <li><a href="#61" rel="61">Amity Institute of Nursing</a></li>
                                    <li><a href="#513" rel="513">AMSM</a></li>
                                    <li><a href="#54" rel="54">APC</a></li>
                                    <li><a href="#20" rel="20">ASAP</a></li>
                                    <li><a href="#609" rel="609">ASAPGW</a></li>
                                    <li><a href="#201" rel="201">ASAPJ</a></li>
                                    <li><a href="#922" rel="922">ASAPK</a></li>
                                    <li><a href="#83" rel="83">ASAPL</a></li>
                                    <li><a href="#512" rel="512">ASAPM</a></li>
                                    <li><a href="#939" rel="939">ASAPM</a></li>
                                    <li><a href="#709" rel="709">ASAPMUM</a></li>
                                    <li><a href="#808" rel="808">ASAPRAI</a></li>
                                    <li><a href="#225" rel="225">ASASJ</a></li>
                                    <li><a href="#89" rel="89">ASASL</a></li>
                                    <li><a href="#927" rel="927">ASASM</a></li>
                                    <li><a href="#516" rel="516">ASASM</a></li>
                                    <li><a href="#708" rel="708">ASASMUM</a></li>
                                    <li><a href="#807" rel="807">ASASRAI</a></li>
                                    <li><a href="#42" rel="42">ASB</a></li>
                                    <li><a href="#906" rel="906">ASBK</a></li>
                                    <li><a href="#87" rel="87">ASCENT</a></li>
                                    <li><a href="#608" rel="608">ASCENTGW</a></li>
                                    <li><a href="#223" rel="223">ASCENTJ</a></li>
                                    <li><a href="#613" rel="613">ASCFGW</a></li>
                                    <li><a href="#21" rel="21">ASCO</a></li>
                                    <li><a href="#603" rel="603">ASCOGW</a></li>
                                    <li><a href="#203" rel="203">ASCOJ</a></li>
                                    <li><a href="#911" rel="911">ASCOK</a></li>
                                    <li><a href="#75" rel="75">ASCOL</a></li>
                                    <li><a href="#504" rel="504">ASCOM</a></li>
                                    <li><a href="#935" rel="935">ASCOM</a></li>
                                    <li><a href="#703" rel="703">ASCOMUM</a></li>
                                    <li><a href="#805" rel="805">ASCORAI</a></li>
                                    <li><a href="#98" rel="98">ASCS</a></li>
                                    <li><a href="#22" rel="22">ASD</a></li>
                                    <li><a href="#60" rel="60">ASE</a></li>
                                    <li><a href="#524" rel="524">ASEESM</a></li>
                                    <li><a href="#904" rel="904">ASEK</a></li>
                                    <li><a href="#520" rel="520">ASEM</a></li>
                                    <li><a href="#124" rel="124">ASEngg</a></li>
                                    <li><a href="#605" rel="605">ASEnggGW</a></li>
                                    <li><a href="#222" rel="222">ASEnggJ</a></li>
                                    <li><a href="#923" rel="923">ASEnggK</a></li>
                                    <li><a href="#88" rel="88">ASEnggL</a></li>
                                    <li><a href="#514" rel="514">ASEnggM</a></li>
                                    <li><a href="#24" rel="24">ASET</a></li>
                                    <li><a href="#96" rel="96">ASETB</a></li>
                                    <li><a href="#602" rel="602">ASETGW</a></li>
                                    <li><a href="#204" rel="204">ASETJ</a></li>
                                    <li><a href="#910" rel="910">ASETK</a></li>
                                    <li><a href="#76" rel="76">ASETL</a></li>
                                    <li><a href="#926" rel="926">ASETM</a></li>
                                    <li><a href="#501" rel="501">ASETM</a></li>
                                    <li><a href="#704" rel="704">ASETMUM</a></li>
                                    <li><a href="#801" rel="801">ASETRAI</a></li>
                                    <li><a href="#26" rel="26">ASFA</a></li>
                                    <li><a href="#206" rel="206">ASFAJ</a></li>
                                    <li><a href="#921" rel="921">ASFAK</a></li>
                                    <li><a href="#79" rel="79">ASFAL</a></li>
                                    <li><a href="#937" rel="937">ASFAM</a></li>
                                    <li><a href="#510" rel="510">ASFAM</a></li>
                                    <li><a href="#712" rel="712">ASFAMUM</a></li>
                                    <li><a href="#936" rel="936">ASFDTM</a></li>
                                    <li><a href="#27" rel="27">ASFL</a></li>
                                    <li><a href="#924" rel="924">ASFLK</a></li>
                                    <li><a href="#25" rel="25">ASFT</a></li>
                                    <li><a href="#604" rel="604">ASFTGW</a></li>
                                    <li><a href="#205" rel="205">ASFTJ</a></li>
                                    <li><a href="#920" rel="920">ASFTK</a></li>
                                    <li><a href="#78" rel="78">ASFTL</a></li>
                                    <li><a href="#509" rel="509">ASFTM</a></li>
                                    <li><a href="#711" rel="711">ASFTMUM</a></li>
                                    <li><a href="#802" rel="802">ASFTRAI</a></li>
                                    <li><a href="#33" rel="33">ASH</a></li>
                                    <li><a href="#612" rel="612">ASHGW</a></li>
                                    <li><a href="#207" rel="207">ASHJ</a></li>
                                    <li><a href="#919" rel="919">ASHK</a></li>
                                    <li><a href="#80" rel="80">ASHL</a></li>
                                    <li><a href="#503" rel="503">ASHM</a></li>
                                    <li><a href="#211" rel="211">ASIASJ</a></li>
                                    <li><a href="#34" rel="34">ASIBAS</a></li>
                                    <li><a href="#219" rel="219">ASLAJ</a></li>
                                    <li><a href="#518" rel="518">ASLAM</a></li>
                                    <li><a href="#607" rel="607">ASLGW</a></li>
                                    <li><a href="#218" rel="218">ASLJ</a></li>
                                    <li><a href="#77" rel="77">ASLL</a></li>
                                    <li><a href="#506" rel="506">ASLM</a></li>
                                    <li><a href="#934" rel="934">ASLM</a></li>
                                    <li><a href="#812" rel="812">ASLRAI</a></li>
                                    <li><a href="#35" rel="35">ASNRSD</a></li>
                                    <li><a href="#40" rel="40">ASPA</a></li>
                                    <li><a href="#221" rel="221">ASPAJ</a></li>
                                    <li><a href="#614" rel="614">ASPASGW</a></li>
                                    <li><a href="#36" rel="36">aspess</a></li>
                                    <li><a href="#220" rel="220">ASPESSJ</a></li>
                                    <li><a href="#511" rel="511">ASPESSM</a></li>
                                    <li><a href="#213" rel="213">ASRAMJ</a></li>
                                    <li><a href="#82" rel="82">ASRAML</a></li>
                                    <li><a href="#43" rel="43">ASRM</a></li>
                                    <li><a href="#134" rel="134">ASTIF</a></li>
                                    <li><a href="#44" rel="44">ASUM</a></li>
                                    <li><a href="#401" rel="401">AUDubai</a></li>
                                    <li><a href="#407" rel="407">AUGNoida</a></li>
                                    <li><a href="#199" rel="199">AUUPHQL</a></li>
                                    <li><a href="#721" rel="721">CIISoLMUM</a></li>
                                    <li><a href="#129" rel="129">DITT</a></li>
                                    <li><a href="#400" rel="400">Pan African</a></li>
                                    <li><a href="#135" rel="135">RICSSBE</a></li>
                                </ul>
                            </div>

                        </span>
                        <span class="test boxAttributes">
                            <select name="ctl00$ContentPlaceHolder1$ddlEventCategory" onchange="javascript:setTimeout('__doPostBack(\'ctl00$ContentPlaceHolder1$ddlEventCategory\',\'\')', 0)" id="ctl00_ContentPlaceHolder1_ddlEventCategory" class="attributes nova" sb="43929577" style="display: none;">
                                <option selected="selected" value="0">All Type</option>
                                <option value="111">11th Annual Convocation 2020 : classof 2019</option>
                                <option value="119">Academia Interaction Series </option>
                                <option value="16">Academic</option>
                                <option value="52">Admission</option>
                                <option value="92">Alumni Achievement</option>
                                <option value="93">Alumni Interaction</option>
                                <option value="100">Alumni Meet</option>
                                <option value="137">Alumni Meet</option>
                                <option value="69">Amifest </option>
                                <option value="114">Amifest 2020</option>
                                <option value="89">AMIPHORIA 2019</option>
                                <option value="130">Amity Youth Festival</option>
                                <option value="91">Annual Cultural Fest</option>
                                <option value="101">Annual Debate</option>
                                <option value="11">Annual Event</option>
                                <option value="65">Art Exhibition </option>
                                <option value="26">Award Ceremony</option>
                                <option value="128">Basant Panchami celebration</option>
                                <option value="124">Birth Anniversary</option>
                                <option value="98">Blood Donation Camp</option>
                                <option value="95">Camp</option>
                                <option value="104">celebrity visit</option>
                                <option value="50">Celebrity Visit</option>
                                <option value="127">Chauri Chaura Shatabdi Celebration</option>
                                <option value="82">Christmas Celebration</option>
                                <option value="25">Co-Curricular Academic Event</option>
                                <option value="23">College Festival</option>
                                <option value="131">Competition</option>
                                <option value="63">Concluding Ceremony </option>
                                <option value="10">Conference</option>
                                <option value="67">Convocation</option>
                                <option value="58">Convocation</option>
                                <option value="12">Convocation 2015</option>
                                <option value="45">Convocation 2016</option>
                                <option value="46">Convocation 2016</option>
                                <option value="68">Convocation 2017</option>
                                <option value="88">Convocation 2019</option>
                                <option value="112">Convocation 2020</option>
                                <option value="61">Corporate Training</option>
                                <option value="97">Counselling Session</option>
                                <option value="3">Cultural Event</option>
                                <option value="53">Debate Competition</option>
                                <option value="71">Delegation Visit</option>
                                <option value="4">Delegation Visit</option>
                                <option value="27">Educational Visit</option>
                                <option value="83">Entrepreneurship Development Program</option>
                                <option value="103">Environment day</option>
                                <option value="136">Essay writing competition</option>
                                <option value="42">Event</option>
                                <option value="21">Events</option>
                                <option value="116">Excursion</option>
                                <option value="41">Faculty Development Program</option>
                                <option value="121">Fashion Show</option>
                                <option value="24">FDP</option>
                                <option value="48">FICCI Frames 2016</option>
                                <option value="62">FICCI FRAMES 2017</option>
                                <option value="40">Film Festival</option>
                                <option value="118">Film Screening</option>
                                <option value="55">FOOD FESTIVAL</option>
                                <option value="129">Foundation Day</option>
                                <option value="74">Fresher Party</option>
                                <option value="123">GANDHI JAYANTI CELEBRATION</option>
                                <option value="87">Guest lecture</option>
                                <option value="34">Guest Lecture</option>
                                <option value="35">Guest Lecture</option>
                                <option value="36">Guest Lecture</option>
                                <option value="37">Guest Lecture</option>
                                <option value="8">Guest Lecture</option>
                                <option value="49">Gurgaon Half Marathon</option>
                                <option value="15">Half Marathon</option>
                                <option value="77">Health Camp</option>
                                <option value="78">Health Camp</option>
                                <option value="106">HR CONCLAVE 2019</option>
                                <option value="94">inauguration</option>
                                <option value="20">Industry Lecture</option>
                                <option value="19">Industry Visit</option>
                                <option value="13">Innovation Day</option>
                                <option value="79">Innovation Day 2017</option>
                                <option value="120">Instagram Live Session</option>
                                <option value="56">Inter Institute Group Discussion Contest </option>
                                <option value="64">International Conference </option>
                                <option value="138">International Conference</option>
                                <option value="75">International University Visit</option>
                                <option value="84">International University Visit</option>
                                <option value="28">Lecture</option>
                                <option value="135">Lit Fest</option>
                                <option value="99">Marketing Fiesta</option>
                                <option value="105">Marketing promotion</option>
                                <option value="108">Meeting</option>
                                <option value="125">Mission Shakti celebration</option>
                                <option value="51">Moot Court Competition</option>
                                <option value="7">MoU</option>
                                <option value="72">National Conference </option>
                                <option value="107">National Epilepsy Day</option>
                                <option value="115">National Science Day 2020</option>
                                <option value="81">National Seminar</option>
                                <option value="70">National Symposium </option>
                                <option value="85">National Workshop</option>
                                <option value="126">National Youth Day </option>
                                <option value="133">ONLINE EVENT</option>
                                <option value="18">Online Webcast</option>
                                <option value="30">Orientation</option>
                                <option value="102">Ozone day celebration</option>
                                <option value="59">Painting Competition</option>
                                <option value="113">Panel Discussion</option>
                                <option value="76">Panel Discussion</option>
                                <option value="60">Placement Process</option>
                                <option value="66">Plantation </option>
                                <option value="73">Pre Placement Training</option>
                                <option value="44">Principal Conclave 2015</option>
                                <option value="134">Professional Skill Development </option>
                                <option value="29">Public Lecture</option>
                                <option value="90">Quiz Competition</option>
                                <option value="139">Republic Day celebrations</option>
                                <option value="109">Research Convention</option>
                                <option value="47">Sangathan</option>
                                <option value="80">Sangathan 2017</option>
                                <option value="96">Sangathan 2019</option>
                                <option value="2">Seminar</option>
                                <option value="54">Slogan Writing Competition</option>
                                <option value="43">Social Event</option>
                                <option value="22">Social Responsibility</option>
                                <option value="5">Sports Event</option>
                                <option value="39">Summit</option>
                                <option value="110">suscom 2020</option>
                                <option value="6">Symposium</option>
                                <option value="86">Teacher's day</option>
                                <option value="17">Training/ FDP</option>
                                <option value="132">Virtual Guest Lecture</option>
                                <option value="57">Walkathon 2016</option>
                                <option value="122">Webinar</option>
                                <option value="117">Webinar</option>
                                <option value="1">Workshop</option>
                                <option value="38">Workshop</option>

                            </select>
                            <div id="sbHolder_43929577" class="sbHolder"><a id="sbToggle_43929577" href="#" class="sbToggle"></a><a id="sbSelector_43929577" href="#" class="sbSelector">All Type</a>
                                <ul id="sbOptions_43929577" class="sbOptions" style="display: none;">
                                    <li><a href="#0" rel="0">All Type</a></li>
                                    <li><a href="#111" rel="111">11th Annual Convocation 2020 : classof 2019</a></li>
                                    <li><a href="#119" rel="119">Academia Interaction Series </a></li>
                                    <li><a href="#16" rel="16">Academic</a></li>
                                    <li><a href="#52" rel="52">Admission</a></li>
                                    <li><a href="#92" rel="92">Alumni Achievement</a></li>
                                    <li><a href="#93" rel="93">Alumni Interaction</a></li>
                                    <li><a href="#100" rel="100">Alumni Meet</a></li>
                                    <li><a href="#137" rel="137">Alumni Meet</a></li>
                                    <li><a href="#69" rel="69">Amifest </a></li>
                                    <li><a href="#114" rel="114">Amifest 2020</a></li>
                                    <li><a href="#89" rel="89">AMIPHORIA 2019</a></li>
                                    <li><a href="#130" rel="130">Amity Youth Festival</a></li>
                                    <li><a href="#91" rel="91">Annual Cultural Fest</a></li>
                                    <li><a href="#101" rel="101">Annual Debate</a></li>
                                    <li><a href="#11" rel="11">Annual Event</a></li>
                                    <li><a href="#65" rel="65">Art Exhibition </a></li>
                                    <li><a href="#26" rel="26">Award Ceremony</a></li>
                                    <li><a href="#128" rel="128">Basant Panchami celebration</a></li>
                                    <li><a href="#124" rel="124">Birth Anniversary</a></li>
                                    <li><a href="#98" rel="98">Blood Donation Camp</a></li>
                                    <li><a href="#95" rel="95">Camp</a></li>
                                    <li><a href="#104" rel="104">celebrity visit</a></li>
                                    <li><a href="#50" rel="50">Celebrity Visit</a></li>
                                    <li><a href="#127" rel="127">Chauri Chaura Shatabdi Celebration</a></li>
                                    <li><a href="#82" rel="82">Christmas Celebration</a></li>
                                    <li><a href="#25" rel="25">Co-Curricular Academic Event</a></li>
                                    <li><a href="#23" rel="23">College Festival</a></li>
                                    <li><a href="#131" rel="131">Competition</a></li>
                                    <li><a href="#63" rel="63">Concluding Ceremony </a></li>
                                    <li><a href="#10" rel="10">Conference</a></li>
                                    <li><a href="#67" rel="67">Convocation</a></li>
                                    <li><a href="#58" rel="58">Convocation</a></li>
                                    <li><a href="#12" rel="12">Convocation 2015</a></li>
                                    <li><a href="#45" rel="45">Convocation 2016</a></li>
                                    <li><a href="#46" rel="46">Convocation 2016</a></li>
                                    <li><a href="#68" rel="68">Convocation 2017</a></li>
                                    <li><a href="#88" rel="88">Convocation 2019</a></li>
                                    <li><a href="#112" rel="112">Convocation 2020</a></li>
                                    <li><a href="#61" rel="61">Corporate Training</a></li>
                                    <li><a href="#97" rel="97">Counselling Session</a></li>
                                    <li><a href="#3" rel="3">Cultural Event</a></li>
                                    <li><a href="#53" rel="53">Debate Competition</a></li>
                                    <li><a href="#71" rel="71">Delegation Visit</a></li>
                                    <li><a href="#4" rel="4">Delegation Visit</a></li>
                                    <li><a href="#27" rel="27">Educational Visit</a></li>
                                    <li><a href="#83" rel="83">Entrepreneurship Development Program</a></li>
                                    <li><a href="#103" rel="103">Environment day</a></li>
                                    <li><a href="#136" rel="136">Essay writing competition</a></li>
                                    <li><a href="#42" rel="42">Event</a></li>
                                    <li><a href="#21" rel="21">Events</a></li>
                                    <li><a href="#116" rel="116">Excursion</a></li>
                                    <li><a href="#41" rel="41">Faculty Development Program</a></li>
                                    <li><a href="#121" rel="121">Fashion Show</a></li>
                                    <li><a href="#24" rel="24">FDP</a></li>
                                    <li><a href="#48" rel="48">FICCI Frames 2016</a></li>
                                    <li><a href="#62" rel="62">FICCI FRAMES 2017</a></li>
                                    <li><a href="#40" rel="40">Film Festival</a></li>
                                    <li><a href="#118" rel="118">Film Screening</a></li>
                                    <li><a href="#55" rel="55">FOOD FESTIVAL</a></li>
                                    <li><a href="#129" rel="129">Foundation Day</a></li>
                                    <li><a href="#74" rel="74">Fresher Party</a></li>
                                    <li><a href="#123" rel="123">GANDHI JAYANTI CELEBRATION</a></li>
                                    <li><a href="#87" rel="87">Guest lecture</a></li>
                                    <li><a href="#34" rel="34">Guest Lecture</a></li>
                                    <li><a href="#35" rel="35">Guest Lecture</a></li>
                                    <li><a href="#36" rel="36">Guest Lecture</a></li>
                                    <li><a href="#37" rel="37">Guest Lecture</a></li>
                                    <li><a href="#8" rel="8">Guest Lecture</a></li>
                                    <li><a href="#49" rel="49">Gurgaon Half Marathon</a></li>
                                    <li><a href="#15" rel="15">Half Marathon</a></li>
                                    <li><a href="#77" rel="77">Health Camp</a></li>
                                    <li><a href="#78" rel="78">Health Camp</a></li>
                                    <li><a href="#106" rel="106">HR CONCLAVE 2019</a></li>
                                    <li><a href="#94" rel="94">inauguration</a></li>
                                    <li><a href="#20" rel="20">Industry Lecture</a></li>
                                    <li><a href="#19" rel="19">Industry Visit</a></li>
                                    <li><a href="#13" rel="13">Innovation Day</a></li>
                                    <li><a href="#79" rel="79">Innovation Day 2017</a></li>
                                    <li><a href="#120" rel="120">Instagram Live Session</a></li>
                                    <li><a href="#56" rel="56">Inter Institute Group Discussion Contest </a></li>
                                    <li><a href="#64" rel="64">International Conference </a></li>
                                    <li><a href="#138" rel="138">International Conference</a></li>
                                    <li><a href="#75" rel="75">International University Visit</a></li>
                                    <li><a href="#84" rel="84">International University Visit</a></li>
                                    <li><a href="#28" rel="28">Lecture</a></li>
                                    <li><a href="#135" rel="135">Lit Fest</a></li>
                                    <li><a href="#99" rel="99">Marketing Fiesta</a></li>
                                    <li><a href="#105" rel="105">Marketing promotion</a></li>
                                    <li><a href="#108" rel="108">Meeting</a></li>
                                    <li><a href="#125" rel="125">Mission Shakti celebration</a></li>
                                    <li><a href="#51" rel="51">Moot Court Competition</a></li>
                                    <li><a href="#7" rel="7">MoU</a></li>
                                    <li><a href="#72" rel="72">National Conference </a></li>
                                    <li><a href="#107" rel="107">National Epilepsy Day</a></li>
                                    <li><a href="#115" rel="115">National Science Day 2020</a></li>
                                    <li><a href="#81" rel="81">National Seminar</a></li>
                                    <li><a href="#70" rel="70">National Symposium </a></li>
                                    <li><a href="#85" rel="85">National Workshop</a></li>
                                    <li><a href="#126" rel="126">National Youth Day </a></li>
                                    <li><a href="#133" rel="133">ONLINE EVENT</a></li>
                                    <li><a href="#18" rel="18">Online Webcast</a></li>
                                    <li><a href="#30" rel="30">Orientation</a></li>
                                    <li><a href="#102" rel="102">Ozone day celebration</a></li>
                                    <li><a href="#59" rel="59">Painting Competition</a></li>
                                    <li><a href="#113" rel="113">Panel Discussion</a></li>
                                    <li><a href="#76" rel="76">Panel Discussion</a></li>
                                    <li><a href="#60" rel="60">Placement Process</a></li>
                                    <li><a href="#66" rel="66">Plantation </a></li>
                                    <li><a href="#73" rel="73">Pre Placement Training</a></li>
                                    <li><a href="#44" rel="44">Principal Conclave 2015</a></li>
                                    <li><a href="#134" rel="134">Professional Skill Development </a></li>
                                    <li><a href="#29" rel="29">Public Lecture</a></li>
                                    <li><a href="#90" rel="90">Quiz Competition</a></li>
                                    <li><a href="#139" rel="139">Republic Day celebrations</a></li>
                                    <li><a href="#109" rel="109">Research Convention</a></li>
                                    <li><a href="#47" rel="47">Sangathan</a></li>
                                    <li><a href="#80" rel="80">Sangathan 2017</a></li>
                                    <li><a href="#96" rel="96">Sangathan 2019</a></li>
                                    <li><a href="#2" rel="2">Seminar</a></li>
                                    <li><a href="#54" rel="54">Slogan Writing Competition</a></li>
                                    <li><a href="#43" rel="43">Social Event</a></li>
                                    <li><a href="#22" rel="22">Social Responsibility</a></li>
                                    <li><a href="#5" rel="5">Sports Event</a></li>
                                    <li><a href="#39" rel="39">Summit</a></li>
                                    <li><a href="#110" rel="110">suscom 2020</a></li>
                                    <li><a href="#6" rel="6">Symposium</a></li>
                                    <li><a href="#86" rel="86">Teacher's day</a></li>
                                    <li><a href="#17" rel="17">Training/ FDP</a></li>
                                    <li><a href="#132" rel="132">Virtual Guest Lecture</a></li>
                                    <li><a href="#57" rel="57">Walkathon 2016</a></li>
                                    <li><a href="#122" rel="122">Webinar</a></li>
                                    <li><a href="#117" rel="117">Webinar</a></li>
                                    <li><a href="#1" rel="1">Workshop</a></li>
                                    <li><a href="#38" rel="38">Workshop</a></li>
                                </ul>
                            </div>


                        </span>


                        <div class="faculty-input">
                            <input name="ctl00$ContentPlaceHolder1$txtFromDate" type="text" id="ctl00_ContentPlaceHolder1_txtFromDate" class="form-control" placeholder="From Date">

                        </div>
                        <div class="faculty-input">
                            <input name="ctl00$ContentPlaceHolder1$txtTodate" type="text" id="ctl00_ContentPlaceHolder1_txtTodate" class="form-control" placeholder="To Date">

                        </div>
                        <input type="submit" name="ctl00$ContentPlaceHolder1$bntSearch" value="Search" id="ctl00_ContentPlaceHolder1_bntSearch" class="btn_submit">


                        <div id="ctl00_ContentPlaceHolder1_UpdateProgress1" style="display:none;" role="status" aria-hidden="true">

                            <div class="mkmage-overlay">
                            </div>
                            <img alt="Loading..." src="/images/ajax-loader.gif" width="40px">

                        </div>
                    </div>

                </div>
            </div>
            <section class="inner_section event_list">
                <div class="container">



                    <ul class="row">





                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl00$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl00_hfImage" value="11836_1(9).jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl00$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl00_hfEventId" value="11836">



                            <a href="event-detail-normal.aspx?Event=11836&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl00_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 21 Feb 2022
                                    Raipur</h4>


                                <p> Understanding Securities Market</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl01$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl01_hfImage" value="11835_outreach1.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl01$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl01_hfEventId" value="11835">



                            <a href="event-detail-normal.aspx?Event=11835&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl01_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 19 Feb 2022
                                    Raipur</h4>


                                <p> Education Awareness camp</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl02$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl02_hfImage" value="11828_new1.png">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl02$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl02_hfEventId" value="11828">



                            <a href="event-detail-normal.aspx?Event=11828&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl02_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Website%20event%202%2018.2.22.png); background-size:cover;"> </span>
                                </div>
                                <h4> 18 Feb 2022
                                    Kolkata</h4>


                                <p> Second Language Acquisition and Memory Science</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl03$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl03_hfImage" value="11831_Dr.AbdullaRasheedAhmed,MinisterofStateforEducation,RepublicofMaldives.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl03$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl03_hfEventId" value="11831">



                            <a href="event-detail-normal.aspx?Event=11831&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl03_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 18 Feb 2022
                                    Noida</h4>


                                <p> Amity University organizes International Conference on Comparative Law, 2022 in collaboration with School of Business and Law, Edith Cowan University, Western Australia</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl04$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl04_hfImage" value="11834_JaipurHotelWebinar984452.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl04$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl04_hfEventId" value="11834">



                            <a href="event-detail-normal.aspx?Event=11834&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl04_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Jaipur%20Hotel%20Webinar%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 18 Feb 2022
                                    Jaipur</h4>


                                <p> Webinar on “Pre-opening Hotel -management phases and procedures”</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl05$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl05_hfImage" value="11832_Mr.SanjeevSanyal,PrincipalEconomicAdvisor,MinistryofFinance(MoF)addressingtheconferenceatAmity.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl05$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl05_hfEventId" value="11832">



                            <a href="event-detail-normal.aspx?Event=11832&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl05_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 17 Feb 2022
                                    Noida</h4>


                                <p> Amity University organizes 7th Global Leadership Research Conference (GLRC-2022)</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl06$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl06_hfImage" value="11829_AlumniMeet2022Invitation984452.jpeg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl06$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl06_hfEventId" value="11829">



                            <a href="event-detail-normal.aspx?Event=11829&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl06_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Alumni%20Meet%202022%20Invitation.jpeg); background-size:cover;"> </span>
                                </div>
                                <h4> 16 Feb 2022
                                    Jaipur</h4>


                                <p> Alumni Meet 2022 : Meet your Batchmates; Re-live the great times</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl07$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl07_hfImage" value="11824_WebsiteEvent1new.png">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl07$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl07_hfEventId" value="11824">



                            <a href="event-detail-normal.aspx?Event=11824&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl07_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Website%20event%20new.png); background-size:cover;"> </span>
                                </div>
                                <h4> 15 Feb 2022
                                    Kolkata</h4>


                                <p> Blockchain Technologies: Concepts and Applications</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl08$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl08_hfImage" value="11827_2.png">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl08$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl08_hfEventId" value="11827">



                            <a href="event-detail-normal.aspx?Event=11827&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl08_spanimgbottom" style="background:url(/backoffice/Uploads/Event/new.png); background-size:cover;"> </span>
                                </div>
                                <h4> 15 Feb 2022
                                    Kolkata</h4>


                                <p> Blockchain Technologies: Concepts and Applications - Post Event Report</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl09$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl09_hfImage" value="11833_PanelDiscussiononResurgenceofChina-Geo-StrategicandSecurityChallengesforSouth&amp;SouthEastAsiaandIndoPacificRegionatAmity.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl09$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl09_hfEventId" value="11833">



                            <a href="event-detail-normal.aspx?Event=11833&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl09_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 14 Feb 2022
                                    Noida</h4>


                                <p> Amity University organizes a Panel Discussion on “Resurgence of China: Geo-Strategic and Security Challenges for South &amp; South-East Asia and Indo-Pacific Region” </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl10$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl10_hfImage" value="11820_WebsiteEvent1.png">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl10$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl10_hfEventId" value="11820">



                            <a href="event-detail-normal.aspx?Event=11820&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl10_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Website%20event%202.png); background-size:cover;"> </span>
                                </div>
                                <h4> 11 Feb 2022
                                    Kolkata</h4>


                                <p> Why is India a New Powerhouse in the Startup Ecosystem</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl11$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl11_hfImage" value="11818_CRC9thFeb,2022.jpeg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl11$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl11_hfEventId" value="11818">



                            <a href="event-detail-normal.aspx?Event=11818&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl11_spanimgbottom" style="background:url(/backoffice/Uploads/Event/CRC%209th%20Feb,%202022.jpeg); background-size:cover;"> </span>
                                </div>
                                <h4> 09 Feb 2022
                                    Jaipur</h4>


                                <p> How To Start A Career As A Cyber Security Professional</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl12$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl12_hfImage" value="11821_ASH,9thFeb,2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl12$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl12_hfEventId" value="11821">



                            <a href="event-detail-normal.aspx?Event=11821&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl12_spanimgbottom" style="background:url(/backoffice/Uploads/Event/ASH,%209th%20Feb,%202022.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 09 Feb 2022
                                    Jaipur</h4>


                                <p> webinar on Event Management as a growing career for youth</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl13$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl13_hfImage" value="11815_Screenshogffhggdsdsa.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl13$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl13_hfEventId" value="11815">



                            <a href="event-detail-normal.aspx?Event=11815&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl13_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Screenshogffhggdsdsa.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 08 Feb 2022
                                    Ranchi</h4>


                                <p> Amity University Jharkhand organized a webinar on Commodity Derivatives
                                </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl14$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl14_hfImage" value="11814_75810eab-5438-4301-b720-153540ea2352.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl14$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl14_hfEventId" value="11814">



                            <a href="event-detail-normal.aspx?Event=11814&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl14_spanimgbottom" style="background:url(/backoffice/Uploads/Event/04898a31-273f-43e2-a9a8-ce3ead3ba179.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 08 Feb 2022
                                    Ranchi</h4>


                                <p> Amity University, Jharkhand organised a One-Day Workshop On “Intellectual Property Rights”</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl15$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl15_hfImage" value="11826_8feb2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl15$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl15_hfEventId" value="11826">



                            <a href="event-detail-normal.aspx?Event=11826&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl15_spanimgbottom" style="background:url(/backoffice/Uploads/Event/08%20feb%202022.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 08 Feb 2022
                                    Gurgaon (Manesar)</h4>


                                <p> Webinar on Hospitality Entrepreneurship &amp; Start-up Innovations</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl16$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl16_hfImage" value="11823_EPOSTER2.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl16$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl16_hfEventId" value="11823">



                            <a href="event-detail-normal.aspx?Event=11823&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl16_spanimgbottom" style="background:url(/backoffice/Uploads/Event/E%20POSTER%202.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 04 Feb 2022
                                    Jaipur</h4>


                                <p> Recent Status of Mediation in Indian Context</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl17$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl17_hfImage" value="11798_CRC4thfeb,2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl17$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl17_hfEventId" value="11798">



                            <a href="event-detail-normal.aspx?Event=11798&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl17_spanimgbottom" style="background:url(/backoffice/Uploads/Event/CRC%204th%20feb,%202022.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 04 Feb 2022
                                    Jaipur</h4>


                                <p> “TIPS &amp; TRICKS TO SCALE YOUR DIGITAL MARKETING GAME”</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl18$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl18_hfImage" value="11830_4feb2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl18$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl18_hfEventId" value="11830">



                            <a href="event-detail-normal.aspx?Event=11830&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl18_spanimgbottom" style="background:url(/backoffice/Uploads/Event/4%20feb%202022%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 04 Feb 2022
                                    Gurgaon (Manesar)</h4>


                                <p> International Workshop On “Docker and Kubernetes</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl19$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl19_hfImage" value="11825_3feb2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl19$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl19_hfEventId" value="11825">



                            <a href="event-detail-normal.aspx?Event=11825&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl19_spanimgbottom" style="background:url(/backoffice/Uploads/Event/3%20feb2022%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 03 Feb 2022
                                    Gurgaon (Manesar)</h4>


                                <p> Guest Lecture on: Digital Pedagogical Tools for Blended Learning-
                                    A Step-by-Step Approach
                                </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl20$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl20_hfImage" value="11822_31jan2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl20$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl20_hfEventId" value="11822">



                            <a href="event-detail-normal.aspx?Event=11822&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl20_spanimgbottom" style="background:url(/backoffice/Uploads/Event/31%20jan%202022%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 31 Jan 2022
                                    Gurgaon (Manesar)</h4>


                                <p> Guest Lecture On Innovation In Teaching Mental Health Nursing And Community Health Nursing During The Pandemic </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl21$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl21_hfImage" value="11789_download.png">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl21$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl21_hfEventId" value="11789">



                            <a href="event-detail-normal.aspx?Event=11789&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl21_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 29 Jan 2022
                                    Noida</h4>


                                <p> Amity University Online joins hands with TCS iON for industry-ready courses </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl22$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl22_hfImage" value="11788_HawanorganisedforPhDstudents.JPG">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl22$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl22_hfEventId" value="11788">



                            <a href="event-detail-normal.aspx?Event=11788&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl22_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 28 Jan 2022
                                    Noida</h4>


                                <p> 245 Research Scholars enroll in Ph.D at Amity University </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl23$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl23_hfImage" value="11792_272744190_1983540288494721_6309259437017619456_n.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl23$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl23_hfEventId" value="11792">



                            <a href="event-detail-normal.aspx?Event=11792&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl23_spanimgbottom" style="background:url(/backoffice/Uploads/Event/Screenshot%20(59).png); background-size:cover;"> </span>
                                </div>
                                <h4> 28 Jan 2022
                                    Gwalior</h4>


                                <p> International E - Conference on ‘Digital Humanities in 21st Century: Emerging Trends &amp; Future Prospects’ on 28th January 2022</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl24$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl24_hfImage" value="11812_28january.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl24$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl24_hfEventId" value="11812">



                            <a href="event-detail-normal.aspx?Event=11812&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl24_spanimgbottom" style="background:url(/backoffice/Uploads/Event/28%20january%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 28 Jan 2022
                                    Gurgaon (Manesar)</h4>


                                <p> Webinar on Adventure Tourism &amp; Entrepreneurship</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl25$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl25_hfImage" value="11813_28jan2022.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl25$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl25_hfEventId" value="11813">



                            <a href="event-detail-normal.aspx?Event=11813&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl25_spanimgbottom" style="background:url(/backoffice/Uploads/Event/28%20jan%202022%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 28 Jan 2022
                                    Gurgaon (Manesar)</h4>


                                <p> Invited talk on Innovation</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl26$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl26_hfImage" value="11810_27-31january.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl26$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl26_hfEventId" value="11810">



                            <a href="event-detail-normal.aspx?Event=11810&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl26_spanimgbottom" style="background:url(/backoffice/Uploads/Event/27-31%20january%201.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 27 Jan 2022
                                    Gurgaon (Manesar)</h4>


                                <p> Production of Creative Sculpture Using Waste Materials; for Skill Enhancement</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl27$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl27_hfImage" value="11786_edXCEODrAnantAggarwaladdressingtheInternationalConferenceatAmity.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl27$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl27_hfEventId" value="11786">



                            <a href="event-detail-normal.aspx?Event=11786&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl27_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 27 Jan 2022
                                    Noida</h4>


                                <p> Amity University organizes 12th International Conference– CONFLUENCE’ 2022 </p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl28$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl28_hfImage" value="11819_bio.jpg">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl28$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl28_hfEventId" value="11819">



                            <a href="event-detail-normal.aspx?Event=11819&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl28_spanimgbottom" style="background:url(/backoffice/Uploads/Event/bio.jpg); background-size:cover;"> </span>
                                </div>
                                <h4> 27 Jan 2022
                                    Jaipur</h4>


                                <p> Two Day Online Workshop on Bioinformatics and Drug Engineering (BDE) in association with IEEE Rajasthan Subsection</p>
                            </a>


                        </li>






                        <li class="col-12 col-sm-6 col-md-4">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl29$hfImage" id="ctl00_ContentPlaceHolder1_rptEvents_ctl29_hfImage" value="11782_CulturalprogrampresentbyAmityUniversityStudents.JPG">
                            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptEvents$ctl29$hfEventId" id="ctl00_ContentPlaceHolder1_rptEvents_ctl29_hfEventId" value="11782">



                            <a href="event-detail-normal.aspx?Event=11782&amp;Events=Events">

                                <div class="event-colm-img">
                                    <span id="ctl00_ContentPlaceHolder1_rptEvents_ctl29_spanimgbottom" style="background:url(images/default_event.jpg"> </span>
                                </div>
                                <h4> 26 Jan 2022
                                    Noida</h4>


                                <p> Amity University celebrates 73rd Republic Day</p>
                            </a>


                        </li>






                    </ul>
                    <div class="text-center">

                        <nav id="ctl00_ContentPlaceHolder1_divpaging" aria-label="Page navigation example">
                            <ul class="pagination">



                                <li id="ctl00_ContentPlaceHolder1_dlPaging_ctl00_liinner" class="page-item active"> <a id="ctl00_ContentPlaceHolder1_dlPaging_ctl00_lnkbtnPaging" disabled="disabled" class="page-link">1</a></li>

                                <li id="ctl00_ContentPlaceHolder1_dlPaging_ctl01_liinner" class="page-item"> <a id="ctl00_ContentPlaceHolder1_dlPaging_ctl01_lnkbtnPaging" class="page-link" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$dlPaging$ctl01$lnkbtnPaging','')">2</a></li>

                                <li id="ctl00_ContentPlaceHolder1_dlPaging_ctl02_liinner" class="page-item"> <a id="ctl00_ContentPlaceHolder1_dlPaging_ctl02_lnkbtnPaging" class="page-link" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$dlPaging$ctl02$lnkbtnPaging','')">3</a></li>

                                <li id="ctl00_ContentPlaceHolder1_dlPaging_ctl03_liinner" class="page-item"> <a id="ctl00_ContentPlaceHolder1_dlPaging_ctl03_lnkbtnPaging" class="page-link" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$dlPaging$ctl03$lnkbtnPaging','')">4</a></li>




                            </ul>
                        </nav>






                        <div id="ctl00_ContentPlaceHolder1_divpaging_new" class="pagination">




                        </div>

                    </div>
                </div>
            </section>
        </section>

    </div>
        
@endslot
</x-layout1>