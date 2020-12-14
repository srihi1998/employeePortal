<h2>Welocome to Employee Creation Page</h2>
<form action="#successEmployee" method="POST">
    <fieldset>
        <legend>Employee Form</legend>
        <div class="input">
            <label for="firstName">First Name(required) :</label>
            <input type="text" id="firstName" name="firstName" value="" required aria-required="true" 
            pattern="[0-9a-zA-z]+">
            <span id="name-format" class="help">
                Format:This field accepts only numbers and alphabets
            </span>
        </div>

        <div class="input">
            <label for="lastName">Last Name(required) :</label>
            <input type="text" id="lastName" name="lastName" value="" required aria-required="true" 
            pattern="[0-9a-zA-z]+">
            <span id="name-format" class="help">
                Format:This field accepts only numbers and alphabets
            </span>
        </div>

        <div class="input">
            <label for="moblieNo">Moblie Number (required) :</label>
            <input type="tel" id="moblieNo" name="moblieNo" value="" required aria-required="true" 
            pattern="\+91+\s[789][0-9]{9}+">
            <span id="contactNo-format" class="help">Example: +91 9876543210 </span>
        </div>
        
        <div class="input">
            <label for="dateOfBirth">Date Of Birth (required) :</label>
            <input type="date" id="dateOfBirth" name="dateOfBirth" required aria-required="true">
        </div>

        <div class="radioButton">
            <label for="gender">Gender: </label>
            <input type="radio" id="male" name="gender" value="male"> Male<br>
            <input type="radio" id="female" name="gender" value="female"> Female<br>
            <input type="radio" id="other" name="gender" value="other"> Other
        </div>

        <div class="list">
            <label for="city">Choose a city:</label>
            <select name="city" id="city">
                <option value="Hyderabad">Hyderabad</option>
                <option value="Banglore">Banglore</option>
                <option value="Chennai">Chennai</option>
                <option value="Delhi">Delhi</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Others">Others</option>
            </select>
        </div>
        
        <div class="checkboxes">
            <label for="hobby">Hobbies:</label>
            <input type="checkbox" name="hobby[]" value="sports" id="sport">
            <label class="hobby" for="sport">Sports</label>
            <br>
            <input type="checkbox" name="hobby[]" value="music" id="music">
            <label class="hobby" for="music">Music</label>
            <br>
            <input type="checkbox" name="hobby[]" value="reading" id="read">
            <label class="hobby" for="read">Reading</label>
            <br>
            <input type="checkbox" name="hobby[]" value="dance" id="dance">
            <label class="hobby" for="dance">Dance</label>
            <br>
        </div>

    
        <div class="submit">
            <input type="submit" value="Submit">
        </div>
    </fieldset>
</form>