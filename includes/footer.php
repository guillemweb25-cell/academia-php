
</section>
<footer class="site-footer">
    todos los derechos reservados &copy; 2025
</footer>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.querySelector('.nav-toggle');
        const header = document.querySelector('.site-header');
        if (toggle && header) {
            toggle.addEventListener('click', function () {
                header.classList.toggle('open');
            });
        }
    });
    </script>

</body>
</html>