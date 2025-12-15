</div>
<div>

	<div class="card">
		<div class="card-body">
			<h5 class="box-title">Edit Delegates</h5>
			<div class="flexbox mb-4">
				<div class="flexbox"><label class="mb-0 mr-2">Type:</label><select class="selectpicker form-control show-tick" id="type-filter" title="Please select" data-width="150px">
						<option value="">All</option>
					</select></div>
				<div class="input-group-icon input-group-icon-right mr-3"><span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span><input class="form-control form-control-rounded" id="key-search" type="text" placeholder="Search ..."></div>
			</div>
            <?php
            $d = isset($delegate['delegate']) ? $delegate['delegate'] : (isset($delegate) ? $delegate : []);
            function h($v){ return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }
            ?>
            <form action="<?= base_url('stat/updatedel') ?>" method="post" class="form">
                <!-- hidden ids -->
                <input type="hidden" name="id" value="<?= h($d['id']) ?>">
                <input type="hidden" name="txn" value="<?= h($d['txn']) ?>">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input id="fname" name="fname" type="text" class="form-control" value="<?= h($d['fname']) ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lname">Last Name</label>
                        <input id="lname" name="lname" type="text" class="form-control" value="<?= h($d['lname']) ?>" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="phone">Phone</label>
                        <input id="phone" name="phone" type="tel" class="form-control" value="<?= h($d['phone']) ?>" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="<?= h($d['email']) ?>" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="category">Category</label>
                        <select id="category" name="category" class="form-control">
                            <option value="">Please select</option>
                            <option value="Others" <?= $d['category']==='Others' ? 'selected' : '' ?>>Others</option>
                            <option value="Undergraduate" <?= $d['category']==='Undergraduate' ? 'selected' : '' ?>>Undergraduate</option>
                            <option value="Graduate" <?= $d['category']==='Graduate' ? 'selected' : '' ?>>Graduate</option>
                            <option value="JSS" <?= $d['category']==='JSS' ? 'selected' : '' ?>>JSS</option>
                            <option value="SSS" <?= $d['category']==='SSS' ? 'selected' : '' ?>>SSS</option>
                            <option value="SchoolLeaver" <?= $d['category']==='SchoolLeaver' ? 'selected' : '' ?>>SchoolLeaver</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="school">School</label>
                        <input id="school" name="school" type="text" class="form-control" value="<?= h($d['school']) ?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="level">Level</label>
                        <input id="level" name="level" type="text" class="form-control" value="<?= h($d['level']) ?>">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="ref">TXN</label>
                        <input id="ref" name="ref" type="text" class="form-control" value="<?= h($d['txn']) ?>" readonly>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="old">Any Ailment</label>
                        <input id="old" name="old" type="text" class="form-control" value="<?= h($d['old']) ?>">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="claz">Class</label>
                        <input id="claz" name="claz" type="text" class="form-control" value="<?= h($d['claz']) ?>">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" class="form-control">
                            <option value="">Please select</option>
                            <option value="male" <?= (isset($d['gender']) && $d['gender']==='male') ? 'selected' : '' ?>>Male</option>
                            <option value="female" <?= (isset($d['gender']) && $d['gender']==='female') ? 'selected' : '' ?>>Female</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="org">Age</label>
                        <select id="org" name="org" class="form-control">
                            <option value="">Please select</option>
                            <option value="10 - 20" <?= $d['org']==='10 - 20' ? 'selected' : '' ?>>10 - 20</option>
                            <option value="21 - 30" <?= $d['org']==='21 - 30' ? 'selected' : '' ?>>21 - 30</option>
                            <option value="31 - 40" <?= $d['org']==='31 - 40' ? 'selected' : '' ?>>31 - 40</option>
                            <option value="40 and above" <?= $d['org']==='40 and above' ? 'selected' : '' ?>>40 and above</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="house">House</label>
                        <input id="house" name="house" type="text" class="form-control" value="<?= h($d['house']) ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="lb">Zone</label>
                    <input id="lb" name="lb" type="text" class="form-control" value="<?= h($d['lb']) ?>">
                </div>

                <div class="form-group text-right">
                    <a href="<?= base_url('admin/delegates') ?>" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
		</div>
	</div>


</div><!-- END: Page content-->

