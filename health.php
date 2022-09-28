<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="health.css">
    <title>Survey Form</title>
</head>
<body>
<div class="container ">
    <header class="header">
        <h1 id="title">
            HEALTH REPORT
        </h1>
        <p id="description">
            Higher standards of care everyday
        </p>
    </header>
    <form action="" id="HEALTH REPORT">

        <!-- Text section -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="formControl" placeholder="Enter your name" required>
        </div>
        <!-- end of text section -->

        <!-- Type Email section -->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="formControl" placeholder="Enter your Email" required>
        </div>
        <!-- end of Email section -->

        <!-- Type Number section -->
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" id="phone" class="formControl" placeholder="Enter your phone number" required>
        </div>
        <!-- end of Number section -->


        <!-- select section -->
        <div class="form-group">
            <p id="quest">1.  Please enter your gender</p>
            <select name="Gender"
                    id="dropdown"
                    class="formControl required">
                <option value="" disabled
                        selected>Select your gender</option>
                <option
                        value="Male">Male</option>
                <option
                        value="Female">Female</option>
                <option
                        value="Prefer not to say">Prefer not to say</option>
            </select>

        </div>
        <div class="form-group">
            <p id="quest">2.  Enter your Age</p>
            <select name="Age"
                    id="dropdown"
                    class="formControl required">
                <option value="" disabled
                        selected>Select your Age</option>
                <option
                        value="Less than 18">Less than 18</option>
                <option
                        value="Between 18-39">Between 18-39</option>
                <option
                        value="Between 40-60">Between 40-60</option>
                <option
                        value="Greater than 60">Greater than 60</option>
            </select>
        </div>
        <!-- end of select section -->

        <!-- radio button section -->
        <div class="form-group">
            <p id="quest">3.  Select your BMI range.</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Less than 18.5"
                       class="inputRadio"
                       checked>Less than 18.5
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 18.5-24.9"
                       class="inputRadio"
                       checked>Between 18.5-24.9
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 25.0-29.9"
                       class="inputRadio"
                       checked>Between 25.0-29.9
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Greater than 30"
                       class="inputRadio"
                       checked>Greater than 30
            </label>
        </div>

        <div class="form-group">
            <p id="quest">4.  How much time you can hold your breath?Choose from the given range and all values are in seconds.</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Less than 25."
                       class="inputRadio"
                       checked>Less than 25.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 25-40."
                       class="inputRadio"
                       checked>Between 25-40.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 40-90."
                       class="inputRadio"
                       checked>Between 40-90.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Greater than 90."
                       class="inputRadio"
                       checked>Greater than 90.
            </label>
        </div>


        <div class="form-group">
            <p id="quest">5.  How much your chest Expands when you inhale?Choose from the given range.</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Less  than 2cm."
                       class="inputRadio"
                       checked>Less than 2cm.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 2cm-4cm."
                       class="inputRadio"
                       checked>Between 2cm-4cm.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 4cm-8cm."
                       class="inputRadio"
                       checked>Between 4cm-8cm.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="More than 8cm."
                       class="inputRadio"
                       checked>More than 8cm.
            </label>
        </div>


        <div class="form-group">
            <p id="quest">6.  Do you feel any pain in your Joints?(Joints means knees and elbows).</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes, sometimes but it pain rarely."
                       class="inputRadio"
                       checked>Yes ,sometimes but it pain rarely.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes ,it is been paining from more than a week."
                       class="inputRadio"
                       checked>Yes ,it has been paining from more than a week.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="No ,it is not paining."
                       class="inputRadio"
                       checked>No ,it is not paining.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes , it is paining but due to an injury."
                       class="inputRadio"
                       checked>Yes ,it is paining but dur to an injury.
            </label>
        </div>


        <div class="form-group">
            <p id="quest">7.  Do you feel any pain in chest area?</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes ,experiencing a slight pain in whole chest area."
                       class="inputRadio"
                       checked>Yes ,experiencing a slight pain in whole chest area.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes ,some pain in left chest area."
                       class="inputRadio"
                       checked>Yes ,some pain in left chest area.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes , it is due to some previous surgery or injury."
                       class="inputRadio"
                       checked>Yes , it is due to some previous surgery or injury.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="No , I am not feeling any pain in chest."
                       class="inputRadio"
                       checked>No , I am not feeling any pain in chest.
            </label>
        </div>


        <div class="form-group">
            <p id="quest">8.  How much water do you drink daily?</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Less than 3 glass."
                       class="inputRadio"
                       checked>Less than 3 glass.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 3-5 glass."
                       class="inputRadio"
                       checked>Between 3-5 glass.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 5-8 glass."
                       class="inputRadio"
                       checked>Between 5-8 glass.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="More than 8 glass."
                       class="inputRadio"
                       checked>More than 8 glass.
            </label>
        </div>


        <div class="form-group">
            <p id="quest">9.  After how much time of doing work continously you get tired?</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Less than 2 hrs."
                       class="inputRadio"
                       checked>Less than 2 hrs.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 2-3 hrs."
                       class="inputRadio"
                       checked>Between 2-3 hrs.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Between 3-4.5 hrs."
                       class="inputRadio"
                       checked>Between 3-4.5 hrs.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="After 4.5 hrs."
                       class="inputRadio"
                       checked>After 4.5 hrs.
            </label>
        </div>


        <div class="form-group">
            <p id="quest">10.  Do you feel any pain in muscles?</p>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes ,in shoulder and neck region."
                       class="inputRadio"
                       checked>Yes ,in shoulder and neck region.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes ,in thigh and in area near backbone."
                       class="inputRadio"
                       checked>Yes ,in thigh and in area near backbone.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="Yes ,in legs and arms."
                       class="inputRadio"
                       checked>Yes ,in legs and arms.
            </label>
            <label for="">
                <input type="radio"
                       name="source"
                       value="No ,I don't feel any noticable pain."
                       class="inputRadio"
                       checked>No ,I don't feel any noticable pain.
            </label>
        </div>
        <!-- end of radio button -->

        <!-- Checkbox section -->
        <div class="form-group">
            <p id="quest">11.  Should we send your report via email?</p>
            <label for="">
                <input type="checkbox"
                       name="prefer"
                       class="checkbox"
                       value="YES">YES
            </label>
            <label for="">
                <input type="checkbox"
                       name="prefer"
                       class="checkbox"
                       value="NO">NO
            </label>
        </div>
        <!-- End of checkbox section -->

        <!-- Submit button-->
        <div class="form-group">
            <button type="submit" id="submit" class="btn">Submit</button>
        </div>
    </form>
</div>
</body>
</html>