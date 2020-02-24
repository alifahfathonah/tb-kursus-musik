<footer class="page-footer <?php echo $info['kode']; ?>" id="tentang">
    <div class="container">
        <div class="row">
            <div class="col l9 s12">
                <h5 class="white-text"><?php echo $info['tema']; ?></h5>
                <p></p>
                <div class="row grey-text text-lighten-4">
                    <div class="col l1 m1 s2"><i class="material-icons">location_on</i></div>
                    <div class="col l11 m11 s10 light"><?php echo $info['alamat']; ?></div>
                </div>
                <div class="row grey-text text-lighten-4">
                    <div class="col l1 m1 s2"><i class="material-icons">phone</i></div>
                    <div class="col l11 m11 s10 light"><?php echo $info['telepon']; ?></div>
                </div>



            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social Media</h5>
                <ul>
                    <li><a class="white-text" href="https://www.facebook.com/<?php echo $info['facebook']; ?>"><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;<?php echo $info['facebook']; ?></a></li>
                    <li><a class="white-text" href="https://www.instagram.com/<?php echo $info['instagram']; ?>"><i class="fab fa-instagram"></i>&nbsp;&nbsp;<?php echo $info['instagram']; ?></a></li>
                    <li><a class="white-text" href="#"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;<?php echo $info['whatsapp']; ?></a></li>
                    <li><a class="white-text" href="https://<?php echo $info['website']; ?>"><i class="fa fa-globe"></i>&nbsp;&nbsp;<?php echo $info['website']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made with &hearts; by Henny.
        </div>
    </div>
</footer>


<script>
    $(document).ready(function() {
        $('.modal').modal();
        $('select').formSelect();
    });
</script>

</body>

</html>