        <?php 
          // if(isset($catg)){}
          // else{
          //   $catg = '';
          //   if($pinworth == '6500' || $pinworth == '8500'){
          //       $catg = 'Post/Secondary_Sch_Student';
          //   }elseif ($pinworth == '7500' || $pinworth == '10000'){
          //       $catg = 'Undergraduate';
          //   }elseif ($pinworth == '9500' || $pinworth == '12000'){
          //       $catg = 'Working_Class';
          //   }else{
          //       $catg = 'Invalid Category';
          //   }
          // }
        ?>
        <div class="progress-container">
            <div class="progress" id="progress"></div>
            <div class="circle active">1</div>
            <div class="circle">2</div>
            <div class="circle">3</div>
            <!-- <div class="circle">4</div> -->
        </div>
        <form action="<?=base_url('register')?>" method="POST">
        <div class="fieldset" id="one">

            <fieldset class="d-none d-block" style="margin-bottom: 1rem; border-width: 0px;">
                <h4>Personal Details</h4>
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="" required aria-describedby="first name">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" name="lname" id="lname" class="form-control" placeholder="" required aria-describedby="Last name">
                </div>
                <div class="mb-3">
                    <label for="lb" class="form-label">Zone</label>
                    <select name="lb" id="lb" required>
                        <option value="">Select a Zone</option>
                        <option value="Ife|Olode">Ife|Olode</option>
                        <option value="Ilesha">Ilesha</option>
                        <option value="Osogbo|Ede">Osogbo|Ede</option>
                        <option value="Ikirun|Ila|Okuku">Ikirun|Ila|Okuku</option>
                        <option value="Iwo">Iwo</option>
                        <option value="Akure|Owena|Ekiti">Akure|Owena|Ekiti</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <!-- <div class="text-center form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" name="lcamp" id="lcamp">
                      <label class="form-check-label" for="lcamp">
                        I attended last December camp at RSS, Sagamu
                      </label>
                </div> -->
            </fieldset>
        </div>
        <div class="fieldset" id="two">
            <fieldset class="d-none" style="margin-bottom: 1rem; border-width: 0px;">
                <h4>Contact Details</h4>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" required>
                        <option value="">Select a gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" name="phone" id="phone" class="form-control" placeholder="" required aria-describedby="Phone Number">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="" required aria-describedby="Email">
                </div>
            </fieldset>
        </div>
        <div class="fieldset" id="three">
            <fieldset class="d-none" style="margin-bottom: 1rem; border-width: 0px;">
                <h4>Work/School Details</h4>
                <!-- <div class="mb-3">
                    <label for="org" class="form-label">Which Islamic org. do you belong to?</label>
                    <select name="org" id="org" required>
                        <option value="">Choose an Organisation</option>
                        <option value="phf">PHF</option>
                        <option value="tyma">TYMa</option>
                        <option value="mssn">MSSN</option>
                        <option value="nasfat">NASFAT</option>
                        <option value="aud">Ansaru-Deen</option>
                        <option value="tmc">TMC</option>
                        <option value="others">Others</option>
                    </select>
                </div> -->
                <!-- <div class="mb-3">
                    <label for="category" class="form-label">Category: </label>
                    <input type="hidden"  name="category" value="" >
                    <span></span>
                </div> -->
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category" id="category" required >
                        <option value="">Select a Category</option>
                        <option class="catg" value="Secondary School">Secondary School</option>
                        <option class="catg" value="School Leaver">School Leaver</option>
                        <option class="catg" value="Undergraduate">Undergraduate</option>
                        <option class="catg" value="Workers/Others">Workers/Others</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="sch" class="form-label">School/Course/Profession (Details of the above category)</label>
                    <input type="sch" name="school" required id="sch" class="form-control" placeholder="" aria-describedby="sch">
                    <input type="hidden"  name="ref" value=<?=$ref?> >
                    <input type="hidden"  name="old" value="0" >
                </div>
                <div class="text-center form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="transfer">
                      <label class="form-check-label" for="transfer">
                        All data provided are correct and accurate
                      </label>
                </div>
            </fieldset>
        </div>
        <!-- <div class="fieldset" id="four">
            <fieldset class="d-none" style="margin-bottom: 1rem; border-width: 0px;">
                <h4>Bank Account Details</h4>
                <p style="line-height: 1.8rem;">When doing bank transfer to the account <br> provided, please narrate it using the code <br> provided
                    below</p>
                <div class="mb-3">
                    <label for="ref" class="form-label" >Reference Code</label>
                    <input type="text" disabled value=<?='pzx'.$ref?> id="ref" class="form-control" aria-describedby="Reference Code">
                    <input type="hidden"  name="ref" value=<?='pzx'.$ref?> >
                </div>
                <div class="mb-3">
                    <h4 class="text-center" id="bank" style="line-height: 1.5rem; margin-bottom:2px;">Sterling Bank</h4>
                    <h3 class="text-center" id="accname" style="line-height:1.5rem; margin-bottom:2px;">PHF Egba</h3>
                    <h5 class="text-center" id="accno" style="margin-top: .1rem; margin-bottom:2px;">0500883821</h5>
                </div>
                <div class="text-center form-check form-check-inline">
                      <input type="checkbox" class="form-check-input" id="transfer">
                      <label class="form-check-label" for="transfer">
                        I have done the transfer!
                      </label>
                </div>
            </fieldset>
        </div> -->
        <div class="text-center" id="btn1">
            <button type="button" class="btn" disabled id="prev">Prev</button>
            <button type="button" class="btn" id="next">Next</button>
        </div>
        <div class="text-center d-none" id="btn2">
            <button type="submit" class="btn btn-success" id="reg">Confirm Registeration</button>
        </div>
        <div class="text-center d-none" id="btn3">
            <button type="submit" class="btn btn-success" id="lastCamp">Verify Attendance</button>
        </div>
        </form>
