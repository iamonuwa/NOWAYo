<?php ?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="fg-gray well well-small row" style="background-image: url(<?= base_url('assets/camtales/img/present.jpg')?>)">
            <h2>Event Creator</h2>            
            <small>Create Events</small>
        </div>
        <div class="row padding20">
            <div class="span1"></div>
            <div class="span6">
                <small style="color:red" class="fg-red">*&nbsp;All fields are required</small>
                <hr/>
                <form>
                    <fieldset>
                        <div class="row">
                            <input name="name_event" placeHolder="Enter Event Name" required class="span10" type="text">
                        </div>
                        <div class="row">
                            <span class="help-block">* Select Location</span>

                            <select class="span4" name="location" required>
                                <option>Please select an option</option>
                            </select>
                            
                        </div>
                        <div class="row">
                            <input type="text" class="span4" name="estimate" placeHolder="Estimated Cost" required/>
                            <input type="text" class="span6" name="statistic" placeHolder="Estimated number of Audience">
                        </div>
                        <div class="row">
                            <textarea class="span10"placeholder="Brief Description of the event (summary)" required></textarea>
                        </div>
                        <div class="row">
                            <textarea class="span10" maxLenght="30" placeHolder="Event Description" required></textarea>
                        </div>
                        <div class="row">
                            <input name="submit" value="Create Event" class="span10 btn btn-success">
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="span4">
                <h5>+ Other Options</h5>
                <div class="hero-unit span12" style="height:  auto;">
                    <p><button class="btn btn-primary span12">Upload Event Pictures/Videos</button></p>
                    <a href="<?=base_url('cam-tales/presenters/event_log')?>"><p><button class="btn btn-primary span12">View Event Logs</button></p></a>
                    <p><button class="btn btn-danger span12">Delete an Event</button></p>
                </div>


            </div>
        </div>
    </div>
</div>
