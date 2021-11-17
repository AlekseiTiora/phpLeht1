<body>
<h1>Valuuta kalkulaator var 1</h1>
<form name ="var1" onclick="return validateForm()" method="post">
    <label for="kogus">Sisesta kogus:</label>
    <input type="number" name="kogus" id="kogus"> euro
    <br>
    <fieldset>
        <legend>Vali valuuta:</legend>
        <br>
        <input type="radio" name="valuuta1" id="dollar" value="dollar" onchange="radioChange(event)" >
        <label for="dollar">dollar</label>
        <br>
        <input type="radio" name="valuuta1" id="yen" value="yen" onchange="radioChange(event)">
        <label for="yen">Yen</label>
        <br>
        <input type="radio" name="valuuta1" id="pound" value="pound" onchange="radioChange(event)">
        <label for="pound">Pound</label>
        <br>
        <input type="radio" name="valuuta1" id="rub" value="rub" onchange="radioChange(event)">
        <label for="rub">Rouble</label>
        <br>
    </fieldset>
</form>
<div id="vastus">Siia tuleb vastus...</div>
<img src="img/tyhi.png" alt="pilt" id="pilt">

<section id="nr2">
    <h1>Valuuta kalkulaator var 2</h1>
    <form name ="var2">
        <label for="kogus2">Sisesta kogus:</label>
        <input type="number" name="kogus2" id="kogus2"> euro

        <select name="valuuta 2" onchange="selectOptionChange(event)"
        >
            <option value="">vali</option>
            <option value="dollar">dollar</option>
            <option value="yen">Yen</option>
            <option value="rub">Rouble</option>
            <option value="pound">Pound</option>
        </select>
        <div id="vastus2">Siia tuleb vastus...</div>
</section>

<h1>Valuuta kalkulaator var 3</h1>
<label for="kogus3">Sisesta kogus:</label>
<input type="number" name="kogus3" id="kogus3"> euro
<br>
<label for="valuutanimi"> Sisesta valuuta(dollar,rub,yen,pound)</label>
<input type="text" name="valuutanimi" id="valuutanimi" placeholder="Valuuta nimetus">
<input type="button" onclick="inputCurrencyText()" value="OK" >
<div id="vastus3">Siia tuleb vastus...</div>


<h1> kilo kalkulaator</h1>
<label for="kogus4">Sisesta kilogrammi</label>
<input type="number" name="kogus4" id="kogus4"> kg
<br>
<label for="kgnimi">Sisesta kilogrammi(gramm,tonn,milligrammi,mikrogrammi)</label>
<input type="text" name="kgnimi" id="kgnimi" placeholder="kilo nimentus">
<input type="button" onclick="kilogramText()" value="OK">
<div id="vastus4">Siia tuleb vastus...</div>
<br>
<br>
<li><a href="https://github.com/AlekseiTiora/kalkulator">kalkulaator</a></li>


</form>


</body