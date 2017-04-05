<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('species/create'); ?>

	<!--NOT NULL-->
    <label for="specific_name">Specific Name</label>
    <input type="input" name="specific_name" /><br />

    <!-- NOT NULL -->
    <label for="name">Family Name</label>
    <input type="input" name="name" /><br />

    <!-- NOT NULL-->
    <label for="scientific_name">Scientific Name</label>
    <input type="input" name="scientific_name" /><br />

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO NUMERICAL, VALIDATE-->
    <label for="min_sunlight_start">Start Min Sunlight Range</label>
    <input type="input" name="min_sunlight_start" /><br />

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO NUMERICAL, VALIDATE-->
    <label for="min_sunlight_end">End Min Sunlight Range</label>
    <input type="input" name="min_sunlight_end" /><br />

    <label for="sunlight_desc">Sunlight Description</label>
    <textarea name="sunlight_desc"></textarea><br />

    <!--ADD MOISTURE SCALE DESCRIPTION-->

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO NUMERICAL, VALIDATE-->
    <label for="moisture_start">Start Moisture Range</label>
    <input type="input" name="moisture_start" /><br />

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO NUMERICAL, VALIDATE-->
    <label for="moisture_end">End Moisture Range</label>
    <input type="input" name="moisture_end" /><br />

    <label for="moisture_desc">Moisture Description</label>
    <textarea name="moisture_desc"></textarea><br />

    <!-- CHANGE INPUT TO RADIO SELECTION (annual, perennial, biennial, other)-->
    <label for="lifecyle">Lifecyle</label>
    <input type="input" name="lifecyle" /><br />

    <label for="fertilizer_desc">Fertilizer Description</label>
    <textarea name="fertilizer_desc"></textarea><br />

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO DOUBLE, VALIDATE-->
    <label for="pH_level">Ideal pH Level</label>
    <input type="input" name="pH_level" /><br />

    <!-- CHANGE INPUT TO SET SELECTION ('sand', 'loamy sand', 'sandy loam', 'loam', 'silt loam', 'sandy clay loam', 'sandy clay', 'clay loam', 'silty clay loam', 'silty clay', 'clay', 'other')-->
    <label for="soil_type">Ideal Soil Types</label>
    <input type="input" name="soil_type" /><br />

    <label for="plant_desc">Plant Description</label>
    <textarea name="plant_desc"></textarea><br />

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO NUMERICAL, VALIDATE-->
    <label for="day_temp_start">Start Day Temperature Range</label>
    <input type="input" name="day_temp_start" /><br />

    <!-- NOT NULL-->
    <!-- CHANGE INPUT TO NUMERICAL, VALIDATE-->
    <label for="day_temp_end">End Day Temperature Range</label>
    <input type="input" name="day_temp_end" /><br />

    <input type="submit" name="submit" value="Add species to database" />

</form>