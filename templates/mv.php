<?php include 'inc/header.php'; ?>
<h1 class="text-center mt-2"> <?php echo $title ?> </h1>
<p class="d-flex justify-content-center mt-10" id="statekub">état kubernetes</p>
<div class="d-flex justify-content-center w-100">
    <image src="assets/kubernetes.png" />
</div>
<div class="d-flex justify-content-center">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('kubernetes')">good</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('kubernetes')">bad</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptionkub" class="d-none" name="descriptionkub" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>

<p class="d-flex justify-content-center mt-10" id="statedock">état docker</p>
<div class="d-flex justify-content-center w-100 mt-2">
    <image class="w-25" src="assets/docker.png" />
</div>
<div class="d-flex justify-content-center mt-2">
    <div class="w-50">
        <!-- <form action=""> -->
        <div class="d-flex justify-content-center">
            <button class="w-25 btn btn-success mr-2" onclick="hideTextArea('docker')">good</button>
            <button class="w-25 btn btn-danger ml-2" onclick="showTextArea('docker')">bad</button>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <textarea id="descriptiondock" class="d-none" name="descriptiondock" rows="5" cols="33"></textarea>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center w-100 mt-2">
    <?php echo '<button class="w-25 btn btn-success" onclick="send(\'' . $title . '\')">Send</button>' ?>
</div>
<?php include 'inc/footer.php'; ?>