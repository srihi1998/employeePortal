<h2>Welcome to Project Creation Page</h2>
<form action="#successProject" method="POST">
    <fieldset>
        <legend>Project Form</legend>
        <div class="input">
            <label for="name">Name(required) :</label>
            <input type="text" id="name" name="name" value="" required aria-required="true" 
            pattern="[0-9a-zA-z]+">
            <span id="name1-format" class="help">
                Format:This field accepts only numbers and alphabets
            </span>
        </div>
        
        <div class="input">
            <label for="description">Description: </label>
            <textarea id="description" name="description" placeholder="Write something.." style="width:200px">
            </textarea>
        </div>

        <div class="input">
            <label for="startDate">Start Date (required) :</label>
            <input type="date" id="startDate" name="startDate" required aria-required="true">
        </div>

        <div class="input">
            <label for="endDate">End Date (required) :</label>
            <input type="date" id="endDate" name="endDate" required aria-required="true">
        </div>

        
        <div class="submit">
            <input type="submit" value="Submit">
        </div>
    </fieldset>
</form>