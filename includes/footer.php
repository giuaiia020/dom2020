<script src="/material/js/bootstrap.min.js"></script>
<script src="/material/js/ripples.min.js"></script>
<script src="/material/js/material.min.js"></script>
<script>
$.material.init();
</script>
<script src="/material/js/jquery.dropdown.js"></script>
<script>
  $(".navbar-form select").dropdown();
</script>
<footer>
<div class="footcontent">
<div class="pull-left">
Copyright &copy; <?php echo date("Y"); ?> <span><?php echo $site_title;?></span>.
</div>
<div class="pull-right">
<a href="/"><?php echo $footnav_home; ?></a><span class="footsep"></span><a href="/privacy"rel="nofollow"><?php echo $footnav_privacy; ?></a><span class="footsep"></span><a href="/dmca"rel="nofollow"><?php echo $footnav_dmca; ?></a><span class="footsep"></span><a href="/contact"rel="nofollow"><?php echo $footnav_contact; ?></a>
</div>
</div>
</footer>