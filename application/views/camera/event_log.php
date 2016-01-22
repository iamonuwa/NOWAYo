<?php


?>
<div class="container-fluid">
    <div class="row">
        <div class="hero-unit fg-pink">
            <h1>Event Log</h1>
            <small class="fg-gray">All Events Approved and Non Approved</small>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span8">
            <div class="table table-hover">
                <table class="table-striped span12">
                <thead>
                <th>Serial</th>
                <th>Event Title</th>
                <th>Presenter</th>
                <th>Date</th>
                <th>Likes/Comm</th>
                <th>Status</th>
                <th>State</th>
                </thead>
                <tbody>
                    <?php for ($count = 1; $count < 20; $count++){?>
                    <tr><td><?=$count?></td><td class="warning span4">Toure Calabar Carnival</td>
                        <td>Shola</td>
                        <td>20/20/2015</td>
                        <td class="fg-pink">400k/30k</td>
                        <td>Approved</td>
                        <td style="color: green;">Executed</td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="span4">
                <h5>+ Other Options</h5>
                <div class="hero-unit span12" style="height:  auto;">
                    <p><button class="btn btn-primary span12">Upload Event Pictures/Videos</button></p>
                    <a href="<?=base_url('cam-tales/presenters/event_log')?>"><p><button class="btn btn-primary span12">Event Creator</button></p></a>
                    <p><button class="btn btn-danger span12">Delete an Event</button></p>
                </div>


            </div>
        
    </div>
</div>
