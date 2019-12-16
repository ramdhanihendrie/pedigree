<div class="familytree" id="printarea">
    <h1 id="title">My Family Tree</h1>
    <div class="tree" style="background: url(image/drawingprint.svg) white no-repeat; background-size: cover;">
        <div class="first">
            <b>Me</b>
            <div class="pict">
                <?php 
                $stat = "me";
                include "displaypictprint.php" ?>
            </div>
        </div>
        <div class="second">
            <b>Father</b>
            <div class="pict">
                <?php 
                $stat = "f";
                include "displaypictprint.php" ?>
            </div>
            <b>Mother</b>
            <div class="pict">
                <?php 
                $stat = "m";
                include "displaypictprint.php" ?>
            </div>
        </div>
        <div class="third">
            <b>GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "ff";
                include "displaypictprint.php" ?>
            </div>
            <b>GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "fm";
                include "displaypictprint.php" ?>
            </div>
            <b>GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "mf";
                include "displaypictprint.php" ?>
            </div>
            <b>GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "mm";
                include "displaypictprint.php" ?>
            </div>
        </div>
        <div class="fourth">
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "fff";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "ffm";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "fmf";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "fmm";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "mff";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "mfm";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "mmf";
                include "displaypictprint.php" ?>
            </div>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "mmm";
                include "displaypictprint.php" ?>
            </div>
        </div>
    </div>
</div>

<button onclick="printContent('printarea')">Print</button>