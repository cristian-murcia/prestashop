{*Import necesarios*}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!-- Button trigger modal -->
<button type="button" class="button-color" data-toggle="modal" data-target="#modal-id-1">
    Cree su cuenta
</button>
<button id="lll" type="button" class="button-color2" data-toggle="modal" data-target="#modal-id-2">
    <i class="fas fa-users"></i>  Acceso para distribuidores
</button>

<!--Modal Acceso para distribuidores-->
<div class="clearfix modal fade" id="modal-id-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header h-color">
                <h3 class="light-modal-heading text-title-color">Inicio de sesión</h3>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <section>
                        <div class="form-group row col-md-12 ">
                            <label class="col-md-3 form-control-label required">
                                Email
                            </label>
                            <div class="col-md-9">
                                <input class="form-control" id="emailAddressL" name="emailAddressL" type="email" required/>
                            </div>
                            <label class="col-md-3 form-control-label required mt-3">
                                Contraseña
                            </label>
                            <div class="col-md-9 mt-3">
                                <input class="form-control input-number" id="pass" name="pass" type="password" required minlength="8" maxlength="32"/>
                            </div>
                        </div>
                    </section>

                    <footer class="form-footer text-sm-center">
                        <input name="enviarLogin" class=" registrarForWapp label-color" type="submit" value="Ingresar" />
                    </footer>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Cree su cuenta -->
<div class="clearfix modal fade" id="modal-id-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header h-color">
                <h3 class="light-modal-heading text-title-color">Registro online distribuidores</h3>
            </div>
            <div class="modal-body">
                <form id="RegistroFormLiferay" method="POST" enctype="multipart/form-data">
                    <section>
                        <div class="form-group row ">
                            <label class="col-md-2 form-control-label required">
                                Nombre(s)
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="name" name="name" type="text" required="">
                            </div>
                            <label class="col-md-2 form-control-label required">
                                Apellido(s)
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="lastName" name="lastName" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-2 form-control-label required">
                                Email
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="emailAddress" name="emailAddress" type="email" required="">
                            </div>
                            <label class="col-md-2 form-control-label required">
                                C&eacute;dula
                            </label>
                            <div class="col-md-4">
                                <input class="form-control input-number" id="dni" name="dni" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-2 form-control-label required">
                                Pa&iacute;s
                            </label>
                            <div class="col-md-4">
                                <select required class="form-control" id="country" name="country" style="height: 34px;"> 
                                    <option class="form-control" value="20"> Afghanistan </option> <option class="" value="228"> Aland-islands </option> <option class="" value="21"> Albania </option> <option class="" value="22"> Algeria </option> <option class="" value="23"> American-samoa </option> <option class="" value="24"> Andorra </option> <option class="" value="25"> Angola </option> <option class="" value="26"> Anguilla </option> <option class="" value="27"> Antarctica </option> <option class="" value="28"> Antigua-barbuda </option> <option class="" value="29"> Argentina </option> <option class="" value="30"> Armenia </option> <option class="" value="31"> Aruba </option> <option class="" value="32"> Australia </option> <option class="" value="33"> Austria </option> <option class="" value="34"> Azerbaijan </option> <option class="" value="35"> Bahamas </option> <option class="" value="36"> Bahrain </option> <option class="" value="37"> Bangladesh </option> <option class="" value="38"> Barbados </option> <option class="" value="39"> Belarus </option> <option class="" value="40"> Belgium </option> <option class="" value="41"> Belize </option> <option class="" value="42"> Benin </option> <option class="" value="43"> Bermuda </option> <option class="" value="44"> Bhutan </option> <option class="" value="45"> Bolivia </option> <option class="" value="229"> Bonaire-st-eustatius-saba </option> <option class="" value="46"> Bosnia-herzegovina </option> <option class="" value="47"> Botswana </option> <option class="" value="230"> Bouvet-island </option> <option class="" value="48"> Brazil </option> <option class="" value="231"> British-indian-ocean-territory </option> <option class="" value="49"> British-virgin-islands </option> <option class="" value="50"> Brunei </option> <option class="" value="51"> Bulgaria </option> <option class="" value="52"> Burkina-faso </option> <option class="" value="53"> Burma-myanmar </option> <option class="" value="54"> Burundi </option> <option class="" value="55"> Cambodia </option> <option class="" value="56"> Cameroon </option> <option class="" value="1"> Canada </option> <option class="" value="57"> Cape-verde-island </option> <option class="" value="58"> Cayman-islands </option> <option class="" value="59"> Central-african-republic </option> <option class="" value="60"> Chad </option> <option class="" value="61"> Chile </option> <option class="" value="2"> China </option> <option class="" value="62"> Christmas-island </option> <option class="" value="63"> Cocos-islands </option> <option class="" selected="" value="64"> Colombia </option> <option class="" value="65"> Comoros </option> <option class="" value="68"> Cook-islands </option> <option class="" value="69"> Costa-rica </option> <option class="" value="70"> Croatia </option> <option class="" value="71"> Cuba </option> <option class="" value="232"> Curacao </option> <option class="" value="72"> Cyprus </option> <option class="" value="73"> Czech-republic </option> <option class="" value="67"> Cemocratic-republic-of-congo </option> <option class="" value="74"> denmark </option> <option class="" value="75"> djibouti </option> <option class="" value="76"> dominica </option> <option class="" value="77"> Cominican-republic </option> <option class="" value="78"> Ecuador </option> <option class="" value="79"> Egypt </option> <option class="" value="80"> El-salvador </option> <option class="" value="81"> Equatorial-guinea </option> <option class="" value="82"> Eritrea </option> <option class="" value="83"> Estonia </option> <option class="" value="84"> Ethiopia </option> <option class="" value="85"> Faeroe-islands </option> <option class="" value="86"> Falkland-islands </option> <option class="" value="87"> Fiji-islands </option> <option class="" value="88"> Finland </option> <option class="" value="3"> France </option> <option class="" value="89"> French-guiana </option> <option class="" value="90"> French-polynesia </option> <option class="" value="233"> french-southern-territories </option> <option class="" value="91"> gabon </option> <option class="" value="92"> gambia </option> <option class="" value="93"> Georgia </option> <option class="" value="4"> Germany </option> <option class="" value="94"> Ghana </option> <option class="" value="95"> Gibraltar </option> <option class="" value="96"> Greece </option> <option class="" value="97"> Greenland </option> <option class="" value="98"> Grenada </option> <option class="" value="99"> Guadeloupe </option> <option class="" value="100"> Guam </option> <option class="" value="101"> Guatemala </option> <option class="" value="234"> Guernsey </option> <option class="" value="102"> Guinea </option> <option class="" value="103"> Guinea-bissau </option> <option class="" value="104"> Guyana </option> <option class="" value="105"> Haiti </option> <option class="" value="235"> heard-island-mcdonald-islands </option> <option class="" value="106"> honduras </option> <option class="" value="5"> hong-kong </option> <option class="" value="6"> Hungary </option> <option class="" value="107"> Iceland </option> <option class="" value="108"> India </option> <option class="" value="109"> Indonesia </option> <option class="" value="110"> Iran </option> <option class="" value="111"> Iraq </option> <option class="" value="112"> Ireland </option> <option class="" value="236"> Isle-of-man </option> <option class="" value="7"> israel </option> <option class="" value="8"> italy </option> <option class="" value="113"> Ivory-coast </option> <option class="" value="114"> Jamaica </option> <option class="" value="9"> Japan </option> <option class="" value="237"> Jersey </option> <option class="" value="115"> Jordan </option> <option class="" value="116"> Kazakhstan </option> <option class="" value="117"> Kenya </option> <option class="" value="118"> Kiribati </option> <option class="" value="119"> Kuwait </option> <option class="" value="121"> Kyrgyzstan </option> <option class="" value="122"> Laos </option> <option class="" value="123"> Latvia </option> <option class="" value="124"> Lebanon </option> <option class="" value="125"> Lesotho </option> <option class="" value="126"> Liberia </option> <option class="" value="127"> Libya </option> <option class="" value="128"> Liechtenstein </option> <option class="" value="129"> Lithuania </option> <option class="" value="130"> Luxembourg </option> <option class="" value="131"> Macau </option> <option class="" value="132"> Macedonia </option> <option class="" value="133"> Madagascar </option> <option class="" value="134"> Malawi </option> <option class="" value="135"> Malaysia </option> <option class="" value="136"> Maldives </option> <option class="" value="137"> Mali </option> <option class="" value="138"> Malta </option> <option class="" value="139"> Marshall-islands </option> <option class="" value="140"> Martinique </option> <option class="" value="141"> Mauritania </option> <option class="" value="142"> Mauritius </option> <option class="" value="143"> Mayotte-island </option> <option class="" value="144"> Mexico </option> <option class="" value="145"> Micronesia </option> <option class="" value="146"> Moldova </option> <option class="" value="147"> Monaco </option> <option class="" value="148"> Mongolia </option> <option class="" value="149"> Montenegro </option> <option class="" value="150"> Montserrat </option> <option class="" value="151"> Morocco </option> <option class="" value="152"> Mozambique </option> <option class="" value="153"> Namibia </option> <option class="" value="154"> Nauru </option> <option class="" value="155"> Nepal </option> <option class="" value="11"> Netherlands </option> <option class="" value="156"> Netherlands-antilles </option> <option class="" value="157"> New-caledonia </option> <option class="" value="158"> New-zealand </option> <option class="" value="159"> Nicaragua </option> <option class="" value="160"> Niger </option> <option class="" value="161"> Nigeria </option> <option class="" value="162"> Niue </option> <option class="" value="163"> Norfolk-island </option> <option class="" value="120"> North-korea </option> <option class="" value="238"> Northern-mariana-islands </option> <option class="" value="164"> Norway </option> <option class="" value="165"> Oman </option> <option class="" value="166"> Pakistan </option> <option class="" value="167"> Palau </option> <option class="" value="168"> Palestine </option> <option class="" value="169"> Panama </option> <option class="" value="170"> Papua-new-guinea </option> <option class="" value="171"> Paraguay </option> <option class="" value="172"> Peru </option> <option class="" value="173"> Philippines </option> <option class="" value="239"> Pitcairn </option> <option class="" value="174"> Poland </option> <option class="" value="12"> Portugal </option> <option class="" value="175"> Puerto-rico </option> <option class="" value="176"> Qatar </option> <option class="" value="66"> Republic-of-congo </option> <option class="" value="177"> Reunion-island </option> <option class="" value="178"> Romania </option> <option class="" value="13"> Russia </option> <option class="" value="179"> Rwanda </option> <option class="" value="185"> San-marino </option> <option class="" value="186"> Sao-tome-principe </option> <option class="" value="187"> Saudi-arabia </option> <option class="" value="188"> Senegal </option> <option class="" value="189"> Serbia </option> <option class="" value="190"> Seychelles </option> <option class="" value="191"> Sierra-leone </option> <option class="" value="14"> Singapore </option> <option class="" value="242"> Sint-maarten </option> <option class="" value="192"> Slovakia </option> <option class="" value="193"> Slovenia </option> <option class="" value="194"> Solomon-islands </option> <option class="" value="195"> Somalia </option> <option class="" value="196"> South-africa </option> <option class="" value="240"> South-georgia-south-sandwich-islands </option> <option class="" value="10"> South-korea </option> <option class="" value="241"> South-sudan </option> <option class="" value="15"> Spain </option> <option class="" value="197"> Sri-lanka </option> <option class="" value="243"> St-barthelemy </option> <option class="" value="180"> St-helena </option> <option class="" value="181"> St-kitts </option> <option class="" value="182"> St-lucia </option> <option class="" value="244"> St-martin </option> <option class="" value="183"> St-pierre-miquelon </option> <option class="" value="184"> St-vincent </option> <option class="" value="198"> Sudan </option> <option class="" value="199"> Suriname </option> <option class="" value="200"> Swaziland </option> <option class="" value="201"> Sweden </option> <option class="" value="202"> Switzerland </option> <option class="" value="203"> Syria </option> <option class="" value="204"> Taiwan </option> <option class="" value="205"> Tajikistan </option> <option class="" value="206"> Tanzania </option> <option class="" value="207"> Thailand </option> <option class="" value="246"> Timor-leste </option> <option class="" value="208"> Togo </option> <option class="" value="245"> Tokelau </option> <option class="" value="209"> Tonga </option> <option class="" value="210"> Trinidad-tobago </option> <option class="" value="211"> Tunisia </option> <option class="" value="16"> Turkey </option> <option class="" value="212"> Turkmenistan </option> <option class="" value="213"> Turks-caicos </option> <option class="" value="214"> Tuvalu </option> <option class="" value="215"> Uganda </option> <option class="" value="216"> Ukraine </option> <option class="" value="217"> United-arab-emirates </option> <option class="" value="18"> United-kingdom </option> <option class="" value="19"> United-states </option> <option class="" value="247"> United-states-minor-outlying-islands </option> <option class="" value="248"> United-states-virgin-islands </option> <option class="" value="218"> Uruguay </option> <option class="" value="219"> Uzbekistan </option> <option class="" value="220"> Vanuatu </option> <option class="" value="221"> Vatican-city </option> <option class="" value="222"> Venezuela </option> <option class="" value="17"> Vietnam </option> <option class="" value="223"> Wallis-futuna </option> <option class="" value="249"> Western-sahara </option> <option class="" value="224"> Western-samoa </option> <option class="" value="225"> Yemen </option> <option class="" value="226"> Zambia </option> <option class="" value="227"> Zimbabwe </option> </select>
                            </div>
                            <label class="col-md-2 form-control-label required">
                                Ciudad
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="city" name="city" type="text" required="">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-md-2 form-control-label required">
                                Celular
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="cellPhone" name="cellPhone" type="tel" required="">
                            </div>
                            <label class="col-md-2 form-control-label required">
                                Tel. Fijo
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="phone" name="phone" type="tel" required="">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row ">
                            <label class="col-md-2 form-control-label required">
                                NIT
                            </label>
                            <div class="col-md-4">
                                <input class="form-control input-number" id="fiscalNumber" name="fiscalNumber" type="text" required="">
                            </div>

                        </div>
                        <div class="form-group row ">
                            <label class="col-md-2 form-control-label required">
                                Empresa
                            </label>
                            <div class="col-md-4">
                                <input class="form-control" id="companyName" name="companyName" type="text" required="">
                            </div>
                            <label class="col-md-2 form-control-label required">
                                Cargo
                            </label>
                            <div class="col-md-4">
                                <select class="form-control" required id="jobTitle" name="jobTitle" style="height: 34px;"> <option class="" value="Comprador"> Comprador </option> <option class="" value="Ejecutivo de venta"> Ejecutivo de venta </option> <option class="" value="Financiera"> Financiera </option><option class="" value="Gerente"> Gerente </option> </select>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-12 label-color">
                                Describa las actividades de su compa&ntilde;&iacute;a 
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-12">
                                <textarea required="" class="form-control" id="companyDesc" name="companyDesc"></textarea>
                            </div>
                        </div>
                    </section>

                    <footer class="form-footer text-sm-center">
                        <input name="enviarRegister" class=" registrarForWapp label-color" type="submit" value="Si!! Quiero registrarme" />
                    </footer>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Notificación-->
{if isset($estado) && isset($estado2)}
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header h-color">
                    <h3 class="modal-title text-title-color" id="exampleModalLabel">{$estado2}</h3>

                </div>
                <div class="modal-body">
                    <p style="font-size: 16px; color: black;">{$estado}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
{/if}

<!-- Script de Modal de respuesta cliente -->
<script>
    $(document).ready(function () {
        $("#miModal").modal("show");
    });
</script>

<!-- Styles de modals -->
<style>
    .registrarForWapp {
        -webkit-border-radius: 28;
        -moz-border-radius: 28;
        border-radius: 28px;
        color: #000000;
        background: #FFCC00;
        padding: 10px 20px 10px 20px;
        text-decoration: none;
        cursor: pointer;
    }

    .registrarForWapp:hover {
        background: #fcdc5b;
        text-decoration: none;
    }

    .h-color{
        text-align: center;
        height: 60px;   
        background: rgba(9, 135, 175, 1);
    }

    .h-color h3{
        margin-top: 0px;
    }

    .text-title-color{
        color: white;
    }

    section label, .label-color {
        font-size: 15px;
    }

    .button-color{
        background-color: #4d535a;
        color: white;#fc0;
    }

    .button-color2{
        border-color: #fc0;
        background-color: #fc0;;
        color: white;
    }

    .md-login{
        width: 200px;
    }
</style>
