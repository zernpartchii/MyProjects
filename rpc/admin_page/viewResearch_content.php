<?php

$viewid = $_GET['viewid'];

$sql = "SELECT * FROM `research_information` WHERE id= $viewid";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$group_number = $row['Group_Number'];
$zone = $row['Zone'];
$program = $row['Program'];
$title = $row['Title'];
$adviser = $row['Adviser'];
$stat = $row['Stat_DA'];
$sy = $row['S_Y'];

$sql = "SELECT * FROM `proponents` WHERE research_id = $viewid";
$result1 = mysqli_query($con, $sql);

$proponents = array();
while ($row = $result1->fetch_assoc()) {
    $proponents[] = $row['Proponents'];
}
$length = count($proponents);

?>

<div class="card p-3 border-0">
    <div class="">
        <p class="fs-2 font-monospace border-bottom">THESIS DETAILS</p>
    </div>
    <div class="card-body">
        <form class="">
            <div class="d-flex flex-wrap gap-3 mb-4">
                <div class="flex-fill">
                    <label for="view_group_no" class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="view_group_no" readonly value="">
                </div>
                <div class="flex-fill">
                    <label for="view_zone" class="form-label">Zone</label>
                    <input type="text" class="form-control" name="view_zone" readonly value="<?php echo $zone; ?>">
                </div>
                <div class="flex-fill">
                    <label for="view_program" class="form-label">Program</label>
                    <input type="text" class="form-control" name="view_program" readonly
                        value="<?php echo $program; ?>">
                </div>
            </div>

            <div class="flex-fill mb-4">
                <label for="view_title" class="form-label">Title</label>
                <textarea id="view_title" cols="30" rows="3" class="form-control fw-normal" readonly><?php echo $title; ?>
                </textarea>
            </div>

            <div class="d-flex flex-wrap gap-3 mb-4">
                <div class="flex-fill">
                    <label for="view_proponent_1">Member 1</label>
                    <input type="text" class="form-control" value="<?php echo $proponents[0]; ?>"
                        name="view_proponent_1" readonly>
                </div>
                <div class="flex-fill">
                    <label for="view_proponent_2">Member 2</label>
                    <input type="text" class="form-control" value="<?php if ($length > 1) {
                                                                        echo $proponents[1];
                                                                    } ?>" name="view_proponent_2" readonly>
                </div>
                <div class="flex-fill">
                    <label for="view_proponent_3">Member 3</label>
                    <input type="text" class="form-control" value="<?php if ($length > 2) {
                                                                        echo $proponents[2];
                                                                    } ?>" name="view_proponent_3" readonly>
                </div>
            </div>

            <div class="d-flex flex-wrap gap-3 mb-4">
                <div class="flex-fill">
                    <label for="view_adviser" class="form-label">Adviser</label>
                    <input type="text" class="form-control" value="<?php echo $adviser; ?>" name="view_adviser"
                        readonly>
                </div>
                <div class="flex-fill">
                    <label for="view_stat" class="form-label">Stat/DA</label>
                    <input type="text" class="form-control" value="<?php echo $stat; ?>" name="view_stat" readonly>
                </div>
                <div class="flex-fill">
                    <label for="view_SY" class="form-label">School Year</label>
                    <input type="text" class="form-control" value="<?php echo $sy; ?>" name="view_SY" readonly>
                </div>
            </div>

            <div class="d-flex flex-wrap gap-3 mb-4">
                <a href="#" class="btn btn-md btn-primary">
                    <i class="bi bi-check-circle"></i> Generate Account</a>
                <a href="#" class="btn btn-md btn-danger">
                    <i class="bi bi-x-circle"></i> Decline</a>

                <!-- <a href="updateResearch.php? updateid=<?php echo $viewid; ?>" class="btn btn-md btn-primary">
                    <i class="bi bi-pencil-square"></i> Edit</a> -->
                <a href="pendingRequest.php" class="btn btn-md btn-danger">
                    <i class="bi-arrow-left"></i> Back</a>
            </div>
        </form>
    </div>
</div>