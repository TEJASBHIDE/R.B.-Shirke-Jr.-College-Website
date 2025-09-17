<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabLinks = document.querySelectorAll(".nav-links li a");
        const dataContainers = document.querySelectorAll(".Data");

        tabLinks.forEach((link) => {
            link.addEventListener("click", function (event) {
                event.preventDefault();
                const targetId = this.getAttribute("href").substr(1);
                dataContainers.forEach((container) => {
                    container.style.display = "none";
                });
                document.getElementById(targetId).style.display = "block";
            });
        });
    });
</script>

<!-- Notice Ticker Updater -->
<div class="overview">
    <div class="title">
        <i class='bx bxs-notepad'></i>
        <span class="text">Notice Ticker Updater</span>
    </div>
    <div id="notice" class="Data" style="display: none;"> <!-- Hide by default -->
        <div class="box box1">
            <div class="dform">
                <form class="form" method="post" action="notice1.php" enctype="multipart/form-data">
                    <span class="formt">Update the notice :</span>
                    <div>
                        <input placeholder="Enter your Notice" type="input" name="notice1"
                            style="border:1px solid black" required>
                        <button type="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Notice Ticker Updater Ends -->

<!-- Merit List Upload -->
<div class="overview">
    <div class="title">
        <i class='bx bxs-file-pdf'></i>
        <span class="text">Merit List Upload</span>
    </div>
    <div id="Merit" class="Data" style="display: none;"> <!-- Hide by default -->
        <div class="box box1">
            <div class="dform">
                <form class="form" method="post" action="upload.php" enctype="multipart/form-data">
                    <span class="formt">Upload the Merit List Pdf :</span>
                    <div>
                        <input type="text" placeholder="Enter the title" name="title"
                            style="border: 1px solid black; margin-bottom:5px;">
                        <input placeholder="Enter your Notice" type="file" name="file"
                            style="border: 1px solid black;">
                        <button type="submit">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Merit List Upload Ends -->

<!-- Gallery Upload -->
<div class="overview">
    <div class="title">
        <i class='bx bxs-file-pdf'></i>
        <span class="text">Gallery Upload</span>
    </div>
    <div id="gallery" class="Data" style="display: none;"> <!-- Hide by default -->
        <div class="box box1">
            <div class="dform">
                <form class="form" method="post" action="../upload_image.php" enctype="multipart/form-data">
                    <span class="formt">Upload Gallery Images:</span>
                    <div>
                        <!-- Limit file types and sizes -->
                        <input type="file" name="images[]" accept="image/*" multiple
                            style="border : 1px solid black">
                        <button type="submit" name="submit">Upload</button>
                        <a href="../delete.php" class="delete-button">Delete</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
