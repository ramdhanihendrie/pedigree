<div class="familytree" id="printarea">
    <h1 id="title">My Family Tree</h1>
    <div class="tree" style="background: url(image/drawing.svg) white no-repeat; background-size: cover;">
        <div class="first">
            <b>Me</b>
            <div class="pict">
                <?php 
                $stat = "me";
                include "displaypict.php" ?>
            </div>
            <?php
                include "familyproc.php";
            ?>
        </div>
        <div class="second">
            <b>Father</b>
            <div class="pict">
                <?php 
                $stat = "f";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Mother</b>
            <div class="pict">
                <?php 
                $stat = "m";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
        </div>
        <div class="third">
            <b>GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "ff";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "fm";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "mf";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "mm";
                include "displaypict.php" ?>
            </div>
            <?php 
                $stat = "mm";
                include "familyproc.php";
            ?>
        </div>
        <div class="fourth">
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "fff";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "ffm";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "fmf";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "fmm";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "mff";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "mfm";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandFather</b>
            <div class="pict">
                <?php 
                $stat = "mmf";
                include "displaypict.php" ?>
            </div>
            <?php 
                include "familyproc.php";
            ?>
            <b>Great GrandMother</b>
            <div class="pict">
                <?php 
                $stat = "mmm";
                include "displaypict.php" ?>
            </div>
            <?php 
                $stat = "mmm";
                include "familyproc.php";
            ?>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['no_family'])) { ?>
    <a class="btnprint" href="?module=print#pos" target="_blank">Print</a>
<?php } ?>
