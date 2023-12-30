            <!-- Modal -->
            <div class="modal" id="bookingModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Booking Request</h5>
                    </div>
                    <div class="modal-body">
                        <form action="<?=site_url('booksave')?>" method="post">
                        <input type="hidden" value="<?=$get ['id'] ?>">
                            <label for="venue">Venue: </label>
                            <input type="hidden" name="venue" value="<?=$get['venue']?>">
                            <h3><?=$get['venue']?></h3>

                            <label for="fullname">Full Name</label><br>
                            <input type="text" id="fullname" name="fullname" placeholder="Enter your Full Name"><br>

                            <label for="address">Address</label><br>
                            <input type="text" id="address" name="address" placeholder="Enter your Address"><br>
                            
                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="email" placeholder="Enter your Email"><br>

                            <label for="contact">Contact</label><br>
                            <input type="text" id="contact" name="contact" placeholder="Enter your Contact #"><br>

                            <label for="duration">Duration</label><br>
                            <input type="text" id="duration" name="duration" placeholder="Enter how many days you will stay"><br>

                            <label for="schedule">Desired Event Schedule</label><br>
                            <input type="datetime-local" id="Test_DatetimeLocal" name="datetime"><br><br>

                            <input type="hidden" value="for Verification" name="status">

                            <input type="submit" value="Submit Booking" class="btn btn-primary"></input>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
            </div>
