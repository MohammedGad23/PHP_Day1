<form method=post action='index.php'>
    <label for="firstName">First Name: </label>
    <input type=text name=firstName id="firstName">
    <br><br>
    <label for="lastName">last Name: </label>
    <input type=text name=lastName id="lastName">
    <br><br>
    <label for="adress">Adress: </label><br>
    <textarea name="adress" id="adress" ></textarea>
    <br><br>

    <label for="country">select your country:</label>
    <select name="country" id="country" style="width:100px">
        <option value="Egypt">Egypt</option>
        <option value="yamn">yamn</option>
        <option value="Algiria">Algiria</option>
        <option value="sudan">sudan</option>
    </select>
    <br><br>
    <label for="gender" style="margin-right:40px"> Gender:  </label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male"> male </label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female"> female</label><br>
    <br><br>
    <label for="skills" style="margin-right:40px"> skills:  </label><br>
    <input type="checkbox" id="PHP" value="PHP" name="skills[]">
    <label for="PHP"> PHP</label><br>
    <input type="checkbox" id="larval" value="larval" name="skills[]">
    <label for="larval"> larval</label><br>
    <input type="checkbox" id="HTML" value="HTML" name="skills[]">
    <label for= "html"> html</label>
    <br><br>
    <label for="userName">userName: </label>
    <input type=text name=userName id="userName">
    <br><br>
    <label for="password">Password: </label>
    <input type=password name=password id="password">
    <br><br>
    <label for="dapart">Department: </label>
    <input type=text name=dapart id="dapart" placeholder="openSource">
    <br><br>
    <span>
        <span>sha256</span><br>
        <input type="text">
    </span>
    <span>
        place insert code 
    </span>
    <br><br>
    <input type="submit" value='login'>
    <input type="reset" value='reset'>

</form>