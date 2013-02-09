
	</div>
    <footer>
        <p class="copyright">
            &copy; <?php echo date("Y"); ?> - <?php bloginfo('name'); ?>
        </p>
    </footer>
    <?php wp_footer(); ?>

    <script>
        document.getElementById('categoryMenu').addEventListener('change', function(){
            if (this.value.length > 0)
            {
                window.location = this.value;
            }
        });
    </script>

</body>
</html>