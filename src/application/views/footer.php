<!-- content end -->
<?php
if(!empty($jsFiles)) {
    foreach($jsFiles as $scriptFile) {
        echo '<script src="' . base_url() . 'assets/js/' . $scriptFile .'"></script>'."\n";
    }
}
?>
</body>
</html>